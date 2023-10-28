<?php

namespace App\Http\Controllers;

use DB;
use PDF;
use Session;
use App\Models\OSC;
use App\Models\Order;
use App\Models\Package;
use App\Models\Address;
use App\Models\Payment;
use App\Models\Tracking;
use App\Models\Quotation;
use App\Models\AgencyTable;
use App\Models\PackageTable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class NationalQuoterController extends Controller
{
    public function index(){
    }

    public function quotation(Request $request){

        // Set currency Q or $, depends on checkbox
        $request->request->add(['currency' => 'Q']);
        // New Quotation
        $quotation = globalNewQuotation($request);
        // Set idquotation from new quotation
        $request->request->add(['quotation_idquotation' => $quotation->idquotation]);
        // Set all the packages and returning last one
        $packages = $this->newPackage($request);
        // Set Total from packages
        $total = $this->total($quotation->idquotation);
        // Set new payment
        $request->request->add(['total'=>$total]);
        $payment = globalNewPayment($request);
        // Set Session idquotation
        Session::put('idquotation', $quotation->idquotation);

        return \Response::json($request);
    }

    public function quotationOrder(Request $request){
        // Set idquotation
        $idquotation = Session::get('idquotation');
        $request->request->add(['idquotation'=>$idquotation]);
        // Set request->type = 1 national quoter, status 1 initial, order_number higher
        $request->request->add(['type'=>1]);
        $request->request->add(['status'=>1]);
        $request->request->add(['order_number'=>Order::max('order_number') + 1]);
        // Create new Order
        $order = globalnewOrder($request);
        // Set idorder
        $request->request->add(['order_idorder'=>$order->idorder]);
        // Disable Foreign key check
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        $request->terms ? $request->request->add(['terms'=>1]):false;
        $quotation = globalnewQuotation($request);
        DB::statement('SET FOREIGN_KEY_CHECKS=1');

        $agency_sender_data = AgencyTable::findOrFail($quotation->sender);
        $agency_destination_data = AgencyTable::findOrFail($quotation->destination);

        $data = [];

        $quotation->sender == 1 ?
        $data_sender=['location'=>'sender','type'=>'blank','address'=>'','departamento'=>$agency_sender_data->departamento,'municipio'=>$agency_sender_data->municipio]:
        $data_sender=['location'=>'sender','type'=>'fill','address'=>$agency_sender_data->agency.','.$agency_sender_data->address,'departamento'=>$agency_sender_data->departamento,'municipio'=>$agency_sender_data->municipio];


        $quotation->destination == 1 ?
        $data_destination=['location'=>'destination','type'=>'blank','address'=>'','departamento'=>$agency_destination_data->departamento,'municipio'=>$agency_destination_data->municipio]:
        $data_destination=['location'=>'destination','type'=>'fill','address'=>$agency_destination_data->agency.','.$agency_destination_data->address,'departamento'=>$agency_destination_data->departamento,'municipio'=>$agency_destination_data->municipio];

        $data = [[$data_sender],[$data_destination]];

        return \Response::json($data);
    }

    public function quotationOSC(Request $request){
        $quotation = Quotation::findOrFail(Session::get('idquotation'));
        $request->request->add(['idquotation'=>$quotation->idquotation]);

        $address_sender = $this->newAddress($request,'_sender');
        $address_destination = $this->newAddress($request,'_destination');

        $payment = Payment::where('quotation_idquotation',$quotation->idquotation)->first();
        $total = $payment->total;

        $request->request->add(['total'=>$total]);
        $request->request->add(['order_idorder'=>$quotation->order_idorder]);
        $osc = globalNewOsc($request);
        return \Response::json(['total'=>$total]);
    }

    public function quotationFinish(Request $request){
        $quotation = Quotation::findOrFail(Session::get('idquotation'));

        session()->forget('idquotation');

        return \Response::json(['order'=>$quotation->order_idorder]);
    }

    public function newPackage($request){
        $packages = [];
        foreach ($request->all() as $key => $value) {
            if(strpos($key,'pk_') === 0){
                // Get package type pk_1_[1]
                $type = explode('_',$key)[2];
                // Get package correlative pk_[1]_1
                $correlative = explode('_',$key)[1];
                // Set package type, type from PackageTable(DB)
                $request->request->add(['type' => $type]);
                // Set package fragile, dangerous and/or perishable
                $request['fr_'.$correlative] ? $request->request->add(['fragile' => 1]):$request->request->add(['fragile' => 0]);
                $request['dg_'.$correlative] ? $request->request->add(['dangerous' => 1]):$request->request->add(['dangerous' => 0]);
                $request['ps_'.$correlative] ? $request->request->add(['perishable' => 1]):$request->request->add(['perishable' => 0]);
                // If destination is city set different price of city
                // $request->destination == 1? $request->request->add(['price' => $package_table->price_city]):$request->request->add(['price' => $package_table->price]);
                // Add package to array packages
                array_push($packages, globalNewPackage($request));

            }
        }
        $request->request->remove('type');
        $request->request->remove('fragile');
        $request->request->remove('dangerous');
        $request->request->remove('perishable');
        return $packages;
    }

    public function newAddress($request,$_suffix){
        $quotation = Quotation::findOrFail($request->idquotation);

        $_suffix == 'sender'?
        $agency = AgencyTable::findOrFail($quotation->sender):
        $agency = AgencyTable::findOrFail($quotation->destination);

        $agency->type == 1?
        $request->request->add(['address' => $request->get('address'.$_suffix)]):
        $request->request->add(['address' => $agency->agency.' '.$agency->address]);

        $request->request->add(['departamento' => $agency->departamento]);
        $request->request->add(['municipio' => $agency->municipio]);

        $request->request->add(['status' => 1]);

        $_suffix == '_sender' ?
        $request->request->add(['type' => 1]):
        $request->request->add(['type' => 2]);

        $request->request->add(['name' => $request->get('name'.$_suffix)]);
        $request->request->add(['phone' => $request->get('phone'.$_suffix)]);
        $request->request->add(['email' => $request->get('email'.$_suffix)]);
        $request->request->add(['comments' => $request->get('comments'.$_suffix)]);
        $request->request->add(['date' => $request->get('date'.$_suffix)]);
        $request->request->add(['users_id' => Auth::user()->id]);
        $request->request->add(['quotation_idquotation' => $quotation->idquotation]);

        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        $address = globalNewAddress($request);
        DB::statement('SET FOREIGN_KEY_CHECKS=1');

        return $address;
    }

    public function oscPdf($idquotation=null)
    {

        $idquotation?
        $quotation = Quotation::findOrFail($idquotation):
        $quotation = Quotation::findOrFail(Session::get('idquotation'));


        $order = Order::findOrFail($quotation->order_idorder);
        // osc Middleware
        if(
            (Auth::user()->hasrole('superadmin') ||
            Auth::user()->hasrole('admin') ||
            Auth::user()->hasrole('accounting') ||
            $order->users_id == Auth::user()->id) &&
            $order->type == 1
        )
        {
            $osc = OSC::where('order_idorder',$quotation->order_idorder)
            ->first()
            ->getAttributes();
        }


        $pdf = PDF::loadView('quoters.oscNationalPdf', $osc);

        return $pdf->stream('File.pdf');
    }

    public function total($idquotation)
    {
        $quotation = Quotation::findOrFail($idquotation);

        $packages = Package::where('quotation_idquotation', $idquotation)
        ->get();

        $packages_total = 0;
        foreach ($packages as $key => $package) {
            $quotation->sender == 1 && $quotation->destination == 1 ?
            $price = PackageTable::findOrFail($package->type)->price_city:
            $price = PackageTable::findOrFail($package->type)->price;

            $packages_total += $price;
        }

        return $packages_total;
    }
}


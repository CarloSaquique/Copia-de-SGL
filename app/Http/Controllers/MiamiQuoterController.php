<?php

namespace App\Http\Controllers;

use DB;
use PDF;
use Session;
use App\Models\OSC;
use App\Models\Order;
use App\Models\Package;
use App\Models\Billing;
use App\Models\Address;
use App\Models\Payment;
use App\Models\Tracking;
use Illuminate\Http\File;
use App\Models\Quotation;
use App\Models\AgencyTable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;

class MiamiQuoterController extends Controller
{
    public function index(){
        if(Session::get('quotation')){
            $quotation = Session::get('quotation');
            $packages = Session::get('packages');
            return view('quoters.national.index')->with(['quotation'=>$quotation,'packages'=>$packages]);
        }else{
            return view('quoters.national.index');
        }
    }

    // Cambiar button Q $ inverso not checked means Q
    public function quotation(Request $request){

        $request->request->add(['sender'=>'Miami']);
        $request->currency ? $request->request->add(['currency' => '$']):$request->request->add(['currency' => 'Q']);
        $request->terms ? $request->request->add(['terms'=>1]):false;
        // New Quotation
        $quotation = globalNewQuotation($request);

        $request->request->add(['quotation_idquotation'=>$quotation->idquotation]);
        // New Package
        $package = globalNewPackage($request);

        $total = $this->total($quotation->idquotation,$request->currency,false);

        $request->request->add(['total'=>$total]);
        $payment = globalNewPayment($request);

        Session::put('idquotation', $quotation->idquotation);

        return \Response::json($request);
    }

    public function order(Request $request){
        $idquotation = Session::get('idquotation');
        $request->request->add(['idquotation'=>$idquotation]);
        // Set request->type = 2 miami quoter, status 1 initial, order_number higher
        $request->request->add(['type'=>2]);
        $request->request->add(['status'=>1]);
        $request->request->add(['order_number'=>'SGLMG'.random_int(100000,999999)]);
        // Create new Order
        $order = globalnewOrder($request);
        // Set idorder
        $request->request->add(['order_idorder'=>$order->idorder]);
        // Disable Foreign key check
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        $quotation = globalnewQuotation($request);
        DB::statement('SET FOREIGN_KEY_CHECKS=1');

        $address = $this->newAddress($request,'_destination');

        $payment = Payment::where('quotation_idquotation',$idquotation)->first();
        $total = $payment->total;

        $request = $this->newOsc($quotation,$payment->currency,$request);
        $osc = globalNewOsc($request);
        return \Response::json(['total'=>$total,'service'=>$quotation->service,'currency'=>$payment->currency]);
    }

    public function newAddress($request,$_suffix){
        $quotation = Quotation::findOrFail($request->idquotation);

        $agency_destination = AgencyTable::findOrFail($quotation->destination);

        $agency_destination->type == 1?
        $request->request->add(['address' => $request->get('address'.$_suffix)]):
        $request->request->add(['address' => $agency_destination->agency.' '.$agency_destination->address]);
        $request->request->add(['departamento' => $agency_destination->departamento]);
        $request->request->add(['municipio' => $agency_destination->municipio]);
        $request->request->add(['status' => 1]);
        $request->request->add(['type' => 2]);
        $request->request->add(['name' => $request->get('name'.$_suffix)]);
        $request->request->add(['phone' => $request->get('phone'.$_suffix)]);
        $request->request->add(['email' => $request->get('email'.$_suffix)]);
        $request->request->add(['cui' => $request->get('cui'.$_suffix)]);
        $request->request->add(['comments' => $request->get('comments'.$_suffix)]);
        $request->request->add(['users_id' => Auth::user()->id]);
        $request->request->add(['quotation_idquotation' => $quotation->idquotation]);
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        $address = globalNewAddress($request);
        DB::statement('SET FOREIGN_KEY_CHECKS=1');

        return $address;
    }

    public function finish(Request $request){
        $quotation = Quotation::findOrFail(Session::get('idquotation'));

        foreach ($request->all() as $key => $value) {
            $value == null ? $request->request->remove($key):false;
        }

        $payment = Payment::where('quotation_idquotation',$quotation->idquotation)->first();

        $request->request->add(['idpayment'=>$payment->idpayment]);
        $request->request->add(['type'=>$request->payment_cn]);
        $update_payment = globalnewPayment($request);
        $request->request->remove('type');

        $request->request->add(['idorder'=>$quotation->order_idorder]);
        $request->request->add(['status'=>'2']);
        $update_order = globalnewOrder($request);


        $request->request->add(['order_idorder'=>$quotation->order_idorder]);
        $request->request->add(['name'=>$request->bill_name]);

        $request->bill_cf ? $request->request->add(['nit'=>'CF']):
        $request->request->add(['nit'=>$request->bill_nit]);

        $request->request->add(['address'=>$request->bill_address]);

        $billing = globalnewBilling($request);


        session()->forget('idquotation');

        return \Response::json(['order'=>$quotation->order_idorder]);
    }

    public function newOsc($quotation,$currency,$request){
        $total = $this->total($quotation->idquotation,$currency,true);
        $request->request->add(['transport'=>$total['transport']]);
        $request->request->add(['clearance'=>$total['clearance']]);
        $request->request->add(['insurance'=>$total['insurance']]);
        $request->request->add(['dai'=>$total['dai']]);
        $request->request->add(['iva'=>$total['iva']]);
        $request->request->add(['duca'=>$total['duca']]);
        $request->request->add(['sed'=>$total['sed']]);
        $request->request->add(['total'=>$total['total']]);
        $request->request->add(['order_idorder'=>$quotation->order_idorder]);

        return $request;
    }

    public function oscPdf($idquotation=null)
    {
        $idquotation?
        $quotation = Quotation::findOrFail($idquotation):
        $quotation = Quotation::findOrFail(Session::get('idquotation'));

        $payment = Payment::where('quotation_idquotation',$quotation->idquotation)->first();

        $order = Order::findOrFail($quotation->order_idorder);
        // osc Middleware
        if(
            (Auth::user()->hasrole('super-admin') ||
            Auth::user()->hasrole('admin') ||
            Auth::user()->hasrole('accounting') ||
            $order->users_id == Auth::user()->id)&&
            $order->type == 2
        )
        {
            $package = Package::where('quotation_idquotation',$quotation->idquotation)->first();
            $billing = Billing::where('order_idorder',$quotation->order_idorder)->first();

            $osc = OSC::where('order_idorder',$quotation->order_idorder)
            ->first()
            ->getAttributes();
            $osc['weight'] = $package->weight;
            $osc['currency'] = $payment->currency;
            $osc['billing'] = $billing;
        }

        // dd($osc);

        $pdf = PDF::loadView('quoters.oscMiamiPdf', $osc);

        return $pdf->stream('File.pdf');
    }

    public function total($idquotation,$currency,$osc){
        $quotation = Quotation::findOrFail($idquotation);

        $package = Package::where('quotation_idquotation',$quotation->idquotation)
        ->first();

        $_dai = (int)($package->detail);
        $_weight = $package->weight;
        $_price = $package->price;

        $service = $quotation->service;

        $US = DB::table('exchange')
        ->where('currency','US')
        ->first()->value;

        $currency == 'Q'? $exchange = $US:$exchange=1;

        $commission = 0;
        $service == 2 ?
        $_price  < 200 ? $commission = 15:
        $comission = ($_price)*0.12:
        false;

        $duca = 0;
        $_price > 999.99 ?
        $duca = 1350/$US:
        $duca = 0;

        $sed = 0;
        $_price > 2500.00 ?
        $sed = 75:
        $sed = 0;

        $transport = $_weight * 3.7;
        $desaduanaje = 4.5;
        $insurance = ($_price + $transport) * 0.022;
        $services = $transport + $desaduanaje;
        $dai = ($_price + $transport + $insurance) * ($_dai/100);
        $iva = ($_price + $insurance + $transport + $dai) * 0.12;
        $taxes = $dai + $iva;
        $subtotal = $services + $taxes + $insurance - $iva;
        $total_pobox = $services + $taxes + $insurance + $duca + $sed;
        $total_all_include = $_price + $commission + $services + $taxes + $insurance + $duca + $sed;

        $total = 0;

        $service == 1 ? $total = $total_pobox*$exchange:$total = $total_all_include*$exchange;
        $total = round($total, 2);

        $array_total = ([
            'transport'=> round($transport*$exchange, 2),
            'insurance'=> round($insurance*$exchange, 2),
            'clearance'=> round($desaduanaje*$exchange, 2),
            'dai'=> round($dai*$exchange, 2),
            'iva'=> round($iva*$exchange, 2),
            'duca'=> round($duca*$exchange, 2),
            'sed'=> round($sed*$exchange, 2),
            'total'=> round($total, 2),
        ]);

        $osc ? $total = $array_total:false;

        return($total);

    }
}



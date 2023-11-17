<?php

namespace App\Http\Controllers;

use DB;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Order;
use App\Models\Address;
use App\Models\Payment;
use App\Models\Billing;
use App\Models\Invoice;
use App\Models\Tracking;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\TrackingStates;
use App\Models\TrackingStatus;
use Illuminate\Support\Facades\Redirect;


class AdminController extends Controller
{
    public function index(){
        try {
            $promo = DB::table('promo')->get();
            count($promo) == 0 ? $promo = []:true;

            $users = DB::table('users')->get();
            count($users) == 0 ? $users = []:true;

            return view('admin.index')->with(['promo'=>$promo,'users'=>$users]);
        } catch (\Throwable $th) {}

        return view('admin.index')->with(['promo'=>[],'users'=>[]]);
    }

    public function indexCourier(){
        try {
            $orders = DB::table('order')
            ->where('status','2')
            ->get()->all();

            foreach ($orders as $key => $order) {
                $order->type == 1 ? $order->type ='Courier Nacional':false;
                $order->type == 2 ? $order->type ='Courier Miami':false;
                $order->type == 3 ? $order->type ='Courier China':false;

                $tracking = DB::table('tracking')
                ->where('order_idorder',$order->idorder)->get()->all();

                $tracking ? $order->tracking = $tracking:false;
            }

            $orders = array_reverse($orders);
            $today = Carbon::now();

        return view('admin.indexCourier')->with(['orders'=>$orders,'today'=>$today]);
        } catch (\Throwable $th) {

        }

    }

    public function orderCourier($id){
        $order = DB::table('order')
        ->where('idorder',$id)
        ->get()[0];

        $quotation = DB::table('quotation')
        ->where('order_idorder',$order->idorder)
        ->get()[0];

        $packages = DB::table('package')
        ->where('quotation_idquotation',$quotation->idquotation)
        ->get();


        foreach ($packages as $key => $package) {
            if($package->type){
                $package_table = DB::table('package_table')
                ->where('idpackage_table',$package->type)
                ->get()[0];

                $package->size = $package_table->size_min.'-'.$package_table->size_max;
                $package->weight = $package_table->weight_min.'-'.$package_table->weight_max;
            }
        }


        $address = DB::table('address')
        ->where('quotation_idquotation',$quotation->idquotation)
        ->get();

        $payment = Payment::where('quotation_idquotation',$quotation->idquotation)->first();

        $invoice = Invoice::where('order_idorder',$order->idorder)->first();

        $billing = Billing::where('order_idorder',$order->idorder)->first();

        $tracking_exists = Tracking::where('order_idorder',$order->idorder)->exists();

        $tracking = null;
        $tracking_status = null;
        if($tracking_exists){
            $tracking = Tracking::where('order_idorder',$order->idorder)->first();
            $tracking_status = TrackingStatus::where('tracking_idtracking',$tracking->idtracking)->latest()->first();
        }

        return view('admin.orderCourier')->with([
            'order'=>$order,
            'quotation'=>$quotation,
            'packages'=>$packages,
            'address'=>$address,
            'payment'=>$payment,
            'billing'=>$billing,
            'invoice'=>$invoice,
            'tracking'=>$tracking,
            'tracking_status'=>$tracking_status,
        ]);

    }

    public function orderConfirm(Request $request){
        // Str::random(8);
        $order = Order::findOrFail($request->idorder);

        $tracking_number = 'SGL_'.random_int(100000,999999);

        $request->request->add(['service'=>$order->type]);
        $request->request->add(['tracking_number'=> $tracking_number]);
        $request->request->add(['order_idorder'=> $order->idorder]);
        $request->request->add(['order_number'=>$order->order_number]);
        $request->request->add(['status'=>'1']);
        $tracking = globalnewTracking($request);

        $service = $tracking->service;

        $tracking_states = TrackingStates::where('service',$service)->first();

        $request->merge(['status' =>'status_1']);
        $request->request->add(['state'=>$tracking_states->status_1]);
        $request->request->add(['tracking_idtracking'=>$tracking->idtracking]);
        $tracking_status = globalnewTrackingStatus($request);

        return Redirect::to('/admin-index-courier');
    }

    public function paymentIndex(){
        try {
            $payments = DB::table('payment')
            // ->where('status',2)
            // ->orWhere('status',3)
            ->get();
            count($payments) == 0 ? $payments = []:true;

            return view('admin.Payment')->with(['payments'=>$payments]);
        } catch (\Throwable $th) {}

        return view('admin.payment')->with(['payments'=>[]]);
    }

    public function roleAsign(Request $request) {
        try
        {
            $user = User::findOrFail($request->id);
            $request->rol == 1 ? $user->syncRoles(['admin']):true;
            $request->rol == 2 ? $user->syncRoles(['client']):true;
            $request->rol == 3 ? $user->syncRoles(['tracking']):true;
            $user->role = $request->rol;
            $user->saveOrFail();
        }
        catch(\Exception $e)
        {
          DB::rollback();
        }
        return Redirect::to('/admin-index');
    }
}

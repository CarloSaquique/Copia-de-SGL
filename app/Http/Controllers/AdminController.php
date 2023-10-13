<?php

namespace App\Http\Controllers;

use DB;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Order;
use App\Models\Address;
use App\Models\Tracking;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\TrackingStates;
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

    public function ordersStore(Request $request){
        try {
            $billing = DB::table('billing')->get();
            count($billing) == 0 ? $billing = []:true;

            $tracking = DB::table('tracking')->get();
            count($tracking) == 0 ? $tracking = []:true;

            return view('admin.ordersStore')->with(['billing'=>$billing,'tracking'=>$tracking]);
        } catch (\Throwable $th) {}

        return view('admin.ordersStore')->with(['billing'=>[],'tracking'=>[]]);
    }

    public function indexCourier(){
        try {
            $orders = DB::table('order')->get()->all();

            foreach ($orders as $key => $order) {
                $order->type == 1 ? $order->type ='Courier Nacional':false;
                $order->type == 2 ? $order->type ='Courier Miami':false;
                $order->type == 3 ? $order->type ='Courier China':false;

                $tracking = DB::table('tracking')
                ->where('order_idorder',$order->idorder)->get()->all();

                $tracking ? $order->tracking = $tracking:false;
            }

            $orders = array_reverse($orders);

        return view('admin.indexCourier')->with(['orders'=>$orders]);
        } catch (\Throwable $th) {

        }

    }

    public function orderCourier($idorder){
        try {
            // Orden
            $order = Order::findOrFail($idorder);
            $order_type = $order->type;
            $order->type == 1 ? $order->type ='Courier Nacional':false;
            $order->type == 2 ? $order->type ='Courier Miami':false;
            $order->type == 3 ? $order->type ='Courier China':false;

            $tracking = DB::table('tracking')
            ->where('order_idorder',$order->idorder)->first();

            $tracking_states = TrackingStates::findOrFail($order_type)->getAttributes();
            unset($tracking_states['idtracking_states']);
            unset($tracking_states['service']);

            $order->tracking = $tracking;
            $order->tracking_states = $tracking_states;

            $order_type == 1 ? $last_status = 'status_5':false;
            $order_type == 2 ? $last_status = 'status_7':false;
            $order_type == 3 ? $last_status = 'status_7':false;


            // Quotation
            $quotation = DB::table('quotation')
            ->where('order_idorder',$order->idorder)
            ->get()[0];

            // Address
            $addresses = DB::table('address')
            ->where('quotation_idquotation',$quotation->idquotation)
            ->get();

            // dd($addresses);
            foreach ($addresses as $key => $address) {
                $address->type == 1? $order->sender = $address:false;
                $address->type == 2? $order->destination = $address:false;
            }

            // Package
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

            $payment = DB::table('payment')
            ->where('quotation_idquotation',$quotation->idquotation)
            ->get()[0];

            $order->packages = $packages;

            return view('admin.orderCourier')->with([
                'order'=>$order,
                'quotation'=>$quotation,
                'payment'=>$payment,
                'last_status'=>$last_status
            ]);
        } catch (\Throwable $th) {

        }
    }

    public function orderConfirm(Request $request){
        // Str::random(8);
        $tracking = new Tracking();
        $tracking->tracking_number = 'SGL_'.random_int(100000,999999);
        $tracking->status_1 = Carbon::now()->toDateTimeString();
        $tracking->order_idorder = $request->idorder;
        $tracking->saveOrFail();

        return Redirect::to('/admin-index-courier');
    }

    public function ordersNationalQuoter(Request $requets){
        try {
            $orders = DB::table('order')
            ->join('tracking','tracking.order_idorder','=','order.idorder')
            ->join('quotation','quotation.order_idorder','=','order.idorder')
            ->join('payment','payment.order_idorder','=','order.idorder')
            ->where('order.status',2)
            ->orWhere('order.status',3)
            ->select('order.*','quotation.*',
                'tracking.status AS t_status','tracking.tracking_number AS t_number','tracking.users_id AS t_user',
                'payment.type AS p_type','payment.comments AS p_comments','payment.status AS p_status','payment.total')
            ->get();

            $packages = DB::table('package')
            ->join('quotation','quotation.idquotation','=','package.quotation_idquotation')
            ->join('order','order.idorder','=','quotation.order_idorder')
            ->where('order.status',2)
            ->orWhere('order.status',3)
            ->get();

            $address = DB::table('address')
            ->where('quotation_idquotation','!=',null)
            ->get();

            foreach ($orders as $key => $order) {
                $order->t_msg = $this->trackingMsg($order->t_status);
                $order->t_status < 5? $order->t_nmsg = $this->trackingMsg($order->t_status+1):true;


                $tracker = null;
                $order->t_user != null ? $tracker = User::findOrFail($order->t_user):true;
                $tracker != null ? $order->tracker = $tracker->name.' '.$tracker->last_name:$order->tracker = 0;
                // if($order->idorder == 2){
                //     dd($order);
                //     dd($tracker->name);
                // }
            }

            dd($orders);
            count($orders) == 0 ? $orders = []:true;
            count($packages) == 0 ? $packages = []:true;
            count($address) == 0 ? $address = []:true;

            return view('admin.ordersNationalQuoter')->with(['orders'=>$orders,'packages'=>$packages,'address'=>$address]);
        } catch (\Throwable $th) {}
        return view('admin.ordersNationalQuoter')->with(['orders'=>[],'packages'=>[],'address'=>[]]);
    }

    public function trackingIndex(){
        try {
            $tracker = DB::table('users')->where('role',3)->get();
            count($tracker) == 0 ? $tracker = []:true;

            $tracking = DB::table('tracking')->where('status','<',3)->get();
            count($tracking) == 0 ? $tracking = []:true;

            $orders = DB::table('order')->where('status',2)->get();
            count($orders) == 0 ? $orders = []:true;

            return view('admin.tracking')->with(['tracker'=>$tracker,'tracking'=>$tracking,'orders'=>$orders]);
        } catch (\Throwable $th) {}
        return view('admin.tracking')->with(['tracker'=>[],'tracking'=>[],'orders'=>[]]);
    }

    public function trackingAsign(Request $request){
        try{

            $tracking = Tracking::where('order_idorder', '=', $request->idorder)->firstOrFail();
            $tracking->users_id = $request->iduser;
            $tracking->saveOrFail();



            $order = Order::findOrFail($request->idorder);
            $order->status = 3;
            $order->saveOrFail();
        }
        catch(\Exception $e)
        {
          DB::rollback();
        }

        return Redirect::to('/admin-tracking-index');
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

    public function trackingMsg($_id){
        $msg = [
            ['status'=>'1','msg'=>'Aprobado'],
            ['status'=>'2','msg'=>'En Ruta Para Recoger'],
            ['status'=>'3','msg'=>'Paquetes(s) Recolectados'],
            ['status'=>'4','msg'=>'En Ruta Para Entregar'],
            ['status'=>'5','msg'=>'Paquetes(s) Entregados'],
            ['status'=>'6','msg'=>'Orden Completa']
        ];

        return ($msg[$_id-1]['msg']);
    }
}

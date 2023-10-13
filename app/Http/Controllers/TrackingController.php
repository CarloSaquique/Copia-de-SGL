<?php

namespace App\Http\Controllers;

use DB;
use Session;
use Carbon\Carbon;
use App\Models\Order;
use App\Models\Tracking;
use Illuminate\Http\Request;
use App\Models\TrackingStates;
use Illuminate\Support\Facades\Redirect;

class TrackingController extends Controller
{

    public function track(Request $request){
        try {
            $tracking = DB::table('tracking')
            ->where('tracking_number',$request->tracking_number)
            ->first();

            $order = Order::findOrFail($tracking->order_idorder);

            $tracking_states = TrackingStates::findOrFail($order->type)->getAttributes();
            unset($tracking_states['idtracking_states']);
            unset($tracking_states['service']);

            foreach ($tracking as $key => $t) {
                if($t == null && $key != 'users_id'){
                    break;
                }else{
                    $last_status = $key;
                }
            }

            if($order->type == 1){
                Session::flash('tracking',$tracking);
                return Redirect::to('/');
            }else{
                return view('tracking.index')->with(['tracking'=>$tracking,'tracking_states'=>$tracking_states,'last_status'=>$last_status]);
            }
        } catch (\Throwable $th) {
            return Redirect::to('/');
        }
    }

    public function update(Request $request){
        $tracking = Tracking::findOrFail($request->idtracking);

        foreach ($tracking->getAttributes() as $key => $t) {
            if($t == null && $key != 'users_id'){
                $tracking->$key = Carbon::now()->toDateTimeString();
                break;
            }
        }
        $tracking->saveOrFail();

        return Redirect::to('/admin-order-courier/'.$tracking->order_idorder);
    }
}

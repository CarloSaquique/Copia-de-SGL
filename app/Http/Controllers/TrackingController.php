<?php

namespace App\Http\Controllers;

use DB;
use Session;
use Carbon\Carbon;
use App\Models\Order;
use App\Models\Tracking;
use Illuminate\Http\Request;
use App\Models\TrackingStates;
use App\Models\TrackingStatus;
use Illuminate\Support\Facades\Redirect;

class TrackingController extends Controller
{
    public function index(){
        $tracking = Tracking::Where('status',1)->get();

        return view('tracking.index')->with(['tracking'=>$tracking]);
    }

    public function addToOrder(Request $request){
        dd($request);
        $request->request->add(['status'=>'1']);
        $tracking = globalnewTracking($request);
        $service = $tracking->service;

        $tracking_states = TrackingStates::where('service',$service)->first();

        $request->merge(['status' =>'status_1']);
        $request->request->add(['state'=>$tracking_states->status_1]);
        $request->request->add(['tracking_idtracking'=>$tracking->idtracking]);
        $tracking_status = globalnewTrackingStatus($request);

        return Redirect::to('/tracking-index');
    }

    public function add(Request $request){

        $request->request->add(['status'=>'1']);
        $tracking = globalnewTracking($request);
        $service = $tracking->service;

        $tracking_states = TrackingStates::where('service',$service)->first();

        $request->merge(['status' =>'status_1']);
        $request->request->add(['state'=>$tracking_states->status_1]);
        $request->request->add(['tracking_idtracking'=>$tracking->idtracking]);
        $tracking_status = globalnewTrackingStatus($request);

        return Redirect::to('/tracking-index');
    }

    public function updateView($idtracking){
        $tracking = Tracking::findOrFail($idtracking);

        $tracking_states = TrackingStates::where('service',$tracking->service)->first();
        $tracking_status = TrackingStatus::where('tracking_idtracking',$idtracking)->get();

        foreach ($tracking_states->getAttributes() as $key => $ts) {
            if(!(strpos($key,'status') === 0) || $ts ==null ){
                unset($tracking_states[$key]);
            }
        }

        $tracking_states = $tracking_states->getAttributes();

        return view('tracking.update')->with(['tracking'=>$tracking,'tracking_states'=>$tracking_states,'tracking_status'=>$tracking_status]);
    }

    public function updateTracking(Request $request){
        $request->request->add(['idtracking'=>$request->tracking_id]);
        $tracking = globalnewTracking($request);

        return Redirect::to('/tracking-update/'.$request->tracking_id);
    }

    public function updateStatus(Request $request){
        $tracking = Tracking::Where('idtracking',$request->tracking_id)->first();

        $service = $tracking->service;

        $tracking_states = TrackingStates::where('service',$service)->first();

        $request->request->add(['status'=>$request->tracking_state]);
        $request->request->add(['state'=>$tracking_states[$request->tracking_state]]);
        $request->request->add(['tracking_idtracking'=>$tracking->idtracking]);
        $tracking_status = globalnewTrackingStatus($request);

        return Redirect::to('/tracking-update/'.$tracking->idtracking);
    }

    public function delete(Request $request){
        $request->request->add(['idtracking'=>$request->tracking_id]);
        $request->request->add(['status'=>0]);
        $tracking = globalnewTracking($request);

        return Redirect::to('/tracking-index');
    }

    public function track(Request $request){
        $tracking = Tracking::where(function ($query) use ($request) {
            $query->where('tracking_number', '=', $request->tracking_number)
                  ->orWhere('awb', '=', $request->tracking_number);
        })->first();


        $tracking_status = TrackingStatus::Where('tracking_idtracking',$tracking->idtracking)->get();

        return view('tracking.status')->with(['tracking'=>$tracking,'tracking_status'=>$tracking_status]);
    }

    // public function update(Request $request){
    //     $tracking = Tracking::findOrFail($request->idtracking);

    //     foreach ($tracking->getAttributes() as $key => $t) {
    //         if($t == null && $key != 'users_id'){
    //             $tracking->$key = Carbon::now()->toDateTimeString();
    //             break;
    //         }
    //     }
    //     $tracking->saveOrFail();

    //     return Redirect::to('/admin-order-courier/'.$tracking->order_idorder);
    // }
}

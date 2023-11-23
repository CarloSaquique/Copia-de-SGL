<?php

namespace App\Http\Controllers;


use DB;
use Session;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Order;
use App\Models\Locker;
use App\Models\Payment;
use App\Models\Billing;
use App\Models\Address;
use App\Models\Package;
use App\Models\Invoice;
use App\Models\Tracking;
use App\Models\Quotation;
use App\Models\Membership;
use Illuminate\Http\Request;
use App\Models\TrackingStatus;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;


class UsersController extends Controller
{
    public function profile() {
        $user = Auth::user();
        return view('user.profile')->with(['user'=>$user]);
    }

    public function locker(){
        $locker = Locker::where('users_id',Auth::user()->id)->first();
        $country = DB::table('country_table')->where('idcountry_table',$locker->type)->get()[0];
        $locker->number = explode("/", $country->iso_code)[1].$locker->number;
        return view('user.locker')->with(['locker'=>$locker,'country'=>$country]);
    }

    public function membership(){
        $membership = Membership::where('users_id',Auth::user()->id)->first();
        $membership_table = DB::table('membership_table')->where('idmembership_table',$membership->type)->get()[0];

        return view('user.membership')->with(['membership'=>$membership,'membership_table'=>$membership_table]);
    }

    public function orders(){
        $orders = Order::where('users_id',Auth::user()->id)
        ->where('status',3)
        ->orderBy('created_at', 'desc')
        ->get();


        foreach ($orders as $key => $order) {
            $quotation = Quotation::where('order_idorder',$order->idorder)->first();

            $payment = Payment::where('quotation_idquotation',$quotation->idquotation)->first();
            $order->total = $payment->total;
            $order->currency = $payment->currency;
        }

        return view('user.orders')->with(['orders'=>$orders]);
    }

    public function order($id){
        $order = DB::table('order')
        ->where('idorder',$id)
        ->where('users_id',Auth::user()->id)
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

        $user_id = Auth::user()->id;
        if($order->users_id = $user_id){
            return view('user.order')->with([
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
        }else{
            return Redirect::to('/');
        }
    }

    public function register(Request $request) {
        try
        {
            $validator = Validator::make($request->all(), [
                'name' => 'required|alpha|max:15',
                'last_name' => 'required|alpha|max:15',
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'cui' => 'required|numeric',
                'country' => 'required|numeric|min:1|max:14',
                'password' => ['required', 'regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-,.]).{6,}$/', 'min:6', 'confirmed'],
            ],[
                'name.required' => 'Debes colocar tu nombre',
                'last_name.required' => 'Debes colocar tu apellido',
                'email.required' => 'Debes colocar tu email',
                'country.min' => 'Debes seleccionar tu país',
                'password.required' => 'Debes colocar tu password',
            ]);

            if($validator->fails()) {
                Session::flash('error', $validator->messages()->all());
                return Redirect::to('/register');
            }else{
                $user = new User($request->except('password'));
                $user->password = bcrypt($request->get('password'));
                $user->role = 'SGL';
                $user->status = '1';
                $user->assignRole('client');
                $user->saveOrFail();

                $unique = $this->lockerNumber();

                $locker = new Locker();
                $locker->type = $request->country;
                $locker->number = $unique;
                $locker->status = 1;
                $locker->users_id = $user->id;
                $locker->saveOrFail();

                // Fecha de expiración promocion
                $datetime = Carbon::createFromFormat('Y-m-d H:i:s', '2023-01-31 23:59:59')->toDateTimeString();

                // type = 1 promoción temporal 1 mes gratis
                $membership = new Membership();
                $membership->type = 1;
                $membership->status = 1;
                $membership->finish_at = $datetime;
                $membership->users_id = $user->id;
                // $membership->saveOrFail();

                event(new Registered($user));
                Auth::login($user);

            }
        }
        catch(\Exception $e)
        {
          DB::rollback();
        }

        return Redirect::to('/profile');

    }

    public function lockerNumber(){
        do {
            $random = random_int(100000000000000, 999999999999999);
        } while (Locker::where('number','=',$random)->exists());

        return $random;
    }

    public function addressAdd(Request $request) {
        try
        {
            $address = new Address($request->input());
            $address->users_id = Auth::user()->id;
            $address->type = 3;
            $address->saveOrFail();
        }
        catch(\Exception $e)
        {
          DB::rollback();
        }
        return Redirect::to('/store-cart-index');
    }

}

<?php

namespace App\Http\Controllers;

use DB;
use Session;
use App\Models\User;
use App\Models\Order;
use App\Models\Payment;
use App\Models\Address;
use App\Models\Package;
use App\Models\Quotation;
use Illuminate\Http\Request;
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

    public function orders(){
        $orders = Order::where('users_id',Auth::user()->id)->get();


        foreach ($orders as $key => $order) {
            $quotation = Quotation::where('order_idorder',$order->idorder)->first();
            $payment = Payment::where('quotation_idquotation',$quotation->idquotation)->first();
            $order->total = $payment->total;
            $order->currency = $quotation->currency;
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

        $payment = DB::table('payment')
        ->where('quotation_idquotation',$quotation->idquotation)
        ->get()[0];

        return view('user.order')->with([
            'order'=>$order,
            'quotation'=>$quotation,
            'packages'=>$packages,
            'address'=>$address,
            'payment'=>$payment,
        ]);
    }

    public function register(Request $request) {
        try

        {
            $validator = Validator::make($request->all(), [
                'name' => 'required|alpha|max:15',
                'last_name' => 'required|alpha|max:15',
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-,.]).{6,}$/', 'min:6', 'confirmed'],

            ],[
                'name.required' => 'Debes colocar tu nombre',
                'last_name.required' => 'Debes colocar tu apellido',
                'email.required' => 'Debes colocar tu email',
                'password.required' => 'Debes colocar tu password',
            ]);

            if($validator->fails()) {
                Session::flash('error', $validator->messages()->all());
                return Redirect::to('/register');
            }else{
                $user = new User($request->except('password'));
                $user->password = bcrypt($request->get('password'));
                $user->role = '2';
                $user->status = '1';
                $user->assignRole('admin');
                $user->saveOrFail();

                event(new Registered($user));
                Auth::login($user);

            }
        }
        catch(\Exception $e)
        {
          DB::rollback();
        }

        // dd($request);
        return Redirect::to('/');

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

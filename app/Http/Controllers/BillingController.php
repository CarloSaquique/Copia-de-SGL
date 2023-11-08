<?php

namespace App\Http\Controllers;

use DB;
use URL;
use App\Models\Order;
use App\Models\Invoice;
use App\Models\Package;
use Illuminate\Http\File;
use App\Models\Quotation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;



class BillingController extends Controller
{
    public function index(){
        return view('billing.uploadInvoice');
    }

    public function upload(Request $request){

        $invoice_file = $request->file('invoice');
        $store_path = Storage::put('/packages/invoices', $invoice_file, 'private');
        $request->request->add(['file'=>$store_path]);

        $order = Order::where('order_number', $request->order_number);

        if($order->exists()){
            $order = $order->first();
            $request->request->add(['order_idorder'=>$order->idorder]);
            DB::statement('SET FOREIGN_KEY_CHECKS=0;');
            $invoice = globalNewInvoice($request);
            DB::statement('SET FOREIGN_KEY_CHECKS=1;');

            return Redirect::to('/user-order/'.$order->idorder);
        }else{
            $request->request->add(['order_idorder'=>$request->order_number]);
            DB::statement('SET FOREIGN_KEY_CHECKS=0;');
            $invoice = globalNewInvoice($request);
            DB::statement('SET FOREIGN_KEY_CHECKS=1;');

            return Redirect::to('/upload-invoice');
        }
    }

    public function uploadFromOrder($idorder){
        $order = Order::findOrFail($idorder);

        $quotation = Quotation::where('order_idorder',$idorder)->first();

        $package = Package::where('quotation_idquotation',$quotation->idquotation)->first();

        $value = $package->price;

        $user_id = Auth::user()->id;

        // Filter by user and pobox service
        if($order->users_id == $user_id && $quotation->service == 1){
            return view('billing.uploadInvoice')->with(['order'=>$order,'value'=>$value]);
        }else{
            return Redirect::to('/');
        }
    }

    public function loadInvoice($idorder){
        $invoice = Invoice::where('order_idorder',$idorder)->latest('created_at')->first();
        $file_name = explode('/',$invoice->file)[2];

        try {
            Storage::copy($invoice->file, "public/packages/invoices/".$file_name);
        } catch (\Throwable $th) {

        }
        return \Response::json(URL::to('/').'/storage/packages/invoices/'.$file_name);

    }

    public function deleteInvoice(Request $request){
        $invoice = Invoice::where('order_idorder',$request->idorder)->latest('created_at')->first();

        $file_name = explode('/',$invoice->file)[2];
        Storage::delete("public/packages/invoices/".$file_name);
        return \Response::json('Ok');
    }
}

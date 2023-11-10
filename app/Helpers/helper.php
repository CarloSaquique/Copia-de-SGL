<?php

use App\Models\OSC;
use App\Models\Order;
use App\Models\Invoice;
use App\Models\Payment;
use App\Models\Address;
use App\Models\Package;
use App\Models\Bitacora;
use App\Models\Quotation;
use App\Models\PackageTable;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

function globalNewBitacora($_action,$_table,$_idtable){
    try {
        $bitacora = new Bitacora();
        Auth::check()?
        $bitacora->iduser = Auth::user():
        $bitacora->iduser = 0;
        $bitacora->action = $_action;
        $bitacora->table = $_table;
        $bitacora->idtable = $_idtable;
        $bitacora->saveOrFail();
    }catch(\Exception $e){
        DB::rollback();
    }
}

function globalNewQuotation($request){
    try {
        $validator = Validator::make($request->all(), [
            // fix Miami China for sender
            // 'sender' => 'sometimes|numeric|min:1|max:5',
            'destination' => 'sometimes|numeric|min:1|max:5',
            'service' => 'sometimes|numeric|min:1|max:1',
            'currency' => 'sometimes|regex:/^[Q,$]$/',
            'premier' => 'sometimes|boolean',
            'prepaid' => 'sometimes|boolean',
            'terms' => 'sometimes|accepted',
            'order_idorder' => 'sometimes|numeric|min:1',
        ]);


        if(!$validator->fails()) {
            $request->idquotation?
            $old_quotation = Quotation::findOrFail($request->idquotation):
            $old_quotation = new Quotation();

            $quotation = Quotation::updateOrCreate([
                'idquotation' => $request->get('idquotation'),
            ],[
                'sender' => $request->get('sender',$old_quotation->sender),
                'destination' => $request->get('destination',$old_quotation->destination),
                'service' => $request->get('service',$old_quotation->service),
                'premier' => $request->get('premier',$old_quotation->premier),
                'prepaid' => $request->get('prepaid',$old_quotation->prepaid),
                'terms' => $request->get('terms',$old_quotation->terms),
                'order_idorder' => $request->get('order_idorder',$old_quotation->order_idorder)
            ]);
            return $quotation;
        }
    }catch(\Exception $e){
        DB::rollback();
    }
}

function globalNewPackage($request){
    try {
        $validator = Validator::make($request->all(), [
            'type' => 'sometimes|numeric|min:1|max:6',
            // fixed null link
            // 'link' => 'sometimes|url',
            // 'bill' => 'sometimes|numeric|min:1|max:1',
            // 'size' => 'sometimes|regex:/^([[0-9]{1,})(-)([0-9]{1,})$/',
            'fragile' => 'sometimes|boolean',
            'dangerous' => 'sometimes|boolean',
            'perishable' => 'sometimes|boolean',
            'width' => 'sometimes|numeric|min:1',
            'height' => 'sometimes|numeric|min:1',
            'depth' => 'sometimes|numeric|min:1',
            'price' => 'sometimes|numeric',
            'shipping' => 'sometimes|numeric',
            // 'weight' => 'sometimes|numeric|min:1',
            // 'detail' => 'sometimes|numeric|min:1',
            'quotation_idquotation' => 'sometimes|numeric'
        ]);
        if(!$validator->fails()) {

            $request->idpackage?
            $old_package = Package::findOrFail($request->idpackage):
            $old_package = new Package();


            $package = Package::updateOrCreate([
                'idpackage' => $request->get('idpackage'),
            ],[
                'type' => $request->get('type',$old_package->type),
                'link' => $request->get('link',$old_package->link),
                'fragile' => $request->get("fragile",$old_package->fragile),
                'dangerous' => $request->get('dangerous',$old_package->dangerous),
                'perishable' => $request->get('perishable',$old_package->perishable),
                'width' => $request->get('width',$old_package->width),
                'height' => $request->get('height',$old_package->height),
                'depth' => $request->get('depth',$old_package->depth),
                'price' => $request->get('price',$old_package->price),
                'shipping' => $request->get('shipping',$old_package->shipping),
                'weight' => $request->get('weight',$old_package->weight),
                'detail' => $request->get('description',$old_package->detail),
                'quotation_idquotation' => $request->get('quotation_idquotation',$old_package->quotation_idquotation),
            ]);

            return $package;
        }
    }catch(\Exception $e){
        DB::rollback();
    }
}

function globalNewOrder($request){
    try {

        $validator = Validator::make($request->all(), [
            'type' => 'sometimes|numeric|min:1|max:5',
        ]);


        if(!$validator->fails()) {
            $request->idorder?
            $old_order = Order::findOrFail($request->idorder):
            $old_order = new Order();

            $order = Order::updateOrCreate([
                'idorder' => $request->get('idorder'),
            ],[
                'order_number' => $request->get('order_number',$old_order->order_number),
                'type' => $request->get('type',$old_order->type),
                'status' => $request->get('status',$old_order->status),
                'users_id' => Auth::user()->id,
            ]);
            return $order;
        }
    }catch(\Exception $e){
        DB::rollback();
    }
}

function globalNewAddress($request){
    try {

        $validator = Validator::make($request->all(), [
            // 'type' => 'sometimes|numeric|min:1|max:5',
        ]);


        if(!$validator->fails()) {
            $request->idaddress?
            $old_address = Address::findOrFail($request->idaddress):
            $old_address = new Address();

            $address = Address::updateOrCreate([
                'idaddress' => $request->get('idaddress'),
            ],[
                'type' => $request->get('type',$old_address->type),
                'address' => $request->get('address',$old_address->address),
                'departamento' => $request->get('departamento',$old_address->departamento),
                'municipio' => $request->get('municipio',$old_address->municipio),
                'name' => $request->get('name',$old_address->name),
                'phone' => $request->get('phone',$old_address->phone),
                'email' => $request->get('email',$old_address->email),
                'date' => $request->get('date',$old_address->date),
                'time' => $request->get('time',$old_address->time),
                'comments' => $request->get('comments',$old_address->comments),
                'status' => $request->get('status',$old_address->status),
                'users_id' => $request->get('users_id',$old_address->users_id),
                'quotation_idquotation' => $request->get('quotation_idquotation',$old_address->quotation_idquotation),

            ]);
            return $address;
        }
    }catch(\Exception $e){
        DB::rollback();
    }
}

function globalNewPayment($request){
    try {
        $validator = Validator::make($request->all(), [
            'total' => 'sometimes|numeric',
        ]);


        if(!$validator->fails()) {
            $request->idpayment?
            $old_payment = Payment::findOrFail($request->idpayment):
            $old_payment = new Payment();

            $payment = Payment::updateOrCreate([
                'idpayment' => $request->get('idpayment'),
            ],[
                'type' => $request->get('type',$old_payment->type),
                'total' => $request->get('total',$old_payment->total),
                'currency' => $request->get("currency",$old_payment->currency),
                'bank_total' => $request->get('bank_total',$old_payment->bank_total),
                'status' => $request->get('status',$old_payment->status),
                'comments' => $request->get('comments',$old_payment->comments),
                'quotation_idquotation' => $request->get('quotation_idquotation',$old_payment->quotation_idquotation),
            ]);
            return $payment;
        }
    }catch(\Exception $e){
        DB::rollback();
    }
}

function globalNewOsc($request){
    try {

        $validator = Validator::make($request->all(), [
        ]);


        if(!$validator->fails()) {
            $request->idosc?
            $old_osc = OSC::findOrFail($request->idosc):
            $old_osc = new OSC();

            $osc = OSC::updateOrCreate([
                'idosc' => $request->get('idosc'),
            ],[
                'transport' => $request->get('transport',$old_osc->transport),
                'clearance' => $request->get('clearance',$old_osc->clearance),
                'insurance' => $request->get('insurance',$old_osc->insurance),
                'dai' => $request->get('dai',$old_osc->dai),
                'iva' => $request->get('iva',$old_osc->iva),
                'total' => $request->get('total',$old_osc->total),
                'duca' => $request->get('duca',$old_osc->duca),
                'sed' => $request->get('sed',$old_osc->sed),
                'status' => $request->get('status',$old_osc->status),
                'order_idorder' => $request->get('order_idorder',$old_osc->order_idorder),
            ]);
            return $osc;
        }
    }catch(\Exception $e){
        DB::rollback();
    }
}

function globalNewInvoice($request){
    try {
        $validator = Validator::make($request->all(), [
            'value' => 'numeric',
            'tracking' => 'required',
            'keyword' => 'required',
            'new' => 'numeric|min:1|max:2',
            'insurance' => 'numeric|min:1|max:2',
            'divided' => 'numeric|min:1|max:2',
        ]);


        if(!$validator->fails()) {
            $request->idinvoice?
            $old_invoice = Invoice::findOrFail($request->idinvoice):
            $old_invoice = new Invoice();

            $invoice = Invoice::updateOrCreate([
                'idinvoice' => $request->get('idinvoice'),
            ],[
                'value' => $request->get('value',$old_invoice->value),
                'tracking' => $request->get('tracking',$old_invoice->tracking),
                'keyword' => $request->get('keyword',$old_invoice->keyword),
                'new' => $request->get('new',$old_invoice->new),
                'insurance' => $request->get('insurance',$old_invoice->insurance),
                'divided' => $request->get('divided',$old_invoice->divided),
                'file' => $request->get('file',$old_invoice->file),
                'package_idpackage' => $request->get('package_idpackage',$old_invoice->package_idpackage),
                'order_idorder' => $request->get('order_idorder',$old_invoice->order_idorder),
            ]);
            return $invoice;
        }
    }catch(\Exception $e){
        DB::rollback();
    }
}
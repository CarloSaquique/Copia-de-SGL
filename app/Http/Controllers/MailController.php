<?php

namespace App\Http\Controllers;

use Mail;
use Illuminate\Http\Request;

class MailController extends Controller
{
    public function refundForm(Request $request){
        // dd($request);
        $data = $this->translateData($request);

        $files = $this->addFiles($request);

        // dd($request);
        Mail::send('mail.RefundForm', $data, function($message)use($data, $files) {
            $message->to($data["email"])
                    ->subject($data["title"]);

            foreach ($files as $key=>$file){
                $message->attach($file, array(
                    'as' => $file->name,
                ));
            }
        });

        dd('Mail Send Successfully !!');
    }

    public function translateData($request){
        $request = $request->all();

        // Service Type
        $request['service_type'] == 1 ? $request['service_type'] = 'Aéreo':false;
        $request['service_type'] == 2 ? $request['service_type'] = 'Courier':false;
        $request['service_type'] == 3 ? $request['service_type'] = 'FCL':false;
        $request['service_type'] == 4 ? $request['service_type'] = 'LCL':false;
        $request['service_type'] == 5 ? $request['service_type'] = 'Terrestre':false;
        $request['service_type'] == 6 ? $request['service_type'] = 'Aduana':false;
        $request['service_type'] == 7 ? $request['service_type'] = 'Seguro':false;
        $request['service_type'] == 8 ? $request['service_type'] = 'Brokerage':false;
        $request['service_type'] == 9 ? $request['service_type'] = 'Tienda en Linea':false;

        // Reclaim Type
        $request['claim_type'] == 1 ? $request['claim_type'] = 'Pérdida parcial de mercancías':false;
        $request['claim_type'] == 2 ? $request['claim_type'] = 'Pérdida total':false;
        $request['claim_type'] == 3 ? $request['claim_type'] = 'Nunca recibi mi mercancía':false;
        $request['claim_type'] == 4 ? $request['claim_type'] = 'Se cobro mas de lo cotizado':false;
        $request['claim_type'] == 5 ? $request['claim_type'] = 'No recibi deposito en garantía':false;

        // Secure Payment
        $request['secure_payment'] == 1 ? $request['secure_payment'] = 'Sí':false;
        $request['secure_payment'] == 2 ? $request['secure_payment'] = 'No':false;

        // Refund Received
        $request['refund_received'] == 1 ? $request['refund_received'] = 'Sí':false;
        $request['refund_received'] == 2 ? $request['refund_received'] = 'No':false;

        // Refund Type
        $request['refund_type'] == 1 ? $request['refund_type'] = 'Transferencia bancaria':false;
        $request['refund_type'] == 2 ? $request['refund_type'] = 'Cheque':false;

        // Refund Currency
        $request['refund_currency'] == 1 ? $request['refund_currency'] = 'QTZ':false;
        $request['refund_currency'] == 2 ? $request['refund_currency'] = 'USD':false;

        // Discount
        array_key_exists('discount',$request) ? $request['discount'] = 'Sí': $request['discount'] ='No';

        $request['payment_type'] = $this->paymentTypeArray($request['payment_type']);

        $data["email"] = "kevinarmas7@gmail.com";
        $data["title"] = "Solicitud de Reintegro";

        foreach ($request as $key => $value) {
            if($key != '_token'){
                $data[$key] = $value;
            }
        }

        return $data;
    }

    public function paymentTypeArray($request){
        foreach ($request as $key => $value) {
            $value == 0 ? $value = 'No Ingreso Dato':false;
            $value == 1 ? $value = 'Tarjeta credito/debito':false;
            $value == 2 ? $value = 'Efectivo':false;
            $value == 3 ? $value = 'Transferencia Bancaria':false;
            $value == 4 ? $value = 'Paypal':false;
            $value == 5 ? $value = 'Puntos Bancarios':false;
            $value == 6 ? $value = 'Tarjeta prepago de regalo':false;
            $request[$key] = $value;
        }
        return $request;
    }

    public function addFiles($request){
        $files = $request->files;

        foreach ($files as $key=>$file){
            $temp_file = $request->file($key);

            $extension = $temp_file->extension();
            $key == 'invoice' ? $name = 'Factura_de_compra':false;
            $key == 'package_slip' ? $name = 'Factura_cobro_sgl':false;
            $key == 'sgl_invoice' ? $name = 'Packing_slip':false;
            $key == 'legal_dpi' ? $name = 'DPI_propietario':false;

            $file->name = $name.'.'.$extension;
        }
        return $files;
    }
}

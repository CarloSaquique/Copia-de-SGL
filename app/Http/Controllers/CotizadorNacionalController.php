<?php

namespace App\Http\Controllers;

use DB;
use Session;
use App\Models\Order;
use App\Models\Package;
use App\Models\Address;
use App\Models\Payment;
use App\Models\Tracking;
use App\Models\Quotation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class CotizadorNacionalController extends Controller
{
    public function index(){
        if(Session::get('quotation')){
            $quotation = Session::get('quotation');
            $packages = Session::get('packages');
            return view('cotizadorNacional')->with(['quotation'=>$quotation,'packages'=>$packages]);
        }else{
            return view('cotizadorNacional');
        }
    }

    public function cotizar(Request $request){
        $statement = DB::select("SHOW TABLE STATUS LIKE 'quotation'");
        $quotation_id = $statement[0]->Auto_increment;
        $quotation = new Quotation();
        $quotation->sender = $request->departamento_origen.'-'.$request->municipio_origen;
        $quotation->destination = $request->departamento_destino.'-'.$request->municipio_destino;
        $quotation->saveOrFail();

        $packages = array();
        foreach ($request->all() as $key => $value) {
            if(strpos($key,'pk_') === 0){
                $package  = new Package();
                $tipo = explode('_',$key)[1];
                $n = explode('_',$key)[2];
                if($tipo == 4){
                    $package->weight = $request['w_'.$n];
                    $package->width = explode('x',$request['d_'.$n])[0];
                    $package->height = explode('x',$request['d_'.$n])[1];
                    $package->depth = explode('x',$request['d_'.$n])[2];

                    if($request['t_'.$n] == 8){
                        $package->detail = $request['p_'.$n];
                    }else{
                        $package->detail = $this->tableType($request['t_'.$n])->name;
                    }

                }else{
                    $data = $this->table($tipo);
                    $package->weight = $data->weight;
                    $package->width = $data->size;
                    $package->height = $data->size;
                    $package->depth = $data->size;
                    $package->total = $data->total;
                }
                $package->quotation_idquotation = $quotation_id;
                $package->type = $tipo;

                $request['fr_'.$n] ? $package->fragile = 1:$package->fragile = 0;
                array_push($packages, $package);
                $package->saveOrFail();
            }

        }
        $quotation->idquotation = $quotation_id;
        return back()->with(['quotation'=>$quotation,'packages'=>$packages]);
    }

    public function cotizarOrder(Request $request){

        $order = new Order();
        $order->order_number = 1234567890;
        $order->type = 2;
        $order->status = 1;
        $order->users_id = Auth::user()->id;
        $order->saveOrFail();

        $statement = DB::select("SHOW TABLE STATUS LIKE 'order'");
        $orderId = ($statement[0]->Auto_increment)-1;

        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        $quotation = Quotation::findOrFail($request->idquotation);
        $quotation->order_idorder = $orderId;
        $quotation->saveOrFail();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
        return redirect('cotizador-nacional-orden');
    }

    public function cotizarOrderShow(){
        $order = DB::table('order')
        ->join('quotation','order_idorder',"=","idorder")
        ->where('order.users_id',Auth::user()->id)
        ->where('order.status',1)
        ->where('order.type',2)
        ->get();

        if(count($order)>0){
            $order = $order[0];
            $packages = DB::table('package')
            ->where('quotation_idquotation',$order->idquotation)
            ->get();
        }else{
            $packages = [];
            $order = [];
        }


        return view('cartCotizadorNacional')->with(['order'=>$order,'packages'=>$packages]);;

    }

    public function cotizarPayment(Request $request){
        try
        {
            $quotation = Quotation::findOrFail($request->idquotation);
            $quotation->phone_sender = $request->phone_sender;
            $quotation->phone_destination = $request->phone_destination;
            $quotation->saveOrFail();


            $order = Order::findOrFail($quotation->order_idorder);
            $request->nit == null ? $order->nit = "CF":$order->nit = $request->nit;
            $order->status = "2";
            $order->comments = $request->comments;
            $order->saveOrFail();


            DB::statement('SET FOREIGN_KEY_CHECKS=0');
            $address = new Address();
            $address->address = $request->sender;
            $address->departamento = explode('-',$quotation->sender)[0];
            $address->municipio = explode('-',$quotation->sender)[1];
            $address->status = "1";
            $address->type = "1";
            $address->users_id = Auth::user()->id;
            $address->comments = $request->comments_sender;
            $address->receiver = $request->receiver_sender;
            $address->quotation_idquotation = $request->idquotation;
            $address->saveOrFail();

            $address = new Address();
            $address->address = $request->destination;
            $address->departamento = explode('-',$quotation->destination)[0];
            $address->municipio = explode('-',$quotation->destination)[1];
            $address->status = "1";
            $address->type = "2";
            $address->users_id = Auth::user()->id;
            $address->comments = $request->comments_destination;
            $address->receiver = $request->receiver_destination;
            $address->quotation_idquotation = $request->idquotation;
            $address->saveOrFail();

            DB::statement('SET FOREIGN_KEY_CHECKS=1');

            $tracking = new Tracking();
            $tracking->tracking_number = 1234;
            $tracking->status = 1;
            $tracking->order_idorder = $quotation->order_idorder;
            $tracking->saveOrFail();

            $payment = new Payment();
            $payment->type = $request->payment;
            if($request->payment == 1){
                $payment->status = 1;
                $payment->comments = "Pago Envio Completado";
            }else{
                $payment->status = 2;
                $payment->comments = "Pago Contra Entrega";
            }

            $packages = DB::table('package')
            ->where('quotation_idquotation',$request->idquotation)
            ->get();

            $total = 0;
            foreach ($packages as $key => $package) {
                $total += $package->total;
            }

            $payment->total = $total;
            $payment->order_idorder = $quotation->order_idorder;
            $payment->saveOrFail();

        }
        catch(\Exception $e)
        {
          DB::rollback();
        }
        return Redirect::to('/');
    }

    public function table($search){
        $table = array(
            "1" => (object) [
                "type" => 1,
                "size" => 15,
                "weight" => 3,
                "total" => 35,
            ],
            "2" =>  (object) [
                "type" => 2,
                "size" => 65,
                "weight" => 30,
                "total" => 50,
            ],
            "3" =>  (object) [
                "type" => 3,
                "size" => 90,
                "weight" => 90,
                "total" => 75,
            ],
        );
        $result = $table[$search];
        return($result);
    }

    public function tableType($type){
        $table = array(
            "1" => (object) [
                "name" => "Televisores",
            ],
            "2" => (object) [
                "name" => "Refrigeradores",
            ],
            "3" => (object) [
                "name" => "Estufas",
            ],
            "4" => (object) [
                "name" => "Motores",
            ],
            "5" => (object) [
                "name" => "Motocicletas",
            ],
            "6" => (object) [
                "name" => "Instrumentos",
            ],
            "7" => (object) [
                "name" => "Muebles",
            ]
        );
        $result = $table[$type];
        return($result);
    }
}


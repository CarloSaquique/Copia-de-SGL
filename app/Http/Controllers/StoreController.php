<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Order;
use App\Models\Product;
use App\Models\Products;
use App\Models\Tracking;
use App\Models\Billing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Database\Eloquent\Builder;


class StoreController extends Controller
{
    public function index(){
        try {
            $products = DB::table('product')->get();
            count($products) == 0 ? $products = []:true;
            return view('store.index')->with(['products'=>$products]);
        } catch (\Throwable $th) {}
        return view('store.index')->with(['products'=>[]]);
    }

    public function cat(){
        return view('store.category')->with(['products'=>[]]);
    }

    public function productShow($link){
        try {
            $product = Product::where('link',$link)->get();
            $product[0]->price = $product[0]->price*8;
            return view('store.show')->with(['product'=>$product]);
        } catch (\Throwable $th) {}
        return view('store.show')->with(['product'=>[]]);
    }

    public function productSearch($search){
        try {
            $search_array = explode(" ",$search);

            Builder::macro('whereLike', function(string $search) {
                return $this->orWhere('name', 'LIKE', '%'.$search.'%');
            });

            $products = Product::whereLike($search);
                foreach ($search_array as $value) {
                    if(strlen($value)>1){
                        $products->whereLike($value);
                    }
                }
            $products = $products->get();
            count($products) == 0 ? $products = []:true;

            return view('store.index')->with(['products'=>$products]);
        } catch (\Throwable $th) {}
        return view('store.index')->with(['products'=>[]]);
    }

    public function cartAdd(Request $request) {
        try
        {
            $order = DB::table("order")
            ->where('users_id',Auth::user()->id)
            ->where('status',1)
            ->get();

            if (count($order) == 0){
                $order = new Order();
                $order->order_number = 1234567890;
                $order->status = 1;
                $order->users_id = Auth::user()->id;
                $order->saveOrFail();
                $statement = DB::select("SHOW TABLE STATUS LIKE 'order'");
                $orderId = ($statement[0]->Auto_increment)-1;
            }else{
                $orderId = $order[0]->idorder;
            }


            $products = new Products($request->except('idproduct'));
            $products->product_idproduct = $request->idproduct;
            $products->order_idorder = $orderId;
            $products->saveOrFail();
        }
            catch(\Exception $e)
        {
          DB::rollback();
        }
        return Redirect::to('/store-cart-index');
    }

    public function cartIndex(){
        try{
            $products = DB::table('products')
            ->join('order', 'order.idorder', '=', 'products.order_idorder')
            ->join('product', 'product.idproduct', '=', 'products.product_idproduct')
            ->where('order.status',1)
            ->where('order.users_id',Auth::user()->id)
            ->select('product.name','product.price','products.units','order.idorder','product.idproduct')
            ->get();


            $address = DB::table('address')
            ->join('users', 'users.id', '=', 'address.users_id')
            ->where('users.id',Auth::user()->id)
            ->where('type',3)
            ->get();

            count($address) == 0 ? $address = []:true;
            count($products) == 0 ? $products = []:true;

            $total = 0;
            foreach ($products as $value) {
                $total += $value->price*$value->units;
            }

            return view('store.cartIndex')->with(['products'=>$products,'address'=>$address,'total'=>$total*8]);
            } catch (\Throwable $th) {}
        return view('store.cartIndex')->with(['products'=>[],'address'=>[],'total'=>[]]);
    }

    public function buy(Request $request){
        try
        {
            $order = Order::findOrFail($request->idorder);
            $order->nit = $request->nit;
            $order->payment = $request->payment;
            $order->shipping = $request->shipping;
            $order->comments = $request->comments;
            $order->status = 2;
            $order->saveOrFail();

            $tracking = new Tracking();
            $tracking->tracking_number = 123456;
            $tracking->status = 1;
            $tracking->order_idorder = $request->idorder;
            $tracking->saveOrFail();

            $prices = DB::table('products')
            ->where('order_idorder',$request->idorder)
            ->join('product','product.idproduct','=','products.product_idproduct')
            ->select('product.price','products.units')
            ->get();

            $total = 0;
            foreach($prices as $price){
                $total += ($price->price)*($price->units);
            }

            DB::statement('SET FOREIGN_KEY_CHECKS=0');
            $billing = new Billing();
            if($request->promo){
                $promo = DB::table('promo')
                ->where('code',$request->promo)
                ->get();
                $total = $total - $total * ($promo[0]->discount/100);
                $billing->promo_idpromo = $promo[0]->idpromo;
            }


            $billing->billing_number = 123456;
            $billing->total = $total;
            $billing->order_idorder = $request->idorder;
            $billing->saveOrFail();
            DB::statement('SET FOREIGN_KEY_CHECKS=1');
        }
        catch(\Exception $e)
        {
            DB::rollback();
        }
        return Redirect::to('/');
    }
}

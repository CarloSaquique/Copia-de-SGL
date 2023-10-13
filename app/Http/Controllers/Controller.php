<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use DB;
use App\Models\Package;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;



class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function test(){

        return view('test');
    }

    public function guide(){
        return view('guide');
    }

    public function testFactura($idquotation){
        $package = Package::where('quotation_idquotation',$idquotation)->get()[0];
        $file_name = explode('/',$package->bill)[1];
        try {
            Storage::copy($package->bill, "public/package_bills/".$file_name);
        } catch (\Throwable $th) {
            //throw $th;
        }
        return \Response::json(URL::to('/').'/storage/package_bills/'.$file_name);
        // return Redirect::to('/storage/package_bills/'.$file_name);
        // Storage::delete("public/package_bills/".$file_name);
    }

    public function testDelete(Request $request){
        $package = Package::where('quotation_idquotation',$request->idquotation)->get()[0];

        $file_name = explode('/',$package->bill)[1];
        Storage::delete("public/package_bills/".$file_name);
        return \Response::json('Ok');
    }
}





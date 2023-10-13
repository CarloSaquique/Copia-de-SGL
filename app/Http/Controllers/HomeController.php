<?php

namespace App\Http\Controllers;

use DB;
use Session;
use App\Models\RateUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        session()->forget('idquotation');
        return view('home.home');
    }

    public function rateUs(Request $request)
    {
        try{
            $rating = new RateUs();
            $request->has('rate_1')?$rating->rating = 1:false;
            $request->has('rate_2')?$rating->rating = 2:false;
            $request->has('rate_3')?$rating->rating = 3:false;
            $request->has('rate_4')?$rating->rating = 4:false;
            $request->has('rate_5')?$rating->rating = 5:false;
            $rating->commentary = $request->commentary;
            $rating->users_id = Auth::user()->id;
            $rating->saveOrFail();
        } catch (\Throwable $th) {
            //throw $th;
        }
        return Redirect::to('/');
    }


    public function workWithUsCategory()
    {
        return view('footer.workWithUs.category');
    }

    public function workWithUsJob()
    {
        return view('footer.workWithUs.job');
    }

    public function aboutUs()
    {
        return view('home.aboutUs');
    }

    public function workWithUs()
    {
        return view('home.workWithUs');
    }

    public function freqs()
    {
        return view('home.freqs');
    }

    public function termsConditions()
    {
        return view('home.termsConditions');
    }

    public function refunds()
    {
        return view('home.refunds');
    }

    public function blog()
    {
        return view('home.blog');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Setting;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = DB::table('cars')->get();
        $setting = Setting::where('user_id', '=', Auth::user()->id)->first();
        if ($setting != null) {
            return view('home', compact('cars','setting'));
        } else {
            Setting::create([
                'user_id'=> Auth::user()->id,
                'column'=> 3,
            ]);
            $setting = Setting::where('user_id', '=', Auth::user()->id)->first();
            return view('home', compact('cars','setting'));
        }

        return view('home', compact('cars','setting'));
    }
}

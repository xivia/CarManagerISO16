<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Setting;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;

class settingController extends Controller
{
    public function update(Request $request){
        $setting = Setting::where('user_id', '=', Auth::user()->id)->first();
        if ($setting != null) {
            $setting->update([
                'column' => $request->input('column'),
                'row'=> $request->input('row'),
                'scale'=> $request->input('scale'),
            ]);
        } else {
            Setting::create([
                'user_id'=> Auth::user()->id,
                'column'=> $request->input('column'),
                'row'=> $request->input('row'),
                'scale'=> $request->input('scale'),
            ]);
        }
        


    return redirect()->back();

    }
    public function index()
    {
        $setting = Setting::where('user_id', '=', Auth::user()->id)->first();
        if ($setting != null) {
            return view('settings', compact('setting'));
        } else {
            Setting::create([
                'user_id'=> Auth::user()->id,
                'column'=> 2,
                'row'=> 2,
                'scale'=> 50,
            ]);
            $setting = Setting::where('user_id', '=', Auth::user()->id)->first();
            return view('settings', compact('setting'));
        }
        
        
    }
}
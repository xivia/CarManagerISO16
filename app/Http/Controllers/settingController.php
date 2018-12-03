<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Setting;
use Illuminate\Support\Facades\Input;

class settingsController extends Controller
{
    public function update(Request $request){

    DB::table('settings')->where('id', Auth::user()->id)->update(['column' => $request->input('column')]);
    DB::table('settings')->where('id', Auth::user()->id)->update(['row' => $request->input('row')]);
    DB::table('settings')->where('id', Auth::user()->id)->update(['scale' => $request->input('scale')]);

    return redirect()->back();

    }
}
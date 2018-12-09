<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\User;

class userController extends Controller
{
 public function __construct()
    {
        $this->middleware('auth');
    }

    public function edit(User $user)
    {   
        $user = Auth::user();
        return view('editProfile', compact('user'));
    }

    public function show(){
        $user = DB::table('users')->where('id', Auth::user()->id)->first();

        return view('showProfile', compact('user'));
    }


 	public function update(Request $request){
 		$user = Auth::user();
 		$user->name = $request->input('name');
 		$user->email = $request->input('email');
 		if (!$request->input('pw') == '') {
 			$pwnew = Hash::make($request->input('pw'));
            $user->password = $pwnew;
 		}

        $user->save();
        return redirect()->back();
    }

    
        public function updatePerm() {
    
    
            $this->validate(request(), [
    
                'user' => 'required',
                'permission' => 'required',
                
    
            ]);
    
    
            $user = User::find(request('user'));
    
            $user->permission_id = request('permission');
    
            $user->save();
    
            Log::info('Admin: ' . Auth::user()->name.  ' updated '. $user->name . ' is now '. $user->permission->name);
    
    
        return back();
    
        }

}

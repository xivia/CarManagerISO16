<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;


class PermissionController extends Controller
{
    public function index() {

    	$users = User::all();

    	return view('permissions', compact('users'));

    }
}

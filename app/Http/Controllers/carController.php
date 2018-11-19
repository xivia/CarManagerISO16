<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Car;
use Illuminate\Support\Facades\Input;

class carController extends Controller{
    public function create(Request $request){
        if ($request->file('image') == null) {   
                return back()->withInput();
        }    
        $this->validate($request, [

            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);
        $image = $request->file('image');

        $car = Car::create([
            'name'=> $request->input('CarName'),
            // needs a reference to the brands table
        	//'brand'=> $request->input('Brand'),
            'doors'=> $request->input('Doors'),
            'seats'=> $request->input('Seats'),
        	'acceleration'=> $request->input('Acceleration'),
            'ps'=> $request->input('PS'),
            'torque'=> $request->input('Torque'),
            'cylinders'=> $request->input('Cylinders'),
            'basePrice'=> $request->input('BasePrice'),
            'transmission'=> $request->input('Transmission'),
            'drivetrain'=> $request->input('Drivetrain'),
            'weight'=> $request->input('Weight'),
            'velocity'=> $request->input('Velocity'),
            'manufacturingYear'=> $request->input('ManufacturingYear'),
        	]);
        
        $path = $image->store('public/car/' . $car->id);
        $path = substr($path, strpos($path, '/'));
        //Substring machen /public/ abschneiden

        $car->picture = $path;
        $car->save();

    	return redirect()->back();

    }
    
    public function index($car){
        $cars = DB::table('cars')->where('id', $car)->first();

        return view('carspec', compact('cars'));
    }
    
}
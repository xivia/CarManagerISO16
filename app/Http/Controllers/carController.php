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
    
    public function index(){
        $brands = DB::table('brands');
        return view('createCar', compact('brands'));
    }

    public function carspec($car){
        $cars = DB::table('cars')->where('id', $car)->first();
        if ($cars != null) {
            return view('carspec', compact('cars'));
        } else {
            return view('home');
        }  
    }

    public function edit($car){
        $cars = DB::table('cars')->where('id', $car)->first();
        if ($cars != null) {
            return view('editCar', compact('cars'));
        }else{
            return view('home');
        }
        
    }

    public function update($car, Request $request){

        $car = Car::where('id', $car)->first();

        $car->name = $request->input('CarName');
        $car->brand_id = $request->input('Brand');
        $car->velocity = $request->input('Velocity');
        $car->acceleration = $request->input('Acceleration');
        $car->ps = $request->input('PS');
        $car->basePrice = $request->input('Price');
        $car->weight = $request->input('Weight');
        $car->cylinders = $request->input('Weight');
        $car->drivetrain = $request->input('Drivetrain');
        $car->seats = $request->input('Seats');
        $car->doors = $request->input('Doors');
        $car->torque = $request->input('Torque');
        $car->transmission = $request->input('Transmission');

        $car->save();

        return redirect()->back();

    }
}
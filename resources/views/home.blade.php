<?php
use App\Setting;
$setting = Setting::where('user_id', '=', Auth::user()->id)->first();
	if ($setting == null) {
            Setting::create([
                'user_id'=> Auth::user()->id,
                'column'=> 3,
            ]);
        }else{
			Setting::create([
                'user_id'=> Auth::user()->id,
                'column'=> 3,
            ]);
            $setting = Setting::where('user_id', '=', Auth::user()->id)->first();
		}
    $spaltenF = $setting->column;
?>
@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
@foreach ($cars as $car)
@if($spaltenF == 3)
<div class="col-md-4">
@else
<div class="col-md-3">
@endif
	<div id="dashboardCard">
	@if ($car->picture == null)
		<div class="card" style="width: 15.15rem;">
		<img id="dashcard" class="card-img-top" src="{{ asset('pictures/noimg.jpg') }}" alt="Card image cap">
	@else
	    <div class="card" style="width: 15.15rem;">
        <img id="dashcard" class="card-img-top" src="{{ URL::asset('storage/' . $car->picture) }}" alt="Card image cap">
	@endif
		<div class="card-body">
            <h5 class="card-title">{{ $car->name }}</h5>
			<a href="{{ route('showCarSpecs', ['car' => $car->id]) }}" class="btn btn-primary">Show</a>
			<a href="{{ route('editCar', ['car' => $car->id]) }}" class="btn btn-primary">Edit</a>
			<a href="{{ route('delete.car', ['car' => $car->id]) }}" class="btn btn-primary">Delete</a>
		</div>
	</div>
    </div>
    <br>
</div>
@endforeach
</div>
</div>
@endsection
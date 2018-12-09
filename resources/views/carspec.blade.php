@extends('layouts.app')

@section('content')
<div class="container" id="speccontainer">

    
</div>
@if ($cars->picture == null)
<div class="card offset-2" style="width: 60%;">
    <img id="CarImg" class="card-img-top" src="{{ asset('pictures/noimg.jpg') }}" alt="Card image cap">
    @else
    <div class="card offset-2" style="width: 60%;">
        <img style="width: 512px; height: 300px; margin-left: auto; margin-right: auto; margin-top: 1%;" class="card-img-top"
            src="{{ URL::asset('storage/' . $cars->picture) }}" alt="Card image cap">
        @endif
        <div class="card-body">
            <h5 class="card-title">{{ $cars->brand_id }} {{ $cars->name }}</h5>
            <p class="card-text">
                <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Brand:
                        <p class="text-right mb-0">{{ $cars->brand_id }}</p>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Car name:
                        <p class="text-right mb-0">{{ $cars->name }}</p>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Manufacturing Year:
                        <p class="text-right mb-0">{{ $cars->manufacturingYear }}</p>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Velocity:
                        <p class="text-right mb-0">{{ $cars->velocity }}(km/h)</p>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Acceleration (0-100km/h):
                        <p class="text-right mb-0">{{ $cars->acceleration }}(Sec)</p>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        PS:
                        <p class="text-right mb-0">{{ $cars->ps }}(PS)</p>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Price:
                        <p class="text-right mb-0">{{ $cars->basePrice }}(CHF)</p>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Weight:
                        <p class="text-right mb-0">{{ $cars->weight }}(Kg)</p>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Seats:
                        <p class="text-right mb-0">{{ $cars->seats }}</p>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Cylinders:
                        <p class="text-right mb-0">{{ $cars->cylinders }}</p>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Drivetrain:
                        <p class="text-right mb-0">{{ $cars->drivetrain }}</p>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Doors:
                        <p class="text-right mb-0">{{ $cars->doors }}</p>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Torque:
                        <p class="text-right mb-0">{{ $cars->torque }}(Nm) per 1/min</p>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Transmission:
                        <p class="text-right mb-0">{{ $cars->transmission }}</p>
                    </li>
                </ul>
            </p>
        </div>
    </div>
    @endsection

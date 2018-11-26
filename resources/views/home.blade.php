@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
@foreach ($cars as $cars)
<div class="col-md-3">
    <div id="dashboardCard">
    <div class="card" style="width: 15.15rem;">
        <div class="card-body">
            <h5 class="card-title">{{ $cars->firstname }}</h5>
            <a href="{{ route('showPlayerSpecs', ['cars' => $cars->id]) }}" class="btn btn-primary">Show</a>
        </div>
    </div>
    </div>
</div>
@endforeach
</div>
</div>
@endsection
@extends('layouts.app')

@section('content')
<div class="col-sm-8 offset-2">
	<div class="card LRCard">
	<h5 class="card-header cardheader">Create a new Car</h5>
		<div class="card-body LRBody">
			<form method="POST" action="{{ route('post.car') }}" enctype="multipart/form-data">
				{{ csrf_field() }}
				@if (old('CarName') != null)
				<span style="color: red;">{{ $error = 'Please select a Picture for the Car' }}</span>
				@endif
				<div class="form-group LRInput">
					<label for="CarName">Car name</label>
					<input name="CarName" type="text" class="form-control" id="CarName" value="{{ old('CarName') }}" placeholder="e.g. GTR">
				</div>
				<div class="form-group LRInput">
					<label for="Brand">Brand</label>
					<input name="Brand" type="text" class="form-control" id="Brand" placeholder="e.g. Nissan" value="{{ old('Brand') }}">
				</div>
				<div class="form-group LRInput">
					<label for="Brand">Velocity (Km/h)</label>
					<input name="Velocity" type="number" class="form-control" id="Velocity" placeholder="e.g. 200" min="1" max="800" step="1" value="{{ old('Velocity') }}">
				</div>
				<div class="form-group LRInput">
					<label for="Acceleration">Acceleration (Sec -> 0-100 Km/h)</label>
					<input name="Acceleration" type="number" class="form-control" id="Acceleration" placeholder="e.g. 2.8" min="1" max="15" step="0.1" value="{{ old('Acceleration') }}">
				</div>
				<div class="form-group LRInput">
					<label for="Acceleration">PS</label>
					<input name="PS" type="number" class="form-control" id="PS" placeholder="e.g. 600" min="1" max="3000" step="1" value="{{ old('PS') }}">
				</div>
				<div class="form-group LRInput">
					<label for="Price">Price (CHF)</label>
					<input name="Price" type="number" class="form-control" id="Price" placeholder="e.g. 120000" min="1" max="70000000" step="1" value="{{ old('Price') }}">
				</div>
				<div class="form-group LRInput">
					<label for="Weight">Weight (kg)</label>
					<input name="Weight" type="number" class="form-control" id="Weight" placeholder="e.g. 1200" min="1" max="30000" step="1" value="{{ old('Weight') }}">
				</div>
				<div class="form-group LRInput">
					<label for="Weight">Seats</label>
					<input name="Seats" type="number" class="form-control" id="Seats" placeholder="e.g. 2" min="1" max="20" step="1" value="{{ old('Seats') }}">
				</div>
				<div class="form-group LRInput">
					<label for="Weight">Manufacturing Year</label>
					<input name="ManufacturingYear" type="number" class="form-control" id="ManufacturingYear" placeholder="e.g. 1980" min="1800" max="2020" step="1" value="{{ old('ManufacturingYear') }}">
				</div>
				<div class="form-group LRInput">
					<label for="Cylinders">Cylinders</label>
					<select name="Cylinders" class="form-control" id="Cylinders" value="{{ old('Cylinders') }}">
					@if(2 == old('Cylinders'))
					<option selected>2</option>
					@else
					<option>2</option>
					@endif
					@if(4 == old('Cylinders'))
					<option selected>4</option>
					@else
					<option>4</option>
					@endif
					@if(6 == old('Cylinders'))
					<option selected>6</option>
					@else
					<option>6</option>
					@endif
					@if(8 == old('Cylinders'))
					<option selected>8</option>
					@else
					<option>8</option>
					@endif
					@if(10 == old('Cylinders'))
					<option selected>10</option>
					@else
					<option>10</option>
					@endif
					@if(12 == old('Cylinders'))
					<option selected>12</option>
					@else
					<option>12</option>
					@endif
					@if(14 == old('Cylinders'))
					<option selected>14</option>
					@else
					<option>14</option>
					@endif
					@if(16 == old('Cylinders'))
					<option selected>16</option>
					@else
					<option>16</option>
					@endif
					</select>
				</div>
				<div class="form-group LRInput">
					<label for="Drivetrain">Drivetrain</label>
					<select name="Drivetrain" class="form-control" id="Drivetrain" value="{{ old('Drivetrain') }}">
					@if('Front' == old('Drivetrain'))
					<option selected>Front</option>
					@else
					<option>Front</option>
					@endif
					@if('Back' == old('Drivetrain'))
					<option selected>Back</option>
					@else
					<option>Back</option>
					@endif
					@if('All Wheel Drive' == old('Drivetrain'))
					<option selected>All Wheel Drive</option>
					@else
					<option>All Wheel Drive</option>
					@endif

					</select>
				</div>
				<div class="form-group LRInput">
					<label for="Doors">Doors</label>
					<input name="Doors" type="number" class="form-control" id="Doors" placeholder="e.g. 4" min="1" max="8" step="1" value="{{ old('Doors') }}">
				</div>
				<div class="form-group LRInput">
					<label for="Torque">Torque</label>
					<input name="Torque" type="number" class="form-control" id="Torque" placeholder="e.g. 1300" min="1" max="9000" step="1" value="{{ old('Torque') }}">
				</div>
				<div class="form-group LRInput">
					<label for="Transmission">Transmission</label>
					<select name="Transmission" class="form-control" id="Transmission">
					@if('Manuell' == old('Transmission'))
					<option selected>Manuell</option>
					@else
					<option>Manuell</option>
					@endif
					@if('Automatic' == old('Transmission'))
					<option selected>Automatic</option>
					@else
					<option>Automatic</option>
					@endif
					</select>
				</div>
				<div class="form-group LRInput">
					<label for="CarPicture">Picture of the Car</label>
	    			<input type="file" class="form-control-file" id="CarPicture" name="image">
				</div>
				<button type="submit" class="btn btn-primary LRPrimary">Update</button>
				<a class="btn btn-secondary LRSecondary" href="/home">Cancel</a>
			</form>
		</div>
	</div>
</div>

@endsection
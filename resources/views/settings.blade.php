@extends('layouts.app')

@section('content')

<!-- (for later uses) -->
<?php
/*
    $settings = DB::table('settings')->where('id', 1)->first();
    $layoutF = $settings->row;
    $spaltenF = $settings->colum;
    $background = $settings->size;*/
?>
<!-- -->

<div class="container">
	<div class="col-sm-8 offset-2">
		<div class="card">
			<h5 class="card-header cardheader">Settings</h5>
			<div class="card-body LRBody">
				<form method="POST" action="{{ route('settings.update') }}">
					{{ csrf_field() }}
					<div class="form-group">
						<label for="spalten">Rows</label>
						<select name="row" class="form-control" id="row">
							@if(1 == $setting->row)
							<option selected>1</option>
							@else
							<option>1</option>
							@endif
							@if(2 == $setting->row)
							<option selected>2</option>
							@else
							<option>2</option>
							@endif
							@if(3 == $setting->row)
							<option selected>3</option>
							@else
							<option>3</option>
							@endif
							@if(4 == $setting->row)
							<option selected>4</option>
							@else
							<option>4</option>
							@endif
						</select>
					</div>
					<div class="form-group">
						<label for="column">Columns</label>
						<select name="column" class="form-control" id="column">
							@if(1 == $setting->column)
							<option selected>1</option>
							@else
							<option>1</option>
							@endif
							@if(2 == $setting->column)
							<option selected>2</option>
							@else
							<option>2</option>
							@endif
							@if(3 == $setting->column)
							<option selected>3</option>
							@else
							<option>3</option>
							@endif
							@if(4 == $setting->column)
							<option selected>4</option>
							@else
							<option>4</option>
							@endif
						</select>
					</div>
					<div class="form-group">
						<label for="scale">Scale</label>
						<select name="scale" class="form-control" id="scale">
							@if(100 == $setting->scale)
							<option selected>100</option>
							@else
							<option>100</option>
							@endif
							@if(75 == $setting->scale)
							<option selected>75</option>
							@else
							<option>75</option>
							@endif
							@if(50 ==$setting->scale)
							<option selected>50</option>
							@else
							<option>50</option>
							@endif
							@if(25 == $setting->scale)
							<option selected>25</option>
							@else
							<option>25</option>
							@endif
						</select>
					</div>
					<button type="submit" class="btn btn-primary LRPrimary">Update</button>
					<a class="btn btn-secondary LRSecondary" href="/home">Cancel</a>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection
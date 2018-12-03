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
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="3">4</option>
						</select>
					</div>
					<div class="form-group">
						<label for="column">Columns</label>
						<select name="column" class="form-control" id="column">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="3">4</option>
							<option value="3">5</option>
						</select>
					</div>
					<div class="form-group">
						<label for="column">Scale</label>
						<select name="scale" class="form-control" id="scale">
							<option value="100">100</option>
							<option value="75">75</option>
							<option value="50">50</option>
							<option value="25">25</option>
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
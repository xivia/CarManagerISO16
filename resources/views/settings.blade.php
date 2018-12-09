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
						<label for="column">Columns</label>
						<select name="column" class="form-control" id="column">
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
					<button type="submit" class="btn btn-primary LRPrimary">Update</button>
					<a class="btn btn-secondary LRSecondary" href="/home">Cancel</a>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection
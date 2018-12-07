@extends('layouts.app')

@section('content')
<div class="container">
	<div class="col-sm-8 offset-2">
	<div class="card LRCard">
	<h5 class="card-header cardheader">Edit Profile</h5>
		<div class="card-body LRBody">
			<form method="POST" action="{{ route('user.update') }}" enctype="multipart/form-data">
				{{ csrf_field() }}
				<div class="form-group LRInput">
					<label for="username">Username</label>
					<input name="name" type="text" class="form-control" id="username" value="{{ $user->name }}">
				</div>
				<div class="form-group LRInput">
					<label for="exampleInputEmail1">Email address</label>
					<input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $user->email }}">
				</div>
				<div class="form-group LRInput">
					<label for="exampleInputPassword1">New Password</label>
					<input name="pw" type="password" class="form-control" id="exampleInputPassword1" placeholder="e.g Password1234">
				</div>
				<button type="submit" class="btn btn-primary LRPrimary">Update</button>
				<a class="btn btn-secondary LRSecondary" href="/home">Cancel</a>
			</form>
		</div>
	</div>
</div>
</div>
@endsection

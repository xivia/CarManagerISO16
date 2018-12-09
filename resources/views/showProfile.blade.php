@extends('layouts.app')

@section('content')

<div class="container">
    <div class="col-sm-10 offset-1">
        <div class="card LRCard">
            <div class="card-body">
                <div id="UserDiv">
                    <h5 class="card-title UserName">Your Profile: <a class="btn btn-primary" href="/editProfile">Edit</a></h5>
                    <p class="card-text">
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Name:
                                <p class="text-right mb-0">{{ $user->name }}</p>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Email:
                                <p class="text-right mb-0">{{ $user->email }}</p>
                            </li>
                        </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

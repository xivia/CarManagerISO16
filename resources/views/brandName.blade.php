@extends('layouts.app')

@section('content')

@foreach ($brands as $brands)

<h1 class="text-center text-white mt-3">Manage Car Brands</h1><br>
 <form method="POST" action="{{ route('post.braname') }}" enctype="multipart/form-data">
  <button type="button" class="btn btn-dark">Add Brand</button>
  <br>
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Brand Name </th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td> {{ $brands -> name }}</td>
      <td><div class="input-group mb-3">
  <div class="input-group-prepend">
    <div class="input-group-text">
      <input type="checkbox" aria-label="Checkbox for following text input">
    </div></td>
      <td><div class="input-group mb-3">
  <div class="input-group-prepend">
    <div class="input-group-text">
      <input type="checkbox" aria-label="Checkbox for following text input">
    </div></td>
    </tr>
    <tr>
  </tbody>
</table>
<br>
<button type="button" class="btn btn-dark">Save Changes</button>
 
</form>
@endforeach
@endsection
@extends('layouts.app')

@section('content')
 <button type="button" class="btn btn-dark">Add Brand</button>
@foreach ($brands as $brands)
 <form method="POST" action="{{ route('post.braname') }}" enctype="multipart/form-data">
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
</form>
@endforeach
<button type="button" class="btn btn-dark">Save Changes</button>
@endsection
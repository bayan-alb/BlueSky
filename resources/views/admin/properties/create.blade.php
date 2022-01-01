@extends('layouts.app')

@section('content')



<div class="text-center">Add Property</div>
<div class="container">
<form action="/Properties/add" method="POST">
    @csrf
  <div class="form-group">
    <input type="text" class="form-control" placeholder="propertyTitle" name="name" required>
    <input type="text" class="form-control" placeholder="description" name="description" required>
    <input type="number" class="form-control" placeholder="price" name="price" required>
    <input type="text" class="form-control" placeholder="status" name="status" required>
    <input type="text" class="form-control" placeholder="rooms number" name="rooms" required>
    <input type="text" class="form-control" placeholder="baths number" name="baths" required>
    <input type="text" class="form-control" placeholder="space" name="space" required>   
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

@endsection
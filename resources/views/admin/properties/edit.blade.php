@extends('layouts.app')

@section('content')



<div class="text-center"><h2> Update Property</h2></div>
<div class="container">
<form action="/Properties/edit/{{$property->id}}" method="POST">
    @csrf
  <div class="form-group">
    <input type="text" class="form-control" placeholder="propertyTitle" name="name" value="{{ $property->name }}" required>
    <input type="text" class="form-control" placeholder="description" name="description" value="{{ $property->description }}" required>
    <input type="number" class="form-control" placeholder="price" name="price" value="{{ $property->price }}" required>
    <input type="text" class="form-control" placeholder="status" name="status" value="{{ $property->status }}" required>
    <input type="text" class="form-control" placeholder="rooms number" name="rooms" value="{{ $property->rooms }}" required>
    <input type="text" class="form-control" placeholder="baths number" name="baths" value="{{ $property->baths }}" required>
    <input type="text" class="form-control" placeholder="space" name="space" value="{{ $property->space }}" required>   
  </div>
  <button type="submit" class="btn btn-primary">Update</button>
</form>
</div>

@endsection

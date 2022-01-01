@extends('layouts.app')
@section('content')


    <div class="container">
    <h1>Properties List</h1>
    </div>

    
    <div class="container">

  <table>
  <tr>
    <th>#ID</th>
    <th>Name</th>
    <th>description</th>
    <th>price</th>
    <th>status</th>
    <th>rooms</th>
    <th>baths</th>
    <th>space</th>
    <th>Action</th>
  </tr>

  @foreach($properties as $property)
  <tr>
    <td>{{$property->id}}</td>
    <td>{{$property->name}}</td>
    <td>{{$property->description}}</td>
    <td>{{$property->price}}</td>
    <td>{{$property->status}}</td>
    <td>{{$property->rooms}}</td>
    <td>{{$property->baths}}</td>
    <td>{{$property->space}}</td>
    <td><div class="btn-group">
    <button type="button" class="btn btn-primary">Update</button>
    <button type="button" class="btn btn-danger">Delete</button>
  </div></td>
  </tr>
  @endforeach
  
</table>
</div>
@endsection
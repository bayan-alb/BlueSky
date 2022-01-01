<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Property;

class PropertiesController extends Controller
{
    //
    public function propertyTool()
    {
        return view('home');
    }

    public function Addproperty()
    {
        return view('admin.properties.create');
    }

    public function store(Request $request)
    {
        $property = new Property;

        $property->name = $request->name;
        $property->description = $request->description;
        $property->price = $request->price;
        $property->status = $request->status;
        $property->rooms = $request->rooms;
        $property->baths = $request->baths;
        $property->space = $request->space;

        $property->save();

        return redirect()->route('indexProperties');

    }

    public function index()
    {
        $properties = Property::all();

        return view('admin.properties.index' ,compact('properties')); 

    }
}

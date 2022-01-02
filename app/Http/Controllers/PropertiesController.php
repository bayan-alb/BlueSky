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

    public function edit($id)
    {
        $property = Property::find($id);
        return view('admin.properties.edit' , compact('property'));
    }

    public function update($id , Request $request)
    {
        $property = Property::find($id);
        
        if(isset($request->name)){
        $property->name = $request->name;
        }
        if(isset($request->description)){
            $property->description = $request->description;
            }

            if(isset($request->price)){
                $property->price = $request->price;
                }
                if(isset($request->status)){
                    $property->status = $request->status;
                    }
                    if(isset($request->rooms)){
                        $property->rooms = $request->rooms;
                        }   
                        if(isset($request->baths)){
                            $property->baths = $request->baths;
                            }   
                            if(isset($request->space)){
                                $property->space = $request->space;
                                }    

        $property->save();
        return redirect()->route('indexProperties');
    }

    public function delete($id){

        $property = Property::find($id);
        $property->delete();
        return redirect()->route('indexProperties');
    
        
    }
}





<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewsController extends Controller
{
    //
    public function indexfun()
    {
        return view('index1');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function pricing()
    {
        return view('pricing');
    }

    public function projects()
    {
        return view('projects');
    }

    public function services()
    {
        return view('services');
    }
}

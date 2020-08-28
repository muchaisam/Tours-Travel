<?php

namespace App\Http\Controllers;

use App\Destinations;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function welcome()
    {
        return view('welcome', ['destinations' => Destinations::paginate(3)]);
    }

    public function about()
    {
        return view('about');
    }

    public function packages()
    {
        return view('packages');
    }
    public function blog()
    {
        return view('blog');
    }
    public function contact()
    {
        return view('contact');
    }
}

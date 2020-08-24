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

    public function offers()
    {
        return view('offers');
    }
    public function news()
    {
        return view('news');
    }
    public function contact()
    {
        return view('contact');
    }
}

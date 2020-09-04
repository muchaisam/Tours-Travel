<?php

namespace App\Http\Controllers;

use App\Category;
use App\Destinations;
use App\Tag;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        return view('welcome')
            ->with('destinations', Destinations::paginate(3))
            ->with('categories', Category::all())
            ->with('tags', Tag::all());
    }


    public function about()
    {
        return view('about');
    }

    public function packages()
    {
        return view('packages')
            ->with('destinations', Destinations::paginate(3))
            ->with('categories', Category::all())
            ->with('tags', Tag::all());
    }
    public function blog()
    {
        return view('blog');
    }
    public function contact()
    {
        return view('contact')
            ->with('categories', Category::all())
            ->with('tags', Tag::all());
    }
    public function Bali()
    {
        return view('Bali')
            ->with('destinations', Destinations::all())
            ->with('tags', Tag::all())
            ->with('categories', Category::all());
    }
}

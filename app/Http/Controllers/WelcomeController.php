<?php

namespace App\Http\Controllers;

use App\Category;
use App\Destinations;
use App\Tag;
use App\Blog;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {

        $search = request()->query('search');
        if (request()->query('search')) {
            $destinations = Destinations::where('title', 'LIKE', "%{$search}%")->simplePaginate(3);
        } else {
            $destinations = Destinations::simplePaginate(3);
        }

        return view('welcome')
            ->with('destinations', $destinations)
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
        return view('blog')
            ->with('blogs', Blog::paginate(2))
            ->with('tags', Tag::all())
            ->with('categories', Category::all());
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

    public function cart()
    {
        return view('cart')
            ->with('destinations', Destinations::first())
            ->with('tags', Tag::all())
            ->with('categories', Category::all());;
    }

    public function checkout()
    {
        return view('checkout')
        ->with('destinations', Destinations::first());
    }

     public function stripe()
    {
        return view('stripe')
        ->with('destinations', Destinations::first());
    }


}

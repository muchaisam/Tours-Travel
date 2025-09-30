<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Destinations;
use App\Category;
use App\Tag;
use App\Blog;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $stats = [
            'destinations' => Destinations::count(),
            'categories' => Category::count(),
            'tags' => Tag::count(),
            'blogs' => Blog::count(),
            'users' => User::count(),
        ];

        $recentDestinations = Destinations::latest()->take(5)->get();
        $recentBlogs = Blog::latest()->take(5)->get();

        return view('home', compact('stats', 'recentDestinations', 'recentBlogs'));
    }
}

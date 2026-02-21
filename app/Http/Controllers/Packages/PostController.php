<?php

namespace App\Http\Controllers\Packages;

use App\Category;
use App\Destinations;
use App\Http\Controllers\Controller;
use App\Tag;

class Postcontroller extends Controller
{
    public function show(Destinations $destination)
    {
        return view('desti.show')->with('destinations', $destination)
            ->with('categories', Category::all())
            ->with('tags', Tag::all());
    }
}

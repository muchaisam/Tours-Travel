<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Destinations;
use Illuminate\Http\Response;

class SitemapController extends Controller
{
    public function index(): Response
    {
        $destinations = Destinations::published()
            ->select('id', 'updated_at')
            ->get();

        $blogs = Blog::published()
            ->select('id', 'updated_at')
            ->get();

        $content = view('sitemap', [
            'destinations' => $destinations,
            'blogs' => $blogs,
        ])->render();

        return response($content, 200)
            ->header('Content-Type', 'text/xml');
    }
}

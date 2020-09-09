<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\Category;
use App\Http\Requests\Blo\CreateBlogRequest;
use App\Http\Requests\Blog\UpdateBlogRequest;

class BlogController extends Controller
{
    public function __construct()
    {
        $this->middleware('verifyCategoriesCount')->only(['create', 'store']);
    }
    
   public function index()
    {
        return view('blog.index')->with('blog', Blog::all());
    }

    public function create()
    {
        return view('blog.create')->with('categories', Category::all());
    }

    public function store(CreateBlogRequest $request)
    {
        //upload image
        $image = $request->image->store('blogs');
        //create post
        $destination = Blog::create([
            'title' => $request->title,
            'description' => $request->description,
            'content' => $request->content,
            'image' => $image,
            'published_at' => $request->published_at,
            'category_id'=>$request->category
        ]);

    
        //flash message 
        session()->flash('success', 'Blog Created Successfully');

        //redirect
        return redirect(route('blog.index'));
    }

    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        return view('blog.create')->with('blogs', $blog)->with('categories', Category::all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBlogRequest $request, Blog $blog)
    {
        $data = $request->only(['title', 'description', 'published_at', 'content']);
        //check if new image
        if ($request->hasFile('Image')) {

            //upload and delete
            $image = $request->image->store('Blogs');


            $blog->deleteImage();

            $data['image'] = $image;
        }
        


        //update attributes
        $blog->update($data);

        //redirect user
        session()->flash('success', 'Blog updated successfully');

        return redirect(route('blog.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
    }

    /**
     * Display a list of unavailable destinations.
     * @return \Illuminate\Http\Response
     */

    public function trashed()
    {
       
    }

    public function restore($id)
    {
     
    }
}

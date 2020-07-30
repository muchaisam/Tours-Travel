<?php

namespace App\Http\Controllers;

use App\Category;
use App\Tag;
use App\Destinations;
use Illuminate\Http\Request;
use App\Http\Requests\Destinations\CreateDestinationsRequest;
use App\Http\Requests\Destinations\UpdateDestinationsRequest;
use PhpParser\Node\Stmt\Catch_;

class DestinationsController extends Controller
{

    public function __construct()
    {
        $this->middleware('verifyCategoriesCount')->only(['create', 'store']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('destinations.index')->with('destinations', Destinations::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('destinations.create')->with('categories', Category::all())->with('tags', Tag::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateDestinationsRequest $request)
    {
        //upload image
        $image = $request->image->store('destinations');
        //create post
        $destination = Destinations::create([
            'title' => $request->title,
            'description' => $request->description,
            'content' => $request->content,
            'image' => $image,
            'published_at' => $request->published_at,
            'category_id'=>$request->category
        ]);

        if($request->tags){
            $destination->tags()->attach($request->tags);
        }




        //flash message 
        session()->flash('success', 'Destination Created Successfully');

        //redirect
        return redirect(route('destinations.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
    public function edit(Destinations $destinations)
    {
        return view('destinations.create')->with('destinations', $destinations)->with('categories', Category::all())->with('tags', Tag::all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDestinationsRequest $request, Destinations $destinations)
    {
        $data = $request->only(['title', 'description', 'published_at', 'content']);
        //check if new image
        if ($request->hasFile('Image')) {

            //upload and delete
            $image = $request->image->store('Destinations');


            $destinations->deleteImage();

            $data['image'] = $image;
        }
        if ($request->tags){
            $destinations->tags()->sync($request->tags);
        }


        //update attributes
        $destinations->update($data);

        //redirect user
        session()->flash('success', 'Destination updated successfully');

        return redirect(route('destinations.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destinations = Destinations::withTrashed()->where('id', $id)->firstOrFail();


        if ($destinations->trashed()) {
            $destinations->deleteImage();

            $destinations->forceDelete();   
        } else {
            $destinations->delete();
        }

        session()->flash('success', 'Destination deleted successfully');

        return redirect(route('destinations.index'));
    }

    /**
     * Display a list of unavailable destinations.
     * @return \Illuminate\Http\Response
     */

    public function trashed()
    {
        $trashed = Destinations::onlyTrashed()->get();

        return view('destinations.index')->withdestinations($trashed);
    }

    public function restore($id)
    {
        $destinations = Destinations::withTrashed()->where('id', $id)->firstOrFail();
        $destinations->restore();

        session()->flash('success', 'Destination restored successfully.');

        return redirect()->back();

    }
}

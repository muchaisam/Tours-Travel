@extends('layouts.app')

@section('content')

<div class="card card-default">
    <div class="card-header">
        {{isset($destinations)? 'Edit Destination': 'Create Destination'}}
    </div>

    <div class="card-body">
        @include('partials.errors')
        <form
            action="{{isset($destination) ? route('destinations.update', $destinations->id): route('destinations.store')}}"
            method="POST" enctype="multipart/form-data">
            @csrf

            @if (isset($destination))
            @method('PUT')

            @endif

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" id="title"
                    value="{{isset($destinations) ? $destinations->title: ''}}">
            </div>

            <div class="form-group">
                <label for="Description">Description</label>
                <textarea name="description" class="form-control" name="description" id="description" cols="5"
                    rows="5">{{ isset($destination) ? $destination->description : ''}}</textarea>
            </div>

            <div class="form-group">
                <label for="content">Content</label>
                <input id="content" type="hidden" name="content"
                    value="{{isset($destination) ?$destination->content: ''}}">
                <trix-editor input="content"></trix-editor>
            </div>

            <div class="form-group">
                <label for="published_at">Published At</label>
                <input type="text" class="form-control" name="published_at" id="published_at"
                    value="{{isset($destination) ?$destination->published_at: ''}}"">
            </div>
            @if (isset($destination))
            <div class=" form-group">
                <img src="{{asset($destination->image)}}" alt="" style="width: 100%">
            </div>
            @endif

            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" class="form-control" name="image" id="image">
            </div>

            <div class="form-group">
                <label for="category">Category</label>
                <select name="category" id="category" class="form-control">
                    @foreach ($categories as $category)
                    <option value="{{$category->id}}" @if (isset($destinations)) @if ($category->
                        id===$category->category_id)
                        selected
                        @endif
                        @endif
                        >
                        {{$category->name}}
                    </option>
                    @endforeach
                </select>
            </div>

            @if ($tags->count()>0)
            <div class="form-group">
                <label for="tags">Tags</label>

                <select name="tags" id="tags" class="form-control tags-selector" multiple>
                    @foreach ($tags as $tag )
                    <option value="{{$tag->id}}" @if(isset($destination)) @if ($destination->hasTag($tag->id))
                        selected
                        @endif
                        @endif
                        >

                        {{$tag->name}}
                    </option>

                    @endforeach

                </select>
            </div>
            @endif

            <div class="form-group">
                <button type="submit" class="btn btn-success">
                    {{isset($destination) ? 'Update Destination':'Create Destination'}}
                </button>
            </div>

        </form>
    </div>
</div>

@endsection

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.3/trix.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<script>
    flatpickr('#published_at',{
        enableTime:true
    })

    $(document).ready(function() {
    $('.tags-selector').select2();
});
</script>
@endsection

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.3/trix.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />


@endsection
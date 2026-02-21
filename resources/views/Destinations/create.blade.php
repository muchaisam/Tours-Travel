@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h5 class="mb-0" style="font-weight:600;">
        <i class="fas fa-map-marker-alt me-2" style="color:var(--admin-primary)"></i>
        {{ isset($destinations) ? 'Edit Destination' : 'Create Destination' }}
    </h5>
    <a href="{{ route('destinations.index') }}" class="btn-admin-outline"><i class="fas fa-arrow-left me-1"></i> Back</a>
</div>

<div class="admin-card">
    <div class="admin-card-body">
        @include('partials.errors')

        <form action="{{ isset($destination) ? route('destinations.update', $destinations->id) : route('destinations.store') }}"
              method="POST" enctype="multipart/form-data" class="admin-form">
            @csrf
            @if (isset($destination))
                @method('PUT')
            @endif

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" name="title" id="title"
                       value="{{ isset($destinations) ? $destinations->title : '' }}" placeholder="Destination name">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" class="form-control" id="description" cols="5" rows="4"
                          placeholder="Short description">{{ isset($destination) ? $destination->description : '' }}</textarea>
            </div>

            <div class="mb-3">
                <label for="content" class="form-label">Content</label>
                <input id="content" type="hidden" name="content"
                       value="{{ isset($destination) ? $destination->content : '' }}">
                <trix-editor input="content"></trix-editor>
            </div>

            <div class="row g-3 mb-3">
                <div class="col-md-6">
                    <label for="pricing" class="form-label">Pricing</label>
                    <input type="text" class="form-control" name="pricing" id="pricing"
                           value="{{ isset($destinations) ? $destinations->pricing : '' }}" placeholder="e.g. Kshs 45000">
                </div>
                <div class="col-md-6">
                    <label for="category" class="form-label">Category</label>
                    <select name="category" id="category" class="form-select">
                        @foreach ($categories as $category)
                        <option value="{{ $category->id }}"
                            @if (isset($destinations) && $category->id === $destinations->category_id) selected @endif
                        >{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="row g-3 mb-3">
                <div class="col-md-4">
                    <label for="duration" class="form-label">Duration</label>
                    <input type="text" class="form-control" name="duration" id="duration"
                           value="{{ isset($destinations) ? $destinations->duration : '' }}" placeholder="e.g. 7 Days / 6 Nights">
                </div>
                <div class="col-md-4">
                    <label for="group_size" class="form-label">Group Size</label>
                    <input type="text" class="form-control" name="group_size" id="group_size"
                           value="{{ isset($destinations) ? $destinations->group_size : '' }}" placeholder="e.g. 10-15 People">
                </div>
                <div class="col-md-4">
                    <label for="tour_type" class="form-label">Tour Type</label>
                    <input type="text" class="form-control" name="tour_type" id="tour_type"
                           value="{{ isset($destinations) ? $destinations->tour_type : '' }}" placeholder="e.g. Beach & Culture">
                </div>
            </div>

            <div class="mb-3">
                <label for="published_at" class="form-label">Published At</label>
                <input type="text" class="form-control" name="published_at" id="published_at"
                       value="{{ isset($destinations) ? $destinations->published_at : '' }}" placeholder="Select date & time">
            </div>

            @if (isset($destination))
            <div class="mb-3">
                <label class="form-label">Current Image</label>
                <img src="{{ asset($destination->image) }}" alt="" class="img-preview d-block w-100">
            </div>
            @endif

            <div class="mb-3">
                <label for="image" class="form-label">{{ isset($destination) ? 'Replace Image' : 'Image' }}</label>
                <input type="file" class="form-control" name="image" id="image">
            </div>

            @if ($tags->count() > 0)
            <div class="mb-3">
                <label for="tags" class="form-label">Tags</label>
                <select name="tags" id="tags" class="form-select tags-selector" multiple>
                    @foreach ($tags as $tag)
                    <option value="{{ $tag->id }}"
                        @if(isset($destination) && $destination->hasTag($tag->id)) selected @endif
                    >{{ $tag->name }}</option>
                    @endforeach
                </select>
            </div>
            @endif

            <button type="submit" class="btn-admin-primary">
                <i class="fas fa-save me-1"></i>
                {{ isset($destination) ? 'Update Destination' : 'Create Destination' }}
            </button>
        </form>
    </div>
</div>
@endsection

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.3/trix.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<script>
    flatpickr('#published_at', { enableTime: true });
    document.addEventListener('DOMContentLoaded', function() {
        if (typeof $ !== 'undefined') {
            $('.tags-selector').select2();
        }
    });
</script>
@endsection

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.3/trix.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet">
@endsection
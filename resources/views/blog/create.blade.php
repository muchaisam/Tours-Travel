@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h5 class="mb-0" style="font-weight:600;">
        <i class="fas fa-newspaper me-2" style="color:var(--admin-primary)"></i>
        {{ isset($blog) ? 'Edit Blog Post' : 'Create Blog Post' }}
    </h5>
    <a href="{{ route('blog.index') }}" class="btn-admin-outline"><i class="fas fa-arrow-left me-1"></i> Back</a>
</div>

<div class="admin-card">
    <div class="admin-card-body">
        @include('partials.errors')

        <form action="{{ isset($blog) ? route('blog.update', $blog->id) : route('blog.store') }}"
              method="POST" enctype="multipart/form-data" class="admin-form">
            @csrf
            @if (isset($blog))
                @method('PUT')
            @endif

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" name="title" id="title"
                       value="{{ isset($blog) ? $blog->title : '' }}" placeholder="Blog post title">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" class="form-control" id="description" cols="5" rows="4"
                          placeholder="Short description">{{ isset($blog) ? $blog->description : '' }}</textarea>
            </div>

            <div class="mb-3">
                <label for="content" class="form-label">Content</label>
                <input id="content" type="hidden" name="content"
                       value="{{ isset($blog) ? $blog->content : '' }}">
                <trix-editor input="content"></trix-editor>
            </div>

            <div class="row g-3 mb-3">
                <div class="col-md-6">
                    <label for="published_at" class="form-label">Published At</label>
                    <input type="text" class="form-control" name="published_at" id="published_at"
                           value="{{ isset($blog) ? $blog->published_at : '' }}" placeholder="Select date & time">
                </div>
                <div class="col-md-6">
                    <label for="category" class="form-label">Category</label>
                    <select name="category" id="category" class="form-select">
                        @foreach ($categories as $category)
                        <option value="{{ $category->id }}"
                            @if (isset($blog) && $category->id === $blog->category_id) selected @endif
                        >{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            @if (isset($blog))
            <div class="mb-3">
                <label class="form-label">Current Image</label>
                <img src="{{ asset($blog->image) }}" alt="" class="img-preview d-block w-100">
            </div>
            @endif

            <div class="mb-3">
                <label for="image" class="form-label">{{ isset($blog) ? 'Replace Image' : 'Image' }}</label>
                <input type="file" class="form-control" name="image" id="image">
            </div>

            <button type="submit" class="btn-admin-primary">
                <i class="fas fa-save me-1"></i>
                {{ isset($blog) ? 'Update Blog' : 'Create Blog' }}
            </button>
        </form>
    </div>
</div>
@endsection

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.3/trix.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script>
    flatpickr('#published_at', { enableTime: true });
</script>
@endsection

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.3/trix.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
@endsection
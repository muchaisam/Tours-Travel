@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h5 class="mb-0" style="font-weight:600;">
        <i class="fas fa-hashtag me-2" style="color:var(--admin-primary)"></i>
        {{ isset($tag) ? 'Edit Tag' : 'Create Tag' }}
    </h5>
    <a href="{{ route('tags.index') }}" class="btn-admin-outline"><i class="fas fa-arrow-left me-1"></i> Back</a>
</div>

<div class="admin-card">
    <div class="admin-card-body">
        @include('partials.errors')

        <form action="{{ isset($tag) ? route('tags.update', $tag->id) : route('tags.store') }}"
              method="POST" class="admin-form">
            @csrf
            @if (isset($tag))
                @method('PUT')
            @endif

            <div class="mb-3">
                <label for="name" class="form-label">Tag Name</label>
                <input type="text" id="name" class="form-control" name="name"
                       value="{{ isset($tag) ? $tag->name : '' }}" placeholder="Enter tag name">
            </div>

            <button type="submit" class="btn-admin-primary">
                <i class="fas fa-save me-1"></i>
                {{ isset($tag) ? 'Update Tag' : 'Add Tag' }}
            </button>
        </form>
    </div>
</div>
@endsection
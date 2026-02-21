@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h5 class="mb-0" style="font-weight:600;">
        <i class="fas fa-folder me-2" style="color:var(--admin-primary)"></i>
        {{ isset($category) ? 'Edit Category' : 'Create Category' }}
    </h5>
    <a href="{{ route('categories.index') }}" class="btn-admin-outline"><i class="fas fa-arrow-left me-1"></i> Back</a>
</div>

<div class="admin-card">
    <div class="admin-card-body">
        @include('partials.errors')

        <form action="{{ isset($category) ? route('categories.update', $category->id) : route('categories.store') }}"
              method="POST" class="admin-form">
            @csrf
            @if (isset($category))
                @method('PUT')
            @endif

            <div class="mb-3">
                <label for="name" class="form-label">Category Name</label>
                <input type="text" id="name" class="form-control" name="name"
                       value="{{ isset($category) ? $category->name : '' }}" placeholder="Enter category name">
            </div>

            <button type="submit" class="btn-admin-primary">
                <i class="fas fa-save me-1"></i>
                {{ isset($category) ? 'Update Category' : 'Add Category' }}
            </button>
        </form>
    </div>
</div>
@endsection
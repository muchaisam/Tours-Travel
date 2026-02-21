@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h5 class="mb-0" style="font-weight:600;"><i class="fas fa-newspaper me-2" style="color:var(--admin-primary)"></i>Blog Posts</h5>
    <a href="{{ route('blog.create') }}" class="btn-admin-accent"><i class="fas fa-plus me-1"></i> Add Blog</a>
</div>

<div class="admin-card">
    <div class="admin-card-body p-0">
        @if ($blog->count() > 0)
        <table class="admin-table">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Category</th>
                    <th class="text-end">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($blog as $blog)
                <tr>
                    <td>
                        <img src="{{ asset('/storage/' . $blog->image) }}" class="img-thumb" alt="{{ $blog->title }}">
                    </td>
                    <td><strong>{{ $blog->title }}</strong></td>
                    <td>
                        <a href="{{ route('categories.edit', $blog->category->id) }}" class="badge-cat">
                            {{ $blog->category->name }}
                        </a>
                    </td>
                    <td class="text-end">
                        <div class="d-flex gap-1 justify-content-end">
                            @if ($blog->trashed())
                            <form action="{{ route('restore-blog', $blog->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <button type="submit" class="btn-admin-sm btn-admin-restore"><i class="fas fa-undo me-1"></i>Restore</button>
                            </form>
                            @else
                            <a href="{{ route('blog.edit', $blog->id) }}" class="btn-admin-sm btn-admin-edit"><i class="fas fa-pen"></i></a>
                            @endif
                            <form action="{{ route('blog.destroy', $blog->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn-admin-sm btn-admin-delete">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @else
        <div class="admin-empty">
            <i class="fas fa-pen-alt"></i>
            <h5>No Blog Posts Yet</h5>
            <p>Write your first blog post to engage visitors</p>
        </div>
        @endif
    </div>
</div>
@endsection
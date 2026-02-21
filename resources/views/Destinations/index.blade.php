@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h5 class="mb-0" style="font-weight:600;"><i class="fas fa-map-marker-alt me-2" style="color:var(--admin-primary)"></i>Destinations</h5>
    <a href="{{ route('destinations.create') }}" class="btn-admin-accent"><i class="fas fa-plus me-1"></i> Add Destination</a>
</div>

<div class="admin-card">
    <div class="admin-card-body p-0">
        @if ($destinations->count() > 0)
        <table class="admin-table">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Pricing</th>
                    <th class="text-end">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($destinations as $destinations)
                <tr>
                    <td>
                        <img src="{{ asset('/storage/' . $destinations->image) }}" class="img-thumb" alt="{{ $destinations->title }}">
                    </td>
                    <td><strong>{{ $destinations->title }}</strong></td>
                    <td>
                        <a href="{{ route('categories.edit', $destinations->category->id) }}" class="badge-cat">
                            {{ $destinations->category->name }}
                        </a>
                    </td>
                    <td class="text-end">
                        <div class="d-flex gap-1 justify-content-end">
                            @if ($destinations->trashed())
                            <form action="{{ route('restore-destinations', $destinations->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <button type="submit" class="btn-admin-sm btn-admin-restore"><i class="fas fa-undo me-1"></i>Restore</button>
                            </form>
                            @else
                            <a href="{{ route('destinations.edit', $destinations->id) }}" class="btn-admin-sm btn-admin-edit"><i class="fas fa-pen"></i></a>
                            @endif
                            <form action="{{ route('destinations.destroy', $destinations->id) }}" method="POST">
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
            <i class="fas fa-map"></i>
            <h5>No Destinations Yet</h5>
            <p>Add your first tour destination to get started</p>
        </div>
        @endif
    </div>
</div>
@endsection
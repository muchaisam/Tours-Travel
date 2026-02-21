@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h5 class="mb-0" style="font-weight:600;"><i class="fas fa-folder me-2" style="color:var(--admin-primary)"></i>Categories</h5>
    <a href="{{ route('categories.create') }}" class="btn-admin-accent"><i class="fas fa-plus me-1"></i> Add Category</a>
</div>

<div class="admin-card">
    <div class="admin-card-body p-0">
        @if ($categories->count() > 0)
        <table class="admin-table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Destinations</th>
                    <th class="text-end">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                <tr>
                    <td><strong>{{ $category->name }}</strong></td>
                    <td><span class="badge-cat">{{ $category->Destinations()->count() }}</span></td>
                    <td class="text-end">
                        <div class="d-flex gap-1 justify-content-end">
                            <a href="{{ route('categories.edit', $category->id) }}" class="btn-admin-sm btn-admin-edit"><i class="fas fa-pen"></i></a>
                            <button class="btn-admin-sm btn-admin-delete" onclick="handleDelete({{ $category->id }})"><i class="fas fa-trash"></i></button>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Delete Modal -->
        <div class="modal fade admin-modal" id="deleteModal" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered modal-sm">
                <form action="" method="POST" id="deleteCategoryForm">
                    @csrf
                    @method('DELETE')
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Delete Category</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            <div class="icon-warn"><i class="fas fa-exclamation-triangle"></i></div>
                            <p>Are you sure you want to delete this category?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn-admin-outline" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn-admin-sm btn-admin-delete"><i class="fas fa-trash me-1"></i>Delete</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        @else
        <div class="admin-empty">
            <i class="fas fa-folder-open"></i>
            <h5>No Categories Yet</h5>
            <p>Create your first category to organize destinations</p>
        </div>
        @endif
    </div>
</div>
@endsection

@section('scripts')
<script>
    function handleDelete(id) {
        var form = document.getElementById('deleteCategoryForm');
        form.action = '/categories/' + id;
        var modal = new bootstrap.Modal(document.getElementById('deleteModal'));
        modal.show();
    }
</script>
@endsection
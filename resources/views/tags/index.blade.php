@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h5 class="mb-0" style="font-weight:600;"><i class="fas fa-hashtag me-2" style="color:var(--admin-primary)"></i>Tags</h5>
    <a href="{{ route('tags.create') }}" class="btn-admin-accent"><i class="fas fa-plus me-1"></i> Add Tag</a>
</div>

<div class="admin-card">
    <div class="admin-card-body p-0">
        @if ($tags->count() > 0)
        <table class="admin-table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Destinations</th>
                    <th class="text-end">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tags as $tag)
                <tr>
                    <td><strong>{{ $tag->name }}</strong></td>
                    <td><span class="badge-cat">{{ $tag->Destinations()->count() }}</span></td>
                    <td class="text-end">
                        <div class="d-flex gap-1 justify-content-end">
                            <a href="{{ route('tags.edit', $tag->id) }}" class="btn-admin-sm btn-admin-edit"><i class="fas fa-pen"></i></a>
                            <button class="btn-admin-sm btn-admin-delete" onclick="handleDelete({{ $tag->id }})"><i class="fas fa-trash"></i></button>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Delete Modal -->
        <div class="modal fade admin-modal" id="deleteModal" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered modal-sm">
                <form action="" method="POST" id="deleteTagForm">
                    @csrf
                    @method('DELETE')
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Delete Tag</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            <div class="icon-warn"><i class="fas fa-exclamation-triangle"></i></div>
                            <p>Are you sure you want to delete this tag?</p>
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
            <i class="fas fa-tags"></i>
            <h5>No Tags Yet</h5>
            <p>Create tags to organize your destinations</p>
        </div>
        @endif
    </div>
</div>
@endsection

@section('scripts')
<script>
    function handleDelete(id) {
        var form = document.getElementById('deleteTagForm');
        form.action = '/tags/' + id;
        var modal = new bootstrap.Modal(document.getElementById('deleteModal'));
        modal.show();
    }
</script>
@endsection
@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h5 class="mb-0" style="font-weight:600;">
        <i class="fas fa-user-edit me-2" style="color:var(--admin-primary)"></i>My Profile
    </h5>
</div>

<div class="admin-card">
    <div class="admin-card-body">
        @include('partials.errors')

        <form action="{{ route('users.update-profile') }}" method="POST" class="admin-form">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" id="name" value="{{ $user->name }}">
            </div>

            <div class="mb-3">
                <label for="avatar" class="form-label">New Avatar</label>
                <input type="file" name="avatar" class="form-control">
            </div>

            <div class="mb-3">
                <label for="about" class="form-label">About Me</label>
                <textarea name="about" id="about" cols="5" rows="4" class="form-control"
                          placeholder="Tell us about yourself">{{ $user->about }}</textarea>
            </div>

            <button type="submit" class="btn-admin-primary">
                <i class="fas fa-save me-1"></i> Update Profile
            </button>
        </form>
    </div>
</div>
@endsection
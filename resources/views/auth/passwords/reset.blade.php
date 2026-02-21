@extends('layouts.front')

@section('title', 'Reset Password - ToursTravel Kenya')

@section('page')
<div class="tt-auth-bg">
    <div class="tt-auth-card" data-aos="fade-up">
        <div class="brand-icon"><i class="fas fa-lock-open"></i></div>
        <h2>Reset Password</h2>
        <p class="subtitle">Enter your new password below</p>

        <form method="POST" action="{{ route('password.update') }}" class="tt-form">
            @csrf
            <input type="hidden" name="token" value="{{ $token }}">

            <div class="tt-form-group">
                <label class="tt-label">Email Address</label>
                <input id="email" type="email"
                       class="tt-input @error('email') is-invalid @enderror"
                       name="email" value="{{ $email ?? old('email') }}"
                       required autocomplete="email" autofocus
                       placeholder="Enter your email">
                @error('email')
                    <div class="tt-error"><i class="fas fa-exclamation-circle me-1"></i>{{ $message }}</div>
                @enderror
            </div>

            <div class="tt-form-group">
                <label class="tt-label">New Password</label>
                <input id="password" type="password"
                       class="tt-input @error('password') is-invalid @enderror"
                       name="password" required autocomplete="new-password"
                       placeholder="Create a strong password">
                @error('password')
                    <div class="tt-error"><i class="fas fa-exclamation-circle me-1"></i>{{ $message }}</div>
                @enderror
            </div>

            <div class="tt-form-group">
                <label class="tt-label">Confirm New Password</label>
                <input id="password-confirm" type="password"
                       class="tt-input"
                       name="password_confirmation" required autocomplete="new-password"
                       placeholder="Confirm your new password">
            </div>

            <button type="submit" class="tt-btn-primary">
                <i class="fas fa-check-circle me-2"></i>Reset Password
            </button>
        </form>
    </div>
</div>
@endsection

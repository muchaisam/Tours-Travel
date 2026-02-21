@extends('layouts.front')

@section('title', 'Forgot Password - ToursTravel Kenya')

@section('page')
<div class="tt-auth-bg">
    <div class="tt-auth-card" data-aos="fade-up">
        <div class="brand-icon"><i class="fas fa-key"></i></div>
        <h2>Forgot Password?</h2>
        <p class="subtitle">Enter your email and we'll send you reset instructions.</p>

        @if (session('status'))
        <div class="tt-success-alert">
            <i class="fas fa-check-circle me-1"></i> {{ session('status') }}
        </div>
        @endif

        <form method="POST" action="{{ route('password.email') }}" class="tt-form">
            @csrf

            <div class="tt-form-group">
                <label class="tt-label">Email Address</label>
                <input id="email" type="email"
                       class="tt-input @error('email') is-invalid @enderror"
                       name="email" value="{{ old('email') }}"
                       required autocomplete="email" autofocus
                       placeholder="Enter your email address">
                @error('email')
                    <div class="tt-error"><i class="fas fa-exclamation-circle me-1"></i>{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="tt-btn-primary">
                <i class="fas fa-paper-plane me-2"></i>Send Reset Link
            </button>

            <div class="text-center mt-3">
                <a href="{{ route('login') }}" class="tt-auth-link">
                    <i class="fas fa-arrow-left me-1"></i> Back to Login
                </a>
            </div>
        </form>
    </div>
</div>
@endsection

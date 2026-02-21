@extends('layouts.front')

@section('title', 'Confirm Password - ToursTravel Kenya')

@section('page')
<div class="tt-auth-bg">
    <div class="tt-auth-card" data-aos="fade-up">
        <div class="brand-icon"><i class="fas fa-shield-halved"></i></div>
        <h2>Confirm Password</h2>
        <p class="subtitle">Please confirm your password before continuing</p>

        <form method="POST" action="{{ route('password.confirm') }}" class="tt-form">
            @csrf

            <div class="tt-form-group">
                <label class="tt-label">Password</label>
                <input id="password" type="password"
                       class="tt-input @error('password') is-invalid @enderror"
                       name="password" required autocomplete="current-password"
                       placeholder="Enter your password">
                @error('password')
                    <div class="tt-error"><i class="fas fa-exclamation-circle me-1"></i>{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="tt-btn-primary">
                <i class="fas fa-check me-2"></i>Confirm Password
            </button>

            @if (Route::has('password.request'))
            <div class="text-center mt-3">
                <a href="{{ route('password.request') }}" class="tt-auth-link">
                    <i class="fas fa-question-circle me-1"></i> Forgot Your Password?
                </a>
            </div>
            @endif
        </form>
    </div>
</div>
@endsection

@extends('layouts.front')

@section('title', 'Sign In - ToursTravel Kenya')

@section('page')
<div class="tt-auth-bg">
    <div class="tt-auth-card" data-aos="fade-up">
        <!-- Brand -->
        <div class="brand-icon"><i class="fas fa-globe-africa"></i></div>
        <h2>Welcome Back</h2>
        <p class="subtitle">Sign in to continue your journey</p>

        <form method="POST" action="{{ route('login') }}" class="tt-form">
            @csrf

            <div class="tt-form-group">
                <label class="tt-label">Email Address</label>
                <input id="username" type="text"
                       class="tt-input @error('username') is-invalid @enderror"
                       name="username" value="{{ old('username') }}"
                       required autofocus placeholder="Enter your email">
                @error('username')
                    <div class="tt-error"><i class="fas fa-exclamation-circle me-1"></i>{{ $message }}</div>
                @enderror
            </div>

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

            <div class="d-flex justify-content-between align-items-center mb-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                           {{ old('remember') ? 'checked' : '' }}>
                    <label class="form-check-label text-muted" for="remember">Remember me</label>
                </div>
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" style="color:var(--tt-primary);font-size:.85rem;">Forgot Password?</a>
                @endif
            </div>

            <button type="submit" class="btn-tt-primary w-100 text-center d-block mb-3">
                <i class="fas fa-sign-in-alt me-2"></i>Sign In
            </button>

            <div class="text-center my-3">
                <small class="text-muted">New to ToursTravel Kenya?</small>
            </div>

            <a href="{{ route('register') }}" class="btn-tt-outline w-100 text-center d-block">
                <i class="fas fa-user-plus me-2"></i>Create Account
            </a>
        </form>

        <div class="text-center mt-4">
            <small class="text-muted">&copy; {{ date('Y') }} ToursTravel. Experience Kenya differently.</small>
        </div>
    </div>
</div>
@endsection
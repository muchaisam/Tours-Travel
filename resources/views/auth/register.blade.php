@extends('layouts.front')

@section('title', 'Create Account - ToursTravel Kenya')

@section('page')
<div class="tt-auth-bg">
    <div class="tt-auth-card" style="max-width:500px;" data-aos="fade-up">
        <!-- Brand -->
        <div class="brand-icon"><i class="fas fa-user-plus"></i></div>
        <h2>Create Account</h2>
        <p class="subtitle">Join us and discover amazing destinations</p>

        <form method="POST" action="{{ route('register') }}" class="tt-form">
            @csrf

            <div class="tt-form-group">
                <label class="tt-label">Full Name</label>
                <input id="name" type="text"
                       class="tt-input @error('name') is-invalid @enderror"
                       name="name" value="{{ old('name') }}"
                       required autocomplete="name" autofocus
                       placeholder="Enter your full name">
                @error('name')
                    <div class="tt-error"><i class="fas fa-exclamation-circle me-1"></i>{{ $message }}</div>
                @enderror
            </div>

            <div class="tt-form-group">
                <label class="tt-label">Email Address</label>
                <input id="email" type="email"
                       class="tt-input @error('email') is-invalid @enderror"
                       name="email" value="{{ old('email') }}"
                       required autocomplete="email"
                       placeholder="Enter your email">
                @error('email')
                    <div class="tt-error"><i class="fas fa-exclamation-circle me-1"></i>{{ $message }}</div>
                @enderror
            </div>

            <div class="tt-form-group">
                <label class="tt-label">Password</label>
                <input id="password" type="password"
                       class="tt-input @error('password') is-invalid @enderror"
                       name="password" required autocomplete="new-password"
                       placeholder="Create a strong password">
                @error('password')
                    <div class="tt-error"><i class="fas fa-exclamation-circle me-1"></i>{{ $message }}</div>
                @enderror
            </div>

            <div class="tt-form-group">
                <label class="tt-label">Confirm Password</label>
                <input id="password-confirm" type="password"
                       class="tt-input" name="password_confirmation"
                       required autocomplete="new-password"
                       placeholder="Confirm your password">
            </div>

            <div class="form-check mb-4">
                <input class="form-check-input" type="checkbox" id="terms" required>
                <label class="form-check-label text-muted" for="terms">
                    I agree to the <a href="#" style="color:var(--tt-primary);">Terms of Service</a>
                    and <a href="#" style="color:var(--tt-primary);">Privacy Policy</a>
                </label>
            </div>

            <button type="submit" class="btn-tt-primary w-100 text-center d-block mb-3">
                <i class="fas fa-user-plus me-2"></i>Create Account
            </button>

            <div class="text-center my-3">
                <small class="text-muted">Already have an account?</small>
            </div>

            <a href="{{ route('login') }}" class="btn-tt-outline w-100 text-center d-block">
                <i class="fas fa-sign-in-alt me-2"></i>Sign In
            </a>
        </form>

        <div class="text-center mt-4">
            <small class="text-muted">&copy; {{ date('Y') }} ToursTravel. Your journey begins here.</small>
        </div>
    </div>
</div>
@endsection

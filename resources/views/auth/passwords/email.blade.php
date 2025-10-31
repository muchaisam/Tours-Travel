@extends('layouts.app')

@section('content')
<div class="auth-background">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-7">
                <!-- Modern Forgot Password Card -->
                <div class="auth-card">
                    <div class="card-body p-5">
                        <!-- Logo/Brand Section -->
                        <div class="text-center mb-5">
                            <div class="auth-brand-icon mb-3">
                                <i class="fas fa-key text-white auth-card-icon"></i>
                            </div>
                            <h2 class="auth-title mb-2">Forgot Password?</h2>
                            <p class="auth-subtitle">No worries! Enter your email and we'll send you reset instructions.</p>
                        </div>

                        <!-- Success Alert -->
                        @if (session('status'))
                            <div class="alert alert-success border-0 mb-4 auth-alert-success">
                                <i class="fas fa-check-circle me-2"></i>
                                {{ session('status') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf

                            <!-- Email Input -->
                            <div class="mb-4">
                                <label for="email" class="auth-label form-label">Email Address</label>
                                <div class="position-relative">
                                    <input id="email" type="email" 
                                           class="form-control form-control-lg auth-input @error('email') is-invalid @enderror" 
                                           name="email" 
                                           value="{{ old('email') }}" 
                                           required autocomplete="email" autofocus
                                           placeholder="Enter your email address">
                                    <i class="fas fa-envelope auth-input-icon"></i>
                                </div>
                                @error('email')
                                <div class="auth-error">
                                    <i class="fas fa-exclamation-circle me-1"></i>{{ $message }}
                                </div>
                                @enderror
                            </div>

                            <!-- Send Link Button -->
                            <button type="submit" class="btn btn-primary btn-lg w-100 mb-4 auth-btn-primary">
                                <i class="fas fa-paper-plane me-2"></i>Send Reset Link
                            </button>

                            <!-- Back to Login Link -->
                            <div class="text-center">
                                <a href="{{ route('login') }}" class="auth-link text-decoration-none">
                                    <i class="fas fa-arrow-left me-1"></i> Back to Login
                                </a>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Bottom Text -->
                <div class="text-center mt-4">
                    <small class="auth-footer-text">
                        © 2025 ToursTravel. Secure password recovery.
                    </small>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Add Font Awesome for Icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

@endsection

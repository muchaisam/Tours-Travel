@extends('layouts.app')

@section('content')
<div class="auth-background">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-7">
                <!-- Modern Login Card with Glassmorphism Effect -->
                <div class="auth-card">
                    <div class="card-body p-5">
                        <!-- Logo/Brand Section -->
                        <div class="text-center mb-5">
                            <div class="auth-brand-icon mb-3">
                                <i class="fas fa-globe-africa text-white" style="font-size: 2rem;"></i>
                            </div>
                            <h2 class="auth-title mb-2">Welcome Back</h2>
                            <p class="auth-subtitle">Sign in to continue your journey</p>
                        </div>

                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <!-- Email Input -->
                            <div class="mb-4">
                                <label for="username" class="auth-label form-label">Email Address</label>
                                <div class="position-relative">
                                    <input id="username" type="username" 
                                           class="form-control form-control-lg auth-input @error('username') is-invalid @enderror" 
                                           name="username" 
                                           value="{{ old('username') }}" 
                                           required autofocus
                                           placeholder="Enter your email">
                                    <i class="fas fa-envelope auth-input-icon"></i>
                                </div>
                                @error('username')
                                <div class="auth-error">
                                    <i class="fas fa-exclamation-circle me-1"></i>{{ $message }}
                                </div>
                                @enderror
                            </div>

                            <!-- Password Input -->
                            <div class="mb-4">
                                <label for="password" class="auth-label form-label">Password</label>
                                <div class="position-relative">
                                    <input id="password" type="password" 
                                           class="form-control form-control-lg auth-input @error('password') is-invalid @enderror" 
                                           name="password" 
                                           required autocomplete="current-password"
                                           placeholder="Enter your password">
                                    <i class="fas fa-lock auth-input-icon"></i>
                                </div>
                                @error('password')
                                <div class="auth-error">
                                    <i class="fas fa-exclamation-circle me-1"></i>{{ $message }}
                                </div>
                                @enderror
                            </div>

                            <!-- Remember Me & Forgot Password -->
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <div class="form-check">
                                    <input class="form-check-input auth-checkbox" type="checkbox" name="remember" id="remember" 
                                           {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label text-muted" for="remember">
                                        Remember me
                                    </label>
                                </div>
                                @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}" class="text-decoration-none">
                                    <small class="auth-link">Forgot Password?</small>
                                </a>
                                @endif
                            </div>

                            <!-- Login Button -->
                            <button type="submit" class="btn btn-primary btn-lg w-100 mb-4 auth-btn-primary">
                                <i class="fas fa-sign-in-alt me-2"></i>Sign In
                            </button>

                            <!-- Divider -->
                            <div class="auth-divider mb-4">
                                <hr class="text-muted">
                                <span class="auth-divider-text">
                                    New to Safari Travel?
                                </span>
                            </div>

                            <!-- Register Link -->
                            <div class="text-center">
                                <a href="{{ route('register') }}" class="btn btn-outline-primary btn-lg w-100 auth-btn-outline">
                                    <i class="fas fa-user-plus me-2"></i>Create Account
                                </a>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Bottom Text -->
                <div class="text-center mt-4">
                    <small class="auth-footer-text">
                        © 2025 ToursTravel. Experience Kenya differently.
                    </small>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Add Font Awesome for Icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

@endsection
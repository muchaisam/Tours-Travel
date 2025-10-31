@extends('layouts.app')

@section('content')
<div class="auth-background-register">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8">
                <!-- Modern Register Card with Glassmorphism Effect -->
                <div class="auth-card">
                    <div class="card-body p-5">
                        <!-- Logo/Brand Section -->
                        <div class="text-center mb-4">
                            <div class="auth-brand-icon-register mb-3">
                                <i class="fas fa-user-plus text-white" style="font-size: 2rem;"></i>
                            </div>
                            <h2 class="auth-title mb-2">Create Account</h2>
                            <p class="auth-subtitle">Join us and discover amazing destinations</p>
                        </div>

                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <!-- Full Name Input -->
                            <div class="mb-3">
                                <label for="name" class="auth-label form-label">Full Name</label>
                                <div class="position-relative">
                                    <input id="name" type="text" 
                                           class="form-control form-control-lg auth-input @error('name') is-invalid @enderror" 
                                           name="name" 
                                           value="{{ old('name') }}" 
                                           required autocomplete="name" autofocus
                                           placeholder="Enter your full name">
                                    <i class="fas fa-user auth-input-icon"></i>
                                </div>
                                @error('name')
                                <div class="auth-error">
                                    <i class="fas fa-exclamation-circle me-1"></i>{{ $message }}
                                </div>
                                @enderror
                            </div>

                            <!-- Email Input -->
                            <div class="mb-3">
                                <label for="email" class="auth-label form-label">Email Address</label>
                                <div class="position-relative">
                                    <input id="email" type="email" 
                                           class="form-control form-control-lg auth-input @error('email') is-invalid @enderror" 
                                           name="email" 
                                           value="{{ old('email') }}" 
                                           required autocomplete="email"
                                           placeholder="Enter your email">
                                    <i class="fas fa-envelope auth-input-icon"></i>
                                </div>
                                @error('email')
                                <div class="auth-error">
                                    <i class="fas fa-exclamation-circle me-1"></i>{{ $message }}
                                </div>
                                @enderror
                            </div>

                            <!-- Password Input -->
                            <div class="mb-3">
                                <label for="password" class="auth-label form-label">Password</label>
                                <div class="position-relative">
                                    <input id="password" type="password" 
                                           class="form-control form-control-lg auth-input @error('password') is-invalid @enderror" 
                                           name="password" 
                                           required autocomplete="new-password"
                                           placeholder="Create a strong password">
                                    <i class="fas fa-lock auth-input-icon"></i>
                                </div>
                                @error('password')
                                <div class="auth-error">
                                    <i class="fas fa-exclamation-circle me-1"></i>{{ $message }}
                                </div>
                                @enderror
                            </div>

                            <!-- Confirm Password Input -->
                            <div class="mb-4">
                                <label for="password-confirm" class="auth-label form-label">Confirm Password</label>
                                <div class="position-relative">
                                    <input id="password-confirm" type="password" 
                                           class="form-control form-control-lg auth-input" 
                                           name="password_confirmation" 
                                           required autocomplete="new-password"
                                           placeholder="Confirm your password">
                                    <i class="fas fa-lock auth-input-icon"></i>
                                </div>
                            </div>

                            <!-- Terms & Conditions -->
                            <div class="form-check mb-4">
                                <input class="form-check-input auth-checkbox" type="checkbox" id="terms" required>
                                <label class="form-check-label text-muted" for="terms">
                                    I agree to the <a href="#" class="auth-link text-decoration-none">Terms of Service</a> 
                                    and <a href="#" class="auth-link text-decoration-none">Privacy Policy</a>
                                </label>
                            </div>

                            <!-- Register Button -->
                            <button type="submit" class="btn btn-primary btn-lg w-100 mb-4 auth-btn-primary-register">
                                <i class="fas fa-user-plus me-2"></i>Create Account
                            </button>

                            <!-- Divider -->
                            <div class="auth-divider mb-4">
                                <hr class="text-muted">
                                <span class="auth-divider-text">
                                    Already have an account?
                                </span>
                            </div>

                            <!-- Login Link -->
                            <div class="text-center">
                                <a href="{{ route('login') }}" class="btn btn-outline-primary btn-lg w-100 auth-btn-outline">
                                    <i class="fas fa-sign-in-alt me-2"></i>Sign In
                                </a>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Bottom Text -->
                <div class="text-center mt-4">
                    <small class="auth-footer-text">
                        © 2025 ToursTravel. Your journey begins here.
                    </small>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Add Font Awesome for Icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

@endsection

@extends('layouts.app')

@section('content')
<div class="auth-background">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-7">
                <!-- Modern Reset Password Card -->
                <div class="auth-card">
                    <div class="card-body p-5">
                        <!-- Logo/Brand Section -->
                        <div class="text-center mb-5">
                            <div class="auth-brand-icon mb-3">
                                <i class="fas fa-lock-open text-white auth-card-icon"></i>
                            </div>
                            <h2 class="auth-title mb-2">Reset Password</h2>
                            <p class="auth-subtitle">Enter your new password below</p>
                        </div>

                        <form method="POST" action="{{ route('password.update') }}">
                            @csrf
                            <input type="hidden" name="token" value="{{ $token }}">

                            <!-- Email Input -->
                            <div class="mb-4">
                                <label for="email" class="auth-label form-label">Email Address</label>
                                <div class="position-relative">
                                    <input id="email" type="email" 
                                           class="form-control form-control-lg auth-input @error('email') is-invalid @enderror" 
                                           name="email" 
                                           value="{{ $email ?? old('email') }}" 
                                           required autocomplete="email" autofocus
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
                            <div class="mb-4">
                                <label for="password" class="auth-label form-label">New Password</label>
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
                                <label for="password-confirm" class="auth-label form-label">Confirm New Password</label>
                                <div class="position-relative">
                                    <input id="password-confirm" type="password" 
                                           class="form-control form-control-lg auth-input" 
                                           name="password_confirmation" 
                                           required autocomplete="new-password"
                                           placeholder="Confirm your new password">
                                    <i class="fas fa-lock auth-input-icon"></i>
                                </div>
                            </div>

                            <!-- Reset Password Button -->
                            <button type="submit" class="btn btn-primary btn-lg w-100 mb-4 auth-btn-primary">
                                <i class="fas fa-check-circle me-2"></i>Reset Password
                            </button>
                        </form>
                    </div>
                </div>

                <!-- Bottom Text -->
                <div class="text-center mt-4">
                    <small class="auth-footer-text">
                        © 2025 ToursTravel. Secure password reset.
                    </small>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Add Font Awesome for Icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

@endsection

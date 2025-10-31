@extends('layouts.app')

@section('content')
<div class="auth-background">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-7">
                <!-- Modern Confirm Password Card -->
                <div class="auth-card">
                    <div class="card-body p-5">
                        <!-- Logo/Brand Section -->
                        <div class="text-center mb-5">
                            <div class="auth-brand-icon mb-3">
                                <i class="fas fa-shield-alt text-white auth-card-icon"></i>
                            </div>
                            <h2 class="auth-title mb-2">Confirm Password</h2>
                            <p class="auth-subtitle">Please confirm your password before continuing</p>
                        </div>

                        <form method="POST" action="{{ route('password.confirm') }}">
                            @csrf

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

                            <!-- Confirm Button -->
                            <button type="submit" class="btn btn-primary btn-lg w-100 mb-4 auth-btn-primary">
                                <i class="fas fa-check me-2"></i>Confirm Password
                            </button>

                            <!-- Forgot Password Link -->
                            @if (Route::has('password.request'))
                            <div class="text-center">
                                <a href="{{ route('password.request') }}" class="auth-link text-decoration-none">
                                    <i class="fas fa-question-circle me-1"></i> Forgot Your Password?
                                </a>
                            </div>
                            @endif
                        </form>
                    </div>
                </div>

                <!-- Bottom Text -->
                <div class="text-center mt-4">
                    <small class="auth-footer-text">
                        © 2025 ToursTravel. Secure authentication.
                    </small>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Add Font Awesome for Icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

@endsection

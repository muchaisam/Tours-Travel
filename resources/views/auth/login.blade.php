@extends('layouts.app')

@section('content')
<div class="min-vh-100 d-flex align-items-center" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-7">
                <!-- Modern Login Card with Glassmorphism Effect -->
                <div class="card border-0 shadow-lg" style="backdrop-filter: blur(10px); background: rgba(255, 255, 255, 0.95); border-radius: 20px;">
                    <div class="card-body p-5">
                        <!-- Logo/Brand Section -->
                        <div class="text-center mb-5">
                            <div class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle mb-3" style="width: 80px; height: 80px;">
                                <i class="fas fa-globe-africa text-white" style="font-size: 2rem;"></i>
                            </div>
                            <h2 class="fw-bold text-dark mb-2">Welcome Back</h2>
                            <p class="text-muted">Sign in to continue your journey</p>
                        </div>

                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <!-- Email Input -->
                            <div class="mb-4">
                                <label for="username" class="form-label fw-semibold text-dark">Email Address</label>
                                <div class="position-relative">
                                    <input id="username" type="username" 
                                           class="form-control form-control-lg @error('username') is-invalid @enderror" 
                                           name="username" 
                                           value="{{ old('username') }}" 
                                           required autofocus
                                           style="border-radius: 12px; border: 2px solid #e9ecef; padding-left: 3rem;"
                                           placeholder="Enter your email">
                                    <i class="fas fa-envelope position-absolute text-muted" style="left: 1rem; top: 50%; transform: translateY(-50%);"></i>
                                </div>
                                @error('username')
                                <div class="invalid-feedback d-block mt-2">
                                    <i class="fas fa-exclamation-circle me-1"></i>{{ $message }}
                                </div>
                                @enderror
                            </div>

                            <!-- Password Input -->
                            <div class="mb-4">
                                <label for="password" class="form-label fw-semibold text-dark">Password</label>
                                <div class="position-relative">
                                    <input id="password" type="password" 
                                           class="form-control form-control-lg @error('password') is-invalid @enderror" 
                                           name="password" 
                                           required autocomplete="current-password"
                                           style="border-radius: 12px; border: 2px solid #e9ecef; padding-left: 3rem;"
                                           placeholder="Enter your password">
                                    <i class="fas fa-lock position-absolute text-muted" style="left: 1rem; top: 50%; transform: translateY(-50%);"></i>
                                </div>
                                @error('password')
                                <div class="invalid-feedback d-block mt-2">
                                    <i class="fas fa-exclamation-circle me-1"></i>{{ $message }}
                                </div>
                                @enderror
                            </div>

                            <!-- Remember Me & Forgot Password -->
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" 
                                           {{ old('remember') ? 'checked' : '' }} 
                                           style="border-radius: 6px;">
                                    <label class="form-check-label text-muted" for="remember">
                                        Remember me
                                    </label>
                                </div>
                                @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}" class="text-decoration-none">
                                    <small class="text-primary fw-semibold">Forgot Password?</small>
                                </a>
                                @endif
                            </div>

                            <!-- Login Button -->
                            <button type="submit" class="btn btn-primary btn-lg w-100 mb-4" 
                                    style="border-radius: 12px; font-weight: 600; padding: 12px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); border: none;">
                                <i class="fas fa-sign-in-alt me-2"></i>Sign In
                            </button>

                            <!-- Divider -->
                            <div class="position-relative text-center mb-4">
                                <hr class="text-muted">
                                <span class="position-absolute top-50 start-50 translate-middle bg-white px-3 text-muted" style="font-size: 0.875rem;">
                                    New to Safari Travel?
                                </span>
                            </div>

                            <!-- Register Link -->
                            <div class="text-center">
                                <a href="{{ route('register') }}" class="btn btn-outline-primary btn-lg w-100" 
                                   style="border-radius: 12px; font-weight: 600; padding: 12px;">
                                    <i class="fas fa-user-plus me-2"></i>Create Account
                                </a>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Bottom Text -->
                <div class="text-center mt-4">
                    <small class="text-white-50">
                        © 2025 Safari Travel Agency. Experience the world differently.
                    </small>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Add Font Awesome for Icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

@endsection
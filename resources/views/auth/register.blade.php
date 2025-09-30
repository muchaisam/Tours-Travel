@extends('layouts.app')

@section('content')
<div class="min-vh-100 d-flex align-items-center" style="background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8">
                <!-- Modern Register Card with Glassmorphism Effect -->
                <div class="card border-0 shadow-lg" style="backdrop-filter: blur(10px); background: rgba(255, 255, 255, 0.95); border-radius: 20px;">
                    <div class="card-body p-5">
                        <!-- Logo/Brand Section -->
                        <div class="text-center mb-4">
                            <div class="d-inline-flex align-items-center justify-content-center bg-gradient rounded-circle mb-3" 
                                 style="width: 80px; height: 80px; background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);">
                                <i class="fas fa-user-plus text-white" style="font-size: 2rem;"></i>
                            </div>
                            <h2 class="fw-bold text-dark mb-2">Create Account</h2>
                            <p class="text-muted">Join us and discover amazing destinations</p>
                        </div>

                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <!-- Full Name Input -->
                            <div class="mb-3">
                                <label for="name" class="form-label fw-semibold text-dark">Full Name</label>
                                <div class="position-relative">
                                    <input id="name" type="text" 
                                           class="form-control form-control-lg @error('name') is-invalid @enderror" 
                                           name="name" 
                                           value="{{ old('name') }}" 
                                           required autocomplete="name" autofocus
                                           style="border-radius: 12px; border: 2px solid #e9ecef; padding-left: 3rem;"
                                           placeholder="Enter your full name">
                                    <i class="fas fa-user position-absolute text-muted" style="left: 1rem; top: 50%; transform: translateY(-50%);"></i>
                                </div>
                                @error('name')
                                <div class="invalid-feedback d-block mt-2">
                                    <i class="fas fa-exclamation-circle me-1"></i>{{ $message }}
                                </div>
                                @enderror
                            </div>

                            <!-- Email Input -->
                            <div class="mb-3">
                                <label for="email" class="form-label fw-semibold text-dark">Email Address</label>
                                <div class="position-relative">
                                    <input id="email" type="email" 
                                           class="form-control form-control-lg @error('email') is-invalid @enderror" 
                                           name="email" 
                                           value="{{ old('email') }}" 
                                           required autocomplete="email"
                                           style="border-radius: 12px; border: 2px solid #e9ecef; padding-left: 3rem;"
                                           placeholder="Enter your email">
                                    <i class="fas fa-envelope position-absolute text-muted" style="left: 1rem; top: 50%; transform: translateY(-50%);"></i>
                                </div>
                                @error('email')
                                <div class="invalid-feedback d-block mt-2">
                                    <i class="fas fa-exclamation-circle me-1"></i>{{ $message }}
                                </div>
                                @enderror
                            </div>

                            <!-- Password Input -->
                            <div class="mb-3">
                                <label for="password" class="form-label fw-semibold text-dark">Password</label>
                                <div class="position-relative">
                                    <input id="password" type="password" 
                                           class="form-control form-control-lg @error('password') is-invalid @enderror" 
                                           name="password" 
                                           required autocomplete="new-password"
                                           style="border-radius: 12px; border: 2px solid #e9ecef; padding-left: 3rem;"
                                           placeholder="Create a strong password">
                                    <i class="fas fa-lock position-absolute text-muted" style="left: 1rem; top: 50%; transform: translateY(-50%);"></i>
                                </div>
                                @error('password')
                                <div class="invalid-feedback d-block mt-2">
                                    <i class="fas fa-exclamation-circle me-1"></i>{{ $message }}
                                </div>
                                @enderror
                            </div>

                            <!-- Confirm Password Input -->
                            <div class="mb-4">
                                <label for="password-confirm" class="form-label fw-semibold text-dark">Confirm Password</label>
                                <div class="position-relative">
                                    <input id="password-confirm" type="password" 
                                           class="form-control form-control-lg" 
                                           name="password_confirmation" 
                                           required autocomplete="new-password"
                                           style="border-radius: 12px; border: 2px solid #e9ecef; padding-left: 3rem;"
                                           placeholder="Confirm your password">
                                    <i class="fas fa-lock position-absolute text-muted" style="left: 1rem; top: 50%; transform: translateY(-50%);"></i>
                                </div>
                            </div>

                            <!-- Terms & Conditions -->
                            <div class="form-check mb-4">
                                <input class="form-check-input" type="checkbox" id="terms" required 
                                       style="border-radius: 6px;">
                                <label class="form-check-label text-muted" for="terms">
                                    I agree to the <a href="#" class="text-decoration-none">Terms of Service</a> 
                                    and <a href="#" class="text-decoration-none">Privacy Policy</a>
                                </label>
                            </div>

                            <!-- Register Button -->
                            <button type="submit" class="btn btn-primary btn-lg w-100 mb-4" 
                                    style="border-radius: 12px; font-weight: 600; padding: 12px; background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); border: none;">
                                <i class="fas fa-user-plus me-2"></i>Create Account
                            </button>

                            <!-- Divider -->
                            <div class="position-relative text-center mb-4">
                                <hr class="text-muted">
                                <span class="position-absolute top-50 start-50 translate-middle bg-white px-3 text-muted" style="font-size: 0.875rem;">
                                    Already have an account?
                                </span>
                            </div>

                            <!-- Login Link -->
                            <div class="text-center">
                                <a href="{{ route('login') }}" class="btn btn-outline-primary btn-lg w-100" 
                                   style="border-radius: 12px; font-weight: 600; padding: 12px;">
                                    <i class="fas fa-sign-in-alt me-2"></i>Sign In
                                </a>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Bottom Text -->
                <div class="text-center mt-4">
                    <small class="text-white-50">
                        © 2025 Safari Travel Agency. Your journey begins here.
                    </small>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Add Font Awesome for Icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

@endsection

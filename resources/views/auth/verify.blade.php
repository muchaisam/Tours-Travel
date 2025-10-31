@extends('layouts.app')

@section('content')
<div class="auth-background">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-7">
                <!-- Modern Email Verification Card -->
                <div class="auth-card">
                    <div class="card-body p-5">
                        <!-- Logo/Brand Section -->
                        <div class="text-center mb-5">
                            <div class="auth-brand-icon mb-3">
                                <i class="fas fa-envelope-open-text text-white auth-card-icon"></i>
                            </div>
                            <h2 class="auth-title mb-2">Verify Your Email</h2>
                            <p class="auth-subtitle">We've sent a verification link to your email address</p>
                        </div>

                        <!-- Success Alert -->
                        @if (session('resent'))
                            <div class="alert alert-success border-0 mb-4 auth-alert-success">
                                <i class="fas fa-check-circle me-2"></i>
                                A fresh verification link has been sent to your email address.
                            </div>
                        @endif

                        <!-- Verification Message -->
                        <div class="alert alert-info border-0 mb-4 auth-alert-info">
                            <p class="mb-2">
                                <i class="fas fa-info-circle me-2"></i>
                                Before proceeding, please check your email for a verification link.
                            </p>
                            <p class="mb-0 small">
                                If you did not receive the email, you can request a new one below.
                            </p>
                        </div>

                        <!-- Resend Verification Form -->
                        <form method="POST" action="{{ route('verification.resend') }}">
                            @csrf
                            <button type="submit" class="btn btn-primary btn-lg w-100 mb-3 auth-btn-primary">
                                <i class="fas fa-paper-plane me-2"></i>Resend Verification Email
                            </button>
                        </form>

                        <!-- Back to Home Link -->
                        <div class="text-center">
                            <a href="{{ url('/') }}" class="auth-link text-decoration-none">
                                <i class="fas fa-home me-1"></i> Back to Home
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Bottom Text -->
                <div class="text-center mt-4">
                    <small class="auth-footer-text">
                        © 2025 ToursTravel. Secure email verification.
                    </small>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Add Font Awesome for Icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

@endsection

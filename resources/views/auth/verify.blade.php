@extends('layouts.front')

@section('title', 'Verify Email - ToursTravel Kenya')

@section('page')
<div class="tt-auth-bg">
    <div class="tt-auth-card" data-aos="fade-up">
        <!-- Brand -->
        <div class="brand-icon"><i class="fas fa-envelope-open-text"></i></div>
        <h2>Verify Your Email</h2>
        <p class="subtitle">We've sent a verification link to your email address</p>

        @if (session('resent'))
            <div class="alert alert-success border-0 mb-4">
                <i class="fas fa-check-circle me-2"></i>
                A fresh verification link has been sent to your email address.
            </div>
        @endif

        <div class="alert alert-info border-0 mb-4">
            <p class="mb-2"><i class="fas fa-info-circle me-2"></i> Before proceeding, please check your email for a verification link.</p>
            <p class="mb-0 small">If you did not receive the email, you can request a new one below.</p>
        </div>

        <form method="POST" action="{{ route('verification.resend') }}">
            @csrf
            <button type="submit" class="btn-tt-primary w-100 text-center d-block mb-3">
                <i class="fas fa-paper-plane me-2"></i>Resend Verification Email
            </button>
        </form>

        <div class="text-center">
            <a href="{{ url('/') }}" style="color:var(--tt-primary);text-decoration:none;">
                <i class="fas fa-home me-1"></i> Back to Home
            </a>
        </div>

        <div class="text-center mt-4">
            <small class="text-muted">&copy; {{ date('Y') }} ToursTravel. Secure email verification.</small>
        </div>
    </div>
</div>
@endsection

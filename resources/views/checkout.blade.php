@extends('layouts.front')

@section('title', 'Checkout - ToursTravel Kenya')

@section('page')
@include('partials.navbar')

<!-- Page Hero -->
<section class="tt-page-hero tt-page-hero-sm">
	<div class="tt-page-hero-bg" style="background-image: url('{{ asset('images/place-1.jpg') }}');"></div>
	<div class="container" data-aos="fade-up">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb justify-content-center">
				<li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fas fa-home me-1"></i>Home</a></li>
				<li class="breadcrumb-item"><a href="{{ route('cart') }}">Cart</a></li>
				<li class="breadcrumb-item active">Checkout</li>
			</ol>
		</nav>
		<h1 class="tt-page-title">Secure <span class="accent">Checkout</span></h1>
	</div>
</section>

<!-- Checkout Content -->
<section class="tt-section">
	<div class="container">
		<div class="row g-5">
			<!-- Billing Info -->
			<div class="col-lg-7" data-aos="fade-up">
				<div class="tt-sidebar-card">
					<h4 class="mb-1"><i class="fas fa-user me-2"></i> Personal Information</h4>
					<p class="text-muted mb-4">Fill in your details to complete the booking</p>

					<form id="checkout_form" method="POST" action="{{ route('checkout.store') }}" class="tt-form">
						@csrf
						<div class="row g-3">
							<div class="col-md-6">
								<div class="tt-form-group">
									<label class="tt-label">First Name *</label>
									<input type="text" name="firstname"
										   class="tt-input {{ $errors->has('firstname') ? 'is-invalid' : '' }}"
										   placeholder="John" required>
									@if ($errors->has('firstname'))
										<div class="tt-error">{{ $errors->first('firstname') }}</div>
									@endif
								</div>
							</div>
							<div class="col-md-6">
								<div class="tt-form-group">
									<label class="tt-label">Last Name *</label>
									<input type="text" name="lastname"
										   class="tt-input {{ $errors->has('lastname') ? 'is-invalid' : '' }}"
										   placeholder="Doe" required>
									@if ($errors->has('lastname'))
										<div class="tt-error">{{ $errors->first('lastname') }}</div>
									@endif
								</div>
							</div>
						</div>
						<div class="tt-form-group">
							<label class="tt-label">Phone Number *</label>
							<input type="tel" name="phone"
								   class="tt-input {{ $errors->has('phone') ? 'is-invalid' : '' }}"
								   placeholder="+254 7XX XXX XXX" required>
							@if ($errors->has('phone'))
								<div class="tt-error">{{ $errors->first('phone') }}</div>
							@endif
						</div>
						<div class="tt-form-group">
							<label class="tt-label">Email Address *</label>
							<input type="email" name="email"
								   class="tt-input {{ $errors->has('email') ? 'is-invalid' : '' }}"
								   placeholder="you@example.com" required>
							@if ($errors->has('email'))
								<div class="tt-error">{{ $errors->first('email') }}</div>
							@endif
						</div>
					</form>
				</div>
			</div>

			<!-- Order Summary -->
			<div class="col-lg-5" data-aos="fade-left">
				<div class="tt-sidebar-card">
					<h4 class="mb-1"><i class="fas fa-shopping-bag me-2"></i> Your Package</h4>
					<p class="text-muted mb-4">Tour booking details</p>

					<div class="d-flex justify-content-between align-items-center py-3 border-bottom">
						<strong>Tour</strong>
						<strong>Total</strong>
					</div>

					<div class="d-flex justify-content-between align-items-center py-3 border-bottom">
						<span>{{ $destinations->title }}</span>
						<span>{{ $destinations->pricing }}</span>
					</div>
					<div class="d-flex justify-content-between align-items-center py-3 border-bottom">
						<span>Subtotal</span>
						<span>{{ $destinations->pricing }}</span>
					</div>
					<div class="d-flex justify-content-between align-items-center py-3 mb-4">
						<strong class="fs-5">Total</strong>
						<strong class="fs-5" style="color:var(--tt-primary);">{{ $destinations->pricing }}</strong>
					</div>

					<p class="text-muted small mb-3"><i class="fas fa-info-circle me-1"></i> Can't wait to start your vacation?</p>

					<a href="{{ route('stripe') }}" class="btn-tt-accent w-100 text-center d-block">
						<i class="fas fa-lock me-2"></i> Proceed to Pay
					</a>

					<div class="text-center mt-3">
						<small class="text-muted"><i class="fas fa-shield-alt me-1"></i> Secure payments powered by Stripe</small>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

@include('partials.footer')
@endsection
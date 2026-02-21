@extends('layouts.front')

@section('title', 'Shopping Cart - ToursTravel Kenya')

@section('page')
@include('partials.navbar')

<!-- Page Hero -->
<section class="tt-page-hero tt-page-hero-sm">
	<div class="tt-page-hero-bg" style="background-image: url('{{ asset('images/place-1.jpg') }}');"></div>
	<div class="container" data-aos="fade-up">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb justify-content-center">
				<li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fas fa-home me-1"></i>Home</a></li>
				<li class="breadcrumb-item active">Cart</li>
			</ol>
		</nav>
		<h1 class="tt-page-title">Your <span class="accent">Cart</span></h1>
	</div>
</section>

<!-- Cart Content -->
<section class="tt-section">
	<div class="container">
		<div class="row g-5">
			<!-- Cart Items -->
			<div class="col-lg-8" data-aos="fade-up">
				<div class="tt-cart-table">
					<div class="tt-cart-header d-none d-md-flex">
						<div class="tt-cart-col-product">Product</div>
						<div class="tt-cart-col-price">Price</div>
						<div class="tt-cart-col-qty">Quantity</div>
						<div class="tt-cart-col-total">Total</div>
					</div>

					<!-- Cart Item -->
					<div class="tt-cart-item">
						<div class="tt-cart-col-product">
							<div class="d-flex align-items-center gap-3">
								<img src="{{ $destinations->image ? asset('storage/' . $destinations->image) : asset('images/destination-1.jpg') }}"
									 alt="{{ $destinations->title }}" class="tt-cart-img">
								<div>
									<h6 class="mb-1">{{ $destinations->title }}</h6>
									<small class="text-muted">{{ $destinations->category->name ?? 'Safari Tour' }}</small>
								</div>
							</div>
						</div>
						<div class="tt-cart-col-price" data-label="Price">{{ $destinations->pricing }}</div>
						<div class="tt-cart-col-qty" data-label="Quantity">
							<div class="tt-qty-control">
								<button class="tt-qty-btn" onclick="this.nextElementSibling.stepDown()"><i class="fas fa-minus"></i></button>
								<input type="number" class="tt-qty-input" value="1" min="1" max="10">
								<button class="tt-qty-btn" onclick="this.previousElementSibling.stepUp()"><i class="fas fa-plus"></i></button>
							</div>
						</div>
						<div class="tt-cart-col-total" data-label="Total">{{ $destinations->pricing }}</div>
					</div>
				</div>

				<!-- Cart Actions -->
				<div class="d-flex flex-wrap justify-content-between align-items-center mt-4 gap-3">
					<a href="{{ route('packages') }}" class="btn-tt-outline">
						<i class="fas fa-arrow-left me-2"></i> Continue Shopping
					</a>
					<div class="d-flex gap-2">
						<form action="{{ route('cart.remove', $id ?? '') }}" method="POST">
							@csrf
							@method('DELETE')
							<button type="submit" class="btn-tt-outline" style="border-color:#dc3545;color:#dc3545;">
								<i class="fas fa-trash me-1"></i> Clear Cart
							</button>
						</form>
					</div>
				</div>
			</div>

			<!-- Order Summary -->
			<div class="col-lg-4" data-aos="fade-left">
				<div class="tt-sidebar-card">
					<h5 class="mb-4"><i class="fas fa-receipt me-2"></i> Order Summary</h5>

					<!-- Coupon -->
					<div class="mb-4">
						<label class="tt-label mb-2">Have a coupon?</label>
						<div class="input-group">
							<input type="text" class="tt-input" placeholder="Enter code">
							<button class="btn-tt-primary">Apply</button>
						</div>
					</div>

					<hr>

					<div class="d-flex justify-content-between mb-2">
						<span>Subtotal</span>
						<strong>{{ $destinations->pricing }}</strong>
					</div>
					<div class="d-flex justify-content-between mb-2">
						<span>Taxes & Fees</span>
						<span class="text-muted">Included</span>
					</div>
					<hr>
					<div class="d-flex justify-content-between mb-4">
						<strong class="fs-5">Total</strong>
						<strong class="fs-5" style="color:var(--tt-primary);">{{ $destinations->pricing }}</strong>
					</div>

					<a href="{{ route('checkout') }}" class="btn-tt-primary w-100 text-center">
						Proceed to Checkout <i class="fas fa-arrow-right ms-1"></i>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>

@include('partials.footer')
@endsection
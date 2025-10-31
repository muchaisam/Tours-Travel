@extends('layouts.front')

@section('title', $destinations->title . ' - ToursTravel Kenya')

@section('content')
<!-- Modern Navigation -->
<nav class="navbar-modern navbar navbar-expand-lg fixed-top">
	<div class="container">
		<a class="navbar-brand d-flex align-items-center brand-logo" href="{{ url('/') }}">
			<div class="brand-icon me-2">
				<i class="fas fa-globe-africa text-white"></i>
			</div>
			<span class="fw-bold fs-4">Tours<span class="brand-text-highlight">Travel</span></span>
		</a>
		
		<button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
			<span class="navbar-toggler-icon"></span>
		</button>
		
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav ms-auto">
				<li class="nav-item">
					<a class="nav-link" href="{{ url('/') }}">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link active fw-semibold" href="{{route('packages')}}">Destinations</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="{{route('blog')}}">Blog</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="{{route('about')}}">About</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="{{route('contact')}}">Contact</a>
				</li>
				<li class="nav-item ms-2">
					<a class="btn btn-outline-gradient rounded-pill px-4" href="{{route('login')}}">Login</a>
				</li>
			</ul>
		</div>
	</div>
</nav>

<!-- Hero Section with Destination Image -->
<section class="hero-section hero-bg-overlay destination-detail-hero">
	<div class="hero-bg-image" style="background-image: url('{{ asset('images/bali.jpeg') }}'); opacity: 0.3;"></div>
	<div class="container position-relative h-100 d-flex align-items-center">
		<div class="row w-100">
			<div class="col-lg-8 mx-auto text-center text-white" data-aos="fade-up">
				<nav aria-label="breadcrumb" class="mb-4">
					<ol class="breadcrumb justify-content-center bg-transparent">
						<li class="breadcrumb-item">
							<a href="{{ url('/') }}" class="text-white-50 text-decoration-none">Home</a>
						</li>
						<li class="breadcrumb-item">
							<a href="{{ route('packages') }}" class="text-white-50 text-decoration-none">Destinations</a>
						</li>
						<li class="breadcrumb-item active text-white">{{ $destinations->title }}</li>
					</ol>
				</nav>
				<h1 class="display-4 fw-bold mb-4">{{ $destinations->title }}</h1>
				<p class="lead mb-0">
					{{ $destinations->description }}
				</p>
			</div>
		</div>
	</div>
	<div class="position-absolute bottom-0 w-100">
		<svg viewBox="0 0 1200 120" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M1200 120L0 16.48V120H1200Z" fill="currentColor" class="hero-wave"/>
		</svg>
	</div>
</section>



<!-- Main Content Section -->
<section class="py-5">
	<div class="container">
		<div class="row">
			<!-- Main Content -->
			<div class="col-lg-8">
				<!-- Destination Image Gallery -->
				<div class="mb-5" data-aos="fade-up">
					<div class="row g-4">
						<div class="col-12">
							<div class="position-relative overflow-hidden rounded-4 shadow">
								<img src="{{ asset('images/bali.jpeg') }}" alt="{{ $destinations->title }}" 
									 class="img-fluid w-100 detail-image-gallery">
								<div class="position-absolute top-0 start-0 m-3">
									<span class="badge detail-featured-badge fs-6 px-3 py-2 rounded-pill">
										<i class="fas fa-map-marker-alt me-1"></i>
										Featured Destination
									</span>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Destination Details -->
				<div class="mb-5" data-aos="fade-up" data-aos-delay="100">
					<div class="card detail-content-card shadow-sm p-4">
						<h2 class="display-6 fw-bold mb-4 detail-heading">{{ $destinations->title }}</h2>
						<p class="lead detail-lead mb-4">{{ $destinations->description }}</p>
						
						<div class="destination-content">
							<h4 class="fw-bold mb-3">About This Destination</h4>
							<p class="detail-content-text lh-lg">{{ $destinations->content }}</p>
						</div>
					</div>
				</div>

				<!-- Booking Section -->
				<div class="mb-5" data-aos="fade-up" data-aos-delay="200">
					<div class="card detail-booking-card shadow-sm">
						<div class="card-body p-0">
							<div class="row g-0">
								<div class="col-md-8 p-4">
									<h4 class="fw-bold mb-3 detail-booking-heading">Ready to Book Your Adventure?</h4>
									<p class="detail-booking-text mb-4">
										Experience the beauty and culture of {{ $destinations->title }}. 
										Our expert guides will ensure you have an unforgettable journey through Kenya's most spectacular destinations.
									</p>
									<div class="d-flex flex-wrap gap-3">
										<a href="{{ route('cart') }}" class="btn btn-gradient btn-lg px-4 py-2 rounded-pill">
											<i class="fas fa-shopping-cart me-2"></i>
											Add to Cart
										</a>
										<a href="{{ route('contact') }}" class="btn btn-outline-gradient btn-lg px-4 py-2 rounded-pill">
											<i class="fas fa-phone me-2"></i>
											Contact Us
										</a>
									</div>
								</div>
								<div class="col-md-4 d-flex align-items-center justify-content-center detail-booking-sidebar">
									<div class="text-center text-white">
										<i class="fas fa-plane display-4 mb-3"></i>
										<h5 class="fw-bold">Book Now</h5>
										<p class="mb-0">Best Rates Guaranteed</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Sidebar -->
			<div class="col-lg-4">
				<!-- Pricing Card -->
				<div class="detail-sidebar-card shadow-sm mb-4" data-aos="fade-left">
					<div class="card-body p-4">
						<div class="text-center mb-4">
							<p class="detail-price-label mb-2">Starting From</p>
							<h2 class="detail-price-amount mb-0">
								KSH {{ number_format($destinations->price, 0, '.', ',') }}
							</h2>
							<p class="text-muted small mb-0">per person</p>
						</div>
						
						<div class="d-grid gap-3">
							<div class="detail-info-item">
								<div class="detail-info-icon-wrapper">
									<i class="fas fa-clock text-white"></i>
								</div>
								<div>
									<p class="detail-info-label mb-0">Duration</p>
									<p class="detail-info-value mb-0">{{ $destinations->duration ?? '7 Days' }}</p>
								</div>
							</div>
							
							<div class="detail-info-item">
								<div class="detail-info-icon-wrapper">
									<i class="fas fa-users text-white"></i>
								</div>
								<div>
									<p class="detail-info-label mb-0">Group Size</p>
									<p class="detail-info-value mb-0">{{ $destinations->group_size ?? '10-15 People' }}</p>
								</div>
							</div>
							
							<div class="detail-info-item">
								<div class="detail-info-icon-wrapper">
									<i class="fas fa-map-marked-alt text-white"></i>
								</div>
								<div>
									<p class="detail-info-label mb-0">Tour Type</p>
									<p class="detail-info-value mb-0">{{ $destinations->tour_type ?? 'Adventure' }}</p>
								</div>
							</div>
							
							<div class="detail-info-item">
								<div class="detail-info-icon-wrapper">
									<i class="fas fa-star text-white"></i>
								</div>
								<div>
									<p class="detail-info-label mb-0">Rating</p>
									<p class="detail-info-value mb-0">4.8/5 (120 reviews)</p>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Quick Search -->
				<div class="detail-sidebar-card shadow-sm mb-4" data-aos="fade-left" data-aos-delay="100">
					<div class="card-body p-4">
						<h5 class="fw-bold mb-3">Find Destinations</h5>
						<form action="{{ route('packages') }}" method="GET">
							<div class="input-group">
								<input type="text" class="search-input" 
									   name="search" placeholder="Search destinations...">
								<button class="search-btn" type="submit">
									<i class="fas fa-search"></i>
								</button>
							</div>
						</form>
					</div>
				</div>

				<!-- Popular Tags -->
				@if(isset($tags) && count($tags) > 0)
				<div class="detail-sidebar-card shadow-sm mb-4" data-aos="fade-left" data-aos-delay="200">
					<div class="card-body p-4">
						<h5 class="fw-bold mb-3">Popular Tags</h5>
						<div class="d-flex flex-wrap gap-2">
							@foreach ($tags as $tag)
							<a href="#" class="btn btn-outline-gradient btn-sm rounded-pill">
								{{ $tag->name }}
							</a>
							@endforeach
						</div>
					</div>
				</div>
				@endif

				<!-- Categories -->
				@if(isset($categories) && count($categories) > 0)
				<div class="detail-sidebar-card shadow-sm mb-4" data-aos="fade-left" data-aos-delay="300">
					<div class="card-body p-4">
						<h5 class="fw-bold mb-3">Destination Categories</h5>
						<div class="list-group list-group-flush">
							@foreach ($categories as $category)
							<a href="#" class="list-group-item list-group-item-action border-0 py-3 d-flex justify-content-between align-items-center">
								<span>{{ $category->name }}</span>
								<i class="fas fa-chevron-right text-muted"></i>
							</a>
							@endforeach
						</div>
					</div>
				</div>
				@endif

				<!-- Contact Info -->
				<div class="detail-sidebar-card shadow-sm" data-aos="fade-left" data-aos-delay="400">
					<div class="card-body p-4 text-center">
						<div class="mb-3">
							<div class="detail-info-icon-wrapper mx-auto mb-3">
								<i class="fas fa-headset text-white fs-4"></i>
							</div>
						</div>
						<h5 class="fw-bold mb-3">Need Help?</h5>
						<p class="text-muted mb-3">Our travel experts are here to assist you 24/7</p>
						<a href="tel:+254712345678" class="btn btn-gradient rounded-pill w-100 mb-2">
							<i class="fas fa-phone me-2"></i>
							+254 712 345 678
						</a>
						<a href="mailto:info@tourskenya.com" class="btn btn-outline-gradient rounded-pill w-100">
							<i class="fas fa-envelope me-2"></i>
							Get Quote
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Footer -->
<footer class="detail-footer">
	<div class="container">
		<div class="row g-4">
			<div class="col-lg-4">
				<div class="d-flex align-items-center mb-4">
					<div class="detail-footer-icon-wrapper me-3">
						<i class="fas fa-globe-africa text-white"></i>
					</div>
					<h4 class="fw-bold mb-0">
						<span class="brand-text">Tours</span><span class="brand-text-highlight">Travel</span>
					</h4>
				</div>
				<p class="text-light mb-4">
					Discover the magic of Kenya with our expertly crafted tours. From the Maasai Mara to the coastal beaches of Mombasa, 
					we create unforgettable experiences that showcase the beauty and culture of our beloved country.
				</p>
				<div class="d-flex gap-3">
					<a href="#" class="social-icon-circle">
						<i class="fab fa-facebook-f"></i>
					</a>
					<a href="#" class="social-icon-circle">
						<i class="fab fa-twitter"></i>
					</a>
					<a href="#" class="social-icon-circle">
						<i class="fab fa-instagram"></i>
					</a>
					<a href="#" class="social-icon-circle">
						<i class="fab fa-youtube"></i>
					</a>
				</div>
			</div>
			
			<div class="col-lg-2 col-md-6">
				<h5 class="fw-bold mb-4">Quick Links</h5>
				<ul class="list-unstyled">
					<li class="mb-2"><a href="{{ url('/') }}" class="text-light text-decoration-none hover-highlight">Home</a></li>
					<li class="mb-2"><a href="{{ route('packages') }}" class="text-light text-decoration-none hover-highlight">Destinations</a></li>
					<li class="mb-2"><a href="{{ route('blog') }}" class="text-light text-decoration-none hover-highlight">Blog</a></li>
					<li class="mb-2"><a href="{{ route('about') }}" class="text-light text-decoration-none hover-highlight">About Us</a></li>
					<li class="mb-2"><a href="{{ route('contact') }}" class="text-light text-decoration-none hover-highlight">Contact</a></li>
				</ul>
			</div>

			@if(isset($categories) && count($categories) > 0)
			<div class="col-lg-3 col-md-6">
				<h5 class="fw-bold mb-4">Categories</h5>
				<ul class="list-unstyled">
					@foreach ($categories->take(6) as $category)
					<li class="mb-2">
						<a href="#" class="text-light text-decoration-none hover-highlight">{{ $category->name }}</a>
					</li>
					@endforeach
				</ul>
			</div>
			@endif
			
			<div class="col-lg-3 col-md-6">
				<h5 class="fw-bold mb-4">Contact Info</h5>
				<ul class="list-unstyled">
					<li class="mb-3 d-flex align-items-start">
						<i class="fas fa-map-marker-alt me-3 mt-1 text-primary"></i>
						<span class="text-light">Ole Sangale Road, off Langata Road, Madaraka Estate, Nairobi, Kenya</span>
					</li>
					<li class="mb-3 d-flex align-items-center">
						<i class="fas fa-phone me-3 text-primary"></i>
						<a href="tel:+254712345678" class="text-light text-decoration-none hover-highlight">+254 712 345 678</a>
					</li>
					<li class="mb-3 d-flex align-items-center">
						<i class="fas fa-envelope me-3 text-primary"></i>
						<a href="mailto:info@tourskenya.com" class="text-light text-decoration-none hover-highlight">info@tourskenya.com</a>
					</li>
				</ul>
			</div>
		</div>
		
		<hr class="my-4 border-secondary">
		
		<div class="row align-items-center">
			<div class="col-md-6">
				<p class="mb-0 text-light">
					&copy; <span id="year"></span> ToursTravel Kenya. All rights reserved.
				</p>
			</div>
			<div class="col-md-6 text-md-end">
				<p class="mb-0 text-light">
					Made with <i class="fas fa-heart text-danger"></i> in Kenya
				</p>
			</div>
		</div>
	</div>
</footer>

<script>
	document.getElementById('year').textContent = new Date().getFullYear();
</script>
@endsection
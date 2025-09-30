@extends('layouts.front')

@section('title', $destinations->title . ' - ToursTravel Kenya')

@section('content')
<!-- Modern Navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm fixed-top">
	<div class="container">
		<a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
			<div class="me-2 d-flex align-items-center justify-content-center rounded-circle" 
				 style="width: 40px; height: 40px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
				<i class="fas fa-globe-africa text-white"></i>
			</div>
			<span class="fw-bold fs-4">Tours<span style="color: #667eea;">Travel</span></span>
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
					<a class="btn btn-outline-primary rounded-pill px-4" href="{{route('login')}}">Login</a>
				</li>
			</ul>
		</div>
	</div>
</nav>

<!-- Hero Section with Destination Image -->
<section class="hero-section position-relative overflow-hidden" 
		 style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); min-height: 60vh; margin-top: 76px;">
	<div class="position-absolute w-100 h-100" 
		 style="background: url('{{ asset('images/bali.jpeg') }}') center/cover; opacity: 0.3;"></div>
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
			<path d="M1200 120L0 16.48V120H1200Z" fill="white"/>
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
									 class="img-fluid w-100" style="height: 400px; object-fit: cover;">
								<div class="position-absolute top-0 start-0 m-3">
									<span class="badge bg-primary fs-6 px-3 py-2 rounded-pill">
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
					<div class="card border-0 shadow-sm rounded-4 p-4">
						<h2 class="display-6 fw-bold mb-4 text-primary">{{ $destinations->title }}</h2>
						<p class="lead text-muted mb-4">{{ $destinations->description }}</p>
						
						<div class="destination-content">
							<h4 class="fw-bold mb-3">About This Destination</h4>
							<p class="text-muted lh-lg">{{ $destinations->content }}</p>
						</div>
					</div>
				</div>

				<!-- Booking Section -->
				<div class="mb-5" data-aos="fade-up" data-aos-delay="200">
					<div class="card border-0 shadow-sm rounded-4 overflow-hidden">
						<div class="card-body p-0">
							<div class="row g-0">
								<div class="col-md-8 p-4">
									<h4 class="fw-bold mb-3">Ready to Book Your Adventure?</h4>
									<p class="text-muted mb-4">
										Experience the beauty and culture of {{ $destinations->title }}. 
										Our expert guides will ensure you have an unforgettable journey through Kenya's most spectacular destinations.
									</p>
									<div class="d-flex flex-wrap gap-3">
										<a href="{{ route('cart') }}" class="btn btn-primary btn-lg px-4 py-2 rounded-pill">
											<i class="fas fa-shopping-cart me-2"></i>
											Add to Cart
										</a>
										<a href="{{ route('contact') }}" class="btn btn-outline-primary btn-lg px-4 py-2 rounded-pill">
											<i class="fas fa-phone me-2"></i>
											Contact Us
										</a>
									</div>
								</div>
								<div class="col-md-4 d-flex align-items-center justify-content-center" 
									 style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); min-height: 200px;">
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
				<!-- Quick Search -->
				<div class="card border-0 shadow-sm rounded-4 mb-4" data-aos="fade-left">
					<div class="card-body p-4">
						<h5 class="fw-bold mb-3">Find Destinations</h5>
						<form action="{{ route('packages') }}" method="GET">
							<div class="input-group">
								<input type="text" class="form-control border-0 bg-light" 
									   name="search" placeholder="Search destinations...">
								<button class="btn btn-primary" type="submit">
									<i class="fas fa-search"></i>
								</button>
							</div>
						</form>
					</div>
				</div>

				<!-- Popular Tags -->
				@if(isset($tags) && count($tags) > 0)
				<div class="card border-0 shadow-sm rounded-4 mb-4" data-aos="fade-left" data-aos-delay="100">
					<div class="card-body p-4">
						<h5 class="fw-bold mb-3">Popular Tags</h5>
						<div class="d-flex flex-wrap gap-2">
							@foreach ($tags as $tag)
							<a href="#" class="btn btn-outline-primary btn-sm rounded-pill">
								{{ $tag->name }}
							</a>
							@endforeach
						</div>
					</div>
				</div>
				@endif

				<!-- Categories -->
				@if(isset($categories) && count($categories) > 0)
				<div class="card border-0 shadow-sm rounded-4 mb-4" data-aos="fade-left" data-aos-delay="200">
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
				<div class="card border-0 shadow-sm rounded-4" data-aos="fade-left" data-aos-delay="300">
					<div class="card-body p-4 text-center">
						<div class="mb-3">
							<div class="d-inline-flex align-items-center justify-content-center rounded-circle mb-3" 
								 style="width: 60px; height: 60px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
								<i class="fas fa-headset text-white fs-4"></i>
							</div>
						</div>
						<h5 class="fw-bold mb-3">Need Help?</h5>
						<p class="text-muted mb-3">Our travel experts are here to assist you 24/7</p>
						<a href="tel:+254712345678" class="btn btn-primary rounded-pill w-100 mb-2">
							<i class="fas fa-phone me-2"></i>
							+254 712 345 678
						</a>
						<a href="mailto:info@tourskenya.com" class="btn btn-outline-primary rounded-pill w-100">
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
<footer class="bg-dark text-white py-5 mt-5">
	<div class="container">
		<div class="row g-4">
			<div class="col-lg-4">
				<div class="d-flex align-items-center mb-4">
					<div class="me-3 d-flex align-items-center justify-content-center rounded-circle" 
						 style="width: 50px; height: 50px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
						<i class="fas fa-globe-africa text-white"></i>
					</div>
					<h4 class="fw-bold mb-0">Tours<span style="color: #667eea;">Travel</span></h4>
				</div>
				<p class="text-light mb-4">
					Discover the magic of Kenya with our expertly crafted tours. From the Maasai Mara to the coastal beaches of Mombasa, 
					we create unforgettable experiences that showcase the beauty and culture of our beloved country.
				</p>
				<div class="d-flex gap-3">
					<a href="#" class="btn btn-outline-light btn-sm rounded-circle" style="width: 40px; height: 40px;">
						<i class="fab fa-facebook-f"></i>
					</a>
					<a href="#" class="btn btn-outline-light btn-sm rounded-circle" style="width: 40px; height: 40px;">
						<i class="fab fa-twitter"></i>
					</a>
					<a href="#" class="btn btn-outline-light btn-sm rounded-circle" style="width: 40px; height: 40px;">
						<i class="fab fa-instagram"></i>
					</a>
					<a href="#" class="btn btn-outline-light btn-sm rounded-circle" style="width: 40px; height: 40px;">
						<i class="fab fa-youtube"></i>
					</a>
				</div>
			</div>
			
			<div class="col-lg-2 col-md-6">
				<h5 class="fw-bold mb-4">Quick Links</h5>
				<ul class="list-unstyled">
					<li class="mb-2"><a href="{{ url('/') }}" class="text-light text-decoration-none">Home</a></li>
					<li class="mb-2"><a href="{{ route('packages') }}" class="text-light text-decoration-none">Destinations</a></li>
					<li class="mb-2"><a href="{{ route('blog') }}" class="text-light text-decoration-none">Blog</a></li>
					<li class="mb-2"><a href="{{ route('about') }}" class="text-light text-decoration-none">About Us</a></li>
					<li class="mb-2"><a href="{{ route('contact') }}" class="text-light text-decoration-none">Contact</a></li>
				</ul>
			</div>

			@if(isset($categories) && count($categories) > 0)
			<div class="col-lg-3 col-md-6">
				<h5 class="fw-bold mb-4">Categories</h5>
				<ul class="list-unstyled">
					@foreach ($categories->take(6) as $category)
					<li class="mb-2">
						<a href="#" class="text-light text-decoration-none">{{ $category->name }}</a>
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
						<a href="tel:+254712345678" class="text-light text-decoration-none">+254 712 345 678</a>
					</li>
					<li class="mb-3 d-flex align-items-center">
						<i class="fas fa-envelope me-3 text-primary"></i>
						<a href="mailto:info@tourskenya.com" class="text-light text-decoration-none">info@tourskenya.com</a>
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
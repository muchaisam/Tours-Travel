

@extends('layouts.front')

@section('page')

<!-- Modern 2025 Navigation -->
<nav class="navbar navbar-expand-lg navbar-light navbar-modern fixed-top">
	<div class="container">
		<!-- Modern Logo -->
		<a class="navbar-brand d-flex align-items-center" href="">
			<div class="me-2 d-flex align-items-center justify-content-center brand-logo">
				<i class="fas fa-globe-africa text-white"></i>
			</div>
			<span class="ms-2">Tours<span class="brand-text-highlight">Travel</span></span>
		</a>

		<!-- Mobile Toggle -->
		<button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
			<span class="navbar-toggler-icon"></span>
		</button>

		<!-- Navigation Menu -->
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav mx-auto">
				<li class="nav-item">
					<a class="nav-link fw-semibold active" href="">
						Home
						<span class="nav-link-indicator"></span>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link fw-semibold" href="{{route('packages')}}">Destinations</a>
				</li>
				<li class="nav-item">
					<a class="nav-link fw-semibold" href="{{route('blog')}}">Blog</a>
				</li>
				<li class="nav-item">
					<a class="nav-link fw-semibold" href="{{route('contact')}}">Contact</a>
				</li>
				<li class="nav-item">
					<a class="nav-link fw-semibold" href="{{route('about')}}">About</a>
				</li>
			</ul>
			
			<!-- Auth Section -->
			<div class="d-flex align-items-center">
				@auth
					<!-- User is logged in -->
					<div class="dropdown">
						<a class="nav-link dropdown-toggle d-flex align-items-center fw-semibold me-3" 
						   href="#" role="button" id="userDropdown" data-bs-toggle="dropdown" 
						   aria-expanded="false">
							<div class="me-2 d-flex align-items-center justify-content-center user-avatar">
								<i class="fas fa-user text-white"></i>
							</div>
							<span>{{ Auth::user()->name }}</span>
						</a>
						<ul class="dropdown-menu dropdown-menu-modern dropdown-menu-end shadow border-0 rounded-3">
							<li>
								<h6 class="dropdown-header d-flex align-items-center">
									<i class="fas fa-user-circle me-2 text-primary"></i>
									Welcome back!
								</h6>
							</li>
							<li><hr class="dropdown-divider"></li>
							<li>
								<a class="dropdown-item d-flex align-items-center py-2" href="{{ route('home') }}">
									<i class="fas fa-tachometer-alt me-2 text-primary"></i>
									Dashboard
								</a>
							</li>
							<li>
								<a class="dropdown-item d-flex align-items-center py-2" href="{{ route('users.edit-profile') }}">
									<i class="fas fa-user-edit me-2 text-info"></i>
									Edit Profile
								</a>
							</li>
							<li><hr class="dropdown-divider"></li>
							<li>
								<a class="dropdown-item d-flex align-items-center py-2 text-danger" 
								   href="{{ route('logout') }}"
								   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
									<i class="fas fa-sign-out-alt me-2"></i>
									Logout
								</a>
							</li>
						</ul>
					</div>
					
					<!-- Logout Form -->
					<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
						@csrf
					</form>
				@else
					<!-- User is not logged in -->
					<a href="{{route('login')}}" class="btn btn-outline-gradient rounded-pill px-3 py-2 fw-semibold me-2 btn-modern">
						<i class="fas fa-sign-in-alt me-1"></i>Sign In
					</a>
					<a href="{{route('register')}}" class="btn btn-gradient rounded-pill px-4 py-2 fw-semibold btn-modern">
						<i class="fas fa-user-plus me-2"></i>Get Started
					</a>
				@endauth
			</div>
		</div>
	</div>
</nav>

<!-- Modern Hero Section -->
<section class="hero-section position-relative overflow-hidden">
	<!-- Background Image with Overlay -->
	<img src="images/place-4.jpg" alt="Kenya Landscape" class="hero-bg-image">
	<div class="hero-bg-overlay"></div>

	<div class="container h-100 d-flex align-items-center" style="min-height: 100vh; padding-top: 100px;">
		<div class="row w-100 align-items-center">
			<div class="col-lg-6">
				<!-- Hero Content -->
				<div class="hero-content text-white">
					<div class="mb-4">
						<span class="badge hero-badge rounded-pill px-3 py-2 mb-3" style="font-size: 0.9rem;">
							🇰🇪 @auth Welcome back, {{ Auth::user()->name }}! @else Discover Kenya & Beyond @endauth
						</span>
					</div>
					
					@auth
					<h1 class="hero-title mb-4">
						Ready for Your Next <span class="hero-highlight">Adventure</span>, {{ Auth::user()->name }}?
					</h1>
					
					<p class="hero-subtitle mb-5">
						Welcome back! Continue exploring Kenya's most spectacular destinations and discover new experiences waiting just for you.
					</p>
					@else
					<h1 class="hero-title mb-4">
						Create <span class="hero-highlight">Unforgettable</span><br>
						Travel Memories
					</h1>
					
					<p class="hero-subtitle mb-5">
						Discover Kenya's breathtaking landscapes, experience rich Swahili culture, and create lasting memories with our expertly curated local travel experiences.
					</p>
					@endauth
					
					<div class="d-flex flex-wrap gap-3 mb-5">
						@auth
						<a href="{{route('packages')}}" class="btn btn-hero-primary btn-lg rounded-pill px-5 py-3 btn-modern">
							<i class="fas fa-compass me-2"></i>Continue Exploring
						</a>
						<a href="{{ route('home') }}" class="btn btn-hero-outline btn-lg rounded-pill px-5 py-3 btn-modern">
							<i class="fas fa-tachometer-alt me-2"></i>My Dashboard
						</a>
						@else
						<a href="{{route('packages')}}" class="btn btn-hero-primary btn-lg rounded-pill px-5 py-3 btn-modern">
							<i class="fas fa-compass me-2"></i>Explore Destinations
						</a>
						<button class="btn btn-hero-outline btn-lg rounded-pill px-5 py-3 btn-modern" 
								data-bs-toggle="modal" data-bs-target="#videoModal">
							<i class="fas fa-play me-2"></i>Watch Video
						</button>
						@endauth
					</div>
					
					<!-- Stats -->
					<div class="row g-4">
						<div class="col-auto">
							<div class="text-center">
								<h3 class="hero-stat-number mb-1" data-count="100">100+</h3>
								<small class="hero-stat-label">Destinations</small>
							</div>
						</div>
						<div class="col-auto">
							<div class="text-center">
								<h3 class="hero-stat-number mb-1" data-count="50000">50K+</h3>
								<small class="hero-stat-label">Happy Travelers</small>
							</div>
						</div>
						<div class="col-auto">
							<div class="text-center">
								<h3 class="hero-stat-number mb-1">4.9★</h3>
								<small class="hero-stat-label">Rating</small>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="col-lg-6">
				<!-- Hero Image/Visual Element -->
				<div class="position-relative">
					<!-- Floating Cards -->
					<div class="card floating-card floating-card-1 border-0 position-absolute">
						<div class="card-body p-4">
							<div class="d-flex align-items-center mb-3">
								<img src="images/place-1.jpg" alt="Destination" class="rounded-circle me-3" style="width: 50px; height: 50px; object-fit: cover;">
								<div>
									<h6 class="mb-1 fw-semibold" style="color: var(--text-primary);">Bali, Indonesia</h6>
									<small class="text-muted">Starting from $299</small>
								</div>
							</div>
							<div class="d-flex justify-content-between align-items-center">
								<div class="d-flex align-items-center">
									<i class="fas fa-star text-warning me-1"></i>
									<small class="fw-semibold" style="color: var(--text-primary);">4.8 (2.1k)</small>
								</div>
								<small class="text-primary fw-semibold">7 Days Tour</small>
							</div>
						</div>
					</div>
					
					<div class="card floating-card floating-card-2 border-0 position-absolute">
						<div class="card-body p-4">
							<div class="text-center">
								<div class="mb-3">
									<i class="fas fa-plane text-primary" style="font-size: 2rem;"></i>
								</div>
								<h6 class="fw-semibold mb-2" style="color: var(--text-primary);">Ready for Adventure?</h6>
								<small class="text-muted">Book your dream destination today</small>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Scroll Indicator -->
	<div class="position-absolute bottom-0 start-50 translate-middle-x mb-4">
		<div class="scroll-indicator text-center">
			<small class="d-block mb-2">Scroll to explore</small>
			<i class="fas fa-chevron-down"></i>
		</div>
	</div>
</section>

<!-- Video Modal -->
<div class="modal fade" id="videoModal" tabindex="-1">
	<div class="modal-dialog modal-lg modal-dialog-centered">
		<div class="modal-content border-0 rounded-4">
			<div class="modal-header border-0">
				<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
			</div>
			<div class="modal-body p-0">
				<div class="ratio ratio-16x9">
					<iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ" title="Travel Video" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Modern Search Section -->
<section class="search-section">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-xl-10">
				<div class="card search-card shadow-lg">
					<div class="card-body p-4">
						<form action="#" method="GET">
							<div class="row g-3 align-items-end">
								<!-- Destination Search -->
								<div class="col-lg-4">
									<label class="form-label fw-semibold mb-2">
										<i class="fas fa-map-marker-alt me-2 text-primary"></i>Destination
									</label>
									<div class="position-relative">
										<input type="text" class="form-control form-control-lg search-input" 
											   placeholder="Where do you want to go?">
										<i class="fas fa-search position-absolute text-muted" style="left: 1rem; top: 50%; transform: translateY(-50%);"></i>
									</div>
								</div>
								
								<!-- Check-in Date -->
								<div class="col-lg-3">
									<label class="form-label fw-semibold mb-2">
										<i class="fas fa-calendar-check me-2 text-primary"></i>Check-in
									</label>
									<input type="date" class="form-control form-control-lg search-input">
								</div>
								
								<!-- Check-out Date -->
								<div class="col-lg-3">
									<label class="form-label fw-semibold mb-2">
										<i class="fas fa-calendar-times me-2 text-primary"></i>Check-out
									</label>
									<input type="date" class="form-control form-control-lg search-input">
								</div>
								
								<!-- Search Button -->
								<div class="col-lg-2">
									<button type="submit" class="btn search-btn btn-lg w-100 h-100">
										<i class="fas fa-search"></i>
										<span class="d-none d-md-inline ms-2">Search</span>
									</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
											
<!-- Modern Services Section -->
<section class="services-section">
	<div class="container">
		<div class="row align-items-center g-5">
			<!-- Content Column -->
			<div class="col-lg-6 order-lg-2">
				<div class="service-content">
					<div class="mb-4">
						<span class="badge service-badge rounded-pill px-3 py-2 mb-3">
							✨ Why Choose Us
						</span>
					</div>
					
					<h2 class="display-5 fw-bold service-heading">
						It's Time to Start Your 
						<span class="service-heading-highlight">Adventure</span>
					</h2>
					
					<p class="lead service-lead">
						Experience the world like never before with our expertly crafted travel experiences. We handle every detail so you can focus on creating memories that last a lifetime.
					</p>
					
					<p class="service-text">
						From breathtaking landscapes to cultural immersion, our curated destinations offer unique experiences that go beyond typical tourism. Join thousands of travelers who have discovered the world with us.
					</p>
					
					<div class="d-flex flex-wrap gap-3">
						<a href="{{route('packages')}}" class="btn btn-gradient btn-lg rounded-pill px-5 py-3">
							<i class="fas fa-compass me-2"></i>Explore Destinations
						</a>
						<a href="{{route('contact')}}" class="btn btn-outline-gradient btn-lg rounded-pill px-5 py-3">
							<i class="fas fa-phone me-2"></i>Get Quote
						</a>
					</div>
				</div>
			</div>
			
			<!-- Services Grid Column -->
			<div class="col-lg-6 order-lg-1">
				<div class="row g-4">
					<!-- Service 1 -->
					<div class="col-md-6">
						<div class="card service-card h-100">
							<div class="card-body p-4 text-center">
								<div class="service-icon mb-3">
									<div class="service-icon-wrapper service-icon-1">
										<i class="fas fa-hiking text-white" style="font-size: 1.5rem;"></i>
									</div>
								</div>
								<h5 class="service-card-title">Adventure Activities</h5>
								<p class="service-card-text mb-0">Thrilling experiences from mountain climbing to water sports, tailored to your adventure level.</p>
							</div>
						</div>
					</div>
					
					<!-- Service 2 -->
					<div class="col-md-6">
						<div class="card service-card h-100">
							<div class="card-body p-4 text-center">
								<div class="service-icon mb-3">
									<div class="service-icon-wrapper service-icon-2">
										<i class="fas fa-route text-white" style="font-size: 1.5rem;"></i>
									</div>
								</div>
								<h5 class="service-card-title">Custom Itineraries</h5>
								<p class="service-card-text mb-0">Personalized travel arrangements crafted to match your preferences and budget.</p>
							</div>
						</div>
					</div>
					
					<!-- Service 3 -->
					<div class="col-md-6">
						<div class="card service-card h-100">
							<div class="card-body p-4 text-center">
								<div class="service-icon mb-3">
									<div class="service-icon-wrapper service-icon-3">
										<i class="fas fa-user-tie text-white" style="font-size: 1.5rem;"></i>
									</div>
								</div>
								<h5 class="service-card-title">Expert Guides</h5>
								<p class="service-card-text mb-0">Professional local guides who bring destinations to life with insider knowledge.</p>
							</div>
						</div>
					</div>
					
					<!-- Service 4 -->
					<div class="col-md-6">
						<div class="card service-card h-100">
							<div class="card-body p-4 text-center">
								<div class="service-icon mb-3">
									<div class="service-icon-wrapper service-icon-4">
										<i class="fas fa-map-marked-alt text-white" style="font-size: 1.5rem;"></i>
									</div>
								</div>
								<h5 class="service-card-title">24/7 Support</h5>
								<p class="service-card-text mb-0">Round-the-clock assistance to ensure your journey is smooth and worry-free.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Add Hover Effects -->
<style>
.hover-lift:hover {
	transform: translateY(-10px);
	box-shadow: 0 20px 40px rgba(0,0,0,0.1) !important;
}
</style>

<section class="ftco-counter img" id="section-counter">
	<div class="container">
		<div class="row d-flex">
			<div class="col-md-6 d-flex">
				<div class="img d-flex align-self-stretch" style="background-image:url(images/about.jpg);"></div>
			</div>
			<div class="col-md-6 pl-md-5 py-5">
				<div class="row justify-content-start pb-3">
					<div class="col-md-12 heading-section ftco-animate">
						<h2 class="mb-4">Make Your Tour Memorable and Safe With Us</h2>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
							there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the
							Semantics, a large language ocean.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 justify-content-center counter-wrap ftco-animate">
						<div class="block-18 text-center mb-4">
							<div class="text">
								<strong class="number" data-number="300">0</strong>
								<span>Successful Tours</span>
							</div>
						</div>
					</div>
					<div class="col-md-4 justify-content-center counter-wrap ftco-animate">
						<div class="block-18 text-center mb-4">
							<div class="text">
								<strong class="number" data-number="24000">0</strong>
								<span>Happy Tourist</span>
							</div>
						</div>
					</div>
					<div class="col-md-4 justify-content-center counter-wrap ftco-animate">
						<div class="block-18 text-center mb-4">
							<div class="text">
								<strong class="number" data-number="200">0</strong>
								<span>Place Explored</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="ftco-section">
	<div class="container">
		<div class="row justify-content-center pb-4">
			<div class="col-md-12 heading-section text-center ftco-animate">
				<h2 class="mb-4">Popular Destinations</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3 ftco-animate">
				<div class="project-destination">
					<a href="#" class="img" style="background-image: url(images/place-1.jpg);">
						<div class="text">
							<h3>Singapore</h3>
							<span>8 Tours</span>
						</div>
					</a>
				</div>
			</div>
			<div class="col-md-3 ftco-animate">
				<div class="project-destination">
					<a href="#" class="img" style="background-image: url(images/place-2.jpg);">
						<div class="text">
							<h3>Canada</h3>
							<span>2 Tours</span>
						</div>
					</a>
				</div>
			</div>
			<div class="col-md-3 ftco-animate">
				<div class="project-destination">
					<a href="#" class="img" style="background-image: url(images/place-3.jpg);">
						<div class="text">
							<h3>Thailand</h3>
							<span>5 Tours</span>
						</div>
					</a>
				</div>
			</div>
			<div class="col-md-3 ftco-animate">
				<div class="project-destination">
					<a href="#" class="img" style="background-image: url(images/place-4.jpg);">
						<div class="text">
							<h3>Australia</h3>
							<span>5 Tours</span>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Modern Destinations Showcase Section -->
<section class="destinations-section">
	<div class="container">
		<!-- Section Header -->
		<div class="row justify-content-center mb-5">
			<div class="col-lg-8 text-center" data-aos="fade-up">
				<div class="mb-4">
					<span class="badge destination-badge rounded-pill px-3 py-2 mb-3">
						🌍 Popular Destinations
					</span>
				</div>
				<h2 class="display-5 fw-bold destinations-heading mb-4">
					Discover Your Next 
					<span class="destinations-heading-highlight">Adventure</span>
				</h2>
				<p class="lead destinations-lead">
					Handpicked Kenyan destinations offering unique safari experiences, breathtaking landscapes, and unforgettable cultural memories.
				</p>
			</div>
		</div>

		<!-- Destinations Grid -->
		<div class="row g-4">
			@foreach ($destinations as $destination)
			<div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="{{ $loop->iteration * 100 }}">
				<div class="card destination-card shadow-lg h-100">
					
					<!-- Image Container -->
					<div class="destination-image-wrapper">
						<img src="images/destination-2.jpg" alt="{{ $destination->title }}" 
							 class="destination-image card-img-top">
						
						<!-- Category Badge -->
						<div class="position-absolute top-0 start-0 m-3">
							<span class="badge destination-category-badge rounded-pill px-3 py-2">
								{{ $destination->category->name }}
							</span>
						</div>
						
						<!-- Favorite Button -->
						<div class="position-absolute top-0 end-0 m-3">
							<button class="btn destination-favorite-btn">
								<i class="fas fa-heart text-muted"></i>
							</button>
						</div>
						
						<!-- Overlay Gradient -->
						<div class="destination-overlay"></div>
					</div>
					
					<!-- Card Content -->
					<div class="card-body p-4">
						<!-- Pricing & Duration -->
						<div class="d-flex justify-content-between align-items-center mb-3">
							<div class="price-info">
								<h4 class="destination-price mb-0">
									@php
										// Extract numeric value from pricing string (e.g., "Kshs 90000" -> 90000)
										$numericPrice = (int) preg_replace('/[^\d]/', '', $destination->pricing);
									@endphp
									KSh {{ number_format($numericPrice) }}
								</h4>
								<small class="text-muted">per person</small>
							</div>
							<div class="duration-info text-end">
								<div class="badge destination-duration-badge">
									<i class="fas fa-clock me-1"></i>10 Days
								</div>
							</div>
						</div>
						
						<!-- Title -->
						<h5 class="card-title mb-3">
							<a href="{{ route('desti.show', $destination->id) }}" 
							   class="text-decoration-none destination-title">
								{{ $destination->title }}
							</a>
						</h5>
						
						<!-- Features -->
						<div class="features-list mb-4">
							<div class="row g-2">
								<div class="col-auto">
									<div class="d-flex align-items-center">
										<div class="icon-circle me-2">
											<i class="fas fa-shower destination-feature-icon"></i>
										</div>
										<small class="destination-feature-text">2 Bathrooms</small>
									</div>
								</div>
								<div class="col-auto">
									<div class="d-flex align-items-center">
										<div class="icon-circle me-2">
											<i class="fas fa-bed destination-feature-icon"></i>
										</div>
										<small class="destination-feature-text">3 Bedrooms</small>
									</div>
								</div>
								<div class="col-12">
									<div class="d-flex align-items-center">
										<div class="icon-circle me-2">
											<i class="fas fa-umbrella-beach destination-feature-icon"></i>
										</div>
										<small class="destination-feature-text">Near Beach</small>
									</div>
								</div>
							</div>
						</div>
						
						<!-- Rating & Reviews -->
						<div class="d-flex justify-content-between align-items-center mb-3">
							<div class="rating">
								<span class="text-warning">
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="fas fa-star-half-alt"></i>
								</span>
								<small class="text-muted ms-2">(4.8) 124 reviews</small>
							</div>
						</div>
						
						<!-- Action Button -->
						<a href="{{ route('desti.show', $destination->id) }}" 
						   class="btn btn-gradient w-100 rounded-pill py-3">
							<i class="fas fa-eye me-2"></i>Explore Destination
						</a>
					</div>
				</div>
			</div>
			@endforeach
		</div>

		<!-- Pagination -->
		<div class="row justify-content-center mt-5">
			<div class="col-auto">
				<div class="d-flex justify-content-center">
					{{ $destinations->appends(['search' => request()->query('search')])->links() }}
				</div>
			</div>
		</div>
		
		<!-- View All Button -->
		<div class="text-center mt-4">
			<a href="{{ route('packages') }}" class="btn btn-outline-gradient btn-lg rounded-pill px-5 py-3">
				<i class="fas fa-globe me-2"></i>View All Destinations
			</a>
		</div>
	</div>
</section>

{{--<section class="ftco-section testimony-section bg-bottom" style="background-image: url(images/bg_3.jpg);">
	<div class="container">
		<div class="row justify-content-center pb-4">
			<div class="col-md-7 text-center heading-section ftco-animate">
				<h2 class="mb-4">Tourist Feedback</h2>
			</div>
		</div>
		<div class="row ftco-animate">
			<div class="col-md-12">
				<div class="carousel-testimony owl-carousel ftco-owl">
					<div class="item">
						<div class="testimony-wrap py-4">
							<div class="text">
								<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia
									and Consonantia, there live the blind texts.</p>
								<div class="d-flex align-items-center">
									<div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
									<div class="pl-3">
										<p class="name">Roger Scott</p>
										<span class="position">Marketing Manager</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="testimony-wrap py-4">
							<div class="text">
								<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia
									and Consonantia, there live the blind texts.</p>
								<div class="d-flex align-items-center">
									<div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
									<div class="pl-3">
										<p class="name">Roger Scott</p>
										<span class="position">Marketing Manager</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="testimony-wrap py-4">
							<div class="text">
								<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia
									and Consonantia, there live the blind texts.</p>
								<div class="d-flex align-items-center">
									<div class="user-img" style="background-image: url(images/person_3.jpg)"></div>
									<div class="pl-3">
										<p class="name">Roger Scott</p>
										<span class="position">Marketing Manager</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="testimony-wrap py-4">
							<div class="text">
								<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia
									and Consonantia, there live the blind texts.</p>
								<div class="d-flex align-items-center">
									<div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
									<div class="pl-3">
										<p class="name">Roger Scott</p>
										<span class="position">Marketing Manager</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="testimony-wrap py-4">
							<div class="text">
								<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia
									and Consonantia, there live the blind texts.</p>
								<div class="d-flex align-items-center">
									<div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
									<div class="pl-3">
										<p class="name">Roger Scott</p>
										<span class="position">Marketing Manager</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="ftco-section">
	<div class="container">
		<div class="row justify-content-center pb-4">
			<div class="col-md-12 heading-section text-center ftco-animate">
				<h2 class="mb-4">Recent Post</h2>
			</div>
		</div>
		<div class="row d-flex">
			<div class="col-md-4 d-flex ftco-animate">
				<div class="blog-entry justify-content-end">
					<a href="blog-single.html" class="block-20" style="background-image: url('images/image_1.jpg');">
					</a>
					<div class="text mt-3 float-right d-block">
						<div class="d-flex align-items-center mb-4 topp">
							<div class="one">
								<span class="day">21</span>
							</div>
							<div class="two">
								<span class="yr">2019</span>
								<span class="mos">August</span>
							</div>
						</div>
						<h3 class="heading"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
						<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.
						</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 d-flex ftco-animate">
				<div class="blog-entry justify-content-end">
					<a href="blog-single.html" class="block-20" style="background-image: url('images/image_2.jpg');">
					</a>
					<div class="text mt-3 float-right d-block">
						<div class="d-flex align-items-center mb-4 topp">
							<div class="one">
								<span class="day">21</span>
							</div>
							<div class="two">
								<span class="yr">2019</span>
								<span class="mos">August</span>
							</div>
						</div>
						<h3 class="heading"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
						<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.
						</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 d-flex ftco-animate">
				<div class="blog-entry">
					<a href="blog-single.html" class="block-20" style="background-image: url('images/image_3.jpg');">
					</a>
					<div class="text mt-3 float-right d-block">
						<div class="d-flex align-items-center mb-4 topp">
							<div class="one">
								<span class="day">21</span>
							</div>
							<div class="two">
								<span class="yr">2019</span>
								<span class="mos">August</span>
							</div>
						</div>
						<h3 class="heading"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
						<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>--}}

<footer class="ftco-footer bg-bottom" style="background-image: url(images/footer-bg.jpg);">
	<div class="container">
		<div class="row mb-5">
			<div class="col-md">
				<div class="ftco-footer-widget mb-4">
					<h2 class="ftco-heading-2">Safari</h2>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
						live the blind texts.</p>
					<ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
						<li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
						<li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
						<li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
					</ul>
				</div>
			</div>
			<div class="col-md">
				<div class="ftco-footer-widget mb-4 ml-md-5">
					<h2 class="ftco-heading-2">Categories</h2>
					@foreach ($categories as $category)
					<div class="col-6">
						<a href="#">
							{{$category->name}}
						</a>
					</div>
					@endforeach
				</div>
			</div>
			<div class="col-md">
				<div class="ftco-footer-widget mb-4">
					<h2 class="ftco-heading-2">Tags</h2>
					@foreach ($tags as $tag)
					<div class="col-6">
						<a href="#">
							{{$tag->name}}
						</a>
					</div>
					@endforeach
				</div>
			</div>
			<div class="col-md">
				<div class="ftco-footer-widget mb-4">
					<h2 class="ftco-heading-2">Have any Questions?</h2>
					<div class="block-23 mb-3">
						<ul>
							<li><span class="icon icon-map-marker"></span><span class="text">Ole Sangale Road, off
									Langata Road, in Madaraka Estate, Nairobi, Kenya.</span></li>
							<li><a href="#"><span class="icon icon-phone"></span><span
										class="text">+254712345678</span></a></li>
							<li><a href="#"><span class="icon icon-envelope"></span><span
										class="text">info@yourdomain.com</span></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 text-center">

				<p>
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					Copyright &copy;<script>
						document.write(new Date().getFullYear());
					</script> All rights reserved
				</p>
			</div>
		</div>
	</div>
</footer>



<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
		<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
		<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
			stroke="#F96D00" /></svg></div>


@endsection
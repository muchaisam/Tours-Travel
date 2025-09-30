

@extends('layouts.front')

@section('page')

<!-- Modern 2025 Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background: rgba(255, 255, 255, 0.95); backdrop-filter: blur(10px); border-bottom: 1px solid rgba(0,0,0,0.1);">
	<div class="container">
		<!-- Modern Logo -->
		<a class="navbar-brand d-flex align-items-center" href="" style="font-weight: 700; color: #2d3748;">
			<div class="me-2 d-flex align-items-center justify-content-center rounded-circle" 
				 style="width: 40px; height: 40px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
				<i class="fas fa-globe-africa text-white"></i>
			</div>
			<span class="ms-2">Tours<span style="color: #667eea;">Travel</span></span>
		</a>

		<!-- Mobile Toggle -->
		<button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
			<span class="navbar-toggler-icon"></span>
		</button>

		<!-- Navigation Menu -->
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav mx-auto">
				<li class="nav-item">
					<a class="nav-link fw-semibold active" href="" style="color: #2d3748; position: relative;">
						Home
						<span class="position-absolute bottom-0 start-0 w-100 h-2 bg-primary rounded-top" style="height: 3px;"></span>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link fw-semibold" href="{{route('packages')}}" style="color: #4a5568;">Destinations</a>
				</li>
				<li class="nav-item">
					<a class="nav-link fw-semibold" href="{{route('blog')}}" style="color: #4a5568;">Blog</a>
				</li>
				<li class="nav-item">
					<a class="nav-link fw-semibold" href="{{route('contact')}}" style="color: #4a5568;">Contact</a>
				</li>
				<li class="nav-item">
					<a class="nav-link fw-semibold" href="{{route('about')}}" style="color: #4a5568;">About</a>
				</li>
			</ul>
			
			<!-- Auth Section -->
			<div class="d-flex align-items-center">
				@auth
					<!-- User is logged in -->
					<div class="dropdown">
						<a class="nav-link dropdown-toggle d-flex align-items-center fw-semibold me-3" 
						   href="#" role="button" id="userDropdown" data-bs-toggle="dropdown" 
						   aria-expanded="false" style="color: #2d3748;">
							<div class="me-2 d-flex align-items-center justify-content-center rounded-circle" 
								 style="width: 35px; height: 35px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
								<i class="fas fa-user text-white"></i>
							</div>
							<span>{{ Auth::user()->name }}</span>
						</a>
						<ul class="dropdown-menu dropdown-menu-end shadow border-0 rounded-3" style="min-width: 200px;">
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
					<a href="{{route('login')}}" class="btn btn-outline-primary rounded-pill px-3 py-2 fw-semibold me-2" 
					   style="border-color: #667eea; color: #667eea;">
						<i class="fas fa-sign-in-alt me-1"></i>Sign In
					</a>
					<a href="{{route('register')}}" class="btn btn-primary rounded-pill px-4 py-2 fw-semibold" 
					   style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); border: none;">
						<i class="fas fa-user-plus me-2"></i>Get Started
					</a>
				@endauth
			</div>
		</div>
	</div>
</nav>

<!-- Modern Hero Section -->
<section class="hero-section position-relative overflow-hidden" style="min-height: 100vh; background: linear-gradient(135deg, rgba(102, 126, 234, 0.1) 0%, rgba(118, 75, 162, 0.1) 100%);">
	<!-- Background Image with Overlay -->
	<div class="position-absolute top-0 start-0 w-100 h-100" 
		 style="background: url('images/place-4.jpg') center/cover; z-index: -2;"></div>
	<div class="position-absolute top-0 start-0 w-100 h-100" 
		 style="background: linear-gradient(135deg, rgba(102, 126, 234, 0.8) 0%, rgba(118, 75, 162, 0.8) 100%); z-index: -1;"></div>

	<div class="container h-100 d-flex align-items-center" style="min-height: 100vh; padding-top: 100px;">
		<div class="row w-100 align-items-center">
			<div class="col-lg-6">
				<!-- Hero Content -->
				<div class="hero-content text-white">
					<div class="mb-4">
						<span class="badge rounded-pill px-3 py-2 mb-3" 
							  style="background: rgba(255, 255, 255, 0.2); backdrop-filter: blur(10px); font-size: 0.9rem;">
							🇰🇪 @auth Welcome back, {{ Auth::user()->name }}! @else Discover Kenya & Beyond @endauth
						</span>
					</div>
					
					@auth
					<h1 class="display-4 fw-bold mb-4 lh-base" style="font-size: 3.5rem;">
						Ready for Your Next <span style="color: #ffd700;">Adventure</span>, {{ Auth::user()->name }}?
					</h1>
					
					<p class="lead mb-5" style="font-size: 1.25rem; color: rgba(255, 255, 255, 0.9);">
						Welcome back! Continue exploring Kenya's most spectacular destinations and discover new experiences waiting just for you.
					</p>
					@else
					<h1 class="display-4 fw-bold mb-4 lh-base" style="font-size: 3.5rem;">
						Create <span style="color: #ffd700;">Unforgettable</span><br>
						Travel Memories
					</h1>
					
					<p class="lead mb-5" style="font-size: 1.25rem; color: rgba(255, 255, 255, 0.9);">
						Discover Kenya's breathtaking landscapes, experience rich Swahili culture, and create lasting memories with our expertly curated local travel experiences.
					</p>
					@endauth
					
					<div class="d-flex flex-wrap gap-3 mb-5">
						@auth
						<a href="{{route('packages')}}" class="btn btn-light btn-lg rounded-pill px-5 py-3 fw-semibold" 
						   style="color: #667eea;">
							<i class="fas fa-compass me-2"></i>Continue Exploring
						</a>
						<a href="{{ route('home') }}" class="btn btn-outline-light btn-lg rounded-pill px-5 py-3 fw-semibold">
							<i class="fas fa-tachometer-alt me-2"></i>My Dashboard
						</a>
						@else
						<a href="{{route('packages')}}" class="btn btn-light btn-lg rounded-pill px-5 py-3 fw-semibold" 
						   style="color: #667eea;">
							<i class="fas fa-compass me-2"></i>Explore Destinations
						</a>
						<button class="btn btn-outline-light btn-lg rounded-pill px-5 py-3 fw-semibold" 
								data-bs-toggle="modal" data-bs-target="#videoModal">
							<i class="fas fa-play me-2"></i>Watch Video
						</button>
						@endauth
					</div>
					
					<!-- Stats -->
					<div class="row g-4">
						<div class="col-auto">
							<div class="text-center">
								<h3 class="fw-bold mb-1" style="color: #ffd700;">100+</h3>
								<small style="color: rgba(255, 255, 255, 0.8);">Destinations</small>
							</div>
						</div>
						<div class="col-auto">
							<div class="text-center">
								<h3 class="fw-bold mb-1" style="color: #ffd700;">50K+</h3>
								<small style="color: rgba(255, 255, 255, 0.8);">Happy Travelers</small>
							</div>
						</div>
						<div class="col-auto">
							<div class="text-center">
								<h3 class="fw-bold mb-1" style="color: #ffd700;">4.9★</h3>
								<small style="color: rgba(255, 255, 255, 0.8);">Rating</small>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="col-lg-6">
				<!-- Hero Image/Visual Element -->
				<div class="position-relative">
					<!-- Floating Cards -->
					<div class="card border-0 shadow-lg position-absolute" 
						 style="top: 20%; right: 10%; width: 280px; background: rgba(255, 255, 255, 0.95); backdrop-filter: blur(10px); border-radius: 20px; z-index: 2;">
						<div class="card-body p-4">
							<div class="d-flex align-items-center mb-3">
								<img src="images/place-1.jpg" alt="Destination" class="rounded-circle me-3" style="width: 50px; height: 50px; object-fit: cover;">
								<div>
									<h6 class="mb-1 fw-semibold">Bali, Indonesia</h6>
									<small class="text-muted">Starting from $299</small>
								</div>
							</div>
							<div class="d-flex justify-content-between align-items-center">
								<div class="d-flex align-items-center">
									<i class="fas fa-star text-warning me-1"></i>
									<small class="fw-semibold">4.8 (2.1k)</small>
								</div>
								<small class="text-primary fw-semibold">7 Days Tour</small>
							</div>
						</div>
					</div>
					
					<div class="card border-0 shadow-lg position-absolute" 
						 style="bottom: 20%; left: 10%; width: 250px; background: rgba(255, 255, 255, 0.95); backdrop-filter: blur(10px); border-radius: 20px; z-index: 2;">
						<div class="card-body p-4">
							<div class="text-center">
								<div class="mb-3">
									<i class="fas fa-plane text-primary" style="font-size: 2rem;"></i>
								</div>
								<h6 class="fw-semibold mb-2">Ready for Adventure?</h6>
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
		<div class="scroll-indicator text-white text-center">
			<small class="d-block mb-2">Scroll to explore</small>
			<i class="fas fa-chevron-down" style="animation: bounce 2s infinite;"></i>
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
</div>

<!-- Add Custom Styles -->
<style>
@keyframes bounce {
	0%, 20%, 50%, 80%, 100% { transform: translateY(0); }
	40% { transform: translateY(-10px); }
	60% { transform: translateY(-5px); }
}

.nav-link:hover {
	color: #667eea !important;
	transition: color 0.3s ease;
}

.hero-section .card {
	animation: float 3s ease-in-out infinite;
}

.hero-section .card:nth-child(2) {
	animation-delay: -1.5s;
}

@keyframes float {
	0%, 100% { transform: translateY(0px); }
	50% { transform: translateY(-10px); }
}

.btn {
	transition: all 0.3s ease;
}

.btn:hover {
	transform: translateY(-2px);
	box-shadow: 0 8px 25px rgba(0,0,0,0.15);
}
</style>

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<!-- Modern Search Section -->
<section class="search-section" style="margin-top: -80px; position: relative; z-index: 10;">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-xl-10">
				<div class="card border-0 shadow-lg" style="border-radius: 20px; background: rgba(255, 255, 255, 0.98); backdrop-filter: blur(10px);">
					<div class="card-body p-4">
						<form action="#" method="GET">
							<div class="row g-3 align-items-end">
								<!-- Destination Search -->
								<div class="col-lg-4">
									<label class="form-label fw-semibold text-dark mb-2">
										<i class="fas fa-map-marker-alt me-2 text-primary"></i>Destination
									</label>
									<div class="position-relative">
										<input type="text" class="form-control form-control-lg" 
											   placeholder="Where do you want to go?"
											   style="border-radius: 12px; border: 2px solid #e9ecef; padding-left: 3rem;">
										<i class="fas fa-search position-absolute text-muted" style="left: 1rem; top: 50%; transform: translateY(-50%);"></i>
									</div>
								</div>
								
								<!-- Check-in Date -->
								<div class="col-lg-3">
									<label class="form-label fw-semibold text-dark mb-2">
										<i class="fas fa-calendar-check me-2 text-primary"></i>Check-in
									</label>
									<input type="date" class="form-control form-control-lg" 
										   style="border-radius: 12px; border: 2px solid #e9ecef;">
								</div>
								
								<!-- Check-out Date -->
								<div class="col-lg-3">
									<label class="form-label fw-semibold text-dark mb-2">
										<i class="fas fa-calendar-times me-2 text-primary"></i>Check-out
									</label>
									<input type="date" class="form-control form-control-lg" 
										   style="border-radius: 12px; border: 2px solid #e9ecef;">
								</div>
								
								<!-- Search Button -->
								<div class="col-lg-2">
									<button type="submit" class="btn btn-primary btn-lg w-100 h-100" 
											style="border-radius: 12px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); border: none; min-height: 58px;">
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
<section class="services-section py-5 my-5">
	<div class="container">
		<div class="row align-items-center g-5">
			<!-- Content Column -->
			<div class="col-lg-6 order-lg-2">
				<div class="service-content">
					<div class="mb-4">
						<span class="badge rounded-pill px-3 py-2 mb-3" 
							  style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; font-size: 0.9rem;">
							✨ Why Choose Us
						</span>
					</div>
					
					<h2 class="display-5 fw-bold mb-4" style="color: #2d3748; line-height: 1.2;">
						It's Time to Start Your 
						<span style="color: #667eea;">Adventure</span>
					</h2>
					
					<p class="lead mb-4" style="color: #4a5568; font-size: 1.125rem;">
						Experience the world like never before with our expertly crafted travel experiences. We handle every detail so you can focus on creating memories that last a lifetime.
					</p>
					
					<p class="mb-5" style="color: #718096;">
						From breathtaking landscapes to cultural immersion, our curated destinations offer unique experiences that go beyond typical tourism. Join thousands of travelers who have discovered the world with us.
					</p>
					
					<div class="d-flex flex-wrap gap-3">
						<a href="{{route('packages')}}" class="btn btn-primary btn-lg rounded-pill px-5 py-3 fw-semibold" 
						   style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); border: none;">
							<i class="fas fa-compass me-2"></i>Explore Destinations
						</a>
						<a href="{{route('contact')}}" class="btn btn-outline-primary btn-lg rounded-pill px-5 py-3 fw-semibold">
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
						<div class="card border-0 h-100 shadow-sm hover-lift" style="border-radius: 20px; transition: all 0.3s ease;">
							<div class="card-body p-4 text-center">
								<div class="service-icon mb-3">
									<div class="d-inline-flex align-items-center justify-content-center rounded-circle" 
										 style="width: 70px; height: 70px; background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);">
										<i class="fas fa-hiking text-white" style="font-size: 1.5rem;"></i>
									</div>
								</div>
								<h5 class="fw-bold mb-3" style="color: #2d3748;">Adventure Activities</h5>
								<p class="text-muted mb-0">Thrilling experiences from mountain climbing to water sports, tailored to your adventure level.</p>
							</div>
						</div>
					</div>
					
					<!-- Service 2 -->
					<div class="col-md-6">
						<div class="card border-0 h-100 shadow-sm hover-lift" style="border-radius: 20px; transition: all 0.3s ease;">
							<div class="card-body p-4 text-center">
								<div class="service-icon mb-3">
									<div class="d-inline-flex align-items-center justify-content-center rounded-circle" 
										 style="width: 70px; height: 70px; background: linear-gradient(135deg, #a8edea 0%, #fed6e3 100%);">
										<i class="fas fa-route text-white" style="font-size: 1.5rem;"></i>
									</div>
								</div>
								<h5 class="fw-bold mb-3" style="color: #2d3748;">Custom Itineraries</h5>
								<p class="text-muted mb-0">Personalized travel arrangements crafted to match your preferences and budget.</p>
							</div>
						</div>
					</div>
					
					<!-- Service 3 -->
					<div class="col-md-6">
						<div class="card border-0 h-100 shadow-sm hover-lift" style="border-radius: 20px; transition: all 0.3s ease;">
							<div class="card-body p-4 text-center">
								<div class="service-icon mb-3">
									<div class="d-inline-flex align-items-center justify-content-center rounded-circle" 
										 style="width: 70px; height: 70px; background: linear-gradient(135deg, #ffecd2 0%, #fcb69f 100%);">
										<i class="fas fa-user-tie text-white" style="font-size: 1.5rem;"></i>
									</div>
								</div>
								<h5 class="fw-bold mb-3" style="color: #2d3748;">Expert Guides</h5>
								<p class="text-muted mb-0">Professional local guides who bring destinations to life with insider knowledge.</p>
							</div>
						</div>
					</div>
					
					<!-- Service 4 -->
					<div class="col-md-6">
						<div class="card border-0 h-100 shadow-sm hover-lift" style="border-radius: 20px; transition: all 0.3s ease;">
							<div class="card-body p-4 text-center">
								<div class="service-icon mb-3">
									<div class="d-inline-flex align-items-center justify-content-center rounded-circle" 
										 style="width: 70px; height: 70px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
										<i class="fas fa-map-marked-alt text-white" style="font-size: 1.5rem;"></i>
									</div>
								</div>
								<h5 class="fw-bold mb-3" style="color: #2d3748;">24/7 Support</h5>
								<p class="text-muted mb-0">Round-the-clock assistance to ensure your journey is smooth and worry-free.</p>
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
<section class="destinations-section py-5" style="background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);">
	<div class="container">
		<!-- Section Header -->
		<div class="row justify-content-center mb-5">
			<div class="col-lg-8 text-center" data-aos="fade-up">
				<div class="mb-4">
					<span class="badge rounded-pill px-3 py-2 mb-3" 
						  style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; font-size: 0.9rem;">
						🌍 Popular Destinations
					</span>
				</div>
				<h2 class="display-5 fw-bold mb-4" style="color: #2d3748;">
					Discover Your Next 
					<span style="color: #667eea;">Adventure</span>
				</h2>
				<p class="lead text-muted">
					Handpicked Kenyan destinations offering unique safari experiences, breathtaking landscapes, and unforgettable cultural memories.
				</p>
			</div>
		</div>

		<!-- Destinations Grid -->
		<div class="row g-4">
			@foreach ($destinations as $destination)
			<div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="{{ $loop->iteration * 100 }}">
				<div class="card border-0 shadow-lg h-100 destination-card" 
					 style="border-radius: 20px; overflow: hidden; transition: all 0.3s ease;">
					
					<!-- Image Container -->
					<div class="position-relative overflow-hidden" style="height: 280px;">
						<img src="images/destination-2.jpg" alt="{{ $destination->title }}" 
							 class="card-img-top h-100 w-100" style="object-fit: cover; transition: transform 0.3s ease;">
						
						<!-- Category Badge -->
						<div class="position-absolute top-0 start-0 m-3">
							<span class="badge rounded-pill px-3 py-2" 
								  style="background: rgba(255, 255, 255, 0.9); color: #2d3748; font-weight: 600;">
								{{ $destination->category->name }}
							</span>
						</div>
						
						<!-- Favorite Button -->
						<div class="position-absolute top-0 end-0 m-3">
							<button class="btn btn-light rounded-circle p-2" style="width: 40px; height: 40px;">
								<i class="fas fa-heart text-muted"></i>
							</button>
						</div>
						
						<!-- Overlay Gradient -->
						<div class="position-absolute bottom-0 start-0 w-100 h-50" 
							 style="background: linear-gradient(transparent, rgba(0,0,0,0.6));"></div>
					</div>
					
					<!-- Card Content -->
					<div class="card-body p-4">
						<!-- Pricing & Duration -->
						<div class="d-flex justify-content-between align-items-center mb-3">
							<div class="price-info">
								<h4 class="mb-0 fw-bold" style="color: #667eea;">
									@php
										// Extract numeric value from pricing string (e.g., "Kshs 90000" -> 90000)
										$numericPrice = (int) preg_replace('/[^\d]/', '', $destination->pricing);
									@endphp
									KSh {{ number_format($numericPrice) }}
								</h4>
								<small class="text-muted">per person</small>
							</div>
							<div class="duration-info text-end">
								<div class="badge bg-light text-dark rounded-pill px-3 py-2">
									<i class="fas fa-clock me-1"></i>10 Days
								</div>
							</div>
						</div>
						
						<!-- Title -->
						<h5 class="card-title fw-bold mb-3" style="color: #2d3748;">
							<a href="{{ route('desti.show', $destination->id) }}" 
							   class="text-decoration-none text-dark hover-link">
								{{ $destination->title }}
							</a>
						</h5>
						
						<!-- Features -->
						<div class="features-list mb-4">
							<div class="row g-2">
								<div class="col-auto">
									<div class="d-flex align-items-center">
										<div class="icon-circle me-2">
											<i class="fas fa-shower" style="color: #667eea; font-size: 0.875rem;"></i>
										</div>
										<small class="text-muted">2 Bathrooms</small>
									</div>
								</div>
								<div class="col-auto">
									<div class="d-flex align-items-center">
										<div class="icon-circle me-2">
											<i class="fas fa-bed" style="color: #667eea; font-size: 0.875rem;"></i>
										</div>
										<small class="text-muted">3 Bedrooms</small>
									</div>
								</div>
								<div class="col-12">
									<div class="d-flex align-items-center">
										<div class="icon-circle me-2">
											<i class="fas fa-umbrella-beach" style="color: #667eea; font-size: 0.875rem;"></i>
										</div>
										<small class="text-muted">Near Beach</small>
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
						   class="btn btn-primary w-100 rounded-pill py-3 fw-semibold" 
						   style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); border: none;">
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
			<a href="{{ route('packages') }}" class="btn btn-outline-primary btn-lg rounded-pill px-5 py-3 fw-semibold">
				<i class="fas fa-globe me-2"></i>View All Destinations
			</a>
		</div>
	</div>
</section>

<!-- Destination Card Hover Effects -->
<style>
.destination-card:hover {
	transform: translateY(-10px);
	box-shadow: 0 25px 50px rgba(0,0,0,0.15) !important;
}

.destination-card:hover img {
	transform: scale(1.05);
}

.hover-link:hover {
	color: #667eea !important;
}

.icon-circle {
	width: 24px;
	height: 24px;
	border-radius: 50%;
	background: rgba(102, 126, 234, 0.1);
	display: flex;
	align-items: center;
	justify-content: center;
}

.rating .fas {
	font-size: 0.875rem;
}

.pagination .page-link {
	border-radius: 8px;
	border: 2px solid #e9ecef;
	margin: 0 2px;
	color: #667eea;
	font-weight: 600;
}

.pagination .page-item.active .page-link {
	background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
	border-color: #667eea;
}

.pagination .page-link:hover {
	border-color: #667eea;
	color: #667eea;
}
</style>

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
@extends('layouts.front')

@section('title', 'About Us - ToursTravel Kenya')

@section('page')
@include('partials.navbar')

<!-- Page Hero -->
<section class="tt-page-hero">
	<div class="tt-page-hero-bg" style="background-image: url('{{ asset('images/about.jpg') }}');"></div>
	<div class="container" data-aos="fade-up">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb justify-content-center">
				<li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fas fa-home me-1"></i>Home</a></li>
				<li class="breadcrumb-item active">About</li>
			</ol>
		</nav>
		<h1 class="tt-page-title">Discover Kenya with <span class="accent">Local Experts</span></h1>
		<p class="tt-page-subtitle">
			Born and raised in Kenya, we share our homeland's beauty, culture,
			and hidden gems with passionate travelers from around the world.
		</p>
	</div>
</section>

<!-- Our Story -->
<section class="tt-section">
	<div class="container">
		<div class="row align-items-center g-5">
			<div class="col-lg-6" data-aos="fade-right">
				<div class="tt-pretitle">Our Story</div>
				<h2 class="tt-title mb-3">Born in Kenya, <span class="accent">Sharing with the World</span></h2>
				<p>
					ToursTravel began as a dream to share Kenya's incredible beauty with the world.
					As local Kenyans, we know the secret spots, the authentic cultural experiences,
					and the breathtaking landscapes that make our country truly magical.
				</p>
				<p>
					From the vast savannas of Maasai Mara to the pristine beaches of Diani,
					from Mount Kenya's snow-capped peaks to the vibrant streets of Nairobi — we
					create authentic experiences that connect you deeply with our homeland.
				</p>
				<div class="tt-stats-row mt-4">
					<div class="tt-stat-item">
						<div class="tt-stat-number">8+</div>
						<div class="tt-stat-label">Years Experience</div>
					</div>
					<div class="tt-stat-item">
						<div class="tt-stat-number">2,400+</div>
						<div class="tt-stat-label">Happy Travelers</div>
					</div>
					<div class="tt-stat-item">
						<div class="tt-stat-number">500+</div>
						<div class="tt-stat-label">Tours Completed</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6" data-aos="fade-left">
				<div class="tt-about-images">
					<img src="{{ asset('images/about.jpg') }}" alt="Kenya Safari" class="img-fluid rounded-3 shadow">
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Mission & Vision -->
<section class="tt-section tt-section-light">
	<div class="container">
		<div class="row g-4">
			<div class="col-lg-6" data-aos="fade-up">
				<div class="tt-mission-card">
					<div class="icon"><i class="fas fa-compass"></i></div>
					<h3>Our Mission</h3>
					<p>
						To showcase Kenya's natural wonders and rich cultural heritage through
						authentic, sustainable tourism experiences that benefit local communities
						while creating unforgettable memories for our guests.
					</p>
				</div>
			</div>
			<div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
				<div class="tt-mission-card">
					<div class="icon"><i class="fas fa-eye"></i></div>
					<h3>Our Vision</h3>
					<p>
						To be Kenya's most trusted and respected tourism company, known for
						delivering exceptional experiences that inspire conservation, cultural
						appreciation, and meaningful connections between visitors and our homeland.
					</p>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Why Choose Us -->
<section class="tt-section">
	<div class="container">
		<div class="tt-section-header text-center" data-aos="fade-up">
			<div class="tt-pretitle">What Makes Us Different</div>
			<h2 class="tt-title">Why Choose <span class="accent">ToursTravel</span></h2>
			<p class="tt-subtitle">As local Kenyans, we offer authentic experiences you won't find anywhere else.</p>
		</div>
		<div class="row g-4">
			<div class="col-md-6 col-lg-4" data-aos="fade-up">
				<div class="tt-feature-card">
					<div class="icon"><i class="fas fa-hiking"></i></div>
					<h4>Authentic Adventures</h4>
					<p>Experience Kenya through local eyes with authentic cultural immersion and off-the-beaten-path adventures.</p>
				</div>
			</div>
			<div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
				<div class="tt-feature-card">
					<div class="icon"><i class="fas fa-route"></i></div>
					<h4>Local Expertise</h4>
					<p>Benefit from our deep local knowledge and connections to access exclusive locations and experiences.</p>
				</div>
			</div>
			<div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
				<div class="tt-feature-card">
					<div class="icon"><i class="fas fa-user-tie"></i></div>
					<h4>Expert Guides</h4>
					<p>Our passionate Kenyan guides share stories, traditions, and insights that bring destinations to life.</p>
				</div>
			</div>
			<div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
				<div class="tt-feature-card">
					<div class="icon"><i class="fas fa-heart"></i></div>
					<h4>Community Impact</h4>
					<p>Every tour supports local communities, conservation efforts, and sustainable tourism practices.</p>
				</div>
			</div>
			<div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
				<div class="tt-feature-card">
					<div class="icon"><i class="fas fa-shield-alt"></i></div>
					<h4>Safety First</h4>
					<p>Licensed operator with comprehensive insurance, modern vehicles, and 24/7 support throughout your journey.</p>
				</div>
			</div>
			<div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
				<div class="tt-feature-card">
					<div class="icon"><i class="fas fa-star"></i></div>
					<h4>Personalized Service</h4>
					<p>Every journey is tailored to your preferences and interests, creating memories that last a lifetime.</p>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Values -->
<section class="tt-section tt-section-light">
	<div class="container">
		<div class="tt-section-header text-center" data-aos="fade-up">
			<div class="tt-pretitle">What We Stand For</div>
			<h2 class="tt-title">Our Core <span class="accent">Values</span></h2>
		</div>
		<div class="row g-4 justify-content-center">
			<div class="col-md-4" data-aos="zoom-in">
				<div class="tt-value-card text-center">
					<div class="icon"><i class="fas fa-leaf"></i></div>
					<h4>Sustainability</h4>
					<p>We're committed to protecting Kenya's natural beauty and wildlife for future generations through responsible tourism.</p>
				</div>
			</div>
			<div class="col-md-4" data-aos="zoom-in" data-aos-delay="100">
				<div class="tt-value-card text-center">
					<div class="icon"><i class="fas fa-handshake"></i></div>
					<h4>Authenticity</h4>
					<p>Every experience we offer is genuine, connecting you with real Kenyan culture, traditions, and stories.</p>
				</div>
			</div>
			<div class="col-md-4" data-aos="zoom-in" data-aos-delay="200">
				<div class="tt-value-card text-center">
					<div class="icon"><i class="fas fa-users"></i></div>
					<h4>Community</h4>
					<p>We partner with local communities, ensuring tourism benefits everyone while preserving cultural heritage.</p>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Stats Banner -->
<section class="tt-stats-banner" data-aos="fade-up">
	<div class="container">
		<h2 class="text-center text-white mb-2">Make Your Kenya Tour <span class="accent">Memorable & Safe</span></h2>
		<p class="text-center text-white-50 mb-5">Guided thousands of visitors through Kenya's most incredible experiences.</p>
		<div class="row g-4 text-center">
			<div class="col-6 col-md-3">
				<div class="tt-stat-banner-item">
					<i class="fas fa-route fa-2x mb-2"></i>
					<div class="number">500+</div>
					<div class="label">Successful Tours</div>
				</div>
			</div>
			<div class="col-6 col-md-3">
				<div class="tt-stat-banner-item">
					<i class="fas fa-smile fa-2x mb-2"></i>
					<div class="number">2,400+</div>
					<div class="label">Happy Travelers</div>
				</div>
			</div>
			<div class="col-6 col-md-3">
				<div class="tt-stat-banner-item">
					<i class="fas fa-map-marked-alt fa-2x mb-2"></i>
					<div class="number">50+</div>
					<div class="label">Destinations</div>
				</div>
			</div>
			<div class="col-6 col-md-3">
				<div class="tt-stat-banner-item">
					<i class="fas fa-award fa-2x mb-2"></i>
					<div class="number">4.9/5</div>
					<div class="label">Average Rating</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- CTA -->
<section class="tt-cta" data-aos="zoom-in">
	<div class="container text-center">
		<i class="fas fa-compass fa-3x mb-3" style="color: var(--tt-accent);"></i>
		<h2>Ready to Explore Kenya?</h2>
		<p>Let our local expertise guide you through an authentic Kenyan adventure.</p>
		<div class="d-flex gap-3 justify-content-center flex-wrap">
			<a href="{{ route('packages') }}" class="btn-tt-white"><i class="fas fa-globe-africa me-2"></i> View Destinations</a>
			<a href="{{ route('contact') }}" class="btn-tt-outline" style="border-color:white;color:white;"><i class="fas fa-phone me-2"></i> Plan My Trip</a>
		</div>
	</div>
</section>

@include('partials.footer')
@endsection
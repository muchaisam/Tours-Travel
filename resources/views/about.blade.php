@extends('layouts.front')

@section('title', 'About Us - ToursTravel Kenya')

@section('page')
<!-- Include Modern Navigation -->
@include('partials.navbar')

<!-- Modern Hero Section -->
<section class="about-hero position-relative overflow-hidden">
	<!-- Background Image with Overlay -->
	<div class="hero-bg-image about-hero-bg"></div>
	<div class="hero-bg-overlay"></div>

	<div class="container h-100 d-flex align-items-center justify-content-center text-center blog-hero-container">
		<div class="hero-content text-white" data-aos="fade-up">
			<div class="mb-4">
				<span class="badge rounded-pill px-3 py-2 mb-3 blog-category-badge">
					🌍 About ToursTravel
				</span>
			</div>
			
			<h1 class="display-4 fw-bold mb-4 hero-title">
				Discover Kenya with <span class="blog-title-highlight">Local Experts</span>
			</h1>
			
			<p class="lead mb-4 blog-lead-text">
				Born and raised in Kenya, we share our homeland's beauty, culture, and hidden gems with passionate travelers from around the world.
			</p>
			
			<!-- Breadcrumb -->
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb justify-content-center breadcrumb-hero">
					<li class="breadcrumb-item">
						<a href="{{ url('/') }}" class="text-white text-decoration-none">
							<i class="fas fa-home me-1"></i>Home
						</a>
					</li>
					<li class="breadcrumb-item active text-white" aria-current="page">About Us</li>
				</ol>
			</nav>
		</div>
	</div>

	<!-- Hero Wave SVG -->
	<svg class="hero-wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 120">
		<path fill="currentColor" d="M0,64L80,69.3C160,75,320,85,480,80C640,75,800,53,960,48C1120,43,1280,53,1360,58.7L1440,64L1440,120L1360,120C1280,120,1120,120,960,120C800,120,640,120,480,120C320,120,160,120,80,120L0,120Z"></path>
	</svg>
</section>

<!-- Our Story Section -->
<section class="story-section py-5">
	<div class="container">
		<div class="row align-items-center g-5">
			<div class="col-lg-6" data-aos="fade-right">
				<div class="story-content">
					<div class="mb-4">
						<span class="badge rounded-pill px-3 py-2 mb-3 story-badge">
							🇰🇪 Our Story
						</span>
					</div>
					
					<h2 class="display-5 fw-bold mb-4 story-title">
						Born in Kenya, <span class="story-title-highlight">Sharing with the World</span>
					</h2>
					
					<p class="lead mb-4 story-lead">
						ToursTravel began as a dream to share Kenya's incredible beauty with the world. As local Kenyans, we know the secret spots, the authentic cultural experiences, and the breathtaking landscapes that make our country truly magical.
					</p>
					
					<p class="mb-5 story-text">
						From the vast savannas of Maasai Mara to the pristine beaches of Diani, from Mount Kenya's snow-capped peaks to the vibrant streets of Nairobi - we create authentic experiences that connect you deeply with our homeland.
					</p>
					
					<div class="d-flex flex-wrap gap-3">
						<a href="{{route('packages')}}" class="btn btn-gradient btn-lg rounded-pill px-5 py-3 fw-semibold">
							<i class="fas fa-compass me-2"></i>Explore Kenya
						</a>
						<a href="{{route('contact')}}" class="btn btn-outline-gradient btn-lg rounded-pill px-5 py-3 fw-semibold">
							<i class="fas fa-phone me-2"></i>Contact Us
						</a>
					</div>
				</div>
			</div>
			
			<div class="col-lg-6" data-aos="fade-left">
				<!-- Image Grid -->
				<div class="row g-3">
					<div class="col-6">
						<img src="images/about.jpg" alt="Kenya Safari" class="img-fluid rounded-4 shadow-sm story-image">
					</div>
					<div class="col-6">
						<div class="row g-3">
							<div class="col-12">
								<img src="images/place-1.jpg" alt="Maasai Mara" class="img-fluid rounded-4 shadow-sm story-image">
							</div>
							<div class="col-12">
								<img src="images/place-2.jpg" alt="Kenyan Culture" class="img-fluid rounded-4 shadow-sm story-image">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Services Section -->
<section class="services-section py-5 bg-light">
	<div class="container">
		<!-- Section Header -->
		<div class="row justify-content-center mb-5">
			<div class="col-lg-8 text-center" data-aos="fade-up">
				<h2 class="display-5 fw-bold mb-4 services-title">
					Why Choose <span class="services-title-highlight">ToursTravel</span>
				</h2>
				<p class="lead text-muted">
					As local Kenyans, we offer authentic experiences you won't find anywhere else.
				</p>
			</div>
		</div>

		<!-- Services Grid -->
		<div class="row g-4">
			<!-- Service 1 -->
			<div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
				<div class="card border-0 h-100 shadow-sm text-center service-card">
					<div class="card-body p-4">
						<div class="service-icon mb-3">
							<div class="service-icon-wrapper">
								<i class="fas fa-hiking"></i>
							</div>
						</div>
						<h5 class="fw-bold mb-3 service-title">Authentic Adventures</h5>
						<p class="service-text">Experience Kenya through local eyes with authentic cultural immersion and off-the-beaten-path adventures.</p>
					</div>
				</div>
			</div>
			
			<!-- Service 2 -->
			<div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
				<div class="card border-0 h-100 shadow-sm text-center service-card">
					<div class="card-body p-4">
						<div class="service-icon mb-3">
							<div class="service-icon-wrapper">
								<i class="fas fa-route"></i>
							</div>
						</div>
						<h5 class="fw-bold mb-3 service-title">Local Expertise</h5>
						<p class="service-text">Benefit from our deep local knowledge and connections to access exclusive locations and experiences.</p>
					</div>
				</div>
			</div>
			
			<!-- Service 3 -->
			<div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
				<div class="card border-0 h-100 shadow-sm text-center service-card">
					<div class="card-body p-4">
						<div class="service-icon mb-3">
							<div class="service-icon-wrapper">
								<i class="fas fa-user-tie"></i>
							</div>
						</div>
						<h5 class="fw-bold mb-3 service-title">Expert Guides</h5>
						<p class="service-text">Our passionate Kenyan guides share stories, traditions, and insights that bring destinations to life.</p>
					</div>
				</div>
			</div>
			
			<!-- Service 4 -->
			<div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
				<div class="card border-0 h-100 shadow-sm text-center service-card">
					<div class="card-body p-4">
						<div class="service-icon mb-3">
							<div class="service-icon-wrapper">
								<i class="fas fa-heart"></i>
							</div>
						</div>
						<h5 class="fw-bold mb-3 service-title">Community Impact</h5>
						<p class="service-text">Every tour supports local communities, conservation efforts, and sustainable tourism practices.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Statistics Section -->
<section class="stats-section py-5">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6" data-aos="fade-right">
				<div class="stats-image position-relative">
					<img src="images/about.jpg" alt="Kenya Tours" class="img-fluid rounded-4 shadow-lg story-image">
					
					<!-- Floating Stats Card -->
					<div class="card position-absolute bottom-0 start-0 m-4 border-0 shadow-lg floating-stats-card">
						<div class="card-body p-3">
							<div class="d-flex align-items-center">
								<div class="me-3">
									<div class="rounded-circle d-flex align-items-center justify-content-center stats-floating-icon">
										<i class="fas fa-star text-white"></i>
									</div>
								</div>
								<div>
									<h6 class="mb-1 fw-bold">Excellent Rating</h6>
									<small class="text-muted">4.9/5 from 1000+ reviews</small>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="col-lg-6" data-aos="fade-left">
				<div class="stats-content">
					<div class="mb-4">
						<h2 class="display-5 fw-bold mb-4">
							Make Your Kenya Tour <span class="blog-title-highlight">Memorable & Safe</span>
						</h2>
						<p class="lead mb-5 stat-label">
							With years of experience and deep local knowledge, we've successfully guided thousands of visitors through Kenya's most incredible experiences.
						</p>
					</div>
					
					<!-- Statistics Grid -->
					<div class="row g-4">
						<div class="col-md-6">
							<div class="stat-card">
								<h3 class="stat-number blog-title-highlight">500+</h3>
								<p class="stat-label">Successful Tours</p>
							</div>
						</div>
						<div class="col-md-6">
							<div class="stat-card">
								<h3 class="stat-number blog-title-highlight">2,400+</h3>
								<p class="stat-label">Happy Travelers</p>
							</div>
						</div>
						<div class="col-md-6">
							<div class="stat-card">
								<h3 class="stat-number blog-title-highlight">50+</h3>
								<p class="stat-label">Destinations</p>
							</div>
						</div>
						<div class="col-md-6">
							<div class="stat-card">
								<h3 class="stat-number blog-title-highlight">8+</h3>
								<p class="stat-label">Years Experience</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Values Section -->
<section class="values-section py-5 bg-light">
	<div class="container">
		<!-- Section Header -->
		<div class="row justify-content-center mb-5">
			<div class="col-lg-8 text-center" data-aos="fade-up">
				<h2 class="display-5 fw-bold mb-4 services-title">
					Our <span class="services-title-highlight">Values</span>
				</h2>
				<p class="lead text-muted">
					These core principles guide everything we do at ToursTravel Kenya.
				</p>
			</div>
		</div>

		<!-- Values Grid -->
		<div class="row g-5">
			<div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
				<div class="value-card text-center">
					<div class="value-icon mb-4">
						<div class="value-icon-wrapper mx-auto">
							<i class="fas fa-leaf text-white fs-1"></i>
						</div>
					</div>
					<h4 class="fw-bold mb-3 value-title">Sustainability</h4>
					<p class="value-text">
						We're committed to protecting Kenya's natural beauty and wildlife for future generations through responsible tourism practices.
					</p>
				</div>
			</div>
			
			<div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
				<div class="value-card text-center">
					<div class="value-icon mb-4">
						<div class="value-icon-wrapper mx-auto">
							<i class="fas fa-handshake text-white fs-1"></i>
						</div>
					</div>
					<h4 class="fw-bold mb-3 value-title">Authenticity</h4>
					<p class="value-text">
						Every experience we offer is genuine, connecting you with real Kenyan culture, traditions, and stories that create lasting memories.
					</p>
				</div>
			</div>
			
			<div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
				<div class="value-card text-center">
					<div class="value-icon mb-4">
						<div class="value-icon-wrapper mx-auto">
							<i class="fas fa-users text-white fs-1"></i>
						</div>
					</div>
					<h4 class="fw-bold mb-3 value-title">Community</h4>
					<p class="value-text">
						We partner with local communities, ensuring tourism benefits everyone while preserving cultural heritage and supporting livelihoods.
					</p>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Call to Action Section -->
<section class="cta-section py-5">
	<div class="container">
		<div class="row justify-content-center text-center">
			<div class="col-lg-8" data-aos="fade-up">
				<h2 class="display-5 fw-bold text-white mb-4">
					Ready to Explore Kenya?
				</h2>
				<p class="lead text-white-50 mb-5">
					Let our local expertise guide you through an authentic Kenyan adventure. From safari to culture, beaches to mountains - we'll create your perfect journey.
				</p>
				
				<div class="d-flex flex-wrap justify-content-center gap-3">
					<a href="{{route('packages')}}" class="btn btn-light btn-lg rounded-pill px-5 py-3 fw-semibold cta-btn-light">
						<i class="fas fa-compass me-2"></i>View Destinations
					</a>
					<a href="{{route('contact')}}" class="btn btn-outline-light btn-lg rounded-pill px-5 py-3 fw-semibold">
						<i class="fas fa-phone me-2"></i>Plan My Trip
					</a>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Include Modern Footer -->
@include('partials.footer')

<!-- Scroll to Top Button -->
<button class="scroll-to-top d-none" onclick="scrollToTop()">
	<i class="fas fa-chevron-up"></i>
</button>

<script>
// Initialize AOS
AOS.init({
	duration: 800,
	easing: 'ease-in-out',
	once: true
});

// Show/hide scroll to top button
window.addEventListener('scroll', function() {
	const scrollBtn = document.querySelector('.scroll-to-top');
	if (scrollBtn) {
		if (window.pageYOffset > 300) {
			scrollBtn.classList.remove('d-none');
		} else {
			scrollBtn.classList.add('d-none');
		}
	}
});

// Scroll to top function
function scrollToTop() {
	window.scrollTo({
		top: 0,
		behavior: 'smooth'
	});
}
</script>

@endsection

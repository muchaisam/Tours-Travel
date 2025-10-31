@extends('layouts.front')

@section('page')

<!-- Modern About Navigation -->
<nav class="navbar-modern">
	<div class="container">
		<!-- Modern Logo -->
		<a class="brand-logo" href="{{ url('/') }}">
			<div class="brand-icon">
				<i class="fas fa-globe-africa text-white"></i>
			</div>
			<span class="ms-2"><span class="brand-text">Tours</span><span class="brand-text-highlight">Travel</span></span>
		</a>

		<!-- Mobile Toggle -->
		<button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
			<span class="navbar-toggler-icon"></span>
		</button>

		<!-- Navigation Menu -->
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav mx-auto">
				<li class="nav-item">
					<a class="nav-link fw-semibold" href="{{ url('/') }}">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link fw-semibold" href="{{route('packages')}}">Destinations</a>
				</li>
				<li class="nav-item">
					<a class="nav-link fw-semibold" href="{{route('blog')}}">Blog</a>
				</li>
				<li class="nav-item">
					<a class="nav-link fw-semibold active" href="{{route('about')}}">
						About
						<span class="nav-active-indicator"></span>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link fw-semibold" href="{{route('contact')}}">Contact</a>
				</li>
			</ul>
			
			<!-- CTA Button -->
			<div class="d-flex align-items-center">
				<a href="{{route('login')}}" class="btn btn-gradient rounded-pill px-4 py-2 fw-semibold">
					<i class="fas fa-sign-in-alt me-2"></i>Sign In
				</a>
			</div>
		</div>
	</div>
</nav>

<!-- Modern Hero Section -->
<section class="about-hero position-relative overflow-hidden">
	<!-- Background Image with Overlay -->
	<div class="hero-bg-image" style="background: url('images/destination-1.jpg') center/cover; z-index: -2;"></div>
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
<section class="services-section py-5">
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
								<i class="fas fa-hiking service-icon"></i>
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
								<i class="fas fa-route service-icon"></i>
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
								<i class="fas fa-user-tie service-icon"></i>
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
								<i class="fas fa-heart service-icon"></i>
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
				<div class="stats-content text-white">
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
<section class="values-section py-5">
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
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
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
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
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
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
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
    </section> --}}


<!-- Modern Footer -->
<footer class="blog-footer py-5">
	<div class="container">
		<div class="row g-4">
			<div class="col-lg-4">
				<div class="footer-brand mb-4">
					<div class="d-flex align-items-center mb-3">
						<div class="detail-footer-icon-wrapper me-3">
							<i class="fas fa-globe-africa text-white"></i>
						</div>
						<h4 class="mb-0">
							<span class="brand-text">Tours</span><span class="brand-text-highlight">Travel</span>
						</h4>
					</div>
					<p class="text-muted mb-4">
						Your trusted local guide to Kenya's most incredible destinations. 
						We create authentic experiences that connect you with our beautiful homeland.
					</p>
					<div class="social-links d-flex gap-3">
						<a href="#" class="text-white-50 hover-social"><i class="fab fa-facebook-f"></i></a>
						<a href="#" class="text-white-50 hover-social"><i class="fab fa-twitter"></i></a>
						<a href="#" class="text-white-50 hover-social"><i class="fab fa-instagram"></i></a>
						<a href="#" class="text-white-50 hover-social"><i class="fab fa-linkedin-in"></i></a>
					</div>
				</div>
			</div>
			<div class="col-lg-2 col-md-6">
				<h5 class="mb-4">Quick Links</h5>
				<ul class="list-unstyled">
					<li class="mb-2"><a href="{{ url('/') }}" class="text-white-50 text-decoration-none hover-link">Home</a></li>
					<li class="mb-2"><a href="{{route('packages')}}" class="text-white-50 text-decoration-none hover-link">Destinations</a></li>
					<li class="mb-2"><a href="{{route('blog')}}" class="text-white-50 text-decoration-none hover-link">Blog</a></li>
					<li class="mb-2"><a href="{{route('about')}}" class="text-white-50 text-decoration-none hover-link">About</a></li>
					<li class="mb-2"><a href="{{route('contact')}}" class="text-white-50 text-decoration-none hover-link">Contact</a></li>
				</ul>
			</div>
			<div class="col-lg-3 col-md-6">
				<h5 class="mb-4">Contact Info</h5>
				<div class="contact-info">
					<div class="d-flex align-items-center mb-3">
						<i class="fas fa-map-marker-alt me-3 blog-meta-icon"></i>
						<span class="text-white-50">Ole Sangale Road, Madaraka Estate<br>Nairobi, Kenya</span>
					</div>
					<div class="d-flex align-items-center mb-3">
						<i class="fas fa-phone me-3 blog-meta-icon"></i>
						<span class="text-white-50">+254 712 345 678</span>
					</div>
					<div class="d-flex align-items-center">
						<i class="fas fa-envelope me-3 blog-meta-icon"></i>
						<span class="text-white-50">info@tourstravel.ke</span>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<h5 class="mb-4">Popular Experiences</h5>
				<ul class="list-unstyled">
					<li class="mb-2"><a href="#" class="text-white-50 text-decoration-none hover-link">Maasai Mara Safari</a></li>
					<li class="mb-2"><a href="#" class="text-white-50 text-decoration-none hover-link">Diani Beach Getaway</a></li>
					<li class="mb-2"><a href="#" class="text-white-50 text-decoration-none hover-link">Mount Kenya Climbing</a></li>
					<li class="mb-2"><a href="#" class="text-white-50 text-decoration-none hover-link">Cultural Tours</a></li>
					<li class="mb-2"><a href="#" class="text-white-50 text-decoration-none hover-link">Lake Nakuru</a></li>
				</ul>
			</div>
		</div>
		
		<!-- Copyright -->
		<hr class="my-4 blog-footer-divider">
		<div class="row align-items-center">
			<div class="col-md-6">
				<p class="mb-0 text-white-50">© 2025 ToursTravel Kenya. All rights reserved.</p>
			</div>
			<div class="col-md-6 text-md-end">
				<p class="mb-0">
					<a href="#" class="text-white-50 text-decoration-none me-3">Privacy Policy</a>
					<a href="#" class="text-white-50 text-decoration-none">Terms of Service</a>
				</p>
			</div>
		</div>
	</div>
</footer>
    
  

<!-- Custom Styles for About Page -->
<style>
.stats-item {
	transition: all 0.3s ease;
}

.stats-item:hover {
	transform: translateY(-5px);
}

.hover-link:hover {
	color: #667eea !important;
	transition: color 0.3s ease;
}

.hover-social:hover {
	color: #667eea !important;
	transform: translateY(-2px);
	transition: all 0.3s ease;
}

.nav-link:hover {
	color: #667eea !important;
	transition: color 0.3s ease;
}

.card:hover {
	transform: translateY(-5px);
	box-shadow: 0 15px 35px rgba(0,0,0,0.1) !important;
	transition: all 0.3s ease;
}

/* Breadcrumb Styles */
.breadcrumb-item + .breadcrumb-item::before {
	content: "→";
	color: rgba(255, 255, 255, 0.7);
}

/* Animation for stats numbers */
@keyframes countUp {
	from { opacity: 0; transform: translateY(20px); }
	to { opacity: 1; transform: translateY(0); }
}

.stats-item h3 {
	animation: countUp 0.8s ease-out;
}

/* Scroll to top button */
.scroll-to-top {
	position: fixed;
	bottom: 30px;
	right: 30px;
	width: 50px;
	height: 50px;
	background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
	color: white;
	border: none;
	border-radius: 50%;
	font-size: 1.2rem;
	cursor: pointer;
	transition: all 0.3s ease;
	z-index: 1000;
}

.scroll-to-top:hover {
	transform: translateY(-3px);
	box-shadow: 0 10px 25px rgba(102, 126, 234, 0.3);
}

/* Modern loader */
.modern-loader {
	position: fixed;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
	display: flex;
	align-items: center;
	justify-content: center;
	z-index: 9999;
	opacity: 0;
	visibility: hidden;
	transition: all 0.3s ease;
}

.modern-loader.show {
	opacity: 1;
	visibility: visible;
}

.spinner {
	width: 60px;
	height: 60px;
	border: 4px solid rgba(255, 255, 255, 0.3);
	border-top: 4px solid white;
	border-radius: 50%;
	animation: spin 1s linear infinite;
}

@keyframes spin {
	0% { transform: rotate(0deg); }
	100% { transform: rotate(360deg); }
}
</style>

<!-- Modern Loader -->
<div class="modern-loader" id="modernLoader">
	<div class="spinner"></div>
</div>

<!-- Scroll to Top Button -->
<button class="scroll-to-top d-none" onclick="scrollToTop()">
	<i class="fas fa-chevron-up"></i>
</button>

<!-- Modern Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
// Initialize AOS
AOS.init({
	duration: 800,
	easing: 'ease-in-out',
	once: true
});

// Hide loader when page loads
window.addEventListener('load', function() {
	const loader = document.getElementById('modernLoader');
	if (loader) {
		setTimeout(() => {
			loader.classList.remove('show');
		}, 500);
	}
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

// Smooth scrolling for anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
	anchor.addEventListener('click', function (e) {
		e.preventDefault();
		const target = document.querySelector(this.getAttribute('href'));
		if (target) {
			target.scrollIntoView({
				behavior: 'smooth',
				block: 'start'
			});
		}
	});
});

// Animate statistics numbers
function animateValue(obj, start, end, duration) {
	let startTimestamp = null;
	const step = (timestamp) => {
		if (!startTimestamp) startTimestamp = timestamp;
		const progress = Math.min((timestamp - startTimestamp) / duration, 1);
		obj.innerHTML = Math.floor(progress * (end - start) + start);
		if (progress < 1) {
			window.requestAnimationFrame(step);
		}
	};
	window.requestAnimationFrame(step);
}

// Trigger statistics animation when in view
const observer = new IntersectionObserver((entries) => {
	entries.forEach(entry => {
		if (entry.isIntersecting) {
			const statsNumbers = entry.target.querySelectorAll('.stats-number');
			statsNumbers.forEach(stat => {
				const value = parseInt(stat.getAttribute('data-value'));
				animateValue(stat, 0, value, 2000);
			});
			observer.unobserve(entry.target);
		}
	});
}, { threshold: 0.5 });

// Observe stats section
document.addEventListener('DOMContentLoaded', function() {
	const statsSection = document.querySelector('.statistics-section');
	if (statsSection) {
		observer.observe(statsSection);
	}
});
</script>
    
  </body>
</html>
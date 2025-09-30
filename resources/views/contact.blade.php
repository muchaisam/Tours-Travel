@extends('layouts.front')

@section('title', 'Contact Us - ToursTravel Kenya')

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
					<a class="nav-link" href="{{route('packages')}}">Destinations</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="{{route('blog')}}">Blog</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="{{route('about')}}">About</a>
				</li>
				<li class="nav-item">
					<a class="nav-link active fw-semibold" href="{{route('contact')}}">Contact</a>
				</li>
				<li class="nav-item ms-2">
					<a class="btn btn-outline-primary rounded-pill px-4" href="{{route('login')}}">Login</a>
				</li>
			</ul>
		</div>
	</div>
</nav>

<!-- Modern Hero Section -->
<section class="hero-section position-relative overflow-hidden" 
		 style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); min-height: 60vh; margin-top: 76px;">
	<div class="position-absolute w-100 h-100" 
		 style="background: url('{{ asset('images/destination-12.jpg') }}') center/cover; opacity: 0.2;"></div>
	<div class="container position-relative h-100 d-flex align-items-center">
		<div class="row w-100">
			<div class="col-lg-8 mx-auto text-center text-white" data-aos="fade-up">
				<nav aria-label="breadcrumb" class="mb-4">
					<ol class="breadcrumb justify-content-center bg-transparent">
						<li class="breadcrumb-item">
							<a href="{{ url('/') }}" class="text-white-50 text-decoration-none">Home</a>
						</li>
						<li class="breadcrumb-item active text-white">Contact Us</li>
					</ol>
				</nav>
				<h1 class="display-4 fw-bold mb-4">Get In Touch</h1>
				<p class="lead mb-0">
					Ready to explore Kenya's wonders? We're here to help you plan the perfect adventure.
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

<!-- Contact Info Cards -->
<section class="py-5">
	<div class="container">
		<div class="row g-4">
			<div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
				<div class="card h-100 border-0 shadow-sm contact-card">
					<div class="card-body text-center p-4">
						<div class="contact-icon mx-auto mb-4 d-flex align-items-center justify-content-center rounded-circle"
							 style="width: 70px; height: 70px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
							<i class="fas fa-map-marker-alt text-white fs-4"></i>
						</div>
						<h5 class="card-title fw-bold mb-3">Our Location</h5>
						<p class="card-text text-muted">
							Ole Sangale Road, Madaraka Estate<br>
							Nairobi, Kenya
						</p>
					</div>
				</div>
			</div>
			
			<div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
				<div class="card h-100 border-0 shadow-sm contact-card">
					<div class="card-body text-center p-4">
						<div class="contact-icon mx-auto mb-4 d-flex align-items-center justify-content-center rounded-circle"
							 style="width: 70px; height: 70px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
							<i class="fas fa-phone text-white fs-4"></i>
						</div>
						<h5 class="card-title fw-bold mb-3">Call Us</h5>
						<p class="card-text">
							<a href="tel:+254712345678" class="text-decoration-none text-muted">+254 712 345 678</a>
						</p>
					</div>
				</div>
			</div>
			
			<div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
				<div class="card h-100 border-0 shadow-sm contact-card">
					<div class="card-body text-center p-4">
						<div class="contact-icon mx-auto mb-4 d-flex align-items-center justify-content-center rounded-circle"
							 style="width: 70px; height: 70px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
							<i class="fas fa-envelope text-white fs-4"></i>
						</div>
						<h5 class="card-title fw-bold mb-3">Email Us</h5>
						<p class="card-text">
							<a href="mailto:info@tourstravel.ke" class="text-decoration-none text-muted">info@tourstravel.ke</a>
						</p>
					</div>
				</div>
			</div>
			
			<div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
				<div class="card h-100 border-0 shadow-sm contact-card">
					<div class="card-body text-center p-4">
						<div class="contact-icon mx-auto mb-4 d-flex align-items-center justify-content-center rounded-circle"
							 style="width: 70px; height: 70px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
							<i class="fas fa-clock text-white fs-4"></i>
						</div>
						<h5 class="card-title fw-bold mb-3">Working Hours</h5>
						<p class="card-text text-muted">
							Mon - Fri: 8:00 AM - 6:00 PM<br>
							Sat: 9:00 AM - 4:00 PM
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Contact Form & Map Section -->
<section class="py-5 bg-light">
	<div class="container">
		<div class="row g-5 align-items-center">
			<!-- Contact Form -->
			<div class="col-lg-6" data-aos="fade-right">
				<div class="card border-0 shadow-lg">
					<div class="card-header bg-white border-0 py-4">
						<h3 class="card-title mb-0 fw-bold">Send us a Message</h3>
						<p class="text-muted mb-0">We'd love to hear from you. Fill out the form below and we'll get back to you soon.</p>
					</div>
					<div class="card-body p-4">
						<!-- Success message -->
						@if(Session::has('success'))
						<div class="alert alert-success alert-dismissible fade show" role="alert">
							<i class="fas fa-check-circle me-2"></i>
							{{Session::get('success')}}
							<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
						</div>
						@endif
						
						<form method="POST" action="{{route('contact.store')}}" class="modern-form">
							@csrf
							<div class="row g-3">
								<div class="col-12">
									<label for="name" class="form-label fw-semibold">Full Name *</label>
									<input type="text" 
										   class="form-control rounded-pill border-2 {{ $errors->has('name') ? 'is-invalid' : '' }}" 
										   name="name" id="name" 
										   placeholder="Enter your full name"
										   value="{{ old('name') }}">
									@if ($errors->has('name'))
									<div class="invalid-feedback">
										{{ $errors->first('name') }}
									</div>
									@endif
								</div>

								<div class="col-12">
									<label for="email" class="form-label fw-semibold">Email Address *</label>
									<input type="email" 
										   class="form-control rounded-pill border-2 {{ $errors->has('email') ? 'is-invalid' : '' }}" 
										   name="email" id="email" 
										   placeholder="Enter your email address"
										   value="{{ old('email') }}">
									@if ($errors->has('email'))
									<div class="invalid-feedback">
										{{ $errors->first('email') }}
									</div>
									@endif
								</div>

								<div class="col-12">
									<label for="subject" class="form-label fw-semibold">Subject *</label>
									<input type="text" 
										   class="form-control rounded-pill border-2 {{ $errors->has('subject') ? 'is-invalid' : '' }}" 
										   name="subject" id="subject" 
										   placeholder="What's this about?"
										   value="{{ old('subject') }}">
									@if ($errors->has('subject'))
									<div class="invalid-feedback">
										{{ $errors->first('subject') }}
									</div>
									@endif
								</div>

								<div class="col-12">
									<label for="message" class="form-label fw-semibold">Message *</label>
									<textarea class="form-control border-2 {{ $errors->has('message') ? 'is-invalid' : '' }}" 
											  name="message" id="message" 
											  rows="5" 
											  placeholder="Tell us about your travel plans or questions..."
											  style="border-radius: 20px;">{{ old('message') }}</textarea>
									@if ($errors->has('message'))
									<div class="invalid-feedback">
										{{ $errors->first('message') }}
									</div>
									@endif
								</div>

								<div class="col-12 pt-3">
									<button type="submit" class="btn btn-primary rounded-pill px-5 py-3 fw-semibold">
										<i class="fas fa-paper-plane me-2"></i>Send Message
									</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>

			<!-- Map & Info -->
			<div class="col-lg-6" data-aos="fade-left">
				<div class="card border-0 shadow-lg h-100">
					<div class="card-header bg-white border-0 py-4">
						<h3 class="card-title mb-0 fw-bold">Visit Our Office</h3>
						<p class="text-muted mb-0">Come see us in person at our Nairobi office.</p>
					</div>
					<div class="card-body p-0">
						<!-- Interactive Map -->
						<div class="map-container position-relative">
							<div id="map" class="w-100" style="height: 350px; border-radius: 0 0 0.375rem 0.375rem;"></div>
							<div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center bg-primary bg-opacity-10" id="map-overlay" style="border-radius: 0 0 0.375rem 0.375rem;">
								<div class="text-center">
									<i class="fas fa-map-marked-alt text-primary mb-3" style="font-size: 3rem;"></i>
									<p class="fw-semibold text-primary">Click to view interactive map</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Quick Contact Info -->
				<div class="row g-3 mt-3">
					<div class="col-6">
						<div class="text-center p-3 bg-white rounded shadow-sm">
							<i class="fas fa-directions text-primary mb-2"></i>
							<small class="d-block text-muted">15 min from CBD</small>
						</div>
					</div>
					<div class="col-6">
						<div class="text-center p-3 bg-white rounded shadow-sm">
							<i class="fas fa-parking text-primary mb-2"></i>
							<small class="d-block text-muted">Free Parking</small>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Modern Footer -->
<footer class="modern-footer py-5" style="background: #2d3748; color: white;">
	<div class="container">
		<div class="row g-4">
			<div class="col-lg-4">
				<div class="footer-brand mb-4">
					<div class="d-flex align-items-center mb-3">
						<div class="me-3 d-flex align-items-center justify-content-center rounded-circle" 
							 style="width: 50px; height: 50px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
							<i class="fas fa-globe-africa text-white"></i>
						</div>
						<h4 class="mb-0">Tours<span style="color: #667eea;">Travel</span></h4>
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
						<i class="fas fa-map-marker-alt me-3" style="color: #667eea;"></i>
						<span class="text-white-50">Ole Sangale Road, Madaraka Estate<br>Nairobi, Kenya</span>
					</div>
					<div class="d-flex align-items-center mb-3">
						<i class="fas fa-phone me-3" style="color: #667eea;"></i>
						<span class="text-white-50">+254 712 345 678</span>
					</div>
					<div class="d-flex align-items-center">
						<i class="fas fa-envelope me-3" style="color: #667eea;"></i>
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
		<hr class="my-4" style="border-color: #4a5568;">
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



<!-- Custom Styles for Contact Page -->
<style>
.contact-card {
	transition: all 0.3s ease;
}

.contact-card:hover {
	transform: translateY(-5px);
	box-shadow: 0 15px 35px rgba(0,0,0,0.15) !important;
}

.contact-icon {
	transition: all 0.3s ease;
}

.contact-card:hover .contact-icon {
	transform: scale(1.1);
}

.modern-form .form-control:focus {
	border-color: #667eea;
	box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.25);
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

.nav-link.active {
	color: #667eea !important;
}

/* Breadcrumb Styles */
.breadcrumb-item + .breadcrumb-item::before {
	content: "→";
	color: rgba(255, 255, 255, 0.7);
}

/* Map overlay */
.map-container:hover #map-overlay {
	opacity: 0;
	pointer-events: none;
	transition: opacity 0.3s ease;
}

/* Form animations */
.modern-form .form-control {
	transition: all 0.3s ease;
}

.modern-form .form-control:focus {
	transform: translateY(-2px);
}

/* Button hover effects */
.btn:hover {
	transform: translateY(-2px);
	transition: all 0.3s ease;
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

<!-- Google Maps API -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&callback=initMap" async defer></script>

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

// Initialize Google Map
function initMap() {
	// Office location coordinates
	const officeLocation = { lat: -1.3067, lng: 36.8156 }; // Nairobi coordinates
	
	const map = new google.maps.Map(document.getElementById('map'), {
		zoom: 15,
		center: officeLocation,
		styles: [
			{
				"featureType": "all",
				"elementType": "geometry.fill",
				"stylers": [{"weight": "2.00"}]
			},
			{
				"featureType": "all",
				"elementType": "geometry.stroke",
				"stylers": [{"color": "#9c9c9c"}]
			},
			{
				"featureType": "all",
				"elementType": "labels.text",
				"stylers": [{"visibility": "on"}]
			}
		]
	});
	
	// Add marker
	const marker = new google.maps.Marker({
		position: officeLocation,
		map: map,
		title: 'ToursTravel Kenya Office',
		animation: google.maps.Animation.DROP
	});
	
	// Info window
	const infoWindow = new google.maps.InfoWindow({
		content: `
			<div class="p-3">
				<h6 class="fw-bold mb-2">ToursTravel Kenya</h6>
				<p class="mb-1 text-muted">Ole Sangale Road, Madaraka Estate</p>
				<p class="mb-1 text-muted">Nairobi, Kenya</p>
				<p class="mb-0 text-primary">+254 712 345 678</p>
			</div>
		`
	});
	
	marker.addListener('click', function() {
		infoWindow.open(map, marker);
	});
	
	// Remove overlay on map interaction
	const mapOverlay = document.getElementById('map-overlay');
	if (mapOverlay) {
		map.addListener('click', function() {
			mapOverlay.style.display = 'none';
		});
	}
}

// Form enhancements
document.addEventListener('DOMContentLoaded', function() {
	// Form validation feedback
	const forms = document.querySelectorAll('.modern-form');
	forms.forEach(form => {
		form.addEventListener('submit', function(e) {
			const requiredFields = form.querySelectorAll('input[required], textarea[required]');
			let isValid = true;
			
			requiredFields.forEach(field => {
				if (!field.value.trim()) {
					field.classList.add('is-invalid');
					isValid = false;
				} else {
					field.classList.remove('is-invalid');
				}
			});
			
			if (!isValid) {
				e.preventDefault();
			}
		});
	});
	
	// Real-time validation
	const inputs = document.querySelectorAll('.modern-form input, .modern-form textarea');
	inputs.forEach(input => {
		input.addEventListener('blur', function() {
			if (this.hasAttribute('required') && !this.value.trim()) {
				this.classList.add('is-invalid');
			} else {
				this.classList.remove('is-invalid');
			}
		});
		
		input.addEventListener('input', function() {
			if (this.classList.contains('is-invalid') && this.value.trim()) {
				this.classList.remove('is-invalid');
			}
		});
	});
});

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
</script>

@endsection
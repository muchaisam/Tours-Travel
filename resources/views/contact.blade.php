@extends('layouts.front')

@section('title', 'Contact Us - ToursTravel Kenya')

@section('page')
<!-- Include Modern Navigation -->
@include('partials.navbar')

<!-- Modern Hero Section -->
<section class="contact-hero position-relative overflow-hidden">
	<div class="contact-hero-bg"></div>
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
			<path d="M1200 120L0 16.48V120H1200Z" fill="var(--hero-wave-fill, white)"/>
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
						<div class="contact-icon mx-auto mb-4 d-flex align-items-center justify-content-center rounded-circle">
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
						<div class="contact-icon mx-auto mb-4 d-flex align-items-center justify-content-center rounded-circle">
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
						<div class="contact-icon mx-auto mb-4 d-flex align-items-center justify-content-center rounded-circle">
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
						<div class="contact-icon mx-auto mb-4 d-flex align-items-center justify-content-center rounded-circle">
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
<section class="contact-form-section py-5 bg-light">
	<div class="container">
		<div class="row g-5 align-items-stretch">
			<!-- Contact Form -->
			<div class="col-lg-6" data-aos="fade-right">
				<div class="contact-form-card h-100">
					<div class="card-header py-4">
						<h3 class="card-title mb-0 fw-bold">Send us a Message</h3>
						<p class="text-muted mb-0">We'd love to hear from you. Fill out the form below and we'll get back to you soon.</p>
					</div>
					<div class="card-body p-4">
						@if(Session::has('success'))
						<div class="alert alert-success alert-dismissible fade show" role="alert">
							<i class="fas fa-check-circle me-2"></i>
							{{ Session::get('success') }}
							<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
						</div>
						@endif
						
						<form method="POST" action="{{ route('contact.store') }}" class="modern-form">
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
									<textarea class="form-control border-2 contact-textarea {{ $errors->has('message') ? 'is-invalid' : '' }}" 
											  name="message" id="message" 
											  rows="5" 
											  placeholder="Tell us about your travel plans or questions...">{{ old('message') }}</textarea>
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
				<div class="contact-map-card h-100">
					<div class="card-header py-4">
						<h3 class="card-title mb-0 fw-bold">Visit Our Office</h3>
						<p class="text-muted mb-0">Come see us in person at our Nairobi office.</p>
					</div>
					<div class="card-body p-0">
						<!-- Interactive Map -->
						<div class="map-container position-relative">
							<div id="map" class="w-100 contact-map"></div>
							<div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center bg-primary bg-opacity-10 contact-map-overlay" id="map-overlay">
								<div class="text-center">
									<i class="fas fa-map-marked-alt text-primary mb-3 contact-map-icon"></i>
									<p class="fw-semibold text-primary">Click to view interactive map</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Quick Contact Info -->
				<div class="row g-3 mt-3">
					<div class="col-6">
						<div class="quick-info-card text-center">
							<i class="fas fa-directions text-primary mb-2"></i>
							<small class="d-block text-muted">15 min from CBD</small>
						</div>
					</div>
					<div class="col-6">
						<div class="quick-info-card text-center">
							<i class="fas fa-parking text-primary mb-2"></i>
							<small class="d-block text-muted">Free Parking</small>
						</div>
					</div>
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

<!-- Google Maps API -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&callback=initMap" async defer></script>

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

// Initialize Google Map
function initMap() {
	const officeLocation = { lat: -1.3067, lng: 36.8156 };
	
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
	
	const marker = new google.maps.Marker({
		position: officeLocation,
		map: map,
		title: 'ToursTravel Kenya Office',
		animation: google.maps.Animation.DROP
	});
	
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
	
	const mapOverlay = document.getElementById('map-overlay');
	if (mapOverlay) {
		map.addListener('click', function() {
			mapOverlay.style.display = 'none';
		});
	}
}

// Form enhancements
document.addEventListener('DOMContentLoaded', function() {
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
</script>

@endsection

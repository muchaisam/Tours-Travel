@extends('layouts.front')

@section('title', 'Contact Us - ToursTravel Kenya')

@section('page')
@include('partials.navbar')

<!-- Page Hero -->
<section class="tt-page-hero">
	<div class="tt-page-hero-bg" style="background-image: url('{{ asset('images/place-2.jpg') }}');"></div>
	<div class="container" data-aos="fade-up">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb justify-content-center">
				<li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fas fa-home me-1"></i>Home</a></li>
				<li class="breadcrumb-item active">Contact</li>
			</ol>
		</nav>
		<h1 class="tt-page-title">Get In <span class="accent">Touch</span></h1>
		<p class="tt-page-subtitle">Ready to explore Kenya's wonders? We're here to help you plan the perfect adventure.</p>
	</div>
</section>

<!-- Contact Info Cards -->
<section class="tt-section-sm">
	<div class="container">
		<div class="row g-4" data-aos="fade-up">
			<div class="col-md-6 col-lg-3">
				<div class="tt-contact-card text-center">
					<div class="icon"><i class="fas fa-map-marker-alt"></i></div>
					<h5>Visit Our Office</h5>
					<p>Ole Sangale Road, Madaraka Estate<br>Nairobi, Kenya</p>
				</div>
			</div>
			<div class="col-md-6 col-lg-3">
				<div class="tt-contact-card text-center">
					<div class="icon"><i class="fas fa-phone"></i></div>
					<h5>Call Us</h5>
					<p><a href="tel:+254712345678">+254 712 345 678</a><br>Mon - Sat: 8AM - 6PM</p>
				</div>
			</div>
			<div class="col-md-6 col-lg-3">
				<div class="tt-contact-card text-center">
					<div class="icon"><i class="fas fa-envelope"></i></div>
					<h5>Email Us</h5>
					<p><a href="mailto:info@tourstravel.ke">info@tourstravel.ke</a><br>We reply within 24 hours</p>
				</div>
			</div>
			<div class="col-md-6 col-lg-3">
				<div class="tt-contact-card text-center">
					<div class="icon"><i class="fas fa-comments"></i></div>
					<h5>Live Chat</h5>
					<p>Available Mon - Fri<br>9AM - 5PM EAT</p>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Contact Form & Map -->
<section class="tt-section">
	<div class="container">
		<div class="row g-5">
			<!-- Form -->
			<div class="col-lg-6" data-aos="fade-right">
				<div class="tt-pretitle">Send us a Message</div>
				<h2 class="tt-title mb-3">Plan Your <span class="accent">Adventure</span></h2>
				<p class="mb-4">Fill out the form below and our team will get back to you within 24 hours.</p>

				@if(Session::has('success'))
				<div class="alert alert-success"><i class="fas fa-check-circle me-2"></i>{{ Session::get('success') }}</div>
				@endif

				<form method="POST" action="{{ route('contact.store') }}" class="tt-form">
					@csrf
					<div class="tt-form-group">
						<label class="tt-label"><i class="fas fa-user me-1"></i> Full Name *</label>
						<input type="text" name="name" class="tt-input {{ $errors->has('name') ? 'is-invalid' : '' }}"
							   placeholder="Enter your full name" value="{{ old('name') }}" required>
						@if ($errors->has('name'))
							<div class="tt-error">{{ $errors->first('name') }}</div>
						@endif
					</div>
					<div class="tt-form-group">
						<label class="tt-label"><i class="fas fa-envelope me-1"></i> Email Address *</label>
						<input type="email" name="email" class="tt-input {{ $errors->has('email') ? 'is-invalid' : '' }}"
							   placeholder="Enter your email address" value="{{ old('email') }}" required>
						@if ($errors->has('email'))
							<div class="tt-error">{{ $errors->first('email') }}</div>
						@endif
					</div>
					<div class="tt-form-group">
						<label class="tt-label"><i class="fas fa-tag me-1"></i> Subject *</label>
						<input type="text" name="subject" class="tt-input {{ $errors->has('subject') ? 'is-invalid' : '' }}"
							   placeholder="What's this about?" value="{{ old('subject') }}" required>
						@if ($errors->has('subject'))
							<div class="tt-error">{{ $errors->first('subject') }}</div>
						@endif
					</div>
					<div class="tt-form-group">
						<label class="tt-label"><i class="fas fa-comment me-1"></i> Message *</label>
						<textarea name="message" class="tt-textarea {{ $errors->has('message') ? 'is-invalid' : '' }}"
								  rows="6" placeholder="Tell us about your travel plans..." required>{{ old('message') }}</textarea>
						@if ($errors->has('message'))
							<div class="tt-error">{{ $errors->first('message') }}</div>
						@endif
					</div>
					<button type="submit" class="btn-tt-primary w-100">
						Send Message <i class="fas fa-paper-plane ms-1"></i>
					</button>
				</form>
			</div>

			<!-- Map & Quick Info -->
			<div class="col-lg-6" data-aos="fade-left">
				<div class="tt-map-wrapper mb-4">
					<div id="map" style="width:100%;height:350px;border-radius:var(--tt-radius);"></div>
				</div>
				<div class="row g-3">
					<div class="col-md-4">
						<div class="tt-contact-card text-center p-3">
							<i class="fas fa-directions fa-lg mb-2" style="color:var(--tt-primary);"></i>
							<h6>Easy to Find</h6>
							<small>15 min from Nairobi CBD</small>
						</div>
					</div>
					<div class="col-md-4">
						<div class="tt-contact-card text-center p-3">
							<i class="fas fa-parking fa-lg mb-2" style="color:var(--tt-primary);"></i>
							<h6>Free Parking</h6>
							<small>Ample parking available</small>
						</div>
					</div>
					<div class="col-md-4">
						<div class="tt-contact-card text-center p-3">
							<i class="fas fa-coffee fa-lg mb-2" style="color:var(--tt-primary);"></i>
							<h6>Comfortable Office</h6>
							<small>Refreshments while you plan</small>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- FAQ -->
<section class="tt-section tt-section-light">
	<div class="container">
		<div class="tt-section-header text-center" data-aos="fade-up">
			<div class="tt-pretitle">Got Questions?</div>
			<h2 class="tt-title">Frequently Asked <span class="accent">Questions</span></h2>
		</div>
		<div class="row justify-content-center">
			<div class="col-lg-8">
				<div class="accordion tt-accordion" id="faqAccordion" data-aos="fade-up">
					<div class="accordion-item">
						<h2 class="accordion-header"><button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">How far in advance should I book my safari?</button></h2>
						<div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
							<div class="accordion-body">We recommend booking at least 3-6 months in advance, especially for peak season (July-October and December-February). However, we can accommodate last-minute bookings based on availability.</div>
						</div>
					</div>
					<div class="accordion-item">
						<h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">What's included in the tour packages?</button></h2>
						<div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
							<div class="accordion-body">Our packages typically include accommodation, meals, park fees, professional guide, game drives, and airport transfers. Specific inclusions vary by package.</div>
						</div>
					</div>
					<div class="accordion-item">
						<h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">Do you offer customized itineraries?</button></h2>
						<div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
							<div class="accordion-body">Absolutely! We specialize in tailor-made experiences. Contact us with your preferences, budget, and travel dates, and we'll craft the perfect Kenyan adventure.</div>
						</div>
					</div>
					<div class="accordion-item">
						<h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">What payment methods do you accept?</button></h2>
						<div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
							<div class="accordion-body">We accept M-Pesa, bank transfers, credit/debit cards via Stripe, and international wire transfers. A deposit is typically required to confirm your booking.</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

@include('partials.footer')

@push('scripts')
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&callback=initMap" async defer></script>
<script>
function initMap() {
	const loc = { lat: -1.3067, lng: 36.8156 };
	const map = new google.maps.Map(document.getElementById('map'), { zoom: 15, center: loc });
	const marker = new google.maps.Marker({ position: loc, map, title: 'ToursTravel Kenya', animation: google.maps.Animation.DROP });
	const info = new google.maps.InfoWindow({ content: '<div style="padding:.75rem"><strong>ToursTravel Kenya</strong><br>Ole Sangale Road, Nairobi<br><span style="color:var(--tt-primary)">+254 712 345 678</span></div>' });
	marker.addListener('click', () => info.open(map, marker));
}
</script>
@endpush
@endsection
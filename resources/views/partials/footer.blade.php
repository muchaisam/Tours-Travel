<!-- Footer -->
<footer class="tt-footer">
	<div class="container">
		<div class="row g-4">
			<!-- Brand -->
			<div class="col-lg-4">
				<div class="d-flex align-items-center gap-2 mb-3">
					<div class="brand-icon"><i class="fas fa-globe-africa"></i></div>
					<h4 class="mb-0">Tours<span class="brand-accent" style="color:var(--tt-accent)">Travel</span></h4>
				</div>
				<p class="mb-3">
					Your trusted local guide to Kenya's most incredible destinations.
					We create authentic experiences that connect you with our beautiful homeland.
				</p>
				<div class="social-links">
					<a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
					<a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
					<a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
					<a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
				</div>
			</div>

			<!-- Quick Links -->
			<div class="col-lg-2 col-md-6">
				<h5>Quick Links</h5>
				<a href="{{ url('/') }}" class="tt-footer-link">Home</a>
				<a href="{{ route('packages') }}" class="tt-footer-link">Destinations</a>
				<a href="{{ route('blog') }}" class="tt-footer-link">Blog</a>
				<a href="{{ route('about') }}" class="tt-footer-link">About</a>
				<a href="{{ route('contact') }}" class="tt-footer-link">Contact</a>
			</div>

			<!-- Services -->
			<div class="col-lg-3 col-md-6">
				<h5>Our Services</h5>
				<a href="#" class="tt-footer-link">Safari Tours</a>
				<a href="#" class="tt-footer-link">Beach Holidays</a>
				<a href="#" class="tt-footer-link">Cultural Experiences</a>
				<a href="#" class="tt-footer-link">Adventure Tours</a>
				<a href="#" class="tt-footer-link">Group Packages</a>
			</div>

			<!-- Contact Info -->
			<div class="col-lg-3 col-md-6">
				<h5>Contact Info</h5>
				<div class="contact-row">
					<i class="fas fa-map-marker-alt"></i>
					<span>Ole Sangale Road, Madaraka Estate<br>Nairobi, Kenya</span>
				</div>
				<div class="contact-row">
					<i class="fas fa-phone"></i>
					<span>+254 712 345 678</span>
				</div>
				<div class="contact-row">
					<i class="fas fa-envelope"></i>
					<span>info@tourstravel.ke</span>
				</div>
			</div>
		</div>

		<!-- Bottom bar -->
		<div class="tt-footer-bottom">
			<div class="row align-items-center">
				<div class="col-md-6">
					<p>&copy; {{ date('Y') }} ToursTravel Kenya. All rights reserved.</p>
				</div>
				<div class="col-md-6 text-md-end">
					<a href="#" class="me-3">Privacy Policy</a>
					<a href="#">Terms of Service</a>
				</div>
			</div>
		</div>
	</div>
</footer>

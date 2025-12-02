@extends('layouts.front')

@section('title', 'Tour Destinations - ToursTravel Kenya')

@section('page')
<!-- Modern Navigation -->
<nav class="navbar-modern navbar navbar-expand-lg fixed-top">
	<div class="container">
		<a class="navbar-brand d-flex align-items-center brand-logo" href="{{ url('/') }}">
			<div class="brand-icon me-2">
				<i class="fas fa-globe-africa text-white"></i>
			</div>
			<span class="fw-bold fs-4">Tours<span class="brand-text-highlight">Travel</span></span>
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
					<a class="btn btn-outline-gradient rounded-pill px-4" href="{{route('login')}}">Login</a>
				</li>
			</ul>
		</div>
	</div>
</nav>

<!-- Modern Hero Section -->
<section class="hero-section hero-bg-overlay packages-hero">
	<div class="hero-bg-image"></div>
	<div class="container position-relative h-100 d-flex align-items-center">
		<div class="row w-100">
			<div class="col-lg-8 mx-auto text-center text-white" data-aos="fade-up">
				<nav aria-label="breadcrumb" class="mb-4">
					<ol class="breadcrumb justify-content-center bg-transparent">
						<li class="breadcrumb-item">
							<a href="{{ url('/') }}" class="text-white-50 text-decoration-none">Home</a>
						</li>
						<li class="breadcrumb-item active text-white">Destinations</li>
					</ol>
				</nav>
				<h1 class="display-4 fw-bold mb-4">Discover Kenya's Wonders</h1>
				<p class="lead mb-0">
					From the wild savannah of Maasai Mara to the pristine beaches of Diani, 
					explore our handpicked destinations that showcase Kenya's natural beauty.
				</p>
			</div>
		</div>
	</div>
	<div class="position-absolute bottom-0 w-100">
		<svg viewBox="0 0 1200 120" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M1200 120L0 16.48V120H1200Z" fill="currentColor" class="hero-wave"/>
		</svg>
	</div>
</section>

<!-- Featured Destinations Showcase -->
<section class="py-5">
	<div class="container">
		<div class="row justify-content-center mb-5">
			<div class="col-lg-8 text-center" data-aos="fade-up">
				<h2 class="fw-bold mb-4 section-heading-packages">Kenya's Top Destinations</h2>
				<p class="section-lead-packages lead">
					Discover the most spectacular locations that make Kenya a world-class tourism destination
				</p>
			</div>
		</div>
		
		<div class="row g-4">
			<div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
				<div class="featured-destination-card position-relative h-100">
					<div class="destination-image position-relative">
						<img src="{{ asset('images/place-1.jpg') }}" alt="Maasai Mara" class="featured-destination-image">
						<div class="featured-destination-overlay">
							<div class="text-white">
								<h5 class="fw-bold mb-1">Maasai Mara</h5>
								<small><i class="fas fa-route me-1"></i>12 Available Tours</small>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
				<div class="featured-destination-card position-relative h-100">
					<div class="destination-image position-relative">
						<img src="{{ asset('images/place-2.jpg') }}" alt="Diani Beach" class="featured-destination-image">
						<div class="featured-destination-overlay">
							<div class="text-white">
								<h5 class="fw-bold mb-1">Diani Beach</h5>
								<small><i class="fas fa-route me-1"></i>8 Available Tours</small>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
				<div class="featured-destination-card position-relative h-100">
					<div class="destination-image position-relative">
						<img src="{{ asset('images/place-3.jpg') }}" alt="Mount Kenya" class="featured-destination-image">
						<div class="featured-destination-overlay">
							<div class="text-white">
								<h5 class="fw-bold mb-1">Mount Kenya</h5>
								<small><i class="fas fa-route me-1"></i>6 Available Tours</small>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
				<div class="featured-destination-card position-relative h-100">
					<div class="destination-image position-relative">
						<img src="{{ asset('images/place-4.jpg') }}" alt="Lake Nakuru" class="featured-destination-image">
						<div class="featured-destination-overlay">
							<div class="text-white">
								<h5 class="fw-bold mb-1">Lake Nakuru</h5>
								<small><i class="fas fa-route me-1"></i>5 Available Tours</small>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Modern Search & Filter Section -->
<section class="py-5 bg-light">
	<div class="container">
		<div class="card packages-search-card">
			<div class="card-body p-4">
				<form action="{{ route('packages') }}" method="GET" class="search-form">
					<div class="row g-3 align-items-end">
						<div class="col-lg-4">
							<label for="search" class="form-label fw-semibold">Search Destinations</label>
							<div class="input-group">
								<span class="input-group-text bg-white border-end-0">
									<i class="fas fa-search text-muted"></i>
								</span>
								<input type="text" class="form-control packages-search-input border-start-0 rounded-end" 
									   id="search" name="search" 
									   placeholder="Search by destination name..."
									   value="{{ request('search') }}">
							</div>
						</div>
						
						<div class="col-lg-3">
							<label for="category" class="form-label fw-semibold">Category</label>
							<select class="form-select packages-search-input" id="category" name="category">
								<option value="">All Categories</option>
								@foreach($categories as $category)
									<option value="{{ $category->id }}" 
										{{ request('category') == $category->id ? 'selected' : '' }}>
										{{ $category->name }}
									</option>
								@endforeach
							</select>
						</div>
						
						<div class="col-lg-3">
							<label for="price_range" class="form-label fw-semibold">Price Range (KSh)</label>
							<select class="form-select packages-search-input" id="price_range" name="price_range">
								<option value="">Any Price</option>
								<option value="0-50000" {{ request('price_range') == '0-50000' ? 'selected' : '' }}>
									Under KSh 50,000
								</option>
								<option value="50000-100000" {{ request('price_range') == '50000-100000' ? 'selected' : '' }}>
									KSh 50,000 - 100,000
								</option>
								<option value="100000-200000" {{ request('price_range') == '100000-200000' ? 'selected' : '' }}>
									KSh 100,000 - 200,000
								</option>
								<option value="200000+" {{ request('price_range') == '200000+' ? 'selected' : '' }}>
									Over KSh 200,000
								</option>
							</select>
						</div>
						
						<div class="col-lg-2">
							<button type="submit" class="btn packages-search-btn w-100 rounded-pill">
								<i class="fas fa-search me-2"></i>Search
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>


<!-- Main Destinations Listing -->
<section class="py-5">
	<div class="container">
		<div class="row justify-content-center mb-5">
			<div class="col-lg-8 text-center" data-aos="fade-up">
				<h2 class="fw-bold mb-4 section-heading-packages">
					@if(request('search'))
						Search Results for "{{ request('search') }}"
					@else
						All Tour Destinations
					@endif
				</h2>
				<p class="text-muted">
					@if($destinations->count() > 0)
						Showing {{ $destinations->count() }} of our amazing Kenyan destinations
					@else
						No destinations found matching your criteria
					@endif
				</p>
			</div>
		</div>
		
		@if($destinations->count() > 0)
		<div class="row g-4">
			@foreach ($destinations as $destination)
			<div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="{{ $loop->iteration * 100 }}">
				<div class="destination-card card shadow-lg h-100 rounded-4 overflow-hidden">
					<!-- Destination Image -->
					<div class="position-relative">
						<img src="{{ asset('images/destination-2.jpg') }}" 
							 alt="{{ $destination->title }}" 
							 class="destination-image card-img-top">
						
						<!-- Category Badge -->
						<div class="position-absolute top-3 start-3">
							<span class="badge category-badge-packages rounded-pill px-3 py-2">
								<i class="fas fa-tag me-1"></i>{{ $destination->category->name }}
							</span>
						</div>
						
						<!-- Favorite Button -->
						<div class="position-absolute top-3 end-3">
							<button class="btn destination-favorite-btn shadow-sm">
								<i class="far fa-heart text-muted"></i>
							</button>
						</div>
					</div>
					
					<!-- Card Body -->
					<div class="card-body p-4">
						<!-- Pricing & Duration -->
						<div class="d-flex justify-content-between align-items-center mb-3">
							<div class="price-info">
								<h5 class="mb-0 fw-bold destination-price">
									{{ $destination->formatted_pricing ?? $destination->pricing }}
								</h5>
								<small class="text-muted">per person</small>
							</div>
							<div class="duration-info text-end">
								<div class="badge destination-duration-badge">
									<i class="fas fa-clock me-1"></i>7-10 Days
								</div>
							</div>
						</div>
						
						<!-- Title & Description -->
						<h5 class="card-title fw-bold mb-3">
							<a href="{{ route('desti.show', $destination->id) }}" 
							   class="text-decoration-none destination-title stretched-link">
								{{ $destination->title }}
							</a>
						</h5>
						
						<p class="text-muted mb-4">
							{{ Str::limit($destination->description, 100) }}
						</p>
						
						<!-- Features -->
						<div class="features-list d-flex flex-wrap gap-3">
							<div class="feature-item d-flex align-items-center">
								<i class="fas fa-users destination-feature-icon me-2"></i>
								<small class="text-muted">Group Tours</small>
							</div>
							<div class="feature-item d-flex align-items-center">
								<i class="fas fa-camera text-primary me-2"></i>
								<small class="text-muted">Photo Safari</small>
							</div>
							<div class="feature-item d-flex align-items-center">
								<i class="fas fa-leaf text-primary me-2"></i>
								<small class="text-muted">Eco-Friendly</small>
							</div>
						</div>
					</div>
					
					<!-- Card Footer -->
					<div class="card-footer bg-transparent border-0 pt-0 pb-4 px-4">
						<div class="d-flex justify-content-between align-items-center">
							<div class="rating">
								<div class="stars text-warning">
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
								</div>
								<small class="text-muted ms-2">(4.9) 127 reviews</small>
							</div>
							<button class="btn btn-outline-primary btn-sm rounded-pill px-3">
								<i class="fas fa-info-circle me-1"></i>Details
							</button>
						</div>
					</div>
				</div>
			</div>
			@endforeach
		</div>
		
		<!-- Modern Pagination -->
		<div class="row mt-5">
			<div class="col-12">
				<div class="d-flex justify-content-center">
					<div class="pagination-wrapper">
						{{ $destinations->appends(request()->query())->links('pagination::bootstrap-4') }}
					</div>
				</div>
			</div>
		</div>
		@else
		<!-- No Results State -->
		<div class="row justify-content-center">
			<div class="col-lg-6 text-center" data-aos="fade-up">
				<div class="empty-state py-5">
					<i class="fas fa-search empty-state-icon mb-4"></i>
					<h4 class="mb-3 empty-state-heading">No Destinations Found</h4>
					<p class="empty-state-text mb-4">
						We couldn't find any destinations matching your search criteria. 
						Try adjusting your filters or search terms.
					</p>
					<a href="{{ route('packages') }}" class="btn btn-gradient rounded-pill px-4">
						<i class="fas fa-refresh me-2"></i>View All Destinations
					</a>
				</div>
			</div>
		</div>
		@endif
	</div>
</section>

<!-- Modern Footer -->
<footer class="packages-footer">
	<div class="container">
		<div class="row g-4">
			<div class="col-lg-4">
				<div class="footer-brand mb-4">
					<div class="d-flex align-items-center mb-3">
						<div class="packages-footer-icon-wrapper me-3">
							<i class="fas fa-globe-africa text-white"></i>
						</div>
						<h4 class="mb-0 packages-footer-heading">Tours<span class="brand-text-highlight">Travel</span></h4>
					</div>
					<p class="text-muted mb-4">
						Your trusted local guide to Kenya's most incredible destinations. 
						We create authentic experiences that connect you with our beautiful homeland.
					</p>
					<div class="social-links d-flex gap-3">
						<a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
						<a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
						<a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
						<a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
					</div>
				</div>
			</div>
			<div class="col-lg-2 col-md-6">
				<h5 class="mb-4 footer-title">Quick Links</h5>
				<ul class="list-unstyled">
					<li class="mb-2"><a href="{{ url('/') }}" class="packages-footer-link">Home</a></li>
					<li class="mb-2"><a href="{{route('packages')}}" class="packages-footer-link">Destinations</a></li>
					<li class="mb-2"><a href="{{route('blog')}}" class="packages-footer-link">Blog</a></li>
					<li class="mb-2"><a href="{{route('about')}}" class="packages-footer-link">About</a></li>
					<li class="mb-2"><a href="{{route('contact')}}" class="packages-footer-link">Contact</a></li>
				</ul>
			</div>
			<div class="col-lg-3 col-md-6">
				<h5 class="mb-4 footer-title">Popular Categories</h5>
				<ul class="list-unstyled">
					@foreach($categories->take(5) as $category)
					<li class="mb-2">
						<a href="{{ route('packages', ['category' => $category->id]) }}" 
						   class="packages-footer-link">
							{{ $category->name }}
						</a>
					</li>
					@endforeach
				</ul>
			</div>
			<div class="col-lg-3 col-md-6">
				<h5 class="mb-4 footer-title">Contact Info</h5>
				<div class="contact-info">
					<div class="d-flex align-items-center mb-3">
						<i class="fas fa-map-marker-alt me-3 packages-footer-icon"></i>
						<span class="text-muted">Ole Sangale Road, Madaraka Estate<br>Nairobi, Kenya</span>
					</div>
					<div class="d-flex align-items-center mb-3">
						<i class="fas fa-phone me-3 packages-footer-icon"></i>
						<span class="text-muted">+254 712 345 678</span>
					</div>
					<div class="d-flex align-items-center">
						<i class="fas fa-envelope me-3 packages-footer-icon"></i>
						<span class="text-muted">info@tourstravel.ke</span>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Copyright -->
		<hr class="my-4 packages-footer-hr">
		<div class="row align-items-center">
			<div class="col-md-6">
				<p class="mb-0 text-muted">© 2025 ToursTravel Kenya. All rights reserved.</p>
			</div>
			<div class="col-md-6 text-md-end">
				<p class="mb-0">
					<a href="#" class="packages-footer-link text-decoration-none me-3">Privacy Policy</a>
					<a href="#" class="packages-footer-link text-decoration-none">Terms of Service</a>
				</p>
			</div>
		</div>
	</div>
</footer>
    
  

<!-- Custom Styles for Destinations Page -->
<style>
.destination-card {
	transition: all 0.3s ease;
	cursor: pointer;
}

.destination-card:hover {
	transform: translateY(-8px);
	box-shadow: 0 20px 40px rgba(0,0,0,0.15) !important;
}

.destination-overlay {
	transition: all 0.3s ease;
	opacity: 0.8;
}

.destination-card:hover .destination-overlay {
	opacity: 1;
}

.search-form .form-control:focus,
.search-form .form-select:focus {
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

/* Modern Pagination Styles */
.pagination-wrapper .pagination {
	gap: 0.5rem;
}

.pagination-wrapper .page-item .page-link {
	border: none;
	border-radius: 50%;
	width: 45px;
	height: 45px;
	display: flex;
	align-items: center;
	justify-content: center;
	color: #667eea;
	background: white;
	box-shadow: 0 2px 8px rgba(0,0,0,0.1);
	transition: all 0.3s ease;
}

.pagination-wrapper .page-item.active .page-link {
	background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
	color: white;
	transform: scale(1.1);
}

.pagination-wrapper .page-item .page-link:hover {
	background: #667eea;
	color: white;
	transform: translateY(-2px);
}

/* Feature badges */
.feature-item i {
	font-size: 0.875rem;
}

/* Rating stars */
.stars i {
	font-size: 0.75rem;
}

/* Empty state animation */
.empty-state i {
	animation: float 3s ease-in-out infinite;
}

@keyframes float {
	0%, 100% { transform: translateY(0px); }
	50% { transform: translateY(-10px); }
}

/* Button hover effects */
.btn:hover {
	transform: translateY(-2px);
	transition: all 0.3s ease;
}

/* Card image hover effect */
.destination-card .card-img-top {
	transition: transform 0.3s ease;
}

.destination-card:hover .card-img-top {
	transform: scale(1.05);
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

// Enhanced search form interactions
document.addEventListener('DOMContentLoaded', function() {
	// Auto-submit form on filter change
	const filterSelects = document.querySelectorAll('#category, #price_range');
	filterSelects.forEach(select => {
		select.addEventListener('change', function() {
			// Optional: auto-submit on filter change
			// this.form.submit();
		});
	});
	
	// Search input enhancements
	const searchInput = document.getElementById('search');
	if (searchInput) {
		let searchTimeout;
		searchInput.addEventListener('input', function() {
			// Clear previous timeout
			clearTimeout(searchTimeout);
			
			// Set new timeout for search suggestions (if needed)
			searchTimeout = setTimeout(() => {
				// Could implement live search suggestions here
				console.log('Search term:', this.value);
			}, 300);
		});
	}
	
	// Favorite button interactions
	document.querySelectorAll('.btn-light').forEach(button => {
		if (button.querySelector('.fa-heart')) {
			button.addEventListener('click', function(e) {
				e.preventDefault();
				e.stopPropagation();
				
				const heart = this.querySelector('.fa-heart');
				if (heart.classList.contains('far')) {
					heart.classList.remove('far');
					heart.classList.add('fas');
					heart.style.color = '#e74c3c';
				} else {
					heart.classList.remove('fas');
					heart.classList.add('far');
					heart.style.color = '';
				}
			});
		}
	});
});

// Destination card click handling
document.querySelectorAll('.destination-card').forEach(card => {
	card.addEventListener('click', function(e) {
		// Only navigate if the click wasn't on a button or link
		if (!e.target.closest('button') && !e.target.closest('a')) {
			const link = this.querySelector('.stretched-link');
			if (link) {
				window.location.href = link.href;
			}
		}
	});
});
</script>

@endsection
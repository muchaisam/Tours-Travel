@extends('layouts.front')

@section('title', $destinations->title . ' - ToursTravel Kenya')

@section('page')
@include('partials.navbar')

<!-- Page Hero -->
<section class="tt-page-hero">
	<div class="tt-page-hero-bg" style="background-image: url('{{ $destinations->image_url }}');"></div>
	<div class="container" data-aos="fade-up">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb justify-content-center">
				<li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fas fa-home me-1"></i>Home</a></li>
				<li class="breadcrumb-item"><a href="{{ route('packages') }}">Destinations</a></li>
				<li class="breadcrumb-item active">{{ $destinations->title }}</li>
			</ol>
		</nav>
		<h1 class="tt-page-title">{{ $destinations->title }}</h1>
		<p class="tt-page-subtitle">{{ $destinations->description }}</p>
	</div>
</section>

<!-- Destination Detail -->
<section class="tt-section">
	<div class="container">
		<div class="row g-4">
			<!-- Main Content -->
			<div class="col-lg-8">
				<!-- Gallery Image -->
				<div class="tt-detail-gallery mb-4" data-aos="fade-up">
					<img src="{{ $destinations->image_url }}"
						 alt="{{ $destinations->title }}" class="img-fluid rounded-3 w-100" loading="lazy">
					<span class="tt-detail-badge"><i class="fas fa-map-marker-alt me-1"></i> Featured</span>
				</div>

				<!-- Content Card -->
				<div class="tt-detail-content" data-aos="fade-up">
					<h2>{{ $destinations->title }}</h2>
					<p class="lead">{{ $destinations->description }}</p>
					<h4>About This Destination</h4>
					<p>{{ $destinations->content }}</p>
				</div>

				<!-- Booking CTA -->
				<div class="tt-detail-booking" data-aos="fade-up">
					<div class="row g-0 align-items-center">
						<div class="col-md-8 p-4">
							<h4>Ready to Book Your Adventure?</h4>
							<p>Experience the beauty and culture of {{ $destinations->title }}. Our expert guides will ensure an unforgettable journey.</p>
							<div class="d-flex flex-wrap gap-3">
								<a href="{{ route('cart') }}" class="btn-tt-primary">
									<i class="fas fa-shopping-cart me-2"></i> Add to Cart
								</a>
								<a href="{{ route('contact') }}" class="btn-tt-outline">
									<i class="fas fa-phone me-2"></i> Contact Us
								</a>
							</div>
						</div>
						<div class="col-md-4 tt-detail-booking-accent text-center p-4">
							<i class="fas fa-plane fa-3x mb-2"></i>
							<h5 class="mb-1">Book Now</h5>
							<small>Best Rates Guaranteed</small>
						</div>
					</div>
				</div>
			</div>

			<!-- Sidebar -->
			<div class="col-lg-4">
				<!-- Pricing Card -->
				<div class="tt-sidebar-card mb-4" data-aos="fade-left">
					<div class="text-center mb-4">
						<div class="tt-price-label">Starting From</div>
					<div class="tt-price-amount">KSH {{ number_format($destinations->price) }}</div>
						<small class="text-muted">per person</small>
					</div>
					<div class="tt-info-list">
						<div class="tt-info-row">
							<div class="tt-info-icon"><i class="fas fa-clock"></i></div>
							<div>
								<div class="tt-info-label">Duration</div>
						<div class="tt-info-value">{{ $destinations->duration ?? 'Contact us' }}</div>
							</div>
						</div>
						<div class="tt-info-row">
							<div class="tt-info-icon"><i class="fas fa-users"></i></div>
							<div>
								<div class="tt-info-label">Group Size</div>
						<div class="tt-info-value">{{ $destinations->group_size ?? 'Flexible' }}</div>
							</div>
						</div>
						<div class="tt-info-row">
							<div class="tt-info-icon"><i class="fas fa-map-marked-alt"></i></div>
							<div>
								<div class="tt-info-label">Tour Type</div>
						<div class="tt-info-value">{{ $destinations->tour_type ?? 'General' }}</div>
							</div>
						</div>
						<div class="tt-info-row">
							<div class="tt-info-icon"><i class="fas fa-star"></i></div>
							<div>
								<div class="tt-info-label">Rating</div>
						<div class="tt-info-value">
							@if($destinations->reviews_count > 0)
								{{ number_format($destinations->average_rating, 1) }}/5 ({{ $destinations->reviews_count }} {{ Str::plural('review', $destinations->reviews_count) }})
							@else
								No reviews yet
							@endif
						</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Quick Search -->
				<div class="tt-sidebar-card mb-4" data-aos="fade-left">
					<h5>Find Destinations</h5>
					<form action="{{ route('packages') }}" method="GET">
						<div class="input-group">
							<input type="text" class="tt-input" name="search" placeholder="Search destinations...">
							<button class="btn-tt-primary" type="submit"><i class="fas fa-search"></i></button>
						</div>
					</form>
				</div>

				<!-- Tags -->
				@if(isset($tags) && count($tags) > 0)
				<div class="tt-sidebar-card mb-4" data-aos="fade-left">
					<h5>Popular Tags</h5>
					<div class="d-flex flex-wrap gap-2">
						@foreach ($tags as $tag)
						<a href="#" class="tt-tag">{{ $tag->name }}</a>
						@endforeach
					</div>
				</div>
				@endif

				<!-- Categories -->
				@if(isset($categories) && count($categories) > 0)
				<div class="tt-sidebar-card mb-4" data-aos="fade-left">
					<h5>Categories</h5>
					<ul class="tt-sidebar-list">
						@foreach ($categories as $category)
						<li><a href="#">{{ $category->name }} <i class="fas fa-chevron-right"></i></a></li>
						@endforeach
					</ul>
				</div>
				@endif

				<!-- Need Help -->
				<div class="tt-sidebar-card text-center" data-aos="fade-left">
					<div class="tt-info-icon mx-auto mb-3"><i class="fas fa-headset"></i></div>
					<h5>Need Help?</h5>
					<p class="text-muted">Our travel experts are here 24/7</p>
					<a href="tel:+254712345678" class="btn-tt-primary w-100 mb-2"><i class="fas fa-phone me-2"></i> +254 712 345 678</a>
					<a href="mailto:info@tourskenya.com" class="btn-tt-outline w-100"><i class="fas fa-envelope me-2"></i> Get Quote</a>
				</div>
			</div>
		</div>
	</div>
</section>

@include('partials.footer')
@endsection
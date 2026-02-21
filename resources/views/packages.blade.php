@extends('layouts.front')

@section('title', 'Tour Destinations - ToursTravel Kenya')

@section('page')
@include('partials.navbar')

<!-- Page Hero -->
<section class="tt-page-hero">
	<div class="tt-page-hero-bg" style="background-image: url('{{ asset('images/place-4.jpg') }}');"></div>
	<div class="container" data-aos="fade-up">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb justify-content-center">
				<li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fas fa-home me-1"></i>Home</a></li>
				<li class="breadcrumb-item active">Destinations</li>
			</ol>
		</nav>
		<h1 class="tt-page-title">Discover Kenya's <span class="accent">Wonders</span></h1>
		<p class="tt-page-subtitle">
			From the wild savannah of Maasai Mara to the pristine beaches of Diani,
			explore our handpicked destinations that showcase Kenya's natural beauty.
		</p>
	</div>
</section>

<!-- Search & Filter -->
<section class="tt-section-sm">
	<div class="container">
		<div class="tt-search-bar" data-aos="fade-up">
			<form action="{{ route('packages') }}" method="GET">
				<div class="row g-3 align-items-end">
					<div class="col-lg-4">
						<div class="tt-form-group">
							<label><i class="fas fa-search"></i> Search Destinations</label>
							<input type="text" class="tt-input" name="search"
								   placeholder="Where do you want to go?" value="{{ request('search') }}">
						</div>
					</div>
					<div class="col-lg-3">
						<div class="tt-form-group">
							<label><i class="fas fa-tag"></i> Category</label>
							<select class="tt-select" name="category">
								<option value="">All Categories</option>
								@foreach($categories as $category)
									<option value="{{ $category->id }}" {{ request('category') == $category->id ? 'selected' : '' }}>
										{{ $category->name }}
									</option>
								@endforeach
							</select>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="tt-form-group">
							<label><i class="fas fa-dollar-sign"></i> Price Range</label>
							<select class="tt-select" name="price_range">
								<option value="">Any Price</option>
								<option value="0-50000" {{ request('price_range') == '0-50000' ? 'selected' : '' }}>Under KSh 50,000</option>
								<option value="50000-100000" {{ request('price_range') == '50000-100000' ? 'selected' : '' }}>KSh 50,000 - 100,000</option>
								<option value="100000-200000" {{ request('price_range') == '100000-200000' ? 'selected' : '' }}>KSh 100,000 - 200,000</option>
								<option value="200000+" {{ request('price_range') == '200000+' ? 'selected' : '' }}>Over KSh 200,000</option>
							</select>
						</div>
					</div>
					<div class="col-lg-2">
						<button type="submit" class="btn-tt-primary w-100">
							Search <i class="fas fa-arrow-right"></i>
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</section>

<!-- Destinations Listing -->
<section class="tt-section">
	<div class="container">
		<div class="tt-section-header text-center" data-aos="fade-up">
			<h2 class="tt-title">
				@if(request('search'))
					Results for "<span class="accent">{{ request('search') }}</span>"
				@else
					All <span class="accent">Destinations</span>
				@endif
			</h2>
			<p class="tt-subtitle">
				@if($destinations->count() > 0)
					Showing {{ $destinations->count() }} amazing Kenyan destinations
				@else
					No destinations found matching your criteria
				@endif
			</p>
		</div>

		@if($destinations->count() > 0)
		<div class="tt-dest-grid">
			@foreach ($destinations as $destination)
			<article class="tt-dest-card" data-aos="fade-up" data-aos-delay="{{ ($loop->iteration % 3) * 100 }}">
				<div class="tt-dest-card-img">
					<img src="{{ $destination->image_url }}"
						 alt="{{ $destination->title }}" loading="lazy">
					<span class="badge-cat">{{ $destination->category->name ?? 'Safari' }}</span>
					<button class="btn-fav" aria-label="Add to favorites">
						<i class="far fa-heart"></i>
					</button>
				</div>
				<div class="tt-dest-card-body">
					<div class="tt-dest-card-meta">
						<span><i class="fas fa-map-marker-alt"></i> {{ $destination->title }}</span>
						<span><i class="fas fa-clock"></i> {{ $destination->duration ?? '7 Days' }}</span>
					</div>
					<h3 class="tt-dest-card-title">
						<a href="{{ route('desti.show', $destination->id) }}">{{ $destination->title }}</a>
					</h3>
					<p class="tt-dest-card-desc">{{ Str::limit($destination->description, 120) }}</p>
					<div class="tt-dest-card-footer">
						<div>
							<div class="tt-dest-price-label">From</div>
							<div class="tt-dest-price-value">{{ $destination->formatted_pricing ?? $destination->pricing }}</div>
						</div>
						<a href="{{ route('desti.show', $destination->id) }}" class="tt-dest-card-link">
							Explore <i class="fas fa-arrow-right"></i>
						</a>
					</div>
				</div>
			</article>
			@endforeach
		</div>

		<div class="tt-pagination mt-5 d-flex justify-content-center" data-aos="fade-up">
			{{ $destinations->appends(request()->query())->links('pagination::bootstrap-4') }}
		</div>
		@else
		<div class="tt-empty-state" data-aos="fade-up">
			<div class="icon"><i class="fas fa-search"></i></div>
			<h3>No Destinations Found</h3>
			<p>We couldn't find any destinations matching your search criteria. Try adjusting your filters.</p>
			<a href="{{ route('packages') }}" class="btn-tt-primary">View All Destinations</a>
		</div>
		@endif
	</div>
</section>

<!-- Categories -->
<section class="tt-section tt-section-light">
	<div class="container">
		<div class="tt-section-header text-center" data-aos="fade-up">
			<div class="tt-pretitle">Explore by Type</div>
			<h2 class="tt-title">Popular <span class="accent">Categories</span></h2>
		</div>
		<div class="tt-cat-grid" data-aos="fade-up">
			<div class="tt-cat-card">
				<div class="icon"><i class="fas fa-paw"></i></div>
				<h5>Wildlife Safaris</h5>
				<span class="count">12 Tours</span>
			</div>
			<div class="tt-cat-card">
				<div class="icon"><i class="fas fa-umbrella-beach"></i></div>
				<h5>Beach Escapes</h5>
				<span class="count">8 Tours</span>
			</div>
			<div class="tt-cat-card">
				<div class="icon"><i class="fas fa-mountain"></i></div>
				<h5>Mountain Treks</h5>
				<span class="count">6 Tours</span>
			</div>
			<div class="tt-cat-card">
				<div class="icon"><i class="fas fa-users"></i></div>
				<h5>Cultural Tours</h5>
				<span class="count">10 Tours</span>
			</div>
		</div>
	</div>
</section>

@include('partials.footer')

@push('scripts')
<script>
document.querySelectorAll('.btn-fav').forEach(btn => {
	btn.addEventListener('click', function(e) {
		e.preventDefault();
		e.stopPropagation();
		const icon = this.querySelector('i');
		icon.classList.toggle('far');
		icon.classList.toggle('fas');
		this.classList.toggle('active');
	});
});
</script>
@endpush
@endsection

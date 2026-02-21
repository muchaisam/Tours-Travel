@extends('layouts.front')

@section('page')
@include('partials.navbar')

<!-- Hero -->
<section class="tt-hero">
	<div class="tt-hero-bg"></div>
	<div class="container tt-hero-content">
		<div class="row align-items-center">
			<div class="col-lg-7" data-aos="fade-right">
				<div class="tt-badge">
					<span>🇰🇪</span>
					<span>Authentic Kenyan Experiences</span>
				</div>

				<h1 class="tt-hero-title">
					Discover the Soul of <span class="accent">East Africa</span>
				</h1>

				<p class="tt-hero-text">
					Embark on extraordinary journeys through Kenya's untamed wilderness,
					pristine coastlines, and vibrant cultures. Where every moment becomes a treasured memory.
				</p>

				<div class="tt-hero-actions">
					<a href="{{ route('packages') }}" class="btn-tt-accent">
						Explore Destinations <i class="fas fa-arrow-right"></i>
					</a>
					<a href="{{ route('contact') }}" class="btn-tt-outline-white">
						Plan Your Safari <i class="fas fa-compass"></i>
					</a>
				</div>

				<div class="tt-trust-row">
					<div class="tt-trust-item">
						<div class="tt-trust-icon"><i class="fas fa-shield-alt"></i></div>
						<div>
							<div class="tt-trust-value">100% Safe</div>
							<div class="tt-trust-label">Licensed Operator</div>
						</div>
					</div>
					<div class="tt-trust-item">
						<div class="tt-trust-icon"><i class="fas fa-star"></i></div>
						<div>
							<div class="tt-trust-value">4.9/5</div>
							<div class="tt-trust-label">2,400+ Reviews</div>
						</div>
					</div>
					<div class="tt-trust-item">
						<div class="tt-trust-icon"><i class="fas fa-award"></i></div>
						<div>
							<div class="tt-trust-value">8+ Years</div>
							<div class="tt-trust-label">Experience</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-5 d-none d-lg-block" data-aos="fade-left" data-aos-delay="200">
				<div class="tt-hero-card">
					<img src="{{ asset('images/place-1.jpg') }}" alt="Maasai Mara Safari" loading="eager">
					<div class="tt-hero-card-body">
						<span class="card-badge">Popular Choice</span>
						<h4>Maasai Mara Adventure</h4>
						<div class="tt-hero-card-meta">
							<span><i class="fas fa-clock"></i> 5 Days</span>
							<span><i class="fas fa-users"></i> Max 8 People</span>
						</div>
						<div class="tt-hero-card-footer">
							<div>
								<div class="price-from">From</div>
								<div class="price-value">KSh 89,000</div>
							</div>
							<a href="{{ route('packages') }}" class="tt-hero-card-link">
								View Details <i class="fas fa-arrow-right"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="tt-hero-scroll">
		<span>Scroll to Explore</span>
		<i class="fas fa-chevron-down"></i>
	</div>
</section>

<!-- Featured Destinations -->
<section class="tt-section">
	<div class="container">
		<div class="tt-section-header text-center" data-aos="fade-up">
			<div class="tt-pretitle">Handpicked Experiences</div>
			<h2 class="tt-title">Featured <span class="accent">Destinations</span></h2>
			<p class="tt-subtitle">
				Explore Kenya's most captivating locations, curated by our local experts
				who know every hidden gem and breathtaking vista.
			</p>
		</div>

		<div class="tt-dest-grid">
			@foreach ($destinations as $destination)
			<article class="tt-dest-card" data-aos="fade-up" data-aos-delay="{{ $loop->iteration * 100 }}">
				<div class="tt-dest-card-img">
					<img src="{{ $destination->image_url }}"
						 alt="{{ $destination->title }}" loading="lazy">
					<span class="badge-cat">{{ $destination->category->name ?? 'Safari' }}</span>
				</div>
				<div class="tt-dest-card-body">
					<div class="tt-dest-card-meta">
						<span><i class="fas fa-map-marker-alt"></i> {{ $destination->title }}</span>
						<span><i class="fas fa-clock"></i> {{ $destination->duration ?? '7 Days' }}</span>
					</div>
					<h3 class="tt-dest-card-title">
						<a href="{{ route('desti.show', $destination->id) }}">{{ $destination->title }}</a>
					</h3>
					<p class="tt-dest-card-desc">{{ Str::limit($destination->description, 100) }}</p>
					<div class="tt-dest-card-footer">
						<div>
							<div class="tt-dest-price-label">From</div>
							<div class="tt-dest-price-value">
								@php $numericPrice = (int) preg_replace('/[^\d]/', '', $destination->pricing); @endphp
								KSh {{ number_format($numericPrice) }}
							</div>
						</div>
						<a href="{{ route('desti.show', $destination->id) }}" class="tt-dest-card-link">
							Explore <i class="fas fa-arrow-right"></i>
						</a>
					</div>
				</div>
			</article>
			@endforeach
		</div>

		<div class="text-center mt-5" data-aos="fade-up">
			<a href="{{ route('packages') }}" class="btn-tt-primary">
				View All Destinations <i class="fas fa-globe-africa"></i>
			</a>
		</div>
	</div>
</section>

<!-- Why Choose Us -->
<section class="tt-section tt-section-light">
	<div class="container">
		<div class="row align-items-center g-5">
			<div class="col-lg-6" data-aos="fade-right">
				<div class="tt-features-img">
					<img src="{{ asset('images/about.jpg') }}" alt="Kenya Wildlife">
					<div class="overlay-stat">
						<div class="icon"><i class="fas fa-users"></i></div>
						<div>
							<div class="number">2,400+</div>
							<div class="label">Happy Travelers</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-6" data-aos="fade-left">
				<div class="tt-section-header">
					<div class="tt-pretitle">Why Choose ToursTravel</div>
					<h2 class="tt-title">Experience Kenya with <span class="accent">Local Experts</span></h2>
					<p class="tt-subtitle">
						As proud Kenyans, we don't just show you destinations — we share our homeland with you.
					</p>
				</div>

				<div class="tt-feature-item">
					<div class="tt-feature-icon"><i class="fas fa-map-marked-alt"></i></div>
					<div>
						<h4>Local Expertise</h4>
						<p>Born and raised in Kenya, we know every hidden gem, cultural nuance, and breathtaking vista.</p>
					</div>
				</div>
				<div class="tt-feature-item">
					<div class="tt-feature-icon"><i class="fas fa-shield-alt"></i></div>
					<div>
						<h4>Safety First</h4>
						<p>Licensed operator with comprehensive insurance and 24/7 support throughout your journey.</p>
					</div>
				</div>
				<div class="tt-feature-item">
					<div class="tt-feature-icon"><i class="fas fa-leaf"></i></div>
					<div>
						<h4>Sustainable Tourism</h4>
						<p>We partner with local communities and support conservation efforts across Kenya.</p>
					</div>
				</div>
				<div class="tt-feature-item">
					<div class="tt-feature-icon"><i class="fas fa-star"></i></div>
					<div>
						<h4>Personalized Service</h4>
						<p>Every journey is tailored to your preferences, creating memories that last a lifetime.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Testimonials -->
<section class="tt-section">
	<div class="container">
		<div class="tt-section-header text-center" data-aos="fade-up">
			<div class="tt-pretitle">What Our Travelers Say</div>
			<h2 class="tt-title">Stories from the <span class="accent">Savannah</span></h2>
		</div>

		<div class="tt-testimonials-grid">
			<div class="tt-testimonial-card" data-aos="fade-up" data-aos-delay="100">
				<div class="tt-testimonial-stars">
					<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
				</div>
				<p class="tt-testimonial-text">
					"An absolutely unforgettable experience! The guides were knowledgeable, friendly,
					and made sure every moment was special. The Maasai Mara exceeded all expectations."
				</p>
				<div class="tt-testimonial-author">
					<img src="{{ asset('images/place-1.jpg') }}" alt="Sarah M" class="tt-testimonial-avatar">
					<div>
						<div class="tt-testimonial-name">Sarah Mitchell</div>
						<div class="tt-testimonial-location">United Kingdom</div>
					</div>
				</div>
			</div>

			<div class="tt-testimonial-card" data-aos="fade-up" data-aos-delay="200">
				<div class="tt-testimonial-stars">
					<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
				</div>
				<p class="tt-testimonial-text">
					"ToursTravel showed us the real Kenya. From wildlife safaris to cultural villages,
					every experience felt authentic and meaningful. Highly recommend!"
				</p>
				<div class="tt-testimonial-author">
					<img src="{{ asset('images/place-2.jpg') }}" alt="James K" class="tt-testimonial-avatar">
					<div>
						<div class="tt-testimonial-name">James Kowalski</div>
						<div class="tt-testimonial-location">United States</div>
					</div>
				</div>
			</div>

			<div class="tt-testimonial-card" data-aos="fade-up" data-aos-delay="300">
				<div class="tt-testimonial-stars">
					<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
				</div>
				<p class="tt-testimonial-text">
					"The attention to detail and genuine care made this trip perfect. The local knowledge
					of our guides brought every destination to life. A truly magical journey."
				</p>
				<div class="tt-testimonial-author">
					<img src="{{ asset('images/place-3.jpg') }}" alt="Emma S" class="tt-testimonial-avatar">
					<div>
						<div class="tt-testimonial-name">Emma Schmidt</div>
						<div class="tt-testimonial-location">Germany</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- CTA -->
<section class="tt-cta">
	<div class="container" data-aos="zoom-in">
		<div class="icon-lg"><i class="fas fa-paper-plane"></i></div>
		<h2>Ready to Begin Your Kenyan Adventure?</h2>
		<p>
			Let our local experts craft your perfect journey. From wildlife safaris to coastal escapes,
			cultural immersions to mountain treks — your dream Kenyan experience awaits.
		</p>
		<div class="tt-cta-actions">
			<a href="{{ route('packages') }}" class="btn-tt-white">
				Explore Destinations <i class="fas fa-compass"></i>
			</a>
			<a href="{{ route('contact') }}" class="btn-tt-outline-white">
				Contact Us <i class="fas fa-phone"></i>
			</a>
		</div>
	</div>
</section>

@include('partials.footer')
@endsection

@extends('layouts.front')

@section('page')

<!-- Modern Blog Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background: rgba(255, 255, 255, 0.95); backdrop-filter: blur(10px); border-bottom: 1px solid rgba(0,0,0,0.1);">
	<div class="container">
		<!-- Modern Logo -->
		<a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}" style="font-weight: 700; color: #2d3748;">
			<div class="me-2 d-flex align-items-center justify-content-center rounded-circle" 
				 style="width: 40px; height: 40px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
				<i class="fas fa-globe-africa text-white"></i>
			</div>
			<span class="ms-2">Tours<span style="color: #667eea;">Travel</span></span>
		</a>

		<!-- Mobile Toggle -->
		<button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
			<span class="navbar-toggler-icon"></span>
		</button>

		<!-- Navigation Menu -->
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav mx-auto">
				<li class="nav-item">
					<a class="nav-link fw-semibold" href="{{ url('/') }}" style="color: #4a5568;">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link fw-semibold" href="{{route('packages')}}" style="color: #4a5568;">Destinations</a>
				</li>
				<li class="nav-item">
					<a class="nav-link fw-semibold active" href="{{route('blog')}}" style="color: #2d3748; position: relative;">
						Blog
						<span class="position-absolute bottom-0 start-0 w-100 h-2 bg-primary rounded-top" style="height: 3px;"></span>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link fw-semibold" href="{{route('contact')}}" style="color: #4a5568;">Contact</a>
				</li>
				<li class="nav-item">
					<a class="nav-link fw-semibold" href="{{route('about')}}" style="color: #4a5568;">About</a>
				</li>
			</ul>
			
			<!-- CTA Button -->
			<div class="d-flex align-items-center">
				<a href="{{route('login')}}" class="btn btn-primary rounded-pill px-4 py-2 fw-semibold" 
				   style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); border: none;">
					<i class="fas fa-sign-in-alt me-2"></i>Sign In
				</a>
			</div>
		</div>
	</div>
</nav>

<!-- Modern Hero Section -->
<section class="blog-hero position-relative overflow-hidden" style="min-height: 60vh; background: linear-gradient(135deg, rgba(102, 126, 234, 0.1) 0%, rgba(118, 75, 162, 0.1) 100%); margin-top: 80px;">
	<!-- Background Image with Overlay -->
	<div class="position-absolute top-0 start-0 w-100 h-100" 
		 style="background: url('images/destination-5.jpg') center/cover; z-index: -2;"></div>
	<div class="position-absolute top-0 start-0 w-100 h-100" 
		 style="background: linear-gradient(135deg, rgba(102, 126, 234, 0.85) 0%, rgba(118, 75, 162, 0.85) 100%); z-index: -1;"></div>

	<div class="container h-100 d-flex align-items-center justify-content-center text-center" style="min-height: 60vh;">
		<div class="hero-content text-white" data-aos="fade-up">
			<div class="mb-4">
				<span class="badge rounded-pill px-3 py-2 mb-3" 
					  style="background: rgba(255, 255, 255, 0.2); backdrop-filter: blur(10px); font-size: 0.9rem;">
					📚 Travel Stories & Tips
				</span>
			</div>
			
			<h1 class="display-4 fw-bold mb-4" style="font-size: 3rem;">
				Kenya Travel <span style="color: #ffd700;">Blog</span>
			</h1>
			
			<p class="lead mb-4" style="font-size: 1.25rem; color: rgba(255, 255, 255, 0.9); max-width: 600px; margin: 0 auto;">
				Discover insider tips, travel stories, and hidden gems across Kenya's stunning landscapes and rich culture.
			</p>
			
			<!-- Breadcrumb -->
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb justify-content-center" style="background: transparent;">
					<li class="breadcrumb-item">
						<a href="{{ url('/') }}" class="text-white text-decoration-none">
							<i class="fas fa-home me-1"></i>Home
						</a>
					</li>
					<li class="breadcrumb-item active text-white" aria-current="page">Blog</li>
				</ol>
			</nav>
		</div>
	</div>
</section>

<!-- Modern Blog Section -->
<section class="blog-section py-5" style="background: #f8fafc;">
	<div class="container">
		<!-- Section Header -->
		<div class="row justify-content-center mb-5">
			<div class="col-lg-8 text-center" data-aos="fade-up">
				<h2 class="display-5 fw-bold mb-4" style="color: #2d3748;">
					Latest <span style="color: #667eea;">Stories</span>
				</h2>
				<p class="lead text-muted">
					Get inspired by authentic travel experiences and expert tips from our Kenya adventures.
				</p>
			</div>
		</div>

		<!-- Blog Grid -->
		<div class="row g-4">
			@foreach ($blogs as $blog)
			<div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="{{ $loop->iteration * 100 }}">
				<article class="card border-0 shadow-lg h-100 blog-card" 
						 style="border-radius: 20px; overflow: hidden; transition: all 0.3s ease;">
					
					<!-- Featured Image -->
					<div class="position-relative overflow-hidden" style="height: 250px;">
						<img src="images/bali.jpeg" alt="{{ $blog->title }}" 
							 class="card-img-top h-100 w-100" style="object-fit: cover; transition: transform 0.3s ease;">
						
						<!-- Category Badge -->
						<div class="position-absolute top-0 start-0 m-3">
							<span class="badge rounded-pill px-3 py-2" 
								  style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; font-weight: 600;">
								{{ $blog->category->name ?? 'Travel' }}
							</span>
						</div>
						
						<!-- Reading Time Badge -->
						<div class="position-absolute top-0 end-0 m-3">
							<span class="badge rounded-pill px-3 py-2" 
								  style="background: rgba(255, 255, 255, 0.9); color: #2d3748; font-weight: 600;">
								<i class="fas fa-clock me-1"></i>5 min read
							</span>
						</div>
					</div>
					
					<!-- Article Content -->
					<div class="card-body p-4 d-flex flex-column">
						<!-- Meta Info -->
						<div class="d-flex align-items-center mb-3 text-muted">
							<div class="d-flex align-items-center me-3">
								<i class="fas fa-calendar-alt me-2" style="color: #667eea;"></i>
								<small>{{ $blog->created_at ? $blog->created_at->format('M d, Y') : 'Recent' }}</small>
							</div>
							<div class="d-flex align-items-center">
								<i class="fas fa-user me-2" style="color: #667eea;"></i>
								<small>ToursTravel Team</small>
							</div>
						</div>
						
						<!-- Article Title -->
						<h5 class="card-title fw-bold mb-3 flex-grow-1" style="color: #2d3748; line-height: 1.4;">
							<a href="#" class="text-decoration-none text-dark hover-link">
								{{ $blog->title }}
							</a>
						</h5>
						
						<!-- Article Excerpt -->
						<p class="card-text text-muted mb-4" style="font-size: 0.95rem;">
							{{ Str::limit($blog->description ?? 'Discover amazing travel experiences and insights that will inspire your next Kenya adventure.', 120) }}
						</p>
						
						<!-- Tags -->
						<div class="d-flex flex-wrap gap-2 mb-4">
							<span class="badge bg-light text-dark rounded-pill px-3 py-2" style="font-size: 0.8rem;">
								<i class="fas fa-tag me-1"></i>Kenya
							</span>
							<span class="badge bg-light text-dark rounded-pill px-3 py-2" style="font-size: 0.8rem;">
								<i class="fas fa-tag me-1"></i>Travel Tips
							</span>
						</div>
						
						<!-- Read More Button -->
						<a href="#" class="btn btn-outline-primary rounded-pill fw-semibold mt-auto" 
						   style="border-width: 2px;">
							<i class="fas fa-arrow-right me-2"></i>Read More
						</a>
					</div>
				</article>
			</div>
			@endforeach
		</div>

		<!-- Pagination -->
		<div class="row justify-content-center mt-5">
			<div class="col-auto">
				<div class="d-flex justify-content-center">
					{{ $blogs->links() }}
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Newsletter Section -->
<section class="newsletter-section py-5" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
	<div class="container">
		<div class="row justify-content-center text-center">
			<div class="col-lg-8" data-aos="fade-up">
				<h3 class="text-white fw-bold mb-3">Stay Updated with Kenya Travel Tips</h3>
				<p class="text-white-50 mb-4">Get the latest travel stories, tips, and exclusive offers delivered to your inbox.</p>
				
				<form class="d-flex justify-content-center">
					<div class="input-group" style="max-width: 400px;">
						<input type="email" class="form-control form-control-lg" 
							   placeholder="Enter your email address"
							   style="border-radius: 25px 0 0 25px; border: none;">
						<button class="btn btn-light btn-lg px-4" type="submit" 
								style="border-radius: 0 25px 25px 0; font-weight: 600; color: #667eea;">
							Subscribe
						</button>
					</div>
				</form>
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
						Discover the beauty of Kenya with our expertly curated travel experiences. 
						From safari adventures to cultural immersion, we make every journey unforgettable.
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
						<span class="text-white-50">Nairobi, Kenya</span>
					</div>
					<div class="d-flex align-items-center mb-3">
						<i class="fas fa-phone me-3" style="color: #667eea;"></i>
						<span class="text-white-50">+254 700 000 000</span>
					</div>
					<div class="d-flex align-items-center">
						<i class="fas fa-envelope me-3" style="color: #667eea;"></i>
						<span class="text-white-50">info@tourstravel.ke</span>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<h5 class="mb-4">Popular Destinations</h5>
				<ul class="list-unstyled">
					<li class="mb-2"><a href="#" class="text-white-50 text-decoration-none hover-link">Maasai Mara</a></li>
					<li class="mb-2"><a href="#" class="text-white-50 text-decoration-none hover-link">Diani Beach</a></li>
					<li class="mb-2"><a href="#" class="text-white-50 text-decoration-none hover-link">Mount Kenya</a></li>
					<li class="mb-2"><a href="#" class="text-white-50 text-decoration-none hover-link">Amboseli</a></li>
					<li class="mb-2"><a href="#" class="text-white-50 text-decoration-none hover-link">Lake Nakuru</a></li>
				</ul>
			</div>
		</div>
		
		<!-- Copyright -->
		<hr class="my-4" style="border-color: #4a5568;">
		<div class="row align-items-center">
			<div class="col-md-6">
				<p class="mb-0 text-white-50">© 2025 ToursTravel. All rights reserved.</p>
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

<!-- Custom Styles for Blog Page -->
<style>
.blog-card:hover {
	transform: translateY(-10px);
	box-shadow: 0 25px 50px rgba(0,0,0,0.15) !important;
}

.blog-card:hover img {
	transform: scale(1.05);
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

.pagination .page-link {
	border-radius: 8px;
	border: 2px solid #e9ecef;
	margin: 0 2px;
	color: #667eea;
	font-weight: 600;
}

.pagination .page-item.active .page-link {
	background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
	border-color: #667eea;
}

.pagination .page-link:hover {
	border-color: #667eea;
	color: #667eea;
}

/* Breadcrumb Styles */
.breadcrumb-item + .breadcrumb-item::before {
	content: "→";
	color: rgba(255, 255, 255, 0.7);
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
</style>

<!-- Scroll to Top Button -->
<button class="scroll-to-top d-none" onclick="scrollToTop()">
	<i class="fas fa-chevron-up"></i>
</button>

<script>
// Show/hide scroll to top button
window.addEventListener('scroll', function() {
	const scrollBtn = document.querySelector('.scroll-to-top');
	if (window.pageYOffset > 300) {
		scrollBtn.classList.remove('d-none');
	} else {
		scrollBtn.classList.add('d-none');
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
      <div class="row mb-5">
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Safari</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the
              blind texts.</p>
            <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
              <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
            </ul>
          </div>
        </div>
        {{-- <div class="col-md">
          <div class="ftco-footer-widget mb-4 ml-md-5">
            <h2 class="ftco-heading-2">Categories</h2>
            @foreach ($categories as $category)
            <div class="col-6">
              <a href="#">
                {{$category->name}}
              </a>
            </div>
            @endforeach
          </div>
        </div> --}}
      </div>
      {{-- <div class="col-md">
        <div class="ftco-footer-widget mb-4">
          <h2 class="ftco-heading-2">Tags</h2>
          @foreach ($tags as $tag)
          <div class="col-6">
            <a href="#">
              {{$tag->name}}
            </a>
          </div>
          @endforeach
        </div>
      </div> --}}
    
    </div>
    <div class="row">
      <div class="col-md-12 text-center">

        <p>
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          Copyright &copy;<script>
            document.write(new Date().getFullYear());
          </script> All rights reserved | This template is made with <i class="icon-heart color-danger"
            aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        </p>
      </div>
    </div>
    </div>
  </footer>



  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
        stroke="#F96D00" /></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false">
  </script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>

</body>

</html>
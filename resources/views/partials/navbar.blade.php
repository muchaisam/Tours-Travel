<!-- Modern 2025 Navigation -->
<nav class="navbar navbar-expand-lg navbar-light navbar-modern fixed-top">
	<div class="container">
		<!-- Modern Logo -->
		<a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
			<div class="me-2 d-flex align-items-center justify-content-center brand-logo">
				<i class="fas fa-globe-africa text-white"></i>
			</div>
			<span class="ms-2">Tours<span class="brand-text-highlight">Travel</span></span>
		</a>

		<!-- Mobile Toggle -->
		<button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
			<span class="navbar-toggler-icon"></span>
		</button>

		<!-- Navigation Menu -->
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav mx-auto">
				<li class="nav-item">
					<a class="nav-link fw-semibold {{ request()->is('/') ? 'active' : '' }}" href="{{ url('/') }}">
						Home
						@if(request()->is('/'))
						<span class="nav-link-indicator"></span>
						@endif
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link fw-semibold {{ request()->is('packages*') ? 'active' : '' }}" href="{{route('packages')}}">
						Destinations
						@if(request()->is('packages*'))
						<span class="nav-link-indicator"></span>
						@endif
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link fw-semibold {{ request()->is('blog*') || request()->is('news*') ? 'active' : '' }}" href="{{route('blog')}}">
						Blog
						@if(request()->is('blog*') || request()->is('news*'))
						<span class="nav-link-indicator"></span>
						@endif
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link fw-semibold {{ request()->is('contact*') ? 'active' : '' }}" href="{{route('contact')}}">
						Contact
						@if(request()->is('contact*'))
						<span class="nav-link-indicator"></span>
						@endif
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link fw-semibold {{ request()->is('about*') ? 'active' : '' }}" href="{{route('about')}}">
						About
						@if(request()->is('about*'))
						<span class="nav-link-indicator"></span>
						@endif
					</a>
				</li>
			</ul>
			
			<!-- Auth Section -->
			<div class="d-flex align-items-center">
				@auth
					<!-- User is logged in -->
					<div class="dropdown">
						<a class="nav-link dropdown-toggle d-flex align-items-center fw-semibold me-3" 
						   href="#" role="button" id="userDropdown" data-bs-toggle="dropdown" 
						   aria-expanded="false">
							<div class="me-2 d-flex align-items-center justify-content-center user-avatar">
								<i class="fas fa-user text-white"></i>
							</div>
							<span>{{ Auth::user()->name }}</span>
						</a>
						<ul class="dropdown-menu dropdown-menu-modern dropdown-menu-end shadow border-0 rounded-3">
							<li>
								<h6 class="dropdown-header d-flex align-items-center">
									<i class="fas fa-user-circle me-2 text-primary"></i>
									Welcome back!
								</h6>
							</li>
							<li><hr class="dropdown-divider"></li>
							<li>
								<a class="dropdown-item d-flex align-items-center py-2" href="{{ route('home') }}">
									<i class="fas fa-tachometer-alt me-2 text-primary"></i>
									Dashboard
								</a>
							</li>
							<li>
								<a class="dropdown-item d-flex align-items-center py-2" href="{{ route('users.edit-profile') }}">
									<i class="fas fa-user-edit me-2 text-info"></i>
									Edit Profile
								</a>
							</li>
							<li><hr class="dropdown-divider"></li>
							<li>
								<a class="dropdown-item d-flex align-items-center py-2 text-danger" 
								   href="{{ route('logout') }}"
								   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
									<i class="fas fa-sign-out-alt me-2"></i>
									Logout
								</a>
							</li>
						</ul>
					</div>
					
					<!-- Logout Form -->
					<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
						@csrf
					</form>
				@else
					<!-- User is not logged in -->
					<a href="{{route('login')}}" class="btn btn-outline-gradient rounded-pill px-3 py-2 fw-semibold me-2 btn-modern">
						<i class="fas fa-sign-in-alt me-1"></i>Sign In
					</a>
					<a href="{{route('register')}}" class="btn btn-gradient rounded-pill px-4 py-2 fw-semibold btn-modern">
						<i class="fas fa-user-plus me-2"></i>Get Started
					</a>
				@endauth
			</div>
		</div>
	</div>
</nav>

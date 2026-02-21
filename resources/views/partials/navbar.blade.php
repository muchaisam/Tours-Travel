<!-- Navbar -->
<nav class="navbar navbar-expand-lg tt-navbar fixed-top">
	<div class="container">
		<a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
			<div class="brand-icon">
				<i class="fas fa-globe-africa"></i>
			</div>
			<span>Tours<span class="brand-accent">Travel</span></span>
		</a>

		<button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#ttNav"
				aria-controls="ttNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="ttNav">
			<ul class="navbar-nav mx-auto">
				<li class="nav-item">
					<a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ url('/') }}">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link {{ request()->is('packages*') ? 'active' : '' }}" href="{{ route('packages') }}">Destinations</a>
				</li>
				<li class="nav-item">
					<a class="nav-link {{ request()->is('blog*') || request()->is('news*') ? 'active' : '' }}" href="{{ route('blog') }}">Blog</a>
				</li>
				<li class="nav-item">
					<a class="nav-link {{ request()->is('contact*') ? 'active' : '' }}" href="{{ route('contact') }}">Contact</a>
				</li>
				<li class="nav-item">
					<a class="nav-link {{ request()->is('about*') ? 'active' : '' }}" href="{{ route('about') }}">About</a>
				</li>
			</ul>

			<div class="d-flex align-items-center gap-2">
				@auth
					<div class="dropdown">
						<a class="nav-link dropdown-toggle d-flex align-items-center gap-2 fw-semibold"
						   href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							<div class="user-avatar">
								<i class="fas fa-user"></i>
							</div>
							{{ Auth::user()->name }}
						</a>
						<ul class="dropdown-menu dropdown-menu-end shadow-sm border rounded-3 p-1">
							<li class="px-3 py-2">
								<small class="text-muted">Welcome back!</small>
							</li>
							<li><hr class="dropdown-divider"></li>
							<li>
								<a class="dropdown-item rounded-2 py-2" href="{{ route('home') }}">
									<i class="fas fa-tachometer-alt me-2 text-muted"></i>Dashboard
								</a>
							</li>
							<li>
								<a class="dropdown-item rounded-2 py-2" href="{{ route('users.edit-profile') }}">
									<i class="fas fa-user-edit me-2 text-muted"></i>Edit Profile
								</a>
							</li>
							<li>
								<a class="dropdown-item rounded-2 py-2" href="{{ route('wishlist.index') }}">
									<i class="fas fa-heart me-2 text-muted"></i>My Wishlist
								</a>
							</li>
							<li><hr class="dropdown-divider"></li>
							<li>
								<a class="dropdown-item rounded-2 py-2 text-danger"
								   href="{{ route('logout') }}"
								   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
									<i class="fas fa-sign-out-alt me-2"></i>Logout
								</a>
							</li>
						</ul>
					</div>
					<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
				@else
					<a href="{{ route('login') }}" class="btn btn-sign-in">Sign In</a>
					<a href="{{ route('register') }}" class="btn btn-get-started">Get Started</a>
				@endauth
			</div>
		</div>
	</div>
</nav>

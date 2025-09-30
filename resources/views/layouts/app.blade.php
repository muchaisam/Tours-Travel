<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Admin Dashboard - ToursTravel Kenya</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

    <!-- Bootstrap 5.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8fafc;
        }
        
        .navbar-brand {
            font-family: 'Playfair Display', serif;
            font-weight: 700;
            font-size: 1.5rem;
        }
        
        .sidebar {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: calc(100vh - 76px);
            border-radius: 15px;
            margin: 1rem 0;
        }
        
        .sidebar .list-group-item {
            background: transparent;
            border: none;
            border-radius: 10px;
            margin: 0.25rem;
            transition: all 0.2s ease;
        }
        
        .sidebar .list-group-item:hover {
            background: rgba(255, 255, 255, 0.1);
            transform: translateX(5px);
        }
        
        .sidebar .list-group-item a {
            color: white;
            text-decoration: none;
            font-weight: 500;
        }
        
        .sidebar .list-group-item:hover a {
            color: white;
        }
        
        .main-content {
            background: white;
            border-radius: 15px;
            margin: 1rem 0;
            padding: 1.5rem;
            box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
        }
        
        .btn-info {
            color: #ffffff;
        }
        
        .navbar {
            box-shadow: 0 2px 4px rgba(0,0,0,.1);
        }
        
        .dropdown-menu {
            border: none;
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
            border-radius: 10px;
        }
        
        .alert {
            border: none;
            border-radius: 10px;
        }
    </style>

    @yield('css')
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white">
            <div class="container">
                <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
                    <div class="me-2 d-flex align-items-center justify-content-center rounded-circle" 
                         style="width: 40px; height: 40px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
                        <i class="fas fa-globe-africa text-white"></i>
                    </div>
                    <span>Tours<span style="color: #667eea;">Travel</span> Admin</span>
                </a>
                <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle d-flex align-items-center" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <div class="me-2 d-flex align-items-center justify-content-center rounded-circle bg-primary" 
                                     style="width: 32px; height: 32px;">
                                    <i class="fas fa-user text-white"></i>
                                </div>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">

                                <a class="dropdown-item" href="{{ route('users.edit-profile') }}">
                                    {{ __('My Profile') }}
                                </a>



                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">

            @auth
            <div class="container-fluid">
                @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show">
                    <i class="fas fa-check-circle me-2"></i>
                    {{session()->get('success')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
                @endif
                @if (session()->has('error'))
                <div class="alert alert-danger alert-dismissible fade show">
                    <i class="fas fa-exclamation-circle me-2"></i>
                    {{session()->get('error')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
                @endif
                <div class="row">
                    <div class="col-lg-3 col-md-4">
                        <div class="sidebar p-4">
                            <div class="text-center mb-4">
                                <div class="d-inline-flex align-items-center justify-content-center rounded-circle bg-white mb-3" 
                                     style="width: 60px; height: 60px;">
                                    <i class="fas fa-user-cog" style="color: #667eea; font-size: 1.5rem;"></i>
                                </div>
                                <h5 class="text-white mb-1">Admin Panel</h5>
                                <small class="text-white-50">Manage your platform</small>
                            </div>
                            
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <a href="{{ route('home') }}" class="d-flex align-items-center">
                                        <i class="fas fa-tachometer-alt me-3"></i>
                                        Dashboard
                                    </a>
                                </li>
                                
                                @if (auth()->user()->isAdmin())
                                <li class="list-group-item">
                                    <a href="{{route('users.index')}}" class="d-flex align-items-center">
                                        <i class="fas fa-users me-3"></i>
                                        Users
                                    </a>
                                </li>
                                @endif

                                <li class="list-group-item">
                                    <a href="{{route('destinations.index')}}" class="d-flex align-items-center">
                                        <i class="fas fa-map-marker-alt me-3"></i>
                                        Destinations
                                    </a>
                                </li>
                                <li class="list-group-item">
                                    <a href="{{route('categories.index')}}" class="d-flex align-items-center">
                                        <i class="fas fa-tags me-3"></i>
                                        Categories
                                    </a>
                                </li>
                                <li class="list-group-item">
                                    <a href="{{route('tags.index')}}" class="d-flex align-items-center">
                                        <i class="fas fa-hashtag me-3"></i>
                                        Tags
                                    </a>
                                </li>
                            </ul>

                            <ul class="list-group list-group-flush mt-3">
                                <li class="list-group-item">
                                    <a href="{{route('blog.index')}}" class="d-flex align-items-center">
                                        <i class="fas fa-blog me-3"></i>
                                        Blog Posts
                                    </a>
                                </li>
                            </ul>

                            <ul class="list-group list-group-flush mt-3">
                                <li class="list-group-item">
                                    <a href="{{route('trashed-destinations.index')}}" class="d-flex align-items-center">
                                        <i class="fas fa-trash-restore me-3"></i>
                                        Unavailable Destinations
                                    </a>
                                </li>
                            </ul>
                            
                            <div class="mt-4 pt-4 border-top border-white-50">
                                <a href="{{ url('/') }}" class="list-group-item d-flex align-items-center">
                                    <i class="fas fa-external-link-alt me-3"></i>
                                    View Website
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-8">
                        <div class="main-content">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
            @else
            @yield('content')
            @endauth
        </main>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('scripts')
</body>

</html>
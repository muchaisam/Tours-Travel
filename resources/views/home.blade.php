@extends('layouts.app')

@section('css')
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
<style>
    .dashboard-card {
        border: none;
        border-radius: 15px;
        box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }
    
    .dashboard-card:hover {
        transform: translateY(-2px);
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
    }
    
    .stats-card {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        border-radius: 15px;
        padding: 1.5rem;
        margin-bottom: 1rem;
        transition: transform 0.2s ease;
    }
    
    .stats-card:hover {
        transform: translateY(-2px);
    }
    
    .stats-icon {
        font-size: 2rem;
        opacity: 0.8;
    }
    
    .welcome-header {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        border-radius: 15px;
        padding: 2rem;
        margin-bottom: 2rem;
    }
    
    .recent-item {
        border-left: 3px solid #667eea;
        padding-left: 1rem;
        margin-bottom: 0.5rem;
    }
    
    .activity-item {
        display: flex;
        align-items-center;
        padding: 0.75rem;
        border-radius: 10px;
        margin-bottom: 0.5rem;
        background: #f8f9fa;
    }
    
    .activity-icon {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 1rem;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
    }
</style>
@endsection

@section('content')
<!-- Welcome Header -->
<div class="welcome-header">
    <div class="row align-items-center">
        <div class="col-md-8">
            <h2 class="mb-2">
                <i class="fas fa-globe-africa me-3"></i>
                Welcome back, {{ Auth::user()->name }}!
            </h2>
            <p class="mb-0 opacity-75">
                Manage your ToursTravel Kenya platform from this dashboard
            </p>
        </div>
        <div class="col-md-4 text-md-end">
            <div class="d-flex align-items-center justify-content-md-end">
                <div class="text-center">
                    <small class="opacity-75">{{ date('l') }}</small><br>
                    <strong>{{ date('M j, Y') }}</strong>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Statistics Cards -->
<div class="row g-3 mb-4">
    <div class="col-lg-2 col-md-4 col-sm-6">
        <div class="stats-card text-center">
            <i class="fas fa-map-marked-alt stats-icon mb-2"></i>
            <h3 class="mb-1">{{ $stats['destinations'] }}</h3>
            <small>Destinations</small>
        </div>
    </div>
    <div class="col-lg-2 col-md-4 col-sm-6">
        <div class="stats-card text-center">
            <i class="fas fa-tags stats-icon mb-2"></i>
            <h3 class="mb-1">{{ $stats['categories'] }}</h3>
            <small>Categories</small>
        </div>
    </div>
    <div class="col-lg-2 col-md-4 col-sm-6">
        <div class="stats-card text-center">
            <i class="fas fa-hashtag stats-icon mb-2"></i>
            <h3 class="mb-1">{{ $stats['tags'] }}</h3>
            <small>Tags</small>
        </div>
    </div>
    <div class="col-lg-2 col-md-4 col-sm-6">
        <div class="stats-card text-center">
            <i class="fas fa-blog stats-icon mb-2"></i>
            <h3 class="mb-1">{{ $stats['blogs'] }}</h3>
            <small>Blog Posts</small>
        </div>
    </div>
    <div class="col-lg-2 col-md-4 col-sm-6">
        <div class="stats-card text-center">
            <i class="fas fa-users stats-icon mb-2"></i>
            <h3 class="mb-1">{{ $stats['users'] }}</h3>
            <small>Users</small>
        </div>
    </div>
    <div class="col-lg-2 col-md-4 col-sm-6">
        <div class="stats-card text-center">
            <i class="fas fa-chart-line stats-icon mb-2"></i>
            <h3 class="mb-1">{{ date('j') }}</h3>
            <small>Days This Month</small>
        </div>
    </div>
</div>

<!-- Main Dashboard Content -->
<div class="row g-4">
    <!-- Quick Actions -->
    <div class="col-lg-4">
        <div class="card dashboard-card">
            <div class="card-header bg-transparent border-0 d-flex align-items-center">
                <i class="fas fa-rocket me-2 text-primary"></i>
                <h5 class="mb-0">Quick Actions</h5>
            </div>
            <div class="card-body">
                <div class="d-grid gap-2">
                    <a href="{{ route('destinations.create') }}" class="btn btn-outline-primary">
                        <i class="fas fa-plus me-2"></i>Add New Destination
                    </a>
                    <a href="{{ route('blog.create') }}" class="btn btn-outline-success">
                        <i class="fas fa-pen-alt me-2"></i>Write Blog Post
                    </a>
                    <a href="{{ route('categories.create') }}" class="btn btn-outline-info">
                        <i class="fas fa-folder-plus me-2"></i>New Category
                    </a>
                    <a href="{{ route('tags.create') }}" class="btn btn-outline-warning">
                        <i class="fas fa-tag me-2"></i>Add Tag
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Destinations -->
    <div class="col-lg-4">
        <div class="card dashboard-card">
            <div class="card-header bg-transparent border-0 d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center">
                    <i class="fas fa-map-marker-alt me-2 text-success"></i>
                    <h5 class="mb-0">Recent Destinations</h5>
                </div>
                <a href="{{ route('destinations.index') }}" class="btn btn-sm btn-outline-primary">View All</a>
            </div>
            <div class="card-body">
                @if(count($recentDestinations) > 0)
                    @foreach($recentDestinations as $destination)
                    <div class="recent-item">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="mb-1">{{ Str::limit($destination->title, 25) }}</h6>
                                <small class="text-muted">{{ $destination->created_at->diffForHumans() }}</small>
                            </div>
                            <a href="{{ route('destinations.show', $destination->id) }}" 
                               class="btn btn-sm btn-outline-primary">
                                <i class="fas fa-eye"></i>
                            </a>
                        </div>
                    </div>
                    @endforeach
                @else
                    <p class="text-muted text-center py-3">No destinations yet</p>
                @endif
            </div>
        </div>
    </div>

    <!-- Recent Blog Posts -->
    <div class="col-lg-4">
        <div class="card dashboard-card">
            <div class="card-header bg-transparent border-0 d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center">
                    <i class="fas fa-newspaper me-2 text-warning"></i>
                    <h5 class="mb-0">Recent Blog Posts</h5>
                </div>
                <a href="{{ route('blog.index') }}" class="btn btn-sm btn-outline-primary">View All</a>
            </div>
            <div class="card-body">
                @if(count($recentBlogs) > 0)
                    @foreach($recentBlogs as $blog)
                    <div class="recent-item">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="mb-1">{{ Str::limit($blog->title, 25) }}</h6>
                                <small class="text-muted">{{ $blog->created_at->diffForHumans() }}</small>
                            </div>
                            <a href="{{ route('blog.show', $blog->id) }}" 
                               class="btn btn-sm btn-outline-primary">
                                <i class="fas fa-eye"></i>
                            </a>
                        </div>
                    </div>
                    @endforeach
                @else
                    <p class="text-muted text-center py-3">No blog posts yet</p>
                @endif
            </div>
        </div>
    </div>
</div>

<!-- Recent Activity -->
<div class="row mt-4">
    <div class="col-12">
        <div class="card dashboard-card">
            <div class="card-header bg-transparent border-0">
                <div class="d-flex align-items-center">
                    <i class="fas fa-clock me-2 text-info"></i>
                    <h5 class="mb-0">Recent Activity</h5>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    @if(count($recentDestinations) > 0 || count($recentBlogs) > 0)
                        <div class="col-md-6">
                            @foreach($recentDestinations->take(3) as $destination)
                            <div class="activity-item">
                                <div class="activity-icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div>
                                    <h6 class="mb-1">New Destination Added</h6>
                                    <p class="mb-0 text-muted">{{ $destination->title }}</p>
                                    <small class="text-muted">{{ $destination->created_at->diffForHumans() }}</small>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="col-md-6">
                            @foreach($recentBlogs->take(3) as $blog)
                            <div class="activity-item">
                                <div class="activity-icon">
                                    <i class="fas fa-pen-alt"></i>
                                </div>
                                <div>
                                    <h6 class="mb-1">New Blog Post</h6>
                                    <p class="mb-0 text-muted">{{ $blog->title }}</p>
                                    <small class="text-muted">{{ $blog->created_at->diffForHumans() }}</small>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    @else
                        <div class="col-12 text-center py-5">
                            <i class="fas fa-inbox display-4 text-muted mb-3"></i>
                            <h5 class="text-muted">No recent activity</h5>
                            <p class="text-muted">Start by creating your first destination or blog post!</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@if (session('status'))
<div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
    {{ session('status') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>
@endif
@endsection

@extends('layouts.app')

@section('content')
<!-- Welcome Banner -->
<div class="admin-welcome">
    <div class="row align-items-center">
        <div class="col-md-8">
            <h2><i class="fas fa-hand-wave me-2"></i> Welcome back, {{ Auth::user()->name }}!</h2>
            <p>Manage your ToursTravel Kenya platform from this dashboard</p>
        </div>
        <div class="col-md-4 text-md-end">
            <span class="date-badge">
                <i class="fas fa-calendar-day me-1"></i>
                {{ date('l, M j, Y') }}
            </span>
        </div>
    </div>
</div>

<!-- Stats Row -->
<div class="row g-3 mb-4">
    <div class="col-lg-2 col-md-4 col-6">
        <div class="admin-stat-card">
            <div class="admin-stat-icon green"><i class="fas fa-map-marked-alt"></i></div>
            <div class="admin-stat-info">
                <h3>{{ $stats['destinations'] }}</h3>
                <small>Destinations</small>
            </div>
        </div>
    </div>
    <div class="col-lg-2 col-md-4 col-6">
        <div class="admin-stat-card">
            <div class="admin-stat-icon green"><i class="fas fa-folder"></i></div>
            <div class="admin-stat-info">
                <h3>{{ $stats['categories'] }}</h3>
                <small>Categories</small>
            </div>
        </div>
    </div>
    <div class="col-lg-2 col-md-4 col-6">
        <div class="admin-stat-card">
            <div class="admin-stat-icon amber"><i class="fas fa-hashtag"></i></div>
            <div class="admin-stat-info">
                <h3>{{ $stats['tags'] }}</h3>
                <small>Tags</small>
            </div>
        </div>
    </div>
    <div class="col-lg-2 col-md-4 col-6">
        <div class="admin-stat-card">
            <div class="admin-stat-icon blue"><i class="fas fa-newspaper"></i></div>
            <div class="admin-stat-info">
                <h3>{{ $stats['blogs'] }}</h3>
                <small>Blog Posts</small>
            </div>
        </div>
    </div>
    <div class="col-lg-2 col-md-4 col-6">
        <div class="admin-stat-card">
            <div class="admin-stat-icon rose"><i class="fas fa-users"></i></div>
            <div class="admin-stat-info">
                <h3>{{ $stats['users'] }}</h3>
                <small>Users</small>
            </div>
        </div>
    </div>
    <div class="col-lg-2 col-md-4 col-6">
        <div class="admin-stat-card">
            <div class="admin-stat-icon cyan"><i class="fas fa-chart-line"></i></div>
            <div class="admin-stat-info">
                <h3>{{ date('j') }}</h3>
                <small>Days This Month</small>
            </div>
        </div>
    </div>
</div>

<!-- Main Content Row -->
<div class="row g-4">
    <!-- Quick Actions -->
    <div class="col-lg-4">
        <div class="admin-card">
            <div class="admin-card-header">
                <h5><i class="fas fa-bolt"></i> Quick Actions</h5>
            </div>
            <div class="admin-card-body d-grid gap-2">
                <a href="{{ route('destinations.create') }}" class="admin-quick-btn">
                    <i class="fas fa-plus text-primary"></i> Add New Destination
                </a>
                <a href="{{ route('blog.create') }}" class="admin-quick-btn">
                    <i class="fas fa-pen-alt text-success"></i> Write Blog Post
                </a>
                <a href="{{ route('categories.create') }}" class="admin-quick-btn">
                    <i class="fas fa-folder-plus text-info"></i> New Category
                </a>
                <a href="{{ route('tags.create') }}" class="admin-quick-btn">
                    <i class="fas fa-tag text-warning"></i> Add Tag
                </a>
            </div>
        </div>
    </div>

    <!-- Recent Destinations -->
    <div class="col-lg-4">
        <div class="admin-card">
            <div class="admin-card-header">
                <h5><i class="fas fa-map-marker-alt"></i> Recent Destinations</h5>
                <a href="{{ route('destinations.index') }}" class="btn-admin-sm btn-admin-edit">View All</a>
            </div>
            <div class="admin-card-body">
                @if(count($recentDestinations) > 0)
                    @foreach($recentDestinations as $destination)
                    <div class="admin-recent-item">
                        <div>
                            <h6>{{ Str::limit($destination->title, 25) }}</h6>
                            <small>{{ $destination->created_at->diffForHumans() }}</small>
                        </div>
                        <a href="{{ route('destinations.show', $destination->id) }}" class="btn-admin-sm btn-admin-edit">
                            <i class="fas fa-eye"></i>
                        </a>
                    </div>
                    @endforeach
                @else
                    <div class="admin-empty">
                        <i class="fas fa-map"></i>
                        <p>No destinations yet</p>
                    </div>
                @endif
            </div>
        </div>
    </div>

    <!-- Recent Blog Posts -->
    <div class="col-lg-4">
        <div class="admin-card">
            <div class="admin-card-header">
                <h5><i class="fas fa-newspaper"></i> Recent Blog Posts</h5>
                <a href="{{ route('blog.index') }}" class="btn-admin-sm btn-admin-edit">View All</a>
            </div>
            <div class="admin-card-body">
                @if(count($recentBlogs) > 0)
                    @foreach($recentBlogs as $blog)
                    <div class="admin-recent-item">
                        <div>
                            <h6>{{ Str::limit($blog->title, 25) }}</h6>
                            <small>{{ $blog->created_at->diffForHumans() }}</small>
                        </div>
                        <a href="{{ route('blog.show', $blog->id) }}" class="btn-admin-sm btn-admin-edit">
                            <i class="fas fa-eye"></i>
                        </a>
                    </div>
                    @endforeach
                @else
                    <div class="admin-empty">
                        <i class="fas fa-pen-alt"></i>
                        <p>No blog posts yet</p>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>

<!-- Activity Timeline -->
<div class="row mt-4">
    <div class="col-12">
        <div class="admin-card">
            <div class="admin-card-header">
                <h5><i class="fas fa-clock-rotate-left"></i> Recent Activity</h5>
            </div>
            <div class="admin-card-body">
                @if(count($recentDestinations) > 0 || count($recentBlogs) > 0)
                <div class="row g-3">
                    <div class="col-md-6">
                        @foreach($recentDestinations->take(3) as $destination)
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <div class="admin-activity-icon dest"><i class="fas fa-map-marker-alt"></i></div>
                            <div>
                                <h6 class="mb-0" style="font-size:.85rem">{{ $destination->title }}</h6>
                                <small class="text-muted">Added {{ $destination->created_at->diffForHumans() }}</small>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="col-md-6">
                        @foreach($recentBlogs->take(3) as $blog)
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <div class="admin-activity-icon blog"><i class="fas fa-pen-alt"></i></div>
                            <div>
                                <h6 class="mb-0" style="font-size:.85rem">{{ $blog->title }}</h6>
                                <small class="text-muted">Published {{ $blog->created_at->diffForHumans() }}</small>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                @else
                <div class="admin-empty">
                    <i class="fas fa-inbox"></i>
                    <h5>No recent activity</h5>
                    <p>Start by creating your first destination or blog post!</p>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection

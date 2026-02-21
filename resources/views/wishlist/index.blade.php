@extends('layouts.front')

@section('content')
<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('{{ asset('images/bg_1.jpg') }}');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate pb-5 text-center">
                <h1 class="mb-3 bread">My Wishlist</h1>
                <p class="breadcrumbs">
                    <span class="mr-2"><a href="{{ url('/') }}">Home <i class="fa fa-chevron-right"></i></a></span>
                    <span>Wishlist</span>
                </p>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if($wishlisted->isEmpty())
            <div class="text-center py-5">
                <i class="fa fa-heart-o fa-4x text-muted mb-4"></i>
                <h3>Your wishlist is empty</h3>
                <p class="text-muted">Start exploring destinations and add your favorites here!</p>
                <a href="{{ route('packages') }}" class="btn btn-primary mt-3">Browse Destinations</a>
            </div>
        @else
            <div class="row">
                @foreach($wishlisted as $destination)
                    <div class="col-md-4 ftco-animate">
                        <div class="destination">
                            <a href="{{ route('desti.show', $destination) }}" class="img d-flex justify-content-center align-items-center" style="background-image: url('{{ asset('storage/' . $destination->image) }}');">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="icon-search2"></span>
                                </div>
                            </a>
                            <div class="text p-3">
                                <div class="d-flex">
                                    <div class="one">
                                        <h3><a href="{{ route('desti.show', $destination) }}">{{ $destination->title }}</a></h3>
                                        <p class="rate">
                                            @for($i = 1; $i <= 5; $i++)
                                                <i class="fa fa-star{{ $i <= ($destination->average_rating ?? 0) ? '' : '-o' }}"></i>
                                            @endfor
                                            <span>({{ $destination->reviews_count ?? 0 }} Reviews)</span>
                                        </p>
                                    </div>
                                    <div class="two">
                                        <span class="price">${{ $destination->pricing }}</span>
                                    </div>
                                </div>
                                <p>{{ Str::limit($destination->description, 100) }}</p>
                                <div class="d-flex justify-content-between align-items-center mt-3">
                                    <a href="{{ route('desti.show', $destination) }}" class="btn btn-sm btn-primary">View Details</a>
                                    <form action="{{ route('wishlist.destroy', $destination) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-outline-danger" title="Remove from wishlist">
                                            <i class="fa fa-heart"></i> Remove
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="row mt-5">
                <div class="col text-center">
                    {{ $wishlisted->links() }}
                </div>
            </div>
        @endif
    </div>
</section>
@endsection

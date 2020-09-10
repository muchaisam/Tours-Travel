@extends('layouts.package')



@section('content')
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark " id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="">Safari<span>Travel Agency</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
            aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="" {{route('about')}}" class="nav-link">About</a></li>
                <li class="nav-item"><a href="" {{route('packages')}}" class="nav-link">Destination</a></li>
                <li class="nav-item active"><a href="" {{route('blog')}}" class="nav-link">Blog</a></li>
                <li class="nav-item"><a href="" {{route('contact')}}" class="nav-link">Contact</a></li>


            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->



<section class="ftco-section ftco-no-pt ftco-no-pb">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 order-md-last ftco-animate py-md-5 mt-md-5">
                <h2 class="mb-3">{{$destinations->title}}</h2>

                <p>
                    <img src="{{asset('images/bali.jpeg')}}" alt="" class="img-fluid">
                </p>
                <h2 class="mb-3 mt-5">{{$destinations->description}}</h2>
                <p>
                    {{$destinations->content}}
                </p>

            
                    <div class="button cart_button"><a href="{{route('cart')}}">Add to cart</a></div>

            








            </div> <!-- .col-md-8 -->
            <div class="col-lg-4 sidebar ftco-animate  py-md-5">
                <div class="sidebar-box pt-md-5">
                    <form action="#" class="search-form">
                        <div class="form-group">
                            <span class="icon icon-search"></span>
                            <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
                        </div>
                    </form>
                </div>
                <div class="sidebar-box ftco-animate">
                    <div class="categories">
                        <h2 class="ftco-heading-2">Tags</h2>
                        @foreach ($tags as $tag)
                        <div class="col-6">
                            <a href="#">
                                {{$tag->name}}
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>




            </div>

        </div>
    </div>
</section> <!-- .section -->

<footer class="ftco-footer bg-bottom" style="background-image: url({{asset('images/footer-bg.jpg')}});">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Safari</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                        there live the blind texts.</p>
                    <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                        <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
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
            </div>
            <div class="col-md">
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
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Have any Questions?</h2>
                    <div class="block-23 mb-3">
                        <ul>
                            <li><span class="icon icon-map-marker"></span><span class="text">Ole Sangale Road, off
                                    Langata Road, in Madaraka Estate, Nairobi, Kenya.</span></li>
                            <li><a href="#"><span class="icon icon-phone"></span><span
                                        class="text">+254712345678</span></a></li>
                            <li><a href="#"><span class="icon icon-envelope"></span><span
                                        class="text">info@yourdomain.com</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">

                <p>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>
                        document.write(new Date().getFullYear());
                    </script> All rights reserved
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
@endsection
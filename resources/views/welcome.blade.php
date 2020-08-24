@extends('layouts.front')

@section('page')
	<div class="super_container">
	
	<!-- Header -->

	<header class="header">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="header_container d-flex flex-row align-items-center justify-content-start">

						<!-- Logo -->
						<div class="logo_container">
							<div class="logo">
								<div>destino</div>
								<div>travel agency</div>
								<div class="logo_image"><img src="images/logo.png" alt=""></div>
							</div>
						</div>

						<!-- Main Navigation -->
						<nav class="main_nav ml-auto">
							<ul class="main_nav_list">
								<li class="main_nav_item active"><a href="#">Home</a></li>
								<li class="main_nav_item"><a href="{{route('about')}}">About us</a></li>
								<li class="main_nav_item"><a href="{{route('offers')}}">Offers</a></li>
								<li class="main_nav_item"><a href="news.html">News</a></li>
								<li class="main_nav_item"><a href="contact.html">Contact</a></li>
							</ul>
						</nav>

						<!-- Search -->
						<div class="search">
							<form action="#" class="search_form">
								<input type="search" name="search_input" class="search_input ctrl_class" required="required" placeholder="Keyword">
								<button type="submit" class="search_button ml-auto ctrl_class"><img src="images/search.png" alt=""></button>
							</form>
						</div>

						<!-- Hamburger -->
						<div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>

					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- Menu -->

	<div class="menu_container menu_mm">

		<!-- Menu Close Button -->
		<div class="menu_close_container">
			<div class="menu_close"></div>
		</div>

		<!-- Menu Items -->
		<div class="menu_inner menu_mm">
			<div class="menu menu_mm">
				<div class="menu_search_form_container">
					<form action="#" id="menu_search_form">
						<input type="search" class="menu_search_input menu_mm">
						<button id="menu_search_submit" class="menu_search_submit" type="submit"><img src="images/search_2.png" alt=""></button>
					</form>
				</div>
				<ul class="menu_list menu_mm">
					<li class="menu_item menu_mm"><a href="#">Home</a></li>
					<li class="menu_item menu_mm"><a href="{{route('about')}}">About us</a></li>
					<li class="menu_item menu_mm"><a href="{{route('offers')}}">Offers</a></li>
					<li class="menu_item menu_mm"><a href="news.html">News</a></li>
					<li class="menu_item menu_mm"><a href="contact.html">Contact</a></li>
				</ul>

				<!-- Menu Social -->
				
				<div class="menu_social_container menu_mm">
					<ul class="menu_social menu_mm">
						<li class="menu_social_item menu_mm"><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					</ul>
				</div>

				<div class="menu_copyright menu_mm">Colorlib All rights reserved</div>
			</div>

		</div>

	</div>
	
	<!-- Home -->

	<div class="home">
		<div class="home_background" style="background-image:url(images/home.jpg)"></div>
		<div class="home_content">
			<div class="home_content_inner">
				<div class="home_text_large">discover</div>
				<div class="home_text_small">Discover new worlds</div>
			</div>
		</div>
	</div>

	<!-- Find Form -->

	<div class="find">
		<!-- Image by https://unsplash.com/@garciasaldana_ -->
		<div class="find_background parallax-window" data-parallax="scroll" data-image-src="images/find.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="find_title text-center">Find the Adventure of a lifetime</div>
				</div>
				<div class="col-12">
					<div class="find_form_container">
						<form action="#" id="find_form" class="find_form d-flex flex-md-row flex-column align-items-md-center align-items-start justify-content-md-between justify-content-start flex-wrap">
							<div class="find_item">
								<div>Destination:</div>
								<input type="text" class="destination find_input" required="required" placeholder="Keyword here">
							</div>
							<div class="find_item">
								<div>Adventure type:</div>
								<select name="adventure" id="adventure" class="dropdown_item_select find_input">
									<option>Categories</option>
									<option>Categories</option>
									<option>Categories</option>
								</select>
							</div>
							<div class="find_item">
								<div>Min price</div>
								<select name="min_price" id="min_price" class="dropdown_item_select find_input">
									<option>&nbsp;</option>
									<option>Price</option>
									<option>Price</option>
								</select>
							</div>
							<div class="find_item">
								<div>Max price</div>
								<select name="max_price" id="max_price" class="dropdown_item_select find_input">
									<option>&nbsp;</option>
									<option>10,000</option>
									<option>Price</option>
								</select>
							</div>
							<button class="button find_button">Find</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Top Destinations -->

	<div class="top">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h2>Top destinations in Europe</h2>
						<div>take a look at these offers</div>
					</div>
				</div>
			</div>
			<div class="row top_content">

				<div class="col-lg-3 col-md-6 top_col">

					<!-- Top Destination Item -->
					<div class="top_item">
						<a href="#">
							<div class="top_item_image"><img src="images/top_1.jpg" alt="https://unsplash.com/@sgabriel"></div>
							<div class="top_item_content">
								<div class="top_item_price">From Ksh 29,800</div>
								<div class="top_item_text">Paris, France</div>
							</div>
						</a>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 top_col">

					<!-- Top Destination Item -->
					<div class="top_item">
						<a href="#">
							<div class="top_item_image"><img src="images/top_2.jpg" alt="https://unsplash.com/@jenspeter"></div>
							<div class="top_item_content">
								<div class="top_item_price">From Ksh 25,800</div>
								<div class="top_item_text">Italian Riviera</div>
							</div>
						</a>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 top_col">

					<!-- Top Destination Item -->
					<div class="top_item">
						<a href="#">
							<div class="top_item_image"><img src="images/top_3.jpg" alt="https://unsplash.com/@anikindimitry"></div>
							<div class="top_item_content">
								<div class="top_item_price">From Ksh 21,800</div>
								<div class="top_item_text">Cinque Terre</div>
							</div>
						</a>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 top_col">

					<!-- Top Destination Item -->
					<div class="top_item">
						<a href="#">
							<div class="top_item_image"><img src="images/top_4.jpg" alt="https://unsplash.com/@hellolightbulb"></div>
							<div class="top_item_content">
								<div class="top_item_price">From Ksh 20,800</div>
								<div class="top_item_text">Santorini, Greece</div>
							</div>
						</a>	
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Last -->

	<div class="last">
		<!-- Image by https://unsplash.com/@thanni -->
		<div class="last_background parallax-window" data-parallax="scroll" data-image-src="images/last.jpg" data-speed="0.8"></div>

		<div class="container">
			<div class="row">
				<div class="last_logo"><img src="images/last_logo.png" alt=""></div>
				<div class="col-lg-6 last_col">
					<div class="last_item">
						<div class="last_item_content">
							<div class="last_subtitle">maldive</div>
							<div class="last_percent">50%</div>
							<div class="last_title">Last Minute Offer</div>
							<div class="last_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer pulvinar sed mauris eget tincidunt. Sed lectus nulla, tempor vel.</div>
							<div class="button last_button"><a href="{{route('offers')}}">See Offer</a></div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 last_col">
					<div class="last_item">
						<div class="last_item_content">
							<div class="last_subtitle">bali</div>
							<div class="last_percent">38%</div>
							<div class="last_title">Last Minute Offer</div>
							<div class="last_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer pulvinar sed mauris eget tincidunt. Sed lectus nulla, tempor vel.</div>
							<div class="button last_button"><a href="{{route('offers')}}">See Offer</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Video -->

	<div class="video_section d-flex flex-column align-items-center justify-content-center">
		<!-- Image by https://unsplash.com/@peecho -->
		<div class="video_background parallax-window" data-parallax="scroll" data-image-src="images/video.jpg" data-speed="0.8"></div>
		<div class="video_content">
			<div class="video_title">A day in the wild</div>
			<div class="video_subtitle">A trip organized by Destino's team</div>
			<div class="video_play">
				<a  class="video" href="https://www.youtube.com/watch?v=nphe6O8TXy8">
					<svg version="1.1" id="Layer_1" class="play_button" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
						 width="140px" height="140px" viewBox="0 0 140 140" enable-background="new 0 0 140 140" xml:space="preserve">
						<g id="Layer_2">
							<circle class="play_circle" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-miterlimit="10" cx="70.333" cy="69.58" r="68.542"/>
							<polygon class="play_triangle" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-miterlimit="10" points="61.583,56 61.583,84.417 84.75,70 	"/>
						</g>
					</svg>
				</a>
			</div>
		</div>
	</div>

	<!-- Popular -->

	<div class="popular">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h2>Popular destinations in 2020</h2>
						<div>take a look at these offers</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="popular_content d-flex flex-md-row flex-column flex-wrap align-items-md-center align-items-start justify-content-md-between justify-content-start">
						
						<!-- Popular Item -->
						<div class="popular_item">
							<a href="{{route('offers')}}">
								<img src="images/popular_1.jpg" alt="image by Egzon Bytyqi">
								<div class="popular_item_content">
									<div class="popular_item_price">From Ksh 8,900</div>
									<div class="popular_item_title">Mombasa</div>
								</div>
							</a>	
						</div>

						<!-- Popular Item -->
						<div class="popular_item">
							<a href="{{route('offers')}}">
								<img src="images/popular_2.jpg" alt="https://unsplash.com/@michael75">
								<div class="popular_item_content">
									<div class="popular_item_price">From Ksh 8,800</div>
									<div class="popular_item_title">Hawai</div>
								</div>
							</a>	
						</div>

						<!-- Popular Item -->
						<div class="popular_item">
							<a href="{{route('offers')}}">
								<img src="images/popular_3.jpg" alt="https://unsplash.com/@sapegin">
								<div class="popular_item_content">
									<div class="popular_item_price">From Ksh 7,800</div>
									<div class="popular_item_title">Ireland</div>
								</div>
							</a>	
						</div>

						<!-- Popular Item -->
						<div class="popular_item">
							<a href="{{route('offers')}}">
								<img src="images/popular_4.jpg" alt="https://unsplash.com/@kensuarez">
								<div class="popular_item_content">
									<div class="popular_item_price">From Ksh 5,800</div>
									<div class="popular_item_title">Thailand</div>
								</div>
							</a>
						</div>

						<!-- Popular Item -->
						<div class="popular_item">
							<a href="{{route('offers')}}">
								<img src="images/popular_5.jpg" alt="https://unsplash.com/@noahbasle">
								<div class="popular_item_content">
									<div class="popular_item_price">From Ksh 15,800</div>
									<div class="popular_item_title">Croatia</div>
								</div>
							</a>
						</div>

						<!-- Popular Item -->
						<div class="popular_item">
							<a href="{{route('offers')}}">
								<img src="images/popular_6.jpg" alt="https://unsplash.com/@seb">
								<div class="popular_item_content">
									<div class="popular_item_price">From Ksh 9,800</div>
									<div class="popular_item_title">Bali</div>
								</div>
							</a>
						</div>

						<!-- Popular Item -->
						<div class="popular_item">
							<a href="{{route('offers')}}">
								<img src="images/popular_7.jpg" alt="https://unsplash.com/@nevenkrcmarek">
								<div class="popular_item_content">
									<div class="popular_item_price">From Ksh 9,800</div>
									<div class="popular_item_title">France</div>
								</div>
							</a>	
						</div>

						<!-- Popular Item -->
						<div class="popular_item">
							<a href="{{route('offers')}}">
								<img src="images/popular_8.jpg" alt="https://unsplash.com/@bergeryap87">
								<div class="popular_item_content">
									<div class="popular_item_price">From Ksh 9,800</div>
									<div class="popular_item_title">Vietnam</div>
								</div>
							</a>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Special -->

	<div class="special">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h2>Special offers</h2>
						<div>take a look at these offers</div>
					</div>
				</div>
			</div>
		</div>
		<div class="special_content">
			<div class="special_slider_container">
				<div class="owl-carousel owl-theme special_slider">
					
					<!-- Special Offers Item -->
					<div class="owl-item">
						<div class="special_item">
							<div class="special_item_background"><img src="images/special_1.jpg" alt="https://unsplash.com/@garciasaldana_"></div>
							<div class="special_item_content text-center">
								<div class="special_category">Visiting</div>
								<div class="special_title"><a href="{{route('offers')}}">Indonesia</a></div>
							</div>
						</div>
					</div>

					<!-- Special Offers Item -->
					<div class="owl-item">
						<div class="special_item d-flex flex-column align-items-center justify-content-center">
							<div class="special_item_background"><img src="images/special_2.jpg" alt="https://unsplash.com/@varshesh"></div>
							<div class="special_item_content text-center">
								<div class="special_category">Culture</div>
								<div class="special_title"><a href="{{route('offers')}}">India</a></div>
							</div>
						</div>
					</div>

					<!-- Special Offers Item -->
					<div class="owl-item">
						<div class="special_item d-flex flex-column align-items-center justify-content-center">
							<div class="special_item_background"><img src="images/special_3.jpg" alt="https://unsplash.com/@paulgilmore_"></div>
							<div class="special_item_content text-center">
								<div class="special_category">Sunbathing</div>
								<div class="special_title"><a href="{{route('offers')}}">Thailand</a></div>
							</div>
						</div>
					</div>

					<!-- Special Offers Item -->
					<div class="owl-item">
						<div class="special_item d-flex flex-column align-items-center justify-content-center">
							<div class="special_item_background"><img src="images/special_4.jpg" alt="https://unsplash.com/@hellolightbulb"></div>
							<div class="special_item_content text-center">
								<div class="special_category">Visiting</div>
								<div class="special_title"><a href="{{route('offers')}}">Bali</a></div>
							</div>
						</div>
					</div>

					<!-- Special Offers Item -->
					<div class="owl-item">
						<div class="special_item d-flex flex-column align-items-center justify-content-center">
							<div class="special_item_background"><img src="images/special_5.jpg" alt="https://unsplash.com/@dnevozhai"></div>
							<div class="special_item_content text-center">
								<div class="special_category">Visiting</div>
								<div class="special_title"><a href="{{route('offers')}}">France</a></div>
							</div>
						</div>
					</div>

				</div>

				<div class="special_slider_nav d-flex flex-column align-items-center justify-content-center">
					<img src="images/special_slider.png" alt="">
				</div>
			</div>
		</div>
	</div>

	<!-- Newsletter -->

	<div class="newsletter">
		<!-- Image by https://unsplash.com/@garciasaldana_ -->
		<div class="newsletter_background" style="background-image:url(images/newsletter.jpg)"></div>
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1">
					<div class="newsletter_content">
						<div class="newsletter_title text-center">Subscribe to our Newsletter</div>
						<div class="newsletter_form_container">
							<form action="#" id="newsletter_form" class="newsletter_form">
								<div class="d-flex flex-md-row flex-column align-content-center justify-content-between">
									<input type="email" id="newsletter_input" class="newsletter_input" placeholder="Your E-mail Address">
									<button type="submit" id="newsletter_button" class="newsletter_button">Subscribe</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->

	<footer class="footer">
		<div class="container">
			<div class="row">

				<!-- Footer Column -->
				<div class="col-lg-4 footer_col">
					<div class="footer_about">
						<!-- Logo -->
						<div class="logo_container">
							<div class="logo">
								<div>destino</div>
								<div>travel agency</div>
								<div class="logo_image"><img src="images/logo.png" alt=""></div>
							</div>
						</div>
						<div class="footer_about_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer pulvinar sed mauris eget tincidunt. Sed lectus nulla, tempor vel eleifend quis, tempus rut rum metus. Pellentesque ultricies enim eu quam fermentum hendrerit.</div>
						<div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
					</div>
				</div>

				<!-- Footer Column -->
				<div class="col-lg-4 footer_col">
					<div class="footer_latest">
						<div class="footer_title">Latest News</div>
						<div class="footer_latest_content">

							<!-- Footer Latest Post -->
							<div class="footer_latest_item">
								<div class="footer_latest_image"><img src="images/latest_1.jpg" alt="https://unsplash.com/@peecho"></div>
								<div class="footer_latest_item_content">
									<div class="footer_latest_item_title"><a href="news.html">Brazil Summer</a></div>
									<div class="footer_latest_item_date">Jan 09, 2020</div>
								</div>
							</div>

							<!-- Footer Latest Post -->
							<div class="footer_latest_item">
								<div class="footer_latest_image"><img src="images/latest_2.jpg" alt="https://unsplash.com/@sanfrancisco"></div>
								<div class="footer_latest_item_content">
									<div class="footer_latest_item_title"><a href="news.html">A perfect vacation</a></div>
									<div class="footer_latest_item_date">Jan 09, 2020</div>
								</div>
							</div>

						</div>
					</div>
				</div>

				<!-- Footer Column -->
				<div class="col-lg-4 footer_col">
					<div class="tags footer_tags">
						<div class="footer_title">Tags</div>
						<ul class="tags_content d-flex flex-row flex-wrap align-items-start justify-content-start">
							<li class="tag"><a href="#">travel</a></li>
							<li class="tag"><a href="#">summer</a></li>
							<li class="tag"><a href="#">cruise</a></li>
							<li class="tag"><a href="#">beach</a></li>
							<li class="tag"><a href="#">offer</a></li>
							<li class="tag"><a href="#">vacation</a></li>
							<li class="tag"><a href="#">trip</a></li>
							<li class="tag"><a href="#">city break</a></li>
							<li class="tag"><a href="#">adventure</a></li>
						</ul>
					</div>
				</div>

			</div>
		</div>
	</footer>
</div>
@endsection
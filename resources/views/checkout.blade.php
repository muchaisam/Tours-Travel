<!DOCTYPE html>
<html lang="en">

<head>
	<title>Checkout</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Sublime project">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
	<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="styles/checkout.css">
	<link rel="stylesheet" type="text/css" href="styles/checkout_responsive.css">
</head>

<body>

	<div class="super_container">

		<!-- Header -->

		<header class="header">
			<div class="header_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="header_content d-flex flex-row align-items-center justify-content-start">
								<div class="logo"><a href="#">Safari.</a></div>
								<nav class="main_nav">
								</nav>

							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Search Panel -->
			<div class="search_panel trans_300">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="search_panel_content d-flex flex-row align-items-center justify-content-end">
								<form action="#">
									<input type="text" class="search_input" placeholder="Search" required="required">
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Social -->
			<div class="header_social">
				<ul>
					<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				</ul>
			</div>
		</header>



		<!-- Checkout -->

		<div class="checkout">
			<div class="container">
				<div class="row">

					<!-- Billing Info -->
					<div class="col-lg-6">
						<div class="billing checkout_section">
							<div class="section_title">Personal Info</div>
							<div class="section_subtitle">Fill in your information</div>
							<div class="checkout_form_container">
								<form action="#" id="checkout_form" method="POST" class="checkout_form"
									action="{{route('checkout.store')}}">
									@csrf
									<div class="row">
										<div class="col-xl-6">
											<!-- Name -->
											<label for="checkout_name">First Name*</label>
											<input type="text" id="checkout_name"
												class="form-control {{ $errors->has('firstname') ? 'error' : '' }}"
												name="firstname" id="firstname" required="required">
											@if ($errors->has('firstname'))
											<div class="error">
												{{ $errors->first('firstname') }}
											</div>
											@endif
										</div>
										<div class="col-xl-6 last_name_col">
											<!-- Last Name -->
											<label for="checkout_last_name">Last Name*</label>
											<input type="text" id="checkout_last_name"
												class="form-control {{ $errors->has('lastname') ? 'error' : '' }}"
												name="lastname" id="lastname" required="required">
											@if ($errors->has('lastname'))
											<div class="error">
												{{ $errors->first('lastname') }}
											</div>
											@endif
										</div>
									</div>

									<div>
										<!-- Phone no -->
										<label for="checkout_phone">Phone no*</label>
										<input type="phone" id="checkout_phone"
											class="form-control {{ $errors->has('phone') ? 'error' : '' }}" name="phone"
											id="phone" required="required">
										@if ($errors->has('phone'))
										<div class="error">
											{{ $errors->first('phone') }}
										</div>
										@endif
									</div>
									<div>
										<!-- Email -->
										<label for="checkout_email">Email Address*</label>
										<input type="phone" id="checkout_email"
											class="form-control {{ $errors->has('email') ? 'error' : '' }}" name="email"
											id="email" required="required">
										@if ($errors->has('email'))
										<div class="error">
											{{ $errors->first('email') }}
										</div>
										@endif
									</div>


								</form>
							</div>
						</div>
					</div>

					<!-- Order Info -->

					<div class="col-lg-6">
						<div class="order checkout_section">
							<div class="section_title">Your package</div>
							<div class="section_subtitle">Tour details</div>

							<!-- Order details -->
							<div class="order_list_container">
								<div class="order_list_bar d-flex flex-row align-items-center justify-content-start">
									<div class="order_list_title">Tour</div>
									<div class="order_list_value ml-auto">Total</div>
								</div>
								<ul class="order_list">
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div class="order_list_title">{{$destinations->title}}</div>
										<div class="order_list_value ml-auto">{{$destinations->pricing}}</div>
									</li>
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div class="order_list_title">Subtotal</div>
										<div class="order_list_value ml-auto">{{$destinations->pricing}}</div>
									</li>
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div class="order_list_title">Total</div>
										<div class="order_list_value ml-auto">{{$destinations->pricing}}</div>
									</li>
								</ul>
							</div>

							<!-- Payment Options -->
							{{-- <div class="payment">
								<div class="payment_options">
									<label class="payment_option clearfix">Paypal
										<input type="radio" name="radio">
										<span class="checkmark"></span>
									</label>
									<label class="payment_option clearfix">Cash on delivery
										<input type="radio" name="radio">
										<span class="checkmark"></span>
									</label>
									<label class="payment_option clearfix">Credit card
										<input type="radio" name="radio">
										<span class="checkmark"></span>
									</label>
									<label class="payment_option clearfix">Direct bank transfer
										<input type="radio" checked="checked" name="radio">
										<span class="checkmark"></span>
									</label>
								</div>
							</div> --}}

							<!-- Order Text -->
							<div class="order_text">Can't wait to start your vacation?</div>

							<div class="button order_button"><a href="{{route('stripe')}}">Proceed to pay</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Footer -->

		<div class="footer_overlay"></div>
		<footer class="footer">
			<div class="footer_background" style="background-image:url(images/image-3.jpg)"></div>
			<div class="container">
				<div class="row">
					<div class="col">
						<div
							class="footer_content d-flex flex-lg-row flex-column align-items-center justify-content-lg-start justify-content-center">
							<div class="footer_logo"><a href="#">Safari.</a></div>
							<div class="copyright ml-auto mr-auto">
								Copyright &copy;<script>
									document.write(new Date().getFullYear());
								</script> All rights reserved </div>
							<div class="footer_social ml-lg-auto">
								<ul>
									<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>

	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="styles/bootstrap4/popper.js"></script>
	<script src="styles/bootstrap4/bootstrap.min.js"></script>
	<script src="plugins/greensock/TweenMax.min.js"></script>
	<script src="plugins/greensock/TimelineMax.min.js"></script>
	<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
	<script src="plugins/greensock/animation.gsap.min.js"></script>
	<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
	<script src="plugins/easing/easing.js"></script>
	<script src="plugins/parallax-js-master/parallax.min.js"></script>
	<script src="js/checkout.js"></script>
</body>

</html>
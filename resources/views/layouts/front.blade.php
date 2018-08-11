<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | Tech-Shop</title>
    <link href="{{ asset('app/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('app/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('app/css/prettyPhoto.css') }}" rel="stylesheet">
    <link href="{{ asset('app/css/price-range.css') }}" rel="stylesheet">
    <link href="{{ asset('app/css/animate.css') }}" rel="stylesheet">
	<link href="{{ asset('app/css/main.css') }}" rel="stylesheet">
	<link href="{{ asset('app/css/responsive.css') }}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="{{ asset('app/js/html5shiv.js') }}"></script>
    <script src="{{ asset('app/js/respond.min.js') }}"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="{{ asset('app/images/ico/favicon.ico') }}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('app/images/ico/apple-touch-icon-144-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('app/images/ico/apple-touch-icon-114-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('app/images/ico/apple-touch-icon-72-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('app/images/ico/apple-touch-icon-57-precomposed.png') }}">
	<link rel="shortcut icon" href="{{ URL::to('dash/img/fav.png') }}">
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> +250 73 40 89 829</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> info@techshop.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="{{ route('index') }}"><img src="{{ asset('app/images/home/logo.png') }}" alt="" /></a>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								@guest
									<li><a href="#"><i class="fa fa-star"></i> Wishlist</a></li>
									<li><a href="{{ route('login.check') }}"><i class="fa fa-shopping-cart"></i> Cart</a></li>
									<li><a href="{{ route('login.check') }}"><i class="fa fa-lock"></i> Login</a></li>
								@else
									<li><a href="#"><i class="fa fa-user"></i> {{ Auth::user()->fullname }}</a></li>
									<li><a href="#"><i class="fa fa-star"></i> Wishlist</a></li>
									<li><a href="{{ route('checkout') }}"><i class="fa fa-crosshairs"></i> Checkout</a></li>
									<li><a href="{{ route('cart') }}"><i class="fa fa-shopping-cart"></i> Cart</a></li>
									<li><a href="{{ route('logout') }}"
											onclick="event.preventDefault();
                                     		document.getElementById('logout-form').submit();">
												{{ __('Logout') }}
										</a>
										<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
											@csrf
										</form></li>
								@endguest
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="{{ URL::to('/') }}" class="active">Home</a></li>
								<li><a href="blog.html">Blog</a></li>
								<li><a href="contact-us.html">Contact</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<form action="/results" method="GET">
								<input type="text" name="query" placeholder="Search"/>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->

	@yield('content')
	
	<footer id="footer"><!--Footer-->
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="companyinfo">
							<h2><span>Tech</span>-shop</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,sed do eiusmod tempor</p>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="address">
							<img src="{{ URL:: to('app/images/home/map.png') }}" alt="" />
							<p>505 S Atlantic Ave Virginia Beach, VA(Virginia)</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2018 Tech-SHOP Inc. All rights reserved.</p>
					<p class="pull-right">Designed by <span><a target="_blank" href="#">Fabry</a></span></p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	

  
    <script src="{{ asset('app/js/jquery.js') }}"></script>
	<script src="{{ asset('app/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('app/js/jquery.scrollUp.min.js') }}"></script>
	<script src="{{ asset('app/js/price-range.js') }}"></script>
    <script src="{{ asset('app/js/jquery.prettyPhoto.js') }}"></script>
    <script src="{{ asset('app/js/main.js') }}"></script>
</body>
</html>
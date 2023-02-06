<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets') }}/img/Sam/3x/Ativo 2.svg">
  <link rel="icon" type="image/svg" href="{{ asset('assets') }}/img/Sam/3x/Ativo 2.svg">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<!-- title -->
	<title> SAM - Sistema de Alarme Monitorado</title>

	<!-- favicon -->
	<!-- <link rel="shortcut icon" type="image/png" href="assets/img/favicon.png"> -->

	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<link rel="stylesheet" href="{{ asset('assets') }}/css_E-commerce/all.min.css">
	<!-- bootstrap -->
  <link href="{{ asset('assets') }}/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<!-- owl carousel -->
	<link rel="stylesheet" href="{{ asset('assets') }}/css_E-commerce/owl.carousel.css">
	<!-- magnific popup -->
	<link rel="stylesheet" href="{{ asset('assets') }}/css_E-commerce/magnific-popup.css">
	<!-- animate css -->
	<link rel="stylesheet" href="{{ asset('assets') }}/css_E-commerce/animate.css">
	<!-- mean menu css -->
	<link rel="stylesheet" href="{{ asset('assets') }}/css_E-commerce/meanmenu.min.css">
	<!-- main style -->
	<link rel="stylesheet" href="{{ asset('assets') }}/css_E-commerce/main.css">
	<!-- responsive -->
	<link rel="stylesheet" href="{{ asset('assets') }}/css_E-commerce/responsive.css">

</head>
<body>
	
	<!--PreLoader-->
    <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div>
    <!--PreLoader Ends-->
	
	<!-- header -->
	<div class="top-header-area" id="sticker">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-sm-12 text-left">
					<div class="main-menu-wrap">
						<!-- logo -->
						<!-- <div class="site-logo">
							<a href="{{route('ecommerce.index')}}">
								<img src="{{ asset('assets') }}/img/Sam/3x/Ativo 2.png" alt="">
							</a>
						</div> -->
						<!-- logo -->

						<!-- menu start -->
						<nav class="main-menu">
							<ul>
								<li><a href="{{route('ecommerce.index')}}">Home</a>
								</li>
								<li><a href="{{route('about')}}">Sobre</a></li>
								<li><a href="{{route('contact')}}">Contactos</a></li>
								<li><a href="/checkout">Aderir ao serviço</a></li>
										
								</li>
								<li>
									<div class="header-icons">
										<!-- <a class="shopping-cart" href="{{route('cart')}}"><i class="fas fa-shopping-cart"></i>
											<span class="position-absolute top-0 start-100 translate-middle badge rounded-pill" style="background-color:#F28123;">{{ count((array) session('cart')) }}</span>
										</a> -->
										<!-- <a class="mobile-hide search-bar-icon" href="#"><i class="fas fa-search"></i></a> -->
										@if(Auth::check())
										<a href="{{ route('dashboard') }}" class="nav-link">{{ __("Entrar") }}</a>
										@else
										<a href="{{ route('login') }}" class="nav-link">{{ __("Login") }}</a>
										<a href="{{ route('register') }}" class="nav-link"> {{ __("Register") }}</a>
										@endif
									</div>
								</li>
							</ul>
						</nav>
						<a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search"></i></a>
						<div class="mobile-menu"></div>
						<!-- menu end -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end header -->

	<!-- search area -->
	<div class="search-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<span class="close-btn"><i class="fas fa-window-close"></i></span>
					<div class="search-bar">
						<div class="search-bar-tablecell">
							<h3>Search For:</h3>
							<input type="text" placeholder="Keywords">
							<button type="submit">Search <i class="fas fa-search"></i></button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end search arewa -->


  @yield('content')

	<!-- copyright -->
	<div class="copyright">
		<div class="container">
					<p>Copyrights &copy; 2022 - <a href="#">SAM</a>,  Todos os direitos reservados.
					</p>
			</div>
		</div>
	</div>
	<!-- end copyright -->


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    
	
	<!-- jquery -->
  <script src="{{ asset('assets') }}/js_E-commerce/jquery-1.11.3.min.js"></script>
	<!-- bootstrap -->
  <script src="{{ asset('assets') }}/bootstrap/js/bootstrap.min.js"></script>
	<!-- count down -->
	<script src="{{ asset('assets') }}/js_E-commerce/jquery.countdown.js"></script>
	<!-- isotope -->
	<script src="{{ asset('assets') }}/js_E-commerce/jquery.isotope-3.0.6.min.js"></script>
	<!-- waypoints -->
	<script src="{{ asset('assets') }}/js_E-commerce/waypoints.js"></script>
	<!-- owl carousel -->
	<script src="{{ asset('assets') }}/js_E-commerce/owl.carousel.min.js"></script>
	<!-- magnific popup -->
	<script src="{{ asset('assets') }}/js_E-commerce/jquery.magnific-popup.min.js"></script>
	<!-- mean menu -->
	<script src="{{ asset('assets') }}/js_E-commerce/jquery.meanmenu.min.js"></script>
	<!-- sticker js -->
	<script src="{{ asset('assets') }}/js_E-commerce/sticker.js"></script>
	<!-- main js -->
	<script src="{{ asset('assets') }}/js_E-commerce/main.js"></script>

	@yield('scripts')

</body>
</html>
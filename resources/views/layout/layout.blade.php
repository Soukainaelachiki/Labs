<!DOCTYPE html>
<html lang="en">
<head>
	<title>Labs - Design Studio</title>
	<meta charset="UTF-8">
	<meta name="description" content="Labs - Design Studio">
	<meta name="keywords" content="lab, onepage, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,700|Roboto:300,400,700" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="{{asset('template/css/bootstrap.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('template/css/font-awesome.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('template/css/flaticon.css')}}"/>
	<link rel="stylesheet" href="{{asset('template/css/magnific-popup.css')}}"/>
	<link rel="stylesheet" href="{{asset('template/css/owl.carousel.css')}}"/>
	<link rel="stylesheet" href="{{asset('template/css/style.css')}}"/>


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader">
			<img src="{{asset('template/img/logo.png')}}" alt="">
			<h2>Loading.....</h2>
		</div>
	</div>


	<!-- Header section -->
	<header class="header-section">
		<div class="logo">
			<img src="{{asset('template/img/logo.png')}}" alt=""><!-- Logo -->
		</div>
		<!-- Navigation -->
		<div class="responsive"><i class="fa fa-bars"></i></div>
		<nav>
			<ul class="menu-list">
				<li class="active"><a href="{{route('home')}}">Home</a></li>
				<li><a class="active" href="{{route('services')}}">Services</a></li>
				<li><a class="active" href="{{route('blog')}}">Blog</a></li>
				<li><a class="active" href="{{route('contact')}}">Contact</a></li>
				<li><a class="active" href="{{route('element')}}">Elements</a></li>
			</ul>
		</nav>
	</header>
    <!-- Header section end -->
    
    @yield('homecontent');
    @yield('servicecontent');
    @yield('blogcontent');
    @yield('contactcontent');
    @yield('elementcontent');
    @yield('blogPostcontent');

<!-- Footer section -->
<footer class="footer-section">
    <h2>2017 All rights reserved. Designed by <a href="https://colorlib.com" target="_blank">Colorlib</a></h2>
</footer>
<!-- Footer section end -->




<!--====== Javascripts & Jquery ======-->
<script src="{{asset('template/js/jquery-2.1.4.min.js')}}"></script>
<script src="{{asset('template/js/bootstrap.min.js')}}"></script>
<script src="{{asset('template/js/magnific-popup.min.js')}}"></script>
<script src="{{asset('template/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('template/js/circle-progress.min.js')}}"></script>
<script src="{{asset('template/js/main.js')}}"></script>
</body>
</html>

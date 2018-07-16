@extends('layout.layout')
    @section('homecontent')
	<!-- Intro Section -->
	<div class="hero-section">
		<div class="hero-content">
			<div class="hero-center">
				<img src="{{asset('template/img/big-logo.png')}}" alt="">
				<p>Get your freebie template now!</p>
			</div>
		</div>
		<!-- slider -->
		<div id="hero-slider" class="owl-carousel">
			@foreach($carousels as $carousel)
			<div class="item  hero-item" data-bg="{{Storage::disk('CarouselImageResize')->url($carousel->image)}}"></div>
			@endforeach
		</div>
	</div>
	<!-- Intro Section -->


	<!-- About section -->
	<div class="about-section">
		<div class="overlay"></div>
		<!-- card section -->
		<div class="card-section">
			<div class="container">
				<div class="row">
					<!-- single card -->
					@foreach($services as $service)
					<div class="col-md-4 col-sm-6">
						<div class="lab-card">
							<div class="icon">
							<i class="{{$service->icon->name}}"></i>
							</div>
							<h2>{{$service->titre}}</h2>
							<p>{{$service->contenu}}</p>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>
		<!-- card section end-->


		<!-- About contant -->
		<div class="about-contant">
			<div class="container">
				<div class="section-title">
					<h2>Get in <span>the Lab</span> and discover the world</h2>
				</div>
				<div class="row">
					<div class="col-md-6">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequat ante ac congue. Quisque porttitor porttitor tempus. Donec maximus ipsum non ornare vporttitor porttitorestibulum. Sed libero nibh, feugiat at enim id, bibendum sollicitudin arcu.</p>
					</div>
					<div class="col-md-6">
						<p>Cras ex mauris, ornare eget pretium sit amet, dignissim et turpis. Nunc nec maximus dui, vel suscipit dolor. Donec elementum velit a orci facilisis rutrum. Nam convallis vel erat id dictum. Sed ut risus in orci convallis viverra a eget nisi. Aenean pellentesque elit vitae eros dignissim ultrices. Quisque porttitor porttitorlaoreet vel risus et luctus.</p>
					</div>
				</div>
				<div class="text-center mt60">
					<a href="" class="site-btn">Browse</a>
				</div>
				<!-- popup video -->
				<div class="intro-video">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<img src="{{asset('template/img/video.jpg')}}" alt="">
							<a href="https://www.youtube.com/" class="video-popup">
								<i class="fa fa-play" ></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- About section end -->


	<!-- Testimonial section -->
	<div class="testimonial-section pb100">
		<div class="test-overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-4">
					<div class="section-title left">
						<h2>What our clients say</h2>
					</div>
					<div class="owl-carousel" id="testimonial-slide">
						<!-- single testimonial -->
						@foreach($clients as $element)
						<div class="testimonial">
							<span>‘​‌‘​‌</span>
						<p>{{$element->testimonial}}</p>
							<div class="client-info">
								<div class="avatar">
									<img src="{{Storage::disk('ClientImageResize')->url($element->image)}}" alt="">
								</div>
								<div class="client-name">
								<h2>{{$element->name}}</h2>
								<p>{{$element->compagnie}}</p>
								</div>
							</div>
						</div>
						@endforeach
					
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Testimonial section end-->


	<!-- Services section -->
	<div class="services-section spad">
		<div class="container">
			<div class="section-title dark">
				<h2>Get in <span>the Lab</span> and see the services</h2>
			</div>
			<div class="row">
				<!-- single service -->
				@foreach($services2 as $service)
				<div class="col-md-4 col-sm-6">
					<div class="service">
						<div class="icon">
						<i class="{{$service->icon->name}}"></i>
						</div>
						<div class="service-text">
						<h2>{{$service->titre}}</h2>
							<p>{{$service->contenu}}</p>
						</div>
					</div>
				</div>
				@endforeach	
			</div>
			<div class="text-center">
			<a href="" class="site-btn">Browse</a>
			</div>
		</div>
	</div>
	<!-- services section end -->


	<!-- Team Section -->
	<div class="team-section spad">
		<div class="overlay"></div>
		<div class="container">
			<div class="section-title">
				<h2>Get in <span>the Lab</span> and  meet the team</h2>
			</div>
			<div class="row">
				<!-- single member -->
				@foreach($teams as $team)
				<div class="col-sm-4">
					<div class="member">
					<img src="{{Storage::disk('TeamImageResize')->url($team->photo)}}" alt="">
					<h2>{{$team->name}}</h2>
					<h3>{{$team->profession}}</h3>
					</div>
				</div>
				@endforeach
				
			</div>
		</div>
	</div>
	<!-- Team Section end-->


	<!-- Promotion section -->
	<div class="promotion-section">
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<h2>Are you ready to stand out?</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est.</p>
				</div>
				<div class="col-md-3">
					<div class="promo-btn-area">
						<a href="{{route('blog')}}" class="site-btn btn-2">Browse</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Promotion section end-->


	<!-- Contact section -->
	<div class="contact-section spad fix">
		<div class="container">
			<div class="row">
				<!-- contact info -->
				<div class="col-md-5 col-md-offset-1 contact-info col-push">
					<div class="section-title left">
						<h2>Contact us</h2>
					</div>
					<p>Cras ex mauris, ornare eget pretium sit amet, dignissim et turpis. Nunc nec maximus dui, vel suscipit dolor. Donec elementum velit a orci facilisis rutrum. </p>
					<h3 class="mt60">Main Office</h3>
					<p class="con-item">C/ Libertad, 34 <br> 05200 Arévalo </p>
					<p class="con-item">0034 37483 2445 322</p>
					<p class="con-item">hello@company.com</p>
				</div>
				<!-- contact form -->
				@include("partials.contact")
			</div>
		</div>
	</div>
    <!-- Contact section end-->
    @endsection
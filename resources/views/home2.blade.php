@extends('main')
@section('content')

<!-- hero area start -->
<section class="hero-area" id="home">
	<div class="player" data-property="{containment:'#home',autoPlay:true, mute:true, startAt:0, showControls:false, loop:true, opacity:1}"></div>
		<div class="container">
			<div class="row">
				<div class="col-lg-7">
					<div class="hero-area-content">
						<h1>It’s all about Promoting your Business</h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo </p>
						<a href="#" class="appao-btn">Google Play</a>
						<a href="#" class="appao-btn">App Store</a>
						</div>
					</div>
					<div class="col-lg-5">
				    <div class="hand-mockup text-lg-left text-center">
						<img src="assets/img/hand-mockup.png" alt="Hand Mockup" />
					</div>
				</div>
			</div>
	</div>
</section>
<!-- hero area end -->	
<!-- about section start -->
<section class="about-area ptb-90">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
		    <div class="sec-title">
					<h2>About Prantokon<span class="sec-title-border"><span></span><span></span><span></span></span></h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4">
		    <div class="single-about-box">
					<i class="icofont icofont-ruler-pencil"></i>
					<h4>Responsive Design</h4>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
				</div>
			</div>
			<div class="col-lg-4">
		    <div class="single-about-box active">
					<i class="icofont icofont-computer"></i>
					<h4>Fast Performance</h4>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
				</div>
			</div>
			<div class="col-lg-4">
		    <div class="single-about-box">
					<i class="icofont icofont-headphone-alt"></i>
					<h4>Cross Platfrom</h4>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- about section end -->
			
@stop
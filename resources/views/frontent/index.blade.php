@extends('frontent.layout')
@section('title')
@section('header')
@include('frontent.menu1')
@stop
@section('content')
<style>
	.first-section {
		height: auto !important;
	}

</style>
<section class="section-main overflow-hidden first-section" style="height: 0px !important;" id="home">
	{{-- <div  style="z-index: 2222;position: relative;width:100%;" class="slider_container">
		<div class="flexslider">
	      <ul class="slides">
	      	@foreach($products as $product)
	    	<li>
	    		<a href="{{route('home_content_view',['products-solutions',$product->id])}}"><img
		style="width:100%; height:500px;" src="{{asset($product->image)}}" alt="" title="" /></a>
	<div class="flex-caption">
		<div class="caption_title_line">
			<h2>{{$product->title}}</h2>
			<p>{{ $product->summery }}</p>
			<a class="btn btn-primary" href="{{route('home_content_view',['products-solutions',$product->id])}}"">View</a>
                     </div>
                </div>
	    	</li>
	    	@endforeach
	    </ul>
	  </div>
   </div> --}}
   <style>
	   .carousel-caption {
		position: absolute;
		left: 0;
		z-index: 10;
		top: 30%;
		padding-top: 20px;
		padding-bottom: 20px;
		color: #000;		
		text-align: center;
	}
	.carousel-caption h3{
		color: #003366;
			font-family: Roboto, Helvetica, Arial, sans-serif;
			font-style: normal;
			font-weight: 700;
			font-size: 30px;
			padding: 5px 0 5px 0;
			margin: 0px;
	}
	.carousel-caption p{
		color: #41668a;
			font-family: Roboto, Helvetica, Arial, sans-serif;
			font-style: normal;
			font-weight: 700;
	}
	
	.carousel-indicators li{
		background-color: #036;
	}
	/* .section-main::before{
		height: 100px;
		width: 100%;
		background-color: #ddd;
		content: '';
		position: absolute;
		bottom: 60px;
	} */
   </style>
   <div id=" demo" class="carousel slide" data-ride="carousel">
				<ul class="carousel-indicators">
					<li data-target="#demo" data-slide-to="0" class="active"></li>
					<li data-target="#demo" data-slide-to="1"></li>
					<li data-target="#demo" data-slide-to="2"></li>
				</ul>
				<div class="carousel-inner">
					@foreach($products as $kye => $product)
					<div class="carousel-item {{$kye == 0 ? 'active': ''}}">
						<img src="{{asset($product->image)}}" alt="Los Angeles" class="w-100"
							style="min-height: 300px;">
						<div class="carousel-caption text-left px-4 col-md-6">
							<h3>{{$product->title}}</h3>
							<p>{!! $product->summery !!}</p>
							<a class="btn btn-primary" style="background-color: #003366;
    border-color: #022548;" href="{{route('home_content_view',['products-solutions',$product->id])}}">View</a>
						</div>
					</div>
					@endforeach

				</div>
				<a class="carousel-control-prev" href="#demo" data-slide="prev">
					<span class="carousel-control-prev-icon"></span>
				</a>
				<a class="carousel-control-next" href="#demo" data-slide="next">
					<span class="carousel-control-next-icon"></span>
				</a>
		</div>
</section>
<section class="contact-address overflow-hidden section" style="padding:0px !importent;">
	<div class="container">
		<div class="row">
			<div class="col-sm-4">
				<div class="single-address " data-wow-delay=".3s">
					<div class="single-address__icon">
						<i class="zmdi zmdi-help-outline"></i>
					</div>
					<div class="single-address__text">
						<h4>Have a question</h4>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="single-address ">
					<div class="single-address__icon">
						<i class="zmdi zmdi-phone"></i>
					</div>
					<div class="single-address__text">
						<span>{{$WeBeliveIn->mobile}}</span>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="single-address " data-wow-delay=".15s">
					<div class="single-address__icon">
						<i class="zmdi zmdi-email"></i>
					</div>
					<div class="single-address__text">
						<span>{{$WeBeliveIn->email}}</span>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>
<div class="section-main section" id="we_belive_in">
	<div class="services section-main section-padding overflow-hidden section">
		<div class="container">
			<div class="section-heading section-heading--white text-center m-b-md-30 m-b-xxs-20 m-b-sm-10">
				<h2 style="color: #036" style="font-size: 25px;" class="wow fadeInUpSmall">We believe in</h2>
				<h3 style="color: #036" class="wow fadeInUpSmall" data-wow-delay=".15s">{{$WeBeliveIn->about}}</h3>
			</div>
			<div class="service-slider owl-carousel"
				data-owl-options='{"margin":30,"loop":false,"smartSpeed":900,"autoplay":false,"autoplaySpeed":900,"autoplayTimeout":3000,"dots":false,"nav":true,"navSpeed":900,"responsiveClass":true,"responsive":{"0":{"items":1},"768":{"items":2},"992":{"items":3}}}'>
				<div class="single-service wow fadeInUp">
					<i class="zmdi zmdi-chart-donut"></i>
					<h4>Service Excellence</h4>
					<p>{{$WeBeliveIn->wbi1}}</p>
				</div>
				<div class="single-service wow fadeInUp" data-wow-delay=".1s">
					<i class="zmdi zmdi-share"></i>
					<h4>Rights to Know</h4>
					<p>{{$WeBeliveIn->wbi2}}</p>
				</div>
				<div class="single-service wow fadeInUp" data-wow-delay=".2s">
					<i class="zmdi zmdi-star-outline"></i>
					<h4>Hight Quality</h4>
					<p>{{$WeBeliveIn->wbi3}}</p>
				</div>
				<div class="single-service wow fadeInUp" data-wow-delay=".3s">
					<i class="zmdi zmdi-eye"></i>
					<h4>Visibility</h4>
					<p>{{$WeBeliveIn->wbi4}}</p>
				</div>
				<div class="single-service wow fadeInUp" data-wow-delay=".4s">
					<i class="zmdi zmdi-money"></i>
					<h4>Value for money</h4>
					<p>{{$WeBeliveIn->wbi5}}</p>
				</div>
				<div class="single-service wow fadeInUp" data-wow-delay=".5s">
					<i class="zmdi zmdi-favorite-outline"></i>
					<h4>Customer Satisfaction</h4>
					<p>{{$WeBeliveIn->wbi6}}</p>
				</div>
			</div>
		</div>
	</div>
</div>
{{-- <section class="team section-main section-padding section" id="MAJOR_PRODUCTS">
	<div class="container">
		<div class="section-heading text-center m-b-xxs-5 m-b-sm-10 m-b-md-20">
			<h2 class="wow fadeInUpSmall">MAJOR PRODUCTS</h2>
		</div>
		<div class="team-slider owl-carousel"
			data-owl-options='{"margin":25,"loop":false,"smartSpeed":300,"responsiveClass":true,"responsive":{"0":{"items":1,"nav":true,"dots":false},"768":{"items":2,"nav":false,"dots":true},"992":{"items":3},"1200":{"items":4}}}'>
@php $i = 1; @endphp
@foreach($AllContents as $Content)
@if($Content->type=='brands' && $Content->status!=1)
<div class="member wow fadeInUp" data-wow-delay=".1s">
	<div class="member__image"><img alt="member-2" style="height:200px" src="{{asset($Content->thumnail)}}">
	</div>
	<div class="member__info">
		<div class="member__info__skills">
			<ul>
				<li>
					<span class="progress-bar-label"><a
							href="{{route('home_content_view',['brands',$Content->id])}}">View
							Details</a></span>
				</li>
				<li>
					{!!$Content->summery!!}
				</li>
			</ul>
		</div>
	</div>
</div>
@endif
@endforeach
</div>
<div class="load-portfolio text-center m-t-xxs-15 m-t-sm-45 wow fadeInUpSmall" data-wow-duration="1s">
	<a href="{{route('home_contents',['brands'])}}"
		class="mdl-button mdl-button--large mdl-js-button mdl-js-ripple-effect">More</a>
</div>
</div>
</section> --}}

<section class="team section-main section-padding section" id="FEATURE_BRANDS">
	<div class="container">
		<div class="section-heading text-center m-b-xxs-5 m-b-sm-10 m-b-md-20">
			<h2 class="wow fadeInUpSmall">Featured Brands</h2>
		</div>
		<div class="team-slider owl-carousel"
			data-owl-options='{"margin":25,"loop":false,"smartSpeed":300,"responsiveClass":true,"responsive":{"0":{"items":1,"nav":true,"dots":false},"768":{"items":2,"nav":false,"dots":true},"992":{"items":3},"1200":{"items":4}}}'>
			<?php $i = 1;?>
			@foreach($AllContents as $Content)
			@if($Content->type=='brands' && $Content->status==1)
			<div class="member wow fadeInUp" data-wow-delay=".1s">
				<div class="member__image"><img alt="member-2" style="height:200px" src="{{asset($Content->thumnail)}}">
				</div>
				<div class="member__info">
					<div class="member__info__skills">
						<ul>
							<li>
								<span class="progress-bar-label"><a
										href="{{route('home_content_view',['brands',$Content->id])}}">View
										Details</a></span>
							</li>
							<li>
								<?php echo $Content->summery;?>
							</li>
						</ul>
					</div>
				</div>
			</div>
			@endif
			@endforeach
		</div>
		<div class="load-portfolio text-center m-t-xxs-15 m-t-sm-45 wow fadeInUpSmall" data-wow-duration="1s">
			<a href="{{route('home_contents',['brands'])}}"
				class="mdl-button mdl-button--large mdl-js-button mdl-js-ripple-effect">More</a>
		</div>
	</div>
</section>

<section class="team section-main section-padding section" id="FEATURED_SERVICES">
	<div class="container">
		<div class="section-heading text-center m-b-xxs-5 m-b-sm-10 m-b-md-20">
			<h2 class="wow fadeInUpSmall">Featured Services</h2>
		</div>
		<div class="team-slider owl-carousel"
			data-owl-options='{"margin":25,"loop":false,"smartSpeed":300,"responsiveClass":true,"responsive":{"0":{"items":1,"nav":true,"dots":false},"768":{"items":2,"nav":false,"dots":true},"992":{"items":3},"1200":{"items":4}}}'>
			<?php $i = 1;?>
			@foreach($AllContents as $Content)
			@if($Content->type=='services' && $Content->status==1)
			<div class="member wow fadeInUp" data-wow-delay=".1s">
				<div class="member__image"><img alt="member-2" style="height:200px" src="{{asset($Content->thumnail)}}">
				</div>
				<div class="member__info">
					<div class="member__info__skills">
						<ul>
							<li>
								<span class="progress-bar-label"><a
										href="{{route('home_content_view',['brands',$Content->id])}}">View
										Details</a></span>
							</li>
							<li>
								<?php echo $Content->summery;?>
							</li>
						</ul>
					</div>
				</div>
			</div>
			@endif
			@endforeach
		</div>
		<div class="load-portfolio text-center m-t-xxs-15 m-t-sm-45 wow fadeInUpSmall" data-wow-duration="1s">
			<a href="{{route('home_contents',['services'])}}"
				class="mdl-button mdl-button--large mdl-js-button mdl-js-ripple-effect">More</a>
		</div>
	</div>
</section>

<section class="skills section-padding  section-main section" id="MAJOR_CLIENTS">
	<div class="container">
		<div class="section-heading text-center m-b-xxs-5 m-b-sm-10 m-b-md-20">
			<h2 class="wow fadeInUpSmall" style="color: #fff; text-transform: capitalize;">MAJOR CLIENTS</h2>
		</div>
		<div class="row">
			@foreach($AllContents as $Content)
			@if($Content->type=='clients' && $Content->status==1)
			<div class="col-md-2 text-center">
				<img src="{{asset($Content->thumnail)}}" class="img-responsive" alt="">
			</div>
			@endif
			@endforeach
		</div>

		{{-- <div class="row">
			<div class="col-sm-12 col-md-12">
				<div class="skill-slider owl-carousel"
					data-owl-options='{"margin":30,"loop":false,"smartSpeed":900,"dots":false,"nav":true,"navSpeed":900,"responsiveClass":true,"responsive":{"0":{"items":1},"480":{"items":2},"768":{"items":3},"992":{"items":5},"1200":{"items":5}}}'>
		@php $i = 1; @endphp
		@foreach($AllContents as $Content)
		@if($Content->type=='clients' && $Content->status==1)
		<a href="{{route('home_content_view',['clients',$Content->id])}}">
			<div class="single-skill text-center wow fadeInUp" data-wow-delay=".{{$i}}s">

				<div class="single-skill__v-center">
					<img style="width: 85%; height: 115px; margin:10px;" src="{{asset($Content->thumnail)}}">
				</div>
			</div>
		</a>
		@php $i++ @endphp
		@endif
		@endforeach
	</div>
	</div>
	</div> --}}
	<div class="load-portfolio text-center m-t-xxs-15 m-t-sm-45 wow fadeInUpSmall" data-wow-duration="1s">
		<a href="{{route('home_contents',['clients'])}}"
			class="mdl-button mdl-button--large mdl-js-button mdl-js-ripple-effect">More</a>
	</div>
	</div>
</section>


<style>
	.treadmill {
		overflow: hidden;
		padding: 0 20px;
	}

	.treadmill-unit {
		overflow: hidden;
		position: relative;
		padding: 1px 0px;
	}

	.gallary>.col-md-3 {
		min-height: 550px;
	}

	.marquee-vertical {
		overflow: hidden;
	}

	.gallary-title {
		z-index: 1;
		background-color: #f7f7f7;
	}

</style>


<!--awards-->

<section class="team section-main section-padding section" id="GALLERY">


	<div class="container">
		<div class="section-heading text-center m-b-xxs-5 m-b-sm-10 m-b-md-20">
			<h2 class="wow fadeInUpSmall ">GALLERY</h2>
		</div>
		<div class="row gallary">
			<div class="col-md-3 p-0">
				<div class="col-md-12 gallary-title">
					<h3 class="wow fadeInUpSmall text-center">Alert</h3>
				</div>
				<div class="col-md-12 p-1 m-0 marquee-vertical">
					<img alt="picture" class="treadmill-unit" style="width:100%;height:200px;"
						src="http://pakizatvl.com/uploads/awards/01.jpg">
					<img alt="picture" class="treadmill-unit" style="width:100%;height:200px;"
						src="http://pakizatvl.com/uploads/awards/01.jpg">
					<img alt="picture" class="treadmill-unit" style="width:100%;height:200px;"
						src="http://pakizatvl.com/uploads/awards/01.jpg">
					<img alt="picture" class="treadmill-unit" style="width:100%;height:200px;"
						src="http://pakizatvl.com/uploads/awards/01.jpg">
				</div>
			</div>
			<div class="col-md-3 p-0">
				<div class="col-md-12 gallary-title">
					<h3 class="wow fadeInUpSmall text-center">Customer Event</h3>
				</div>
				<div class="col-md-12 p-1 m-0 marquee-vertical">
					<img alt="picture" class="treadmill-unit" style="width:100%;height:200px;"
						src="https://via.placeholder.com/150">
					<img alt="picture" class="treadmill-unit" style="width:100%;height:200px;"
						src="https://via.placeholder.com/150">
					<img alt="picture" class="treadmill-unit" style="width:100%;height:200px;"
						src="https://via.placeholder.com/150">
					<img alt="picture" class="treadmill-unit" style="width:100%;height:200px;"
						src="https://via.placeholder.com/150">
				</div>
			</div>
			<div class="col-md-3 p-0">
				<div class="col-md-12 gallary-title">
					<h3 class="wow fadeInUpSmall text-center">Cultural Event</h3>
				</div>
				<div class="col-md-12 p-1 p-0 m-0 marquee-vertical">
					<img alt="picture" class="treadmill-unit" style="width:100%;height:200px;"
						src="http://pakizatvl.com/uploads/awards/01.jpg">
					<img alt="picture" class="treadmill-unit" style="width:100%;height:200px;"
						src="http://pakizatvl.com/uploads/awards/01.jpg">
					<img alt="picture" class="treadmill-unit" style="width:100%;height:200px;"
						src="http://pakizatvl.com/uploads/awards/01.jpg">
					<img alt="picture" class="treadmill-unit" style="width:100%;height:200px;"
						src="http://pakizatvl.com/uploads/awards/01.jpg">
				</div>
			</div>
			<div class="col-md-3 p-0">
				<div class="col-md-12 gallary-title">
					<h3 class="wow fadeInUpSmall text-center">Others Event</h3>
				</div>
				<div class="col-md-12 p-1 p-0 m-0 marquee-vertical">
					<img alt="picture" class="treadmill-unit" style="width:100%;height:200px;"
						src="http://pakizatvl.com/uploads/awards/01.jpg">
					<img alt="picture" class="treadmill-unit" style="width:100%;height:200px;"
						src="http://pakizatvl.com/uploads/awards/01.jpg">
					<img alt="picture" class="treadmill-unit" style="width:100%;height:200px;"
						src="http://pakizatvl.com/uploads/awards/01.jpg">
					<img alt="picture" class="treadmill-unit" style="width:100%;height:200px;"
						src="http://pakizatvl.com/uploads/awards/01.jpg">
				</div>
			</div>


			{{-- <div class="col-md-10 mx-auto" style="padding:5px;">
			<div class="row">
				<div class="col-md" style="padding:3px;">
					<img alt="picture" style="width:100%;height:200px;" src="http://pakizatvl.com/uploads/awards/01.jpg"
						class="img-fluid">

				</div>
				<div class="col-md" style="padding:3px;">
					<img alt="picture" style="width:100%;height:200px;" src="http://pakizatvl.com/uploads/awards/03.jpg"
						class="img-fluid">
				</div>
				<div class="col-md" style="padding:3px;">
					<img alt="picture" style="width:100%;height:200px;" src="http://pakizatvl.com/uploads/awards/04.jpg"
						class="img-fluid">
				</div>
				<div class="col-md" style="padding:3px;">
					<img alt="picture" style="width:100%;height:200px;" src="http://pakizatvl.com/uploads/awards/02.jpg"
						class="img-fluid">
				</div>

			</div>
		</div> --}}
		</div>
	</div>
	</div>
</section>

<style>
	.leader-container {
		position: relative;
		margin-bottom: 30px;
	}

	.leader-image {
		opacity: 1;
		display: block;
		width: 100%;
		height: auto;
		transition: .5s ease;
		backface-visibility: hidden;
	}

	.leader-middle {
		transition: .5s ease;
		opacity: 0;
		position: absolute;
		bottom: 0;
		left: 50%;
		transform: translate(-50%, -50%);
		-ms-transform: translate(-50%, -50%);
		text-align: center;
	}

	.leader-container:hover .leader-image {
		opacity: 0.3;
	}

	.leader-container .leader-middle {
		opacity: 1;
	}

	.leader-text {
		color: white;
	}

</style>
<section class="skills section-padding  section-main section" id="LEADERSHIP">
	<div class="container">
		<div class="section-heading text-center m-b-xxs-5 m-b-sm-10 m-b-md-20">
			<h2 class="wow fadeInUpSmall" style="color: #fff; text-transform: capitalize;">LEADERSHIP</h2>
		</div>
		<div class="row mb-5 show-leader-details" style="display:none">
			<div class="col-md-12 text-right">
				<i class="zmdi zmdi-close close-leader-details" style="font-size:30px;color:#fff;cursor:pointer"></i>
			</div>
			<div class="col-md-6 text-right">
				<img src="{{asset('frontent/img/blank_person.jpg')}}" alt="Avatar" class="" width="100%">
			</div>
			<div class="col-md-6 text-white">
				<h2>John Doe</h2>
				<h5>Chief Exicutive Officer</h5>
				<br>
				<p>
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum dolores, quasi quae ipsa
					voluptate itaque atque tempore ea ratione minima, excepturi mollitia perferendis veritatis, dolor
					vero sint in autem recusandae?
			    </p>
				<p>
					Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt, officia repellat? Atque
					molestias in perferendis asperiores, vitae, delectus consequatur ea corporis libero blanditiis sequi
					culpa saepe id ut obcaecati earum.
				</p>
				<p>
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum dolores, quasi quae ipsa
					voluptate itaque atque tempore ea ratione minima, excepturi mollitia perferendis veritatis, dolor
					vero sint in autem recusandae?
				</p>
				<p>
					Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt, officia repellat? Atque
					molestias in perferendis asperiores, vitae, delectus consequatur ea corporis libero blanditiis sequi
					culpa saepe id ut obcaecati earum.
				</p>
				<p>
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum dolores, quasi quae ipsa
					voluptate itaque atque tempore ea ratione minima, excepturi mollitia perferendis veritatis, dolor
					vero sint in autem recusandae?
				</p>

			</div>
		</div>
		<div class="row">
			<div class="col-md-4 leader-container">
				<img src="{{asset('frontent/img/blank_person.jpg')}}" alt="Avatar" class="leader-image"
					style="width:100%">
				<div class="leader-middle">
					<div class="leader-text">
						<h3>John Doe</h3>
						<h6>Chief Exicutive Officer</h6>
					</div>
				</div>
			</div>
			<div class="col-md-4 leader-container">
				<img src="{{asset('frontent/img/blank_person.jpg')}}" alt="Avatar" class="leader-image"
					style="width:100%">
				<div class="leader-middle">
					<div class="leader-text">
						<h3>John Doe</h3>
						<h6>Chief Exicutive Officer</h6>
					</div>
				</div>
			</div>
			<div class="col-md-4 leader-container">
				<img src="{{asset('frontent/img/blank_person.jpg')}}" alt="Avatar" class="leader-image"
					style="width:100%">
				<div class="leader-middle">
					<div class="leader-text">
						<h3>John Doe</h3>
						<h6>Chief Exicutive Officer</h6>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>


<!--LEADERSHIP-->

@stop
@section('styles')
@stop
@section('scripts')
<script>
	$(document).ready(function () {
		$(function () {
			$('.marquee-vertical').marquee({delay: 0, timing: 10 });
		});

		$('.leader-container').click(function(){
			$('.show-leader-details').show('slow');
			$('html, body').animate({
				scrollTop: $("div.show-leader-details").offset().top
			}, 1000)

			
		})
		$('.close-leader-details').click(function(){
			$('.show-leader-details').hide('slow');
		})
	});

</script>
@stop
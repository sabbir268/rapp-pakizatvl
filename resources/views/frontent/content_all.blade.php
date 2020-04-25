@extends('frontent.layout')
@section('title')
@section('header')
	@include('frontent.menu2')
@stop
@section('content')
<!-- <section class="banner banner--small section-main overflow-hidden">
	<div class="bg-parallax" data-top="transform: translate3d(0px, 0px, 0px); opacity: 1;" data-top-bottom="transform: translate3d(0px, 250px, 0px); opacity: 0;"></div>
	<div class="banner__v-center">
		<div class="container">
			<div class="row">
				<div class="col-xxs-12">
					<div class="banner__content banner__content--2">
						<div class="banner__content__text">
							<h2 class="wow fadeInLeftSmall">Sister Concern's</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section> -->

<section class="blog-posts section-main section-padding section" id="blog" style="margin-top: 65px;">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-12">
				<div class="row">
					<div id="blog-posts-mesonary">
						@foreach($Contents as $Content)
						<article class="col-xxs-3 col-sm-3 col-md-2 single-blog-post">
							<a href="{{route('home_content_view',[$slug,$Content->id])}}">
							<div class="mdl-card jumbo-shadow mdl-shadow--2dp" style="text-align: center;">
								<div class="post-thumb-wrap">
									<img style="height: 150px; padding: 10px;" src="{{asset($Content->thumnail)}}">
								</div>
								<div class="post-content-wrap" style="height: 94px;">
									<p>{{$Content->title}}</p>
								</div>
							</div>
							</a>
						</article>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@stop
@section('styles')
@stop
@section('scripts')
@stop
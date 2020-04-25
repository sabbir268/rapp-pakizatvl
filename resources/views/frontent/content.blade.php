@extends('frontent.layout')
@section('title')
@section('header')
	@include('frontent.menu2')
@stop
@section('content')
<section class="section-main section-padding section single-blog-post-content-container" style="margin-top:65px;    margin-bottom: -29px;">
		<div class="container" style="text-align: right;">
			<img src="{{url('details.png')}}">
		</div>		
</section>
	<section class="section-main section-padding section single-blog-post-content-container" style="min-height: 484px;">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="row">
						<div class="col-sm-12">
							<div class="single-blog-post-content" style="margin-top: -13px;">
								<h3 class="text-uppercase">{{$ContentView->title}}</h3>
								<blockquote>
									<?php echo $ContentView->summery; ?>
								</blockquote>
									<?php echo $ContentView->details; ?>
							</div>
						</div>
						<!-- <div class="col-sm-4">
							<aside class="sidebar">
								<div class="sidebar__widget sidebar__widget--recent-posts">
									<ul>
										<li>
											<a href="data-center-cloud-solution.html">Data Center & Cloud Solutions</a></span>
										</li>
										<li>
											<a href="network-infrastructure-security.html">Network Infrastructure & Security</a></span>
										</li>
										<li>
											<a href="servers-strorages.html">Servers & Storages</a></span>
										</li>
										<li>
											<a href="security-surveillance.html">Security & Surveillance</a></span>
										</li>
										<li>
											<a href="software-process-automation.html">Software & Process Automation</a></span>
										</li>
										<li>
											<a href="endpoint-computing.html">Endpoint Computing</a></span>
										</li>
									</ul>
								</div>
							</aside>
						</div> -->
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
<header class="site-navbar pd-0">
	<a class="site-logo" href="#"><img style="height: 50px;" alt="logo-1" class="site-logo__image-1"
			src="{{asset('frontent/images/logo-3.png')}}"> <img alt="logo-2" class="site-logo__image-2" img
			style="height: 45px;" src="{{asset('frontent/images/logo-2.png')}}"></a>
	<nav class="site-nav hidden-xxs hidden-xs hidden-sm">
		<ul class="cl-effect-5" style="margin:0px">
			<li>
				<a class="menu-smooth-scroll" href="#home"><span data-hover="Home"><span>Home</span></span></a>
			</li>
			<li>
				<a class="menu-smooth-scroll" href="#we_belive_in"><span data-hover="We Belive In"><span>We Belive
							In</span></span></a>
			</li>
			<li>
				<a class="menu-smooth-scroll" href="#FEATURE_BRANDS"><span data-hover="FEATURE BRANDS"><span>FEATURE
							BRANDS</span></span></a>
			</li>
			<li>
				<a class="menu-smooth-scroll" href="#FEATURED_SERVICES"><span
						data-hover="FEATURED SERVICES"><span>FEATURED SERVICES</span></span></a>
			</li>
			<!--<li>-->
			<!--	<a class="menu-smooth-scroll" href="#MAJOR_PRODUCTS"><span data-hover="MAJOR PRODUCTS"><span>FEATURE PRODUCTS</span></span></a>-->
			<!--</li>-->
			<li>
				<a class="menu-smooth-scroll" href="#MAJOR_CLIENTS"><span data-hover="MAJOR CLIENTS"><span>MAJOR
							CLIENTS</span></span></a>
			</li>


			<li>
				<a class="menu-smooth-scroll" href="#GALLERY"><span data-hover="GALLERY"><span>GALLERY</span></span></a>
			</li>

			<li>
				<a class="menu-smooth-scroll" href="#LEADERSHIP"><span
						data-hover="LEADERSHIP"><span>LEADERSHIP</span></span></a>
			</li>

			<!--<li class="">-->
			<!--      <a href="http://pakizatvl.com/contents/awards">Awards</a>-->
			<!--</li>-->
			<!--<li class="">-->
			<!--     <a href="http://pakizatvl.com/contents/leadership">Leadership</a>-->
			<!--</li>-->
			<style>
				.custom-nav {
					display: inline-block;
					width: auto;
					padding: 4px 0px;
				}

				.custom-nav:hover {
					background-color: #fff;
				}

			</style>
			<li class="dropdown-item custom-nav">
				<a href="javascript:void(0)">More Pages</a>
				<ul class="dropdown-menu" style="left: -150px;">
					<li class="dropdown-item">
						<a href="javascript:void(0)">Products</a>
						<ul class="dropdown-menu" style="left: -200px;">
							@foreach($AllContents as $Content)
							@if($Content->type =='products')
							<li>
								<a
									href="{{route('home_content_view',['products',$Content->id])}}">{{$Content->title}}</a>
							</li>
							@endif
							@endforeach
						</ul>
					</li>
					<li class="dropdown-item">
						<a href="javascript:void(0)">Solution</a>
						<ul class="dropdown-menu">
							@foreach($AllContents as $Content)
							@if($Content->type =='solutions')
							<li>
								<a
									href="{{route('home_content_view',['solutions',$Content->id])}}">{{$Content->title}}</a>
							</li>
							@endif
							@endforeach
						</ul>
					</li>

					<li>
						<a href="http://pakizatvl.com/contents/about/17">About Us</a>
					</li>
					<li>
						<a href="{{route('contact_us')}}">Contact Us</a>
					</li>
					<li>
						<a href="{{route('home_query')}}">Query</a>
					</li>
				</ul>
			</li>
		</ul>
	</nav>
</header>
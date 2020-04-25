<header class="site-navbar">
		<a class="site-logo" href="#"><img style="height: 50px;" alt="logo-1" class="site-logo__image-1" src="{{asset('frontent/images/logo-3.png')}}"> <img alt="logo-2" class="site-logo__image-2" img style="height: 45px;" src="{{asset('frontent/images/logo-2.png')}}"></a>
		<nav class="site-nav hidden-xxs hidden-xs hidden-sm">
			<ul class="cl-effect-5">
				<li>
					<a  href="{{route('home')}}"><span data-hover="Home"><span>Home</span></span></a>
				</li>
				
				<li class="">
					<a href="http://pakizatvl.com/contents/about/17">About Us</a>
				</li>
				<!--<li class="">-->
				<!--      <a href="http://pakizatvl.com/contents/awards">Awards</a>-->
				<!--</li>-->
				<!--<li class="">-->
				<!--     <a href="http://pakizatvl.com/contents/leadership">Leadership</a>-->
				<!--</li>-->
				<li class="dropdown-item">
					<a href="javascript:void(0)">Products</a>
					<ul class="dropdown-menu">
						@foreach($AllContents as $Content)
	                    @if($Content->type =='products')
						<li>
							<a href="{{route('home_content_view',['products',$Content->id])}}">{{$Content->title}}</a>
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
							<a href="{{route('home_content_view',['solutions',$Content->id])}}">{{$Content->title}}</a>
						</li>
						@endif
						@endforeach
					</ul>
				</li>
				<li>
					<a href="{{route('home_contents',['sister-concerns'])}}">Sister Concern's</a>
				</li>
				<li>
					<a href="{{route('contact_us')}}">Contact Us</a>
				</li>
				<li>
					<a href="{{route('home_query')}}">Query</a>
				</li>
			</ul>
		</nav>
	</header>
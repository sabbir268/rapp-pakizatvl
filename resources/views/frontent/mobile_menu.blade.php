<nav class="mobile-menu visible-sm visible-xs visible-xxs">
		<div class="mobile-menu__header">
			<div class="mobile-menu__header__content">
				<img alt="mobile-menu-header-thumb" src="{{asset('frontent/images/logo-3.png')}}">
			</div>
		</div>

		<ul class="cl-effect-5">
			<li>
		      	<a  href="{{route('home')}}"><span data-hover="Home"><span>Home</span></span></a>
			</li>
			<li class="">
				<a href="http://pakizatvl.com/contents/about/17">About Us</a>
				<!--<ul class="dropdown-menu">-->
				<!--	@foreach($AllAbout as $Content)-->
    <!--                @if($Content->type =='about')-->
				<!--	<li>-->
				<!--		<a href="{{route('home_content_view',['about',$Content->id])}}">{{$Content->title}}</a>-->
				<!--	</li>-->
				<!--	@endif-->
				<!--	@endforeach-->
				<!--</ul>-->
			</li>
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
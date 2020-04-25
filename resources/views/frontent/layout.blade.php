<!DOCTYPE html>
<html class="matx no-js">

<head>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="Pakizatvl , developed by bemantech.com" name="description">
    <meta content="width=device-width,initial-scale=1" name="viewport">
    <title>Pakizatvl</title>
    <link href="{{asset('frontent/images/222.png')}}" rel="shortcut icon" type="image/x-icon">
    <link href="{{asset('frontent/images/222.png')}}" rel="apple-touch-icon">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,400italic,500,700italic,700,500italic,900"
        rel="stylesheet" type="text/css">
    <link href="{{asset('frontent/assets/libs/material-design-iconic-font/css/material-design-iconic-font.min.css')}}"
        rel="stylesheet">
    <link href="{{asset('frontent/assets/libs/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontent/assets/libs/mdl/material.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontent/assets/libs/owl-carousel/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontent/assets/libs/owl-carousel/owl.theme.default.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontent/assets/libs/magnific-popup/magnific-popup.css')}}" rel="stylesheet">
    <link href="{{asset('frontent/assets/libs/sweetalert/sweet-alert.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontent/assets/libs/sweetalert/ie9.css')}}" rel="stylesheet">
    <link href="{{asset('frontent/assets/libs/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontent/assets/css/common.css')}}" rel="stylesheet">
    <link href="{{asset('frontent/assets/css/main.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('frontent/sample.css')}}" media="all" />
    <link rel="stylesheet" type="text/css"
        href="https://raw.githubusercontent.com/daneden/animate.css/master/animate.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->

    @yield('styles')
</head>

<body>
    {{-- <div class="preloader" id="loader">
		<div class="preloader__inner"></div>
	</div> --}}
    <div class="mobile-menu-trigger visible-sm visible-xs visible-xxs">
        <button class="hamburger hamburger--spin" type="button"><span class="hamburger-box"><span
                    class="hamburger-inner"></span></span></button>
    </div>
    @include('frontent.mobile_menu')
    @yield('header')
    @yield('content')
    <!--<footer class="footer">-->
    <!--	<section class="footer__bottom">-->
    <!--		<div class="container" style="width: 100%; position: absolute;">-->
    <!--			<div class="footer__bottom__text" style="position: relative; float: left; width: 50%; text-align: left;margin-left: 41px;">-->
    <!--				<p style="color: #036;font-size:14px;font-family: Helvetica Neue; padding: 5px;" >Pakiza Technovation Limited &copy; 2020. All Rights Reserved.</p>-->
    <!--			</div>-->
    <!--			<div class="footer__bottom__text" style="position: relative; float: right; width: 50% text-align: right; right: 135px;">-->
    <!--				<img style="width: 40px;" src="{{url('frontent/images/logo-2.png')}}">-->
    <!--			</div>-->
    <!--	footer-widget-wrapper grid-4	</div>-->
    <!--	</section>-->
    <!--</footer>-->
    <footer>
        <div class="footer-widget bg-dark text-white pt-5">
            <div class="container">
                <div class="row ">
                    <div class="col-sm my-2">
                        <h4 class="foo-widget-title ">Community</h4>
                        <ul class="foo-list">
                            <li><a href="#" class="btn btn-link text-white">Leadership</a></li>
                            <li><a href="#" class="btn btn-link text-white">Strategy</a></li>
                            <li><a href="#" class="btn btn-link text-white">History</a></li>
                            <li><a href="#" class="btn btn-link text-white">Career</a></li>
                            <li><a href="#" class="btn btn-link text-white">Features</a></li>
                        </ul>
                    </div>
                    <div class="col-sm my-2">
                        <h4 class="foo-widget-title">useful links</h4>
                        <ul class="foo-list">
                            <li><a href="#" class="btn btn-link text-white">About</a></li>
                            <li><a href="#" class="btn btn-link text-white">Service</a></li>
                            <li><a href="#" class="btn btn-link text-white">works</a></li>
                            <li><a href="#" class="btn btn-link text-white">Privacy Policy</a></li>
                            <li><a href="#" class="btn btn-link text-white">Terms and Conditions</a></li>


                        </ul>
                    </div>
                    <div class="col-sm my-2">
                        <h4 class="foo-widget-title">Recent Post</h4>
                        <div class="recent-post">
                            <div class="re-post-single">
                                <div class="re-post-img">
                                    <!--<img src="" alt="thumb">-->
                                </div>
                                <div class="re-post-desc">
                                    <a href="single.html">
                                        <h6 class="text-white">Windows talking</h6>
                                    </a>
                                    <p>By:athuor <span>14/12/2019</span></p>
                                </div>
                            </div>
                            <div class="re-post-single">
                                <a href="single.html" class="btn btn-link text-info">
                                    <div class="re-post-img">
                                        <!--<img src="" alt="thumb">-->
                                    </div>
                                    <div class="re-post-desc">
                                        <a href="single.html">
                                            <h6 class="text-white">perhaps expense</h6>
                                        </a>
                                        <p>By:athuor <span>18/12/2019</span></p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm my-2 contact-us">
                        <h4 class="foo-widget-title">Contact us</h4>
                        <div class="contact-inputs">
                            <form method="post" action="#">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name" id="name"
                                                placeholder="Enter Name" required="">
                                            <span class="alert alert-error"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" id="email"
                                                placeholder="Enter Email" required="">
                                            <span class="alert alert-error"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea class="form-control labelup" id="comments" name="comments"
                                                rows="5" placeholder="Type Message" required=""></textarea>
                                        </div>
                                        <button type="submit" name="submit" class="btn btn-primary">
                                            contact
                                        </button>
                                        <!-- Alert Message -->
                                        <div class="alert-notification">
                                            <div id="message" class="alert-msg"></div>
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
                <div class="social-widget-footer text-center">
                    <a href="#" class="fa fa-facebook facebook"></a>
                    <a href="#" class="fa fa-twitter twitter"></a>
                    <a href="#" class="fa fa-linkedin linkedin"></a>
                    <a href="#" class="fa fa-youtube youtube"></a>
                </div>
                <div class="copyright text-center">
                    <p>All rights reserved by Pakizatvl. Copyright © 2020.</p>
                </div>
            </div>
        </div>

    </footer>
    <div class="footer__top__inner text-center" style="background-color: #036;
    
    left: 0px;
    bottom: 0px;
    color: #fff;
    font-size: 30px;
    width: 50px;
    z-index: 99999;
    position: fixed;">
        <ul>
            <li class="">
                <a href="//{{$WeBeliveIn->fb}}" target="_blank"><i class="zmdi zmdi-facebook"></i></a>
            </li>
            <li class=" ">
                <a href="//{{$WeBeliveIn->tw}}" target="_blank"><i class="zmdi zmdi-twitter"></i></a>
            </li>
            <li class=" ">
                <a href="//{{$WeBeliveIn->gl}}" target="_blank"><i class="zmdi zmdi-youtube"></i></a>
            </li>
            <li class="">
                <a href="//{{$WeBeliveIn->lin}}" target="_blank"><i class="zmdi zmdi-linkedin"></i></a>
            </li>
            <li class="">
                <a href="//{{route('home_query')}}" target="_blank"><i class="zmdi zmdi-email-open"></i></a>
            </li>
        </ul>
    </div>
    <button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect back-to-top shade-on hide-right"
        id="backToTop"><i class="zmdi zmdi-chevron-down"></i>
    </button>
    <script>
        window.jQuery || document.write('<script src="{{asset('frontent/assets/js/vendor/jquery-1.12.4.min.js')}}"><\/script>')
    </script>
    <script src="https://maps.google.com/maps/api/js?key=AIzaSyA9ubLXMECtXi8WQCt-UFZeSNiJbdKhOaM">
    </script>
    <script src="{{asset('frontent/assets/js/plugins.js')}}">
    </script>
    <script src="{{asset('frontent/assets/libs/jwplayer/jwplayer.js')}}">
    </script>
    <script src="{{asset('frontent/assets/js/components.js')}}">
    </script>
    <!-- Mirrored from personx-html.coderpixel.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Oct 2018 12:10:40 GMT -->
    <script type="text/javascript" src="{{asset('frontent/js/jquery.flexslider-min.js')}}"></script>
    <script type="text/javascript" src="{{asset('frontent/js/gallerySlider.js')}}"></script>
    @yield('scripts')
    <script type="text/javascript" charset="utf-8">
        var $ = jQuery.noConflict();
    $(window).load(function() {
    $('.flexslider').flexslider({
          animation: "fade"
    });
	
	$(function() {
		$('.show_menu').click(function(){
				$('.menu').fadeIn();
				$('.show_menu').fadeOut();
				$('.hide_menu').fadeIn();
		});
		$('.hide_menu').click(function(){
				$('.menu').fadeOut();
				$('.show_menu').fadeIn();
				$('.hide_menu').fadeOut();
		});
	});
  });
    </script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>
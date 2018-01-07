<!DOCTYPE html>
<html lang="en-US">
<head>
    <title>Viginia Freelance Property Agency | Rent</title>
		<meta charset="utf-8">
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
		<meta name="format-detection" content="telephone=no" />
		<script src="{{ asset('ui/cdn-cgi/apps/head/1sZCq7BECvDgKDoo_5GdSy-HJEo.js') }}"></script><link rel="shortcut icon" href="favicon.ico"/>
		<link href="{{ asset('ui/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
		<link href="{{ asset('ui/css/jquery-ui.structure.min.css') }}" rel="stylesheet" type="text/css"/>
		<link href="{{ asset('ui/css/jquery-ui.min.css ') }}" rel="stylesheet" type="text/css"/>
		<link rel="stylesheet" href="{{ asset('ui/maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css') }}">
		<link href="{{ asset('ui/css/style.css') }}" rel="stylesheet" type="text/css"/>
		<link rel="icon" type="image/png" href="{{ asset('ux/img/property.png') }}">
		<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('ux/img/property.png') }}">
	</head>
<body data-color="theme-1">
@include('inc.menu')
  <div class="list-wrapper bg-grey-2">
  		<div class="container">
  			<ul class="list-breadcrumb clearfix">
  				<li><a class="color-grey link-dr-blue" href="#"></a> /</li>
  				<li><a class="color-grey link-dr-blue" href="#"></a> /</li>
  				<li><span class="color-dr-blue"></span></li>
  			</ul>
  			<div class="row">
  				<div class="col-xs-12 col-sm-4 col-md-3">
  					<div class="sidebar bg-white clearfix">
              <div class="sidebar-block">
                <center>
                <a href="https://www.facebook.com/Virginia-Freelance-Property-Agent-567082836786068/" target="_blank"><img src="{{ asset('img/virginiaPhoto.jpg') }}" class="img-circle img-no-padding img-responsive" alt="Virginia Freelance Property Agent Facebook"></center></a>

                <center>
              </center>

                <h6 class="sidebar-title color-dark-2" style="font-size:10px;">Virginia Freelance Property Agent </br><i style="font-size:10px; color:green;">(E) virgeckard@hotmail.com</i>
                  <a href="https://www.facebook.com/Virginia-Freelance-Property-Agent-567082836786068/" target="_blank"> <img src="{{ asset('ux/facebook_logos_PNG19748.png') }}" alt="Virginia Freelance Property Agent Facebook" width="25px;"> </a>
                 </h6>
                 </div>
  					</div>
  				</div>
  				<div class="col-xs-12 col-sm-8 col-md-9"></br>
@include('inc.messages')
						<div class="panel panel-info">
					   <div class="panel-heading"><center style="font-size:25px; font-weight:bold;"> {{ $deals->rentTitle }} </center></div>
					@include('inc.itSlider')
					 </div>
    <div class="panel panel-danger">
      <div class="panel-body">@include('inc.viewDetails')</div>

    </div>
  				</div>
  			</div>
  		</div>
  	</div>
		@include('inc.footer')
		<!-- END: LAYOUT/FOOTERS/FOOTER-5 -->


		<div class="c-layout-go2top">
			<i class="icon-arrow-up"></i>
		</div><!-- END: LAYOUT/FOOTERS/GO2TOP -->

			<!-- BEGIN: LAYOUT/BASE/BOTTOM -->
		    <!-- BEGIN: CORE PLUGINS -->
			<!--[if lt IE 9]>
			<script src="../../assets/global/plugins/excanvas.min.js"></script>
			<![endif]-->
			<script src="{{ asset('ux/assets/plugins/jquery.min.js') }}" type="text/javascript" ></script>
			<script src="{{ asset('/ux/assets/plugins/jquery-migrate.min.js') }}" type="text/javascript" ></script>
			<script src="{{ asset('ux/assets/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript" ></script>
			<script src="{{ asset('/ux/assets/plugins/jquery.easing.min.js') }}" type="text/javascript" ></script>
			<script src="{{ asset('ux/assets/plugins/reveal-animate/wow.js ') }}" type="text/javascript" ></script>
			<script src="{{ asset('ux/assets/demos/default/js/scripts/reveal-animate/reveal-animate.js') }}" type="text/javascript" ></script>

			<!-- END: CORE PLUGINS -->

					<!-- BEGIN: LAYOUT PLUGINS -->

					<script src="{{asset('ux/assets/plugins/owl-carousel/owl.carousel.min.js')}}" type="text/javascript"></script>
					<script src="{{asset('ux/assets/plugins/counterup/jquery.counterup.min.js')}}" type="text/javascript"></script>
					<script src="{{asset('ux/assets/plugins/counterup/jquery.waypoints.min.js')}}" type="text/javascript"></script>
					<script src="{{asset('ux/assets/plugins/fancybox/jquery.fancybox.pack.js')}}" type="text/javascript"></script>
					<script src="{{asset('ux/assets/plugins/smooth-scroll/jquery.smooth-scroll.js')}}" type="text/javascript"></script>
					<script src="{{ asset('ux/assets/plugins/slider-for-bootstrap/js/bootstrap-slider.js ') }}" type="text/javascript"></script>
					<script src="{{ asset('ux/assets/plugins/js-cookie/js.cookie.js') }}" type="text/javascript"></script>

						<!-- END: LAYOUT PLUGINS -->

						<!-- Start: Script -->
						<script src="{{ asset('ui/js/jquery-2.1.4.min.js') }}"></script>
						<script src="{{ asset('ui/js/bootstrap.min.js') }}"></script>
						<script src="{{ asset('ui/js/jquery-ui.min.js') }}"></script>
						<script src="{{ asset('ui/js/idangerous.swiper.min.js') }}"></script>
						<script src="{{ asset('ui/js/jquery.viewportchecker.min.js') }}"></script>
						<script src="{{ asset('ui/js/isotope.pkgd.min.js ') }}"></script>
						<script src="{{ asset('ui/js/jquery.mousewheel.min.js') }}"></script>
						<script src="{{ asset('ui/js/all.js') }}"></script>

		        <!-- End: Script -->


			<!-- BEGIN: THEME SCRIPTS -->
			<script src="{{ asset('ux/assets/base/js/components.js') }}" type="text/javascript"></script>
			<script src="{{ asset('ux/assets/base/js/components-shop.js') }}" type="text/javascript"></script>
			<script src="{{ asset('ux/assets/base/js/app.js') }}" type="text/javascript"></script>

			<script>
			$(document).ready(function() {
				App.init(); // init core
			});
			</script>
			<!-- END: THEME SCRIPTS -->

				<!-- form-->
		<script  src="{{ asset('form/js/index.js') }}"></script>
</body>
</html>

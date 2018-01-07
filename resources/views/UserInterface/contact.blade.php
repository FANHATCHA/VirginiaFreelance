<!DOCTYPE html>
<html lang="en-US">
<head>
    <title>Viginia Freelance Property Agency</title>
		<meta charset="utf-8">
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
		<meta name="format-detection" content="telephone=no" />
		<script src="ui/cdn-cgi/apps/head/1sZCq7BECvDgKDoo_5GdSy-HJEo.js"></script><link rel="shortcut icon" href="favicon.ico"/>
		<link href="ui/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
		<link href="ui/css/jquery-ui.structure.min.css" rel="stylesheet" type="text/css"/>
		<link href="ui/css/jquery-ui.min.css" rel="stylesheet" type="text/css"/>
		<link rel="stylesheet" href="../ui/maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
		<link href="ui/css/style.css" rel="stylesheet" type="text/css"/>
		<link rel="icon" type="image/png" href="ux/img/property.png">
		<link rel="apple-touch-icon" sizes="76x76" href="ux/img/property.png">
    <!-- include jQuery file here -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="ui/js/processing.js"></script>
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
							<a href="https://www.facebook.com/Virginia-Freelance-Property-Agent-567082836786068/" target="_blank"><img src="img/virginiaPhoto.jpg" class="img-circle img-no-padding img-responsive" alt="Virginia Freelance Property Agent Facebook"></center></a>

              <center>
						</center>
							<h6 class="sidebar-title color-dark-2" style="font-size:10px;">Virginia Freelance Property Agent </br><i style="font-size:10px; color:green;">(E) virgeckard@hotmail.com</i>
                <a href="https://www.facebook.com/Virginia-Freelance-Property-Agent-567082836786068/" target="_blank"> <img src="ux/facebook_logos_PNG19748.png" alt="Virginia Freelance Property Agent Facebook" width="25px;"> </a>
               </h6>

						</div>

  					</div>
  				</div>
  				<div class="col-xs-12 col-sm-8 col-md-9"></br>
    <div class="panel panel-info">
      <div class="panel-heading"><center style="font-size:25px; font-weight:bold;"> Contact</center></div>
      <div class="panel-body">
        <p style="font-size:17px;">
           <ul>
          <li><b><i class="fa fa-envelope" aria-hidden="true"></i>:  virgeckard@hotmail.com</b></li>
          <li><b><i class="fa fa-phone" aria-hidden="true"></i>: (O) 269 1052 - (C)  5 783 9220</b></li>
          <li><b><i class="fa fa-map-marker" aria-hidden="true"></i>: Coastal Road, Grand Baie, Riviere Du Rempart, Mauritius</b></li>
        </ul>
      </p></br>
      <p>
        <center><div style="font-size:20px; font-weight:bold;"> Send us a message</div></center></br>
        @include('inc.messages')
     <center>
       {!! Form::open(['action' => 'SaveMsgCtrl@store', 'method' => 'POST','onsubmit'=> 'ShowLoading()']) !!}
       {{ csrf_field() }}
       <style media="screen">
       input[type="email"],input[type="text"],input[type="textarea"] {
         padding:10px;
         font-weight: bold;
         border: 1px solid #ff6600;
          border-radius: 5px;
         background: white;
       }
       .alert-success{
         background-color: rgb(36,187,82);
       }
       .alert-danger{
         background-color: red;
       }
       </style>
     </style>

     <div class="form-group">
      <input class="form-control input-lg" id="inputsm" type="email" placeholder="Email" name="email" required>
     </div>
    <div class="form-group">

      <input class="form-control input-lg" id="inputsm" type="text" placeholder="Phone N°" name="phone" required>
    </div>
    <div class="form-group">
      <input class="form-control input-lg" id="inputsm" type="text" placeholder="Full Name" name="fullName" required>
    </div>

 <div class="form-group">
    <textarea name="msg" class="form-control" id="exampleFormControlTextarea1" rows="8" placeholder="Ask for Information"></textarea>
 </div>

       {{Form::submit('Send', ['class'=>'c-button',' style'=>'background:#ff6600; color:white;'])}}
        {!! Form::close() !!}
     </center>
      </p>


      </div>
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
			<script src="ux/assets/plugins/jquery.min.js" type="text/javascript" ></script>
			<script src="ux/assets/plugins/jquery-migrate.min.js" type="text/javascript" ></script>
			<script src="ux/assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript" ></script>
			<script src="ux/assets/plugins/jquery.easing.min.js" type="text/javascript" ></script>
			<script src="ux/assets/plugins/reveal-animate/wow.js" type="text/javascript" ></script>
			<script src="ux/assets/demos/default/js/scripts/reveal-animate/reveal-animate.js" type="text/javascript" ></script>

			<!-- END: CORE PLUGINS -->

					<!-- BEGIN: LAYOUT PLUGINS -->

					<script src="ux/assets/plugins/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>
					<script src="ux/assets/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
					<script src="ux/assets/plugins/counterup/jquery.waypoints.min.js" type="text/javascript"></script>
					<script src="ux/assets/plugins/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script>
					<script src="ux/assets/plugins/smooth-scroll/jquery.smooth-scroll.js" type="text/javascript"></script>
					<script src="ux/assets/plugins/slider-for-bootstrap/js/bootstrap-slider.js" type="text/javascript"></script>
					<script src="ux/assets/plugins/js-cookie/js.cookie.js" type="text/javascript"></script>
					<script src="http://maps.googleapis.com/maps/api/js?sensor=false&amp;language=en"></script>
						<!-- END: LAYOUT PLUGINS -->

						<!-- Start: Script -->
						<script src="ui/js/jquery-2.1.4.min.js"></script>
						<script src="ui/js/bootstrap.min.js"></script>
						<script src="ui/js/jquery-ui.min.js"></script>
						<script src="ui/js/idangerous.swiper.min.js"></script>
						<script src="ui/js/jquery.viewportchecker.min.js"></script>
						<script src="ui/js/isotope.pkgd.min.js"></script>
						<script src="ui/js/jquery.mousewheel.min.js"></script>
						<script src="ui/js/all.js"></script>

		        <!-- End: Script -->


			<!-- BEGIN: THEME SCRIPTS -->
			<script src="ux/assets/base/js/components.js" type="text/javascript"></script>
			<script src="ux/assets/base/js/components-shop.js" type="text/javascript"></script>
			<script src="ux/assets/base/js/app.js" type="text/javascript"></script>

			<script>
			$(document).ready(function() {
				App.init(); // init core
			});
			</script>
			<!-- END: THEME SCRIPTS -->

				<!-- form-->
		<script  src="../form/js/index.js"></script>
</body>
</html>

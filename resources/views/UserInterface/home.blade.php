<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="utf-8">
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
		<meta name="format-detection" content="telephone=no" />
		<link rel="icon" type="image/png" href="ui/img/theme-1/logo_nv.png">
		<link rel="apple-touch-icon" sizes="76x76" href="ui/img/theme-1/logo_nv.png">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<script src="ui/cdn-cgi/apps/head/1sZCq7BECvDgKDoo_5GdSy-HJEo.js"></script>
		<link href="ui/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
		<link href="ui/css/jquery-ui.structure.min.css" rel="stylesheet" type="text/css"/>
		<link href="ui/css/jquery-ui.min.css" rel="stylesheet" type="text/css"/>
		<link rel="stylesheet" href="ui/maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
		<link href="ui/css/style.css" rel="stylesheet" type="text/css"/>

		<title>Nouvini local agency: Travel with a local expert</title>
	</head>

<body data-color="theme-1">

	<header class="color-1 hovered menu-3">


   <div class="container">

   	  <div class="row">
   	  	 <div class="col-md-12" style="font-size:15px; font-weight:bold;">
  	  	    <div class="nav">
   	  	    <a href="/" class="logo">
   	  	    	<img src="ui/img/theme-1/logo_nv.png" alt="Nouvini'logo" >
   	  	    </a>
   	  	    <div class="nav-menu-icon">
		      <a href="#"><i></i></a>
		    </div>
   	  	 	<nav class="menu">
			  	<ul>

					<li class="type-1" style="font-size:16px;"><i class="fa fa-map-marker" aria-hidden="true" style="color:black;"></i><a href="#"><b> Destinations</b><span class="fa fa-angle-down"></span></a>
						<ul class="dropmenu">
							@if(count($destinations) > 0)
           @foreach ($destinations as $key => $destination)
							<li><a href="/{{ $destination->slug}}"><b style="font-size:14px;">{{ str_limit($destination->destinationName, 20) }}</b> <img src="../img/destination_icons/{{ $destination->destImgIcon }}" alt="{{$destination->destinationName}}"> </a></li>
						@endforeach
						 @else
						<li>No destinations found!</li>
					 @endif

						</ul>
					</li>
					<li class="type-1" style="font-size:16px;"><i class="fa fa-comments" aria-hidden="true" style="color:black;"></i><a href="#"><b>Clients Feedback</b><span class="fa fa-angle-down"></span></a>

					</li>
					<li class="type-1" style="font-size:16px;"><i class="fa fa-cogs" aria-hidden="true" style="color:black;"></i><a href="#"><b>Concepts</b><span class="fa fa-angle-down"></span></a>

					</li>
					<li class="type-1" style="font-size:16px;"><i class="fa fa-laptop" aria-hidden="true" style="color:black;"></i><a href="#"><b>Blog</b><span class="fa fa-angle-down"></span></a>

					</li>
					<li class="type-1" style="font-size:16px;"><i class="fa fa-phone" aria-hidden="true" style="color:black;"></i><a href="#"><b style="color:#ff6600;"> +33 (0) 184 214 212</b><span class="fa fa-angle-down"></span></a>

					</li>
					<li class="type-1" style="font-size:16px;">
						<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
 <i class="fa fa-plane" aria-hidden="true" style="color:white;"></i> ASK FOR A QUOTE
</button>



					</li>
			  	</ul>
		     </nav>
		   </div>
   	  	 </div>
   	  </div>
   </div>
  </header>


     <div class="clip">
		<div class="bg bg-bg-chrome" style="background:rgb(250,250,250)">
		</div>
	 </div>
	 <!-- GAL-ITEM-->
	 <div class="main-wraper">
	 	<div class="container">
	 		<div class="row">
	 			<div class="col-xs-12 col-sm-8 col-sm-offset-2">
	 				<div class="second-title">
	 					<h4 class="subtitle color-dark-2-light">Create Your Tailor-Made Trip</h4>
						<h2>With a local Expert</h2>
	 					<p class="color-grey">
	 						 @include('inc.searchBar')
	 					</p>
	 				</div>
	 			</div>
	 		</div>
	 		<div class="isotope-container row row10">
	 			<div class="grid-sizer col-mob-12 col-xs-6 col-sm-3"></div>
	 			<div class="item gal-item col10 col-mob-12 col-xs-6 col-sm-6">
	 				<a class="black-hover" href="detail.html">
	 					<img class="img-full img-responsive" src="ui/img/home_7/gal_1.jpg" alt="">
	 					<div class="tour-layer delay-1"></div>
	 					<div class="vertical-align">
	 						<div class="date color-white">July <strong>19th</strong> to July <strong>26th</strong></div>
	 						<h4 class="color-white"><b>tours in monaco</b></h4>
	 					</div>
	 				</a>
	 			</div>
	 			<div class="item gal-item col10 col-mob-12 col-xs-6 col-sm-3">
	 				<a class="black-hover" href="detail.html">
	 					<img class="img-full img-responsive" src="ui/img/home_7/gal_2.jpg" alt="">
	 					<div class="tour-layer delay-1"></div>
	 					<div class="vertical-align">
	 						<div class="date color-white">July <strong>19th</strong> to July <strong>26th</strong></div>
	 						<h4 class="color-white"><b>tours in monaco</b></h4>
	 					</div>
	 				</a>
	 			</div>
	 			<div class="item gal-item col10 col-mob-12 col-xs-6 col-sm-3">
	 				<a class="black-hover" href="detail.html">
	 					<img class="img-full img-responsive" src="ui/img/home_7/gal_3.jpg" alt="">
	 					<div class="tour-layer delay-1"></div>
	 					<div class="vertical-align">
	 						<div class="date color-white">July <strong>19th</strong> to July <strong>26th</strong></div>
	 						<h4 class="color-white"><b>tours in monaco</b></h4>
	 					</div>
	 				</a>
	 			</div>
	 			<div class="item gal-item col10 col-mob-12 col-xs-6 col-sm-3">
	 				<a class="black-hover" href="detail.html">
	 					<img class="img-full img-responsive" src="ui/img/home_7/gal_4.jpg" alt="">
	 					<div class="tour-layer delay-1"></div>
	 					<div class="vertical-align">
	 						<div class="date color-white">July <strong>19th</strong> to July <strong>26th</strong></div>
	 						<h4 class="color-white"><b>tours in monaco</b></h4>
	 					</div>
	 				</a>
	 			</div>
	 			<div class="item gal-item col10 col-mob-12 col-xs-6 col-sm-3">
	 				<a class="black-hover" href="detail.html">
	 					<img class="img-full img-responsive" src="ui/img/home_7/gal_5.jpg" alt="">
	 					<div class="tour-layer delay-1"></div>
	 					<div class="vertical-align">
	 						<div class="date color-white">July <strong>19th</strong> to July <strong>26th</strong></div>
	 						<h4 class="color-white"><b>tours in monaco</b></h4>
	 					</div>
	 				</a>
	 			</div>
	 			<div class="item gal-item col10 col-mob-12 col-xs-6 col-sm-6">
	 				<a class="black-hover" href="detail.html">
	 					<img class="img-full img-responsive" src="ui/img/home_7/gal_6.jpg" alt="">
	 					<div class="tour-layer delay-1"></div>
	 					<div class="vertical-align">
	 						<div class="date color-white">July <strong>19th</strong> to July <strong>26th</strong></div>
	 						<h4 class="color-white"><b>tours in monaco</b></h4>
	 					</div>
	 				</a>
	 			</div>
	 			<div class="item gal-item col10 col-mob-12 col-xs-6 col-sm-6">
	 				<a class="black-hover" href="detail.html">
	 					<img class="img-full img-responsive" src="ui/img/home_7/gal_7.jpg" alt="">
	 					<div class="tour-layer delay-1"></div>
	 					<div class="vertical-align">
	 						<div class="date color-white">July <strong>19th</strong> to July <strong>26th</strong></div>
	 						<h4 class="color-white"><b>tours in monaco</b></h4>
	 					</div>
	 				</a>
	 			</div>
	 			<div class="item gal-item col10 col-mob-12 col-xs-6 col-sm-3">
	 				<a class="black-hover" href="detail.html">
	 					<img class="img-full img-responsive" src="ui/img/home_7/gal_8.jpg" alt="">
	 					<div class="tour-layer delay-1"></div>
	 					<div class="vertical-align">
	 						<div class="date color-white">July <strong>19th</strong> to July <strong>26th</strong></div>
	 						<h4 class="color-white"><b>tours in monaco</b></h4>
	 					</div>
	 				</a>
	 			</div>
	 			<div class="item gal-item col10 col-mob-12 col-xs-6 col-sm-3">
	 				<a class="black-hover" href="detail.html">
	 					<img class="img-full img-responsive" src="ui/img/home_7/gal_9.jpg" alt="">
	 					<div class="tour-layer delay-1"></div>
	 					<div class="vertical-align">
	 						<div class="date color-white">July <strong>19th</strong> to July <strong>26th</strong></div>
	 						<h4 class="color-white"><b>tours in monaco</b></h4>
	 					</div>
	 				</a>
	 			</div>
	 		</div>
	 	</div>
	 </div>


 <div class="main-wraper padd-90">
	 <div class="container">
		 <div class="row">

				 <div class="col-xs-12 col-sm-8 col-sm-offset-2">
 	 				<div class="second-title">
 	 					<h4 class="subtitle color-dark-2-light">Tailor Made Trips</h4>
 	 					<h2>Hot Deals</h2>
 	 					<p class="color-grey">Curabitur nunc erat, consequat in erat ut, congue bibendum nulla. Suspendisse id tor.</p>
 	 				</div>
 	 			</div>
			 </div>
		 <div class="row isotope-container">
			 <div class="grid-sizer col-xs-12 col-sm-3"></div>
				 <div class="item col-xs-12 col-md-6">
				 <div class="row">
							 <div class="top-baner arrows">
						 <div class="swiper-container offers-slider" data-autoplay="0" data-loop="1" data-speed="500" data-slides-per-view="1">
								 <div class="swiper-wrapper">
								 <div class="swiper-slide" data-val="0">
									 <div class="tour-block tour-block-s-6 radius-5 underline-block hover-blue">
											 <div class="tour-layer delay-1"></div>
										 <img class="center-image"  src="ui/img/home_4/propose_1.jpg" alt="">
										 <div class="tour-caption">
											 <div class="vertical-align">
												 <h4>best offer</h4>
												 <h3 class="underline hover-it">all best cruises</h3>
												 <p class="color-blue">-15% off</p>
												 <a href="#" class="c-button b-50 bg-white"><span>view more</span></a>
											 </div>
										 </div>
									 </div>
								 </div>
							 </div>
								 <div class="pagination  poin-style-1 pagination-hidden"></div>
						 </div>
									 <div class="swiper-arrow-left offers-arrow color-2"><span class="fa fa-angle-left"></span></div>
							 <div class="swiper-arrow-right offers-arrow color-2"><span class="fa fa-angle-right"></span></div>
					 </div>
				 </div>
				 </div>
			 <div class="item col-xs-12 col-md-6">
				 <div class="tour-block tour-block-s-7 radius-5 underline-block hover-blue">
						 <div class="tour-layer delay-1"></div>
						 <img class="center-image" src="ui/img/home_4/propose_2.jpg" alt="">
					 <div class="tour-caption">
						 <div class="vertical-align">
							 <h4>sale <span class="color-blue">-20%</span></h4>
							 <h3 class="underline hover-it">bora bora for HONEYMOON</h3>
							 <p class="color-white-light">Cursus libero purus ac cursus ut sed.Nunc cursus libero purus ac<br> congue arcu cursus ut sed vitae pulvinar.</p>
						 </div>
					 </div>
					 </div>
				 </div>
			 <div class="item col-xs-12 col-md-6">
				 <div class="tour-block tour-block-s-8 radius-5 hover-blue">
						 <div class="tour-layer delay-1"></div>
						 <img class="center-image" src="ui/img/home_4/propose_2.jpg" alt="">
					 <div class="tour-caption">
						 <div class="vertical-align">
							 <div class="tb_category">hot sale</div>
							 <h3 class="hover-it">Disney Fantasy cruise</h3>
							 <h4>only from <span class="color-blue">$860</span></h4>
						 </div>
					 </div>
					 </div>
				 </div>
		 </div>
	 </div>
 </div>


 <div class="main-wraper padd-90">
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="second-title">
				<h2>Clients Feedback</h2>
					<p class="color-grey">Curabitur nunc erat, consequat in erat ut, congue bibendum nulla.</p>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="top-baner arrows">
	<div class="swiper-container offers-slider" data-autoplay="5000" data-loop="1" data-speed="500" data-slides-per-view="responsive" data-mob-slides="1" data-xs-slides="2" data-sm-slides="2" data-md-slides="3" data-lg-slides="3" data-add-slides="3">
		<div class="swiper-wrapper">
		<div class="swiper-slide" data-val="0">
			 <div class="offers-block radius-mask">
			 <div class="clip">
				<div class="bg bg-bg-chrome act" style="background-image:url(ui/img/home_1/offers_slide_1.jpg)">
				</div>
			 </div>
			 <div class="tour-layer delay-1"></div>
			 <div class="vertical-top">
				 <div class="rate">
				<span class="fa fa-star color-yellow"></span>
				<span class="fa fa-star color-yellow"></span>
				<span class="fa fa-star color-yellow"></span>
				<span class="fa fa-star color-yellow"></span>
				<span class="fa fa-star color-yellow"></span>
				 </div>
				<h3>greece</h3>
			 </div>
			 <div class="vertical-bottom">
				 <ul class="offers-info">
					<li><b>35</b>tours</li>
					<li><b>24</b>cities</li>
					<li><b>90</b>hotels</li>
				 </ul>
				<p>Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massa idporta nequetiam.</p>
				<a href="#" class="c-button bg-aqua hv-aqua-o b-40"><span>view more</span></a>
			 </div>
			 </div>
		</div>
		<div class="swiper-slide" data-val="1">
			 <div class="offers-block radius-mask">
			 <div class="clip">
				<div class="bg bg-bg-chrome act" style="background-image:url(ui/img/home_1/offers_slide_2.jpg)">
				</div>
			 </div>
			 <div class="tour-layer delay-1"></div>
			 <div class="vertical-top">
				 <div class="rate">
				<span class="fa fa-star color-yellow"></span>
				<span class="fa fa-star color-yellow"></span>
				<span class="fa fa-star color-yellow"></span>
				<span class="fa fa-star color-yellow"></span>
				<span class="fa fa-star color-yellow"></span>
				 </div>
				<h3>france</h3>
			 </div>
			 <div class="vertical-bottom">
				 <ul class="offers-info">
					<li><b>58</b>tours</li>
					<li><b>49</b>cities</li>
					<li><b>70</b>hotels</li>
				 </ul>
				<p>Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massa idporta nequetiam.</p>
				<a href="#" class="c-button bg-aqua hv-aqua-o b-40"><span>view more</span></a>
			 </div>
			 </div>
		</div>
		<div class="swiper-slide" data-val="2">
			 <div class="offers-block radius-mask">
			 <div class="clip">
				<div class="bg bg-bg-chrome act" style="background-image:url(ui/img/home_1/offers_slide_3.jpg)">
				</div>
			 </div>
			 <div class="tour-layer delay-1"></div>
			 <div class="vertical-top">
				 <div class="rate">
				<span class="fa fa-star color-yellow"></span>
				<span class="fa fa-star color-yellow"></span>
				<span class="fa fa-star color-yellow"></span>
				<span class="fa fa-star color-yellow"></span>
				<span class="fa fa-star color-yellow"></span>
				 </div>
				<h3>spain</h3>
			 </div>
			 <div class="vertical-bottom">
				 <ul class="offers-info">
					<li><b>88</b>tours</li>
					<li><b>10</b>cities</li>
					<li><b>193</b>hotels</li>
				 </ul>
				<p>Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massa idporta nequetiam.</p>
				<a href="#" class="c-button bg-aqua hv-aqua-o b-40"><span>view more</span></a>
			 </div>
			 </div>
		</div>
		</div>
		<div class="pagination  poin-style-1 pagination-hidden"></div>
	</div>
					<div class="swiper-arrow-left offers-arrow"><span class="fa fa-angle-left"></span></div>
		<div class="swiper-arrow-right offers-arrow"><span class="fa fa-angle-right"></span></div>
			</div>
	</div>
</div>
</div>
<!-- GAL-ITEM-->
<div class="main-wraper">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-8 col-sm-offset-2">
				<div class="second-title">
					<h4 class="subtitle color-dark-2-light">our gallery</h4>
					<h2>why we are the best</h2>
					<p class="color-grey">Curabitur nunc erat, consequat in erat ut, congue bibendum nulla. Suspendisse id tor.</p>
				</div>
			</div>
		</div>
		<div class="isotope-container row row10">
			<div class="grid-sizer col-mob-12 col-xs-6 col-sm-3"></div>
			<div class="item gal-item col10 col-mob-12 col-xs-6 col-sm-6">
				<a class="black-hover" href="detail.html">
					<img class="img-full img-responsive" src="ui/img/home_7/gal_1.jpg" alt="">
					<div class="tour-layer delay-1"></div>
					<div class="vertical-align">
						<div class="date color-white">July <strong>19th</strong> to July <strong>26th</strong></div>
						<h4 class="color-white"><b>tours in monaco</b></h4>
					</div>
				</a>
			</div>
			<div class="item gal-item col10 col-mob-12 col-xs-6 col-sm-3">
				<a class="black-hover" href="detail.html">
					<img class="img-full img-responsive" src="ui/img/home_7/gal_2.jpg" alt="">
					<div class="tour-layer delay-1"></div>
					<div class="vertical-align">
						<div class="date color-white">July <strong>19th</strong> to July <strong>26th</strong></div>
						<h4 class="color-white"><b>tours in monaco</b></h4>
					</div>
				</a>
			</div>
			<div class="item gal-item col10 col-mob-12 col-xs-6 col-sm-3">
				<a class="black-hover" href="detail.html">
					<img class="img-full img-responsive" src="ui/img/home_7/gal_3.jpg" alt="">
					<div class="tour-layer delay-1"></div>
					<div class="vertical-align">
						<div class="date color-white">July <strong>19th</strong> to July <strong>26th</strong></div>
						<h4 class="color-white"><b>tours in monaco</b></h4>
					</div>
				</a>
			</div>
			<div class="item gal-item col10 col-mob-12 col-xs-6 col-sm-3">
				<a class="black-hover" href="detail.html">
					<img class="img-full img-responsive" src="ui/img/home_7/gal_4.jpg" alt="">
					<div class="tour-layer delay-1"></div>
					<div class="vertical-align">
						<div class="date color-white">July <strong>19th</strong> to July <strong>26th</strong></div>
						<h4 class="color-white"><b>tours in monaco</b></h4>
					</div>
				</a>
			</div>
			<div class="item gal-item col10 col-mob-12 col-xs-6 col-sm-3">
				<a class="black-hover" href="detail.html">
					<img class="img-full img-responsive" src="ui/img/home_7/gal_5.jpg" alt="">
					<div class="tour-layer delay-1"></div>
					<div class="vertical-align">
						<div class="date color-white">July <strong>19th</strong> to July <strong>26th</strong></div>
						<h4 class="color-white"><b>tours in monaco</b></h4>
					</div>
				</a>
			</div>
			<div class="item gal-item col10 col-mob-12 col-xs-6 col-sm-6">
				<a class="black-hover" href="detail.html">
					<img class="img-full img-responsive" src="ui/img/home_7/gal_6.jpg" alt="">
					<div class="tour-layer delay-1"></div>
					<div class="vertical-align">
						<div class="date color-white">July <strong>19th</strong> to July <strong>26th</strong></div>
						<h4 class="color-white"><b>tours in monaco</b></h4>
					</div>
				</a>
			</div>
			<div class="item gal-item col10 col-mob-12 col-xs-6 col-sm-6">
				<a class="black-hover" href="detail.html">
					<img class="img-full img-responsive" src="ui/img/home_7/gal_7.jpg" alt="">
					<div class="tour-layer delay-1"></div>
					<div class="vertical-align">
						<div class="date color-white">July <strong>19th</strong> to July <strong>26th</strong></div>
						<h4 class="color-white"><b>tours in monaco</b></h4>
					</div>
				</a>
			</div>
			<div class="item gal-item col10 col-mob-12 col-xs-6 col-sm-3">
				<a class="black-hover" href="detail.html">
					<img class="img-full img-responsive" src="ui/img/home_7/gal_8.jpg" alt="">
					<div class="tour-layer delay-1"></div>
					<div class="vertical-align">
						<div class="date color-white">July <strong>19th</strong> to July <strong>26th</strong></div>
						<h4 class="color-white"><b>tours in monaco</b></h4>
					</div>
				</a>
			</div>
			<div class="item gal-item col10 col-mob-12 col-xs-6 col-sm-3">
				<a class="black-hover" href="detail.html">
					<img class="img-full img-responsive" src="ui/img/home_7/gal_9.jpg" alt="">
					<div class="tour-layer delay-1"></div>
					<div class="vertical-align">
						<div class="date color-white">July <strong>19th</strong> to July <strong>26th</strong></div>
						<h4 class="color-white"><b>tours in monaco</b></h4>
					</div>
				</a>
			</div>
		</div>
	</div>
</div>

</br>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
  <footer class="bg-white">
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-3 col-md-3 col-sm-6 no-padding">
    				<div class="footer-block">
    					<img src="ui/img/theme-1/logo_dark.png" alt="" class="logo-footer">
    					  <div class="instagram-wiget">
    					  	 <a href="#"><img src="ui/img/home_1/inst_img_1.jpg" alt=""></a>
    					  	 <a href="#"><img src="ui/img/home_1/inst_img_2.jpg" alt=""></a>
    					  	 <a href="#"><img src="ui/img/home_1/inst_img_3.jpg" alt=""></a>
							 <a href="#"><img src="ui/img/home_1/inst_img_4.jpg" alt=""></a>
   					         <a href="#"><img src="ui/img/home_1/inst_img_5.jpg" alt=""></a>
   					         <a href="#"><img src="ui/img/home_1/inst_img_6.jpg" alt=""></a>
   					         <a href="#"><img src="ui/img/home_1/inst_img_7.jpg" alt=""></a>
   					         <a href="#"><img src="ui/img/home_1/inst_img_8.jpg" alt=""></a>
							 <a href="#"><img src="ui/img/home_1/inst_img_9.jpg" alt=""></a>
   					         <a href="#"><img src="ui/img/home_1/inst_img_10.jpg" alt=""></a>
    					  </div>
    				</div>
    			</div>
    			<div class="col-lg-2 col-md-2 col-sm-3 col-sm-3 no-padding">
    			   <div class="footer-block no-separ">
    			      <h6>best tours</h6>
    			        <ul>
    			        	<li><a href="#">Camping holidays</a></li>
    			        	<li><a href="#">Self-catering holidays</a></li>
    			        	<li><a href="#">Safaris and wildlife</a></li>
    			        	<li><a href="#">Activity and adventure</a></li>
    			        	<li><a href="#">Food and wine holidays</a></li>
    			        </ul>
				   </div>
    			</div>
    			<div class="col-lg-2 col-md-2 col-sm-3 col-sm-3 no-padding">
    			   <div class="footer-block">
    			      <h6>popular countries</h6>
   			           <div class="row">
   			           	  <div class="col-md-6">
   			           	  	<ul>
								<li><a href="#">France</a></li>
								<li><a href="#">Spain</a></li>
								<li><a href="#">Ukraine</a></li>
								<li><a href="#">Turkey</a></li>
								<li><a href="#">India</a></li>
							</ul>
   			           	  </div>
   			           	  <div class="col-md-6">
   			           	  	<ul>
								<li><a href="#">France</a></li>
								<li><a href="#">Spain</a></li>
								<li><a href="#">Ukraine</a></li>
								<li><a href="#">Turkey</a></li>
								<li><a href="#">India</a></li>
							</ul>
   			           	  </div>
   			           </div>
				   </div>
    			</div>
    			<div class="col-lg-2 col-md-2 col-sm-6 no-padding">
    			   <div class="footer-block">
                     <h6>follow us:</h6>
    			      <ul class="footer-folow">
    			      	<li class="color-fb"><a href="#"><i class="fa fa-facebook"></i>facebook<span class="color-fb-2">12</span></a></li>
    			      	<li class="color-tw"><a href="#"><i class="fa fa-twitter"></i>twitter<span class="color-tw-2">27</span></a></li>
    			      	<li class="color-gg"><a href="#"><i class="fa fa-google-plus"></i>google +<span class="color-gg-2">51</span></a></li>
    			      	<li class="color-pin"><a href="#"><i class="fa fa-pinterest"></i>pinterest<span class="color-pin-2">70</span></a></li>
    			      </ul>
				   </div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 no-padding">
                   <div class="footer-block no-separ">
                     <h6>Subscribe</h6>
                       <form action="#" class="footer-form">
                      	  <div class="form-input">
                       	    <input type="email" placeholder="Enter your email" required>
                       	     <span class="fa fa-envelope-o"></span>
                       	  </div>
                       	  <input type="submit" value="submit" class="bg-orange">
                       </form>
				   </div>
				</div>
    		</div>
    	</div>
    	<div class="footer-link bg-white">
    	  <div class="container">
    	  	<div class="row">
    	  		<div class="col-md-12">
    	  			<ul>
						<li><a href="#">Privacy Policy </a></li>
						<li><a href="#">About Us</a></li>
						<li><a href="#">Support </a></li>
						<li><a href="#">FAQ</a></li>
						<li><a href="#">Blog</a></li>
						<li><a href="#"> Forum</a></li>
					</ul>
					<div class="copyright">
						<span>&copy; 2015 All rights reserved. LET'STRAVEL</span>
					</div>
    	  		</div>
    	  	</div>
    	  </div>
    	</div>
    </footer>


<script src="ui/js/jquery-2.1.4.min.js"></script>
<script src="ui/js/bootstrap.min.js"></script>
<script src="ui/js/jquery-ui.min.js"></script>
<script src="ui/js/idangerous.swiper.min.js"></script>
<script src="ui/js/jquery.viewportchecker.min.js"></script>
<script src="ui/js/isotope.pkgd.min.js"></script>
<script src="ui/js/jquery.mousewheel.min.js"></script>
<script src="ui/js/all.js"></script>
<script type="text/javascript">
$('#myModal').on('shown.bs.modal', function () {
$('#myInput').focus()
})
</script>
</body>
</html>

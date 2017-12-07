<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="ui_assets/img/favicon-nouvini.png">
    <link rel="apple-touch-icon" sizes="76x76" href="ui_assets/img/favicon-nouvini.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Nouvini local agency: Travel with a local expert</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- Bootstrap core CSS     -->
	<link href="ui_assets/css/bootstrap.min.css" rel="stylesheet" />
	<link href="ui_assets/css/paper-kit.css?v=2.1.0" rel="stylesheet"/>

    <!--     Fonts and icons     -->
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,300,700' rel='stylesheet' type='text/css'>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="ui_assets/css/nucleo-icons.css" rel="stylesheet" />

</head>

<body>


      <!-- Navigation -->
      <nav class="navbar navbar-expand-lg navbar navbar-default fixed-top">
        <div class="container">

          <div class="navbar-translate">
               <a class="navbar-brand" href="/">Nouvini</a>
            <button class="navbar-toggler navbar-toggler-right navbar-burger" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-bar"></span>
              <span class="navbar-toggler-bar"></span>
              <span class="navbar-toggler-bar"></span>
            </button>
          </div>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <div class="collapse navbar-collapse" id="navbarToggler">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="Follow us on Twitter" data-placement="bottom" href="{{ $twitter->url }}" target="_blank">
                            <i class="fa fa-twitter" style="color:#51bcda;"></i>
                            <p class="d-lg-none">Twitter</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="Like us on Facebook" data-placement="bottom" href="{{ $facebook->url }}" target="_blank">
                            <i class="fa fa-facebook-square" style="color:#3b5998;"></i>
                            <p class="d-lg-none">Facebook</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="Follow us on Instagram" data-placement="bottom" href="{{ $Instagram->url }}" target="_blank">
                            <i class="fa fa-instagram" style="color:#8a3ab9;"></i>
                            <p class="d-lg-none">Instagram</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="Star on Google+" data-placement="bottom" href="{{ $googlePlus->url }}" target="_blank">
                            <i class="fa fa-google-plus" style="color:#f5593d;"></i>
                            <p class="d-lg-none">Google+</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="documentation/tutorial-components.html" target="_blank" class="nav-link" style="color:#6bd098;"><i class="fa fa-comments"  style="color:#6bd098;"></i>Our clients' Feedback</a>
                    </li>
                    <li class="nav-item">
                        <a href="documentation/tutorial-components.html" target="_blank" class="nav-link" style="color:#66615B;"><i class="fa fa-gift"  style="color:#66615B;"></i>Concept</a>
                    </li>
                    <li class="nav-item">
            <a href="https://quotations.nouvini.com/getQuotation" class="btn btn btn-sm btn-danger btn-round"><i class="fa fa-plane" aria-hidden="true"></i> Ask for a quote</a>
               </li>


               <li class="nav-item dropdown" >

     <a href="#" class="btn btn-secondary btn btn-sm dropdown-toggle" data-toggle="dropdown">
      <i class="fa fa-map-marker" aria-hidden="true"></i> Destinations
         <b class="caret"></b>
     </a>
     <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">

         <li class="dropdown-header">Choose a destination</li>
         <div class="dropdown-divider"></div>
          @if(count($destinations) > 0)
           @foreach ($destinations as $key => $destination)
             <a class="dropdown-item" href="ui-destination/{{ $destination->slug}}">{{ str_limit($destination->destinationName, 20) }}</a>
             <div class="dropdown-divider"></div>
           @endforeach
         @else
         <a class="dropdown-item" href="#pk">No destinations found!</a>
         <div class="dropdown-divider"></div>
       @endif
       </ul>
     </li>
            </div>
          </div>
        </div>
      </nav>

    <div class="wrapper">

      <div class="main">
            <div class="section">

            @include('inc.searchBar')

              <div class="container text-center">

                <div class="row">
                  <div class="col-md-8 ml-auto mr-auto text-center">

                    <p class="description">
                  <!--reserved-->
                  <!--reserved-->

                    </p>
                    <div class="tim-title">
                      <h3> <i class="fa fa-thumbs-up" aria-hidden="true"></i> Trending destinations of the week</h3>
                      <span class="label label-default">Cuba</span>
                      <button type="button" class="btn label btn-danger btn-round" a data-container="body" data-toggle="popover" data-placement="top" data-title="Popover on top"
                      data-content="Here will be some very useful information about this popove <img src='/img/slider_images/'> ">on top</button>
                           <span class="label label-primary" ata-container="body" data-toggle="popover" data-placement="top" data-title="Popover on top" data-content="Here will be some very useful information about this popover.">
                             Costa
                           </span>
                           <span class="label label-info">Australia</span>
                           <span class="label label-success">Tanzania</span>
                           <span class="label label-warning">Vietnam</span>
                           <span class="label label-danger">New zeland</span>
                          <br/>

                        </div>
                        <br/>
          <div class="carousel-reviews broun-block">
          <div class="container">
          <div id="carousel-reviews" class="carousel slide testi" data-ride="carousel">
          <div class="carousel-inner">
          <div class="item active">

            </div>
                    <div class="card page-carousel">

                      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                          <ol class="carousel-indicators">
                              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                              <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                          </ol>
                                           <div class="carousel-inner" role="listbox">
                                        @if(count($sliderOne) > 0)
                                        @foreach ($sliderOne as $key => $one)
                                           <div class="carousel-item active">
                                               <img class="d-block img-fluid" src="/img/slider_images/{{$one->slider_image }}" alt="{{$one->description}}">
                                            <div class="carousel-caption d-none d-md-block">
                                                   <p>{!! $one->description !!}</p>
                                               </div>
                                           </div>
                                             @endforeach
                                           @else
                                              <p><div class="alert alert-danger" role="alert">
                                            <strong>No slider 1 image found!</strong>
                                            </div></p>
                                            @endif
                                            @if(count($sliderTwo) > 0)
                                            @foreach ($sliderTwo as $key => $two)
                                           <div class="carousel-item">
                                               <img class="d-block img-fluid" src="/img/slider_images/{{$two->slider_image }}" alt="{{$two->description}}">
                                            <div class="carousel-caption d-none d-md-block">
                                                <p>{!! $two->description !!}</p>
                                            </div>
                                           </div>
                                         @endforeach
                                       @else
                                          <p><div class="alert alert-danger" role="alert">
                                        <strong>No slider 2 image found!</strong>
                                        </div></p>
                                        @endif
                                        @if(count($sliderThree) > 0)
                                        @foreach ($sliderThree as $key => $three)
                                           <div class="carousel-item">
                                               <img class="d-block img-fluid" src="/img/slider_images/{{$three->slider_image }}" alt="{{$three->description}}">
                                            <div class="carousel-caption d-none d-md-block">
                                                <p>{!! $three->description !!}</p>
                                            </div>
                                           </div>
                                         @endforeach
                                       @else
                                          <p><div class="alert alert-danger" role="alert">
                                        <strong>No slider 3 image found!</strong>
                                        </div></p>
                                        @endif
                                        @if(count($sliderFour) > 0)
                                        @foreach ($sliderFour as $key => $four)
                                           <div class="carousel-item">
                                               <img class="d-block img-fluid" src="/img/slider_images/{{$four->slider_image }}" alt="{{$four->description}}">
                                            <div class="carousel-caption d-none d-md-block">
                                                <p>{!! $four->description !!}</p>
                                            </div>
                                           </div>
                                         @endforeach
                                       @else
                                          <p><div class="alert alert-danger" role="alert">
                                        <strong>No slider 4 image found!</strong>
                                        </div></p>
                                        @endif
                                           </div>

                                           <a class="left carousel-control carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                               <span class="fa fa-angle-left"></span>
                                               <span class="sr-only">Previous</span>
                                           </a>
                                           <a class="right carousel-control carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                               <span class="fa fa-angle-right"></span>
                                               <span class="sr-only">Next</span>
                                           </a>
                      </div>
                    </div>





                  </div>

                </div>

              </div>

                <div class="tim-title">
                  <h5>  <img src="img/HotDeals.gif" alt="Hot Deals" width="200px"/> </h5>
                </div>

                <div class="row">
                  @if(count($hotdeals) > 0)
                   @foreach ($hotdeals as $key => $hotdeal)
                  <div class="card" style="width: 15rem; margin-left:12px;">

                    <a href="#{{$hotdeal->id}}"><img src="img/hotdeals_images/{{$hotdeal->hotdeals_image }}" alt="{{$hotdeal->hotDealTitle}}" class="img-fluid img-rounded" data-toggle="modal" data-target="#{{ $hotdeal->id }}"> </a>
                    <div class="card-block">

                        <h4 class="card-title" style="color:#f5593d;"><b>{{ $hotdeal->hotDealTitle }}</b></h4>
                      <p class="card-text">{!! str_limit($hotdeal->description, 100) !!}</p>
                      <div class="container">
                        <div class="row">
                          <div class="col-lg-12">
                            <div class="star-rating" style="line-height:32px; font-size:1.25em; color:yellow;">
                              @if ($hotdeal->numberofStars == 1)
                                <span class="fa fa-star-o" data-rating="1"></span>
                              @elseif ($hotdeal->numberofStars == 2)
                              <span class="fa fa-star-o" data-rating="1"></span>
                              <span class="fa fa-star-o" data-rating="2"></span>
                            @elseif ($hotdeal->numberofStars == 3)
                              <span class="fa fa-star-o" data-rating="1"></span>
                              <span class="fa fa-star-o" data-rating="2"></span>
                              <span class="fa fa-star-o" data-rating="3"></span>
                            @elseif ($hotdeal->numberofStars == 4)
                              <span class="fa fa-star-o" data-rating="1"></span>
                              <span class="fa fa-star-o" data-rating="2"></span>
                              <span class="fa fa-star-o" data-rating="3"></span>
                              <span class="fa fa-star-o" data-rating="4"></span>
                            @elseif ($hotdeal->numberofStars == 5)
                              <span class="fa fa-star-o" data-rating="1"></span>
                              <span class="fa fa-star-o" data-rating="2"></span>
                              <span class="fa fa-star-o" data-rating="3"></span>
                              <span class="fa fa-star-o" data-rating="4"></span>
                              <span class="fa fa-star-o" data-rating="5"></span>
                            @endif
                              <input type="hidden" name="whatever1" class="rating-value" value="2.56">
                            </div>
                          </div>
                        </div>
                     </div>
                     <h6 class="note text-success">{{ $hotdeal->price }}</h6>
                     <a href="#" class="btn btn btn-sm btn-info btn-round"><i class="fa fa-search" aria-hidden="true"></i> Explore</a>
                     </br></br>
                     <a href="https://quotations.nouvini.com/getQuotation" class="btn btn btn-sm btn-danger btn-round"><i class="fa fa-plane" aria-hidden="true"></i> Ask for a quote</a>
                    </div>
                  </div>
                  <!-- Modal -->
                            <div class="modal fade" id="{{$hotdeal->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                              <div class="modal-dialog" role="document">
                                                  <div class="modal-content">
                                                      <div class="modal-header">
                                                          <h5 class="modal-title text-center" id="exampleModalLabel">Unsual travel</h5>
                                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                              <span aria-hidden="true">&times;</span>
                                                          </button>
                                                      </div>
                                                      <div class="modal-body">
                                                        <div class="text-center">
                                                      <img src="img/hotdeals_images/{{$hotdeal->hotdeals_image }}" alt="{{$hotdeal->hotDealTitle}}" class="img-fluid"/>
                                                       </div>
                                                      </div>
                                                    <p>
                                                      {!!$hotdeal->description !!}
                                                    </p>
                                                      <div class="modal-footer">
                                                              <div class="left-side">
                                                                  <button type="button" class="btn btn-default btn-link" data-dismiss="modal">Close</button>
                                                              </div>
                                                              <div class="divider"></div>
                                                              <div class="right-side">
                                                                <a href="/test">  <button type="button" class="btn btn-danger btn-link">Explore more</button></a>
                                                              </div>
                                                          </div>
                                                  </div>
                                              </div>
                            </div>
                   @endforeach
                   {{ $hotdeals->links() }}
                 @else
                    <p><div class="alert alert-danger" role="alert">
                  <strong>No Hot deals found!</strong>
                  </div></p>
                  @endif
            </div>




            </div>
</div>

        </div>
	</div>
    <footer class="footer">
        <div class="container">
            <div class="row">
                <nav class="footer-nav">
                    <ul>
                        <li><a href="#">Legal Notice</a></li>
                        <li><a href="#">About us</a></li>
                        <li><a href="contact">Contact</a></li>
                    </ul>
                </nav>
                <div class="credits ml-auto">
                    <span class="copyright">
                        © <script>document.write(new Date().getFullYear())</script>, all rights reserved
                    </span>
                </div>
            </div>
        </div>
    </footer>
</body>

<!-- Core JS Files -->
<script src="ui_assets/js/jquery-3.2.1.js" type="text/javascript"></script>
<script src="ui_assets/js/jquery-ui-1.12.1.custom.min.js" type="text/javascript"></script>
<script src="ui_assets/js/popper.js" type="text/javascript"></script>
<script src="ui_assets/js/bootstrap.min.js" type="text/javascript"></script>

<!-- Switches -->
<script src="ui_assets/js/bootstrap-switch.min.js"></script>

<!--  Plugins for Slider -->
<script src="ui_assets/js/nouislider.js"></script>

<!--  Plugins for DateTimePicker -->
<script src="ui_assets/js/moment.min.js"></script>
<script src="ui_assets/js/bootstrap-datetimepicker.min.js"></script>

<!--  Paper Kit Initialization and functons -->
<script src="ui_assets/js/paper-kit.js?v=2.1.0"></script>

</html>

 <!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="../img/destination_icons/{{ $posts->destImgIcon }}">
    <link rel="apple-touch-icon" sizes="76x76" href="../img/destination_icons/{{ $posts->destImgIcon }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>{{ $posts->destinationName }}</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- Bootstrap core CSS     -->
	<link href="../ui_assets/css/bootstrap.min.css" rel="stylesheet" />
	<link href="../ui_assets/css/paper-kit.css?v=2.1.0" rel="stylesheet"/>

    <!--     Fonts and icons     -->
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,300,700' rel='stylesheet' type='text/css'>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="../ui_assets/css/nucleo-icons.css" rel="stylesheet" />

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
                            <a href="documentation/tutorial-components.html" target="_blank" class="nav-link" style="color:#66615B;"><i class="fa fa-smile-o"  style="color:#66615B;"></i>Our travels</a>
                        </li>
                        <li class="nav-item">
                            <a href="documentation/tutorial-components.html" target="_blank" class="nav-link" style="color:#51bcda;"><i class="fa fa-road"  style="color:#51bcda;"></i>The road book</a>
                        </li>
                        <li class="nav-item">
                <a href="https://quotations.nouvini.com/getQuotation" class="btn btn btn-sm btn-danger btn-round"><i class="fa fa-plane" aria-hidden="true"></i> Ask for a quote</a>
                   </li>

                </div>
              </div>
            </div>
          </nav>
        </br>

    <!-- Page Content -->
    <div class="container">

      <!-- Heading Row -->
      <div class="row my-4">
        <div class="col-lg-8">
        @include('inc.slider')
        </div>
        <!-- /.col-lg-8 -->
        <div class="col-lg-4">
          <h1>{{ $posts->destinationName }}<img src="../img/destination_icons/{{ $posts->destImgIcon }}"> </h1>
          <p>Design your trip with a local travel agent based in {{ $posts->destinationName }}</p>
          <div class="col-6 mr-auto ml-auto">
          <img src="../img/local_agents/{{ $posts->localAgentImg }}" class="img-circle img-no-padding img-responsive" alt="{{ $posts->destinationName }}">
          <p class="text-center">{{ $posts->localAgentName }}</p>
            <p class="text-center">
                          <!-- Button trigger modal -->
              <button type="button" class="btn btn-outline-success btn-round" data-toggle="modal" data-target="#myModal">
              Meet the agent
             </button>
             @include('inc.meetOurAgent', $posts)
            </p>
        </div>

        </div>
        <!-- /.col-md-4 -->
      </div>
      <!-- /.row -->
      <div class="text-center col-md-12 col-lg-8">
      <h3>Tailor-made trips</h3>
      </div>


        <!-- Content Row -->
        <div class="row">
          @if(count($tailorTrips) > 0)
           @foreach ($tailorTrips as $key => $tailorTrip)
          <div class="col-md-4 mb-4">
            <div class="card h-100">
              <div class="card-body">
                  <a href="#{{$tailorTrip->id}}"><img src="../img/tailorTrip_images/{{$tailorTrip->tailorTrip_image}}" alt="{{$tailorTrip->tailorTripTitle}}" class="img-fluid img-rounded" data-toggle="modal" data-target="#{{ $tailorTrip->id }}"> </a></br>
                <h4 class="card-title" style="color:#f5593d;"><b>{{ $tailorTrip->tailorTripTitle }}</b></h4>
                <p class="card-text">{!! $tailorTrip->description!!}</p>
                <div class="container">
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="star-rating" style="line-height:32px; font-size:1.25em; color:yellow;">
                        @if ($tailorTrip->numberofStars == 1)
                          <span class="fa fa-star-o" data-rating="1"></span>
                        @elseif ($tailorTrip->numberofStars == 2)
                        <span class="fa fa-star-o" data-rating="1"></span>
                        <span class="fa fa-star-o" data-rating="2"></span>
                      @elseif ($tailorTrip->numberofStars == 3)
                        <span class="fa fa-star-o" data-rating="1"></span>
                        <span class="fa fa-star-o" data-rating="2"></span>
                        <span class="fa fa-star-o" data-rating="3"></span>
                      @elseif ($tailorTrip->numberofStars == 4)
                        <span class="fa fa-star-o" data-rating="1"></span>
                        <span class="fa fa-star-o" data-rating="2"></span>
                        <span class="fa fa-star-o" data-rating="3"></span>
                        <span class="fa fa-star-o" data-rating="4"></span>
                      @elseif ($tailorTrip->numberofStars == 5)
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
               <h6 class="note text-success">{{ $tailorTrip->price }}</h6>
              </div>
              <div class="card-footer">
                <button type="button" class="btn btn btn-sm btn-outline-info btn-round pull-left">explore more</button>
                <button type="button" class="btn btn btn-sm btn-outline-success btn-round pull-right">What travelers say</button>
              </div>
            </div>
          </div>
        @endforeach
        {{ $tailorTrips->links() }}
      @else
         <p><div class="alert alert-danger" role="alert">
       <strong>No Tailor Made Trip found!</strong>
       </div></p>
       @endif

        </div>

  <!-- /.nav pills -->
<h3 class="title text-center text-default"><i class="fa fa-bullhorn" aria-hidden="true"></i> The best person to talk about travel experiences is the traveler himself</h3>
  @include('inc.navigationPills',$clientExps)
    <!-- /.nav pills -->
    <nav class="nav nav-tabs" id="myTab" role="tablist">
      <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Home</a>
      <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</a>
      <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</a>
    </nav>
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">...</div>
      <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">...</div>
      <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">...</div>
    </div>
    <script>
  $(function () {
    $('#myTab a:last').tab('show')
  })
</script>

    <!-- Footer -->
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
    <!-- Core JS Files -->
    <script src="../ui_assets/js/jquery-3.2.1.js" type="text/javascript"></script>
    <script src="../ui_assets/js/jquery-ui-1.12.1.custom.min.js" type="text/javascript"></script>
    <script src="../ui_assets/js/popper.js" type="text/javascript"></script>
    <script src="../ui_assets/js/bootstrap.min.js" type="text/javascript"></script>

    <!-- Switches -->
    <script src="../ui_assets/js/bootstrap-switch.min.js"></script>

    <!--  Plugins for Slider -->
    <script src="../ui_assets/js/nouislider.js"></script>

    <!--  Plugins for DateTimePicker -->
    <script src="../ui_assets/js/moment.min.js"></script>
    <script src="../ui_assets/js/bootstrap-datetimepicker.min.js"></script>

    <!--  Paper Kit Initialization and functons -->
    <script src="../ui_assets/js/paper-kit.js?v=2.1.0"></script>


  </body>

</html>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        

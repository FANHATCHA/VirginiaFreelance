<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="ui_assets/img/favicon-nouvini.png">
    <link rel="apple-touch-icon" sizes="76x76" href="ui_assets/img/favicon-nouvini.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Nouvini local agency: Travel with a local expert | Nouvini</title>

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
                            <a class="nav-link" rel="tooltip" title="Follow us on Twitter" data-placement="bottom" href="https://twitter.com/CreativeTim" target="_blank">
                                <i class="fa fa-twitter" style="color:#51bcda;"></i>
                                <p class="d-lg-none">Twitter</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" rel="tooltip" title="Like us on Facebook" data-placement="bottom" href="https://www.facebook.com/CreativeTim" target="_blank">
                                <i class="fa fa-facebook-square" style="color:#3b5998;"></i>
                                <p class="d-lg-none">Facebook</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" rel="tooltip" title="Follow us on Instagram" data-placement="bottom" href="https://www.instagram.com/CreativeTimOfficial" target="_blank">
                                <i class="fa fa-instagram" style="color:#8a3ab9;"></i>
                                <p class="d-lg-none">Instagram</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" rel="tooltip" title="Star on Google+" data-placement="bottom" href="https://www.github.com/CreativeTimOfficial/paper-kit" target="_blank">
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
          <h1>Australia <img src="img/index.png"> </h1>
          <p>Design your trip with a local travel agent based in Australia</p>
          <div class="col-6 mr-auto ml-auto">
          <img src="ui_assets/img/faces/joe-gardner-2.jpg" class="img-circle img-no-padding img-responsive" alt="Rounded Image">
          <p class="text-center">Joe Gardner</p>
            <p class="text-center">
                          <!-- Button trigger modal -->
              <button type="button" class="btn btn-outline-success btn-round" data-toggle="modal" data-target="#myModal">
              Meet the agent
             </button>
             @include('inc.meetOurAgent')
            </p>
        </div>

        </div>
        <!-- /.col-md-4 -->
      </div>
      <!-- /.row -->

      <!-- Call to Action Well -->
      <div class="card text-white bg-default my-4 text-center">

          <p class="text-white m-0">@include('inc.navigationPills')</p>
    
      </div>

      <!-- Content Row -->
      <div class="row">
        <div class="col-md-4 mb-4">
          <div class="card h-100">
            <div class="card-body">
              <h2 class="card-title">Card One</h2>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem magni quas ex numquam, maxime minus quam molestias corporis quod, ea minima accusamus.</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">More Info</a>
            </div>
          </div>
        </div>
        <!-- /.col-md-4 -->
        <div class="col-md-4 mb-4">
          <div class="card h-100">
            <div class="card-body">
              <h2 class="card-title">Card Two</h2>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod tenetur ex natus at dolorem enim! Nesciunt pariatur voluptatem sunt quam eaque, vel, non in id dolore voluptates quos eligendi labore.</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">More Info</a>
            </div>
          </div>
        </div>
        <!-- /.col-md-4 -->
        <div class="col-md-4 mb-4">
          <div class="card h-100">
            <div class="card-body">
              <h2 class="card-title">Card Three</h2>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem magni quas ex numquam, maxime minus quam molestias corporis quod, ea minima accusamus.</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">More Info</a>
            </div>
          </div>
        </div>
        <!-- /.col-md-4 -->

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
      </div>
      <!-- /.container -->
    </footer>
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


  </body>

</html>

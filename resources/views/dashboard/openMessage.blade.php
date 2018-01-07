<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="{{ asset('ux/img/property.png') }}">
	<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('ux/img/property.png') }}">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Dashboard-VFPA</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="../assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="../assets/css/paper-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="../assets/css/demo.css" rel="stylesheet" />


    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="../assets/css/themify-icons.css" rel="stylesheet">

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-background-color="white" data-active-color="danger">

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="/system-administrators/home" class="simple-text">
                  VFPA
                </a>
            </div>

            <ul class="nav">
                <li class="active">
                    <a href="/system-administrators/home">
                        <i class="ti-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="/system-administrators/rent">
                        <i class="ti-panel"></i>
                        <p>Add Content</p>
                    </a>
                </li>


            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <a class="navbar-brand" href="#">Dashboard</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">



												<!-- Start Auth link-->
												<li class="dropdown">
															<a href="#" class="dropdown-toggle" data-toggle="dropdown">
																		<i class="ti-user"></i>

									<p>  {{ Auth::user()->name }} </p>
									<b class="caret"></b>
															</a>
															<ul class="dropdown-menu">
																<li>
																		<a href="{{ route('logout') }}"
																				onclick="event.preventDefault();
																								 document.getElementById('logout-form').submit();">
																				Logout
																		</a>

																		<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
																				{{ csrf_field() }}
																		</form>
																</li>
																<li><a href="/home">Dashboard</a></li>
															</ul>
												</li>
											<!-- Second Auth link-->
                    </ul>

                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">

                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
															  @include('inc.messages')
                                <h4 class="title">Message: {{ $items->id}} </h4></br>
																<div>Email:<b> {{ $items->email}}</b>  </div></br>
																<div>Phone N°:<b> {{ $items->phone}}</b> </div>
                            </div>
                            <div class="content">
															<div class="panel panel-default">

				  <div class="panel-body">
						<div>
        {!!$items->msg!!}
					<hr>
				 <small>Sent on {{$items->created_at}} by <b>{{$items->fullName}}</b></small>
				 	<hr>
    </div>
				  </div>
				</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>


        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                </nav>
                <div class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script>, All rights reserved</a>
                </div>
            </div>
        </footer>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="../assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="../assets/js/bootstrap-checkbox-radio.js"></script>

	<!--  Charts Plugin -->
	<script src="../assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="../assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
	<script src="../assets/js/paper-dashboard.js"></script>

	<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
	<script src="../assets/js/demo.js"></script>

</html>

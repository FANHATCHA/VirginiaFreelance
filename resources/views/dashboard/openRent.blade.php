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
                <li>
                    <a href="/system-administrators/home">
                        <i class="ti-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="active">
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
                                <h4 class="title">Reference ID:   <b>{{ $items->reference}} </b> </h4>
                            </div>


														<html lang="en">
														<head>

														  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
														  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
														  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
														  <style>
														    /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
														    .row.content {height: 1500px}

														    /* Set gray background color and 100% height */
														    .sidenav {
														      background-color: #f1f1f1;
														      height: 100%;
														    }


														    /* On small screens, set height to 'auto' for sidenav and grid */
														    @media screen and (max-width: 767px) {
														      .sidenav {
														        height: auto;
														        padding: 15px;
														      }
														      .row.content {height: auto;}
														    }
														  </style>
														</head>
														<body>

														<div class="container-fluid">
														  <div class="row content">
														    <div class="col-sm-3 sidenav">
														      <h4>{{$items->whatIsItFor}}</h4>
														      <br>
																	<img src="/img/rent_images/{{$items->rent_image}}" alt="{{$items->rentTitle}}"class="rounded float-left" width="250px;"></br>
																	  <h4>Location: <b>{{$items->rentLocation}}</b></h4>
																	</div>

														    <div class="col-sm-9">
														      <h4><small>{{$items->rentTitle}}</small></h4>
														      <hr>
														      <h2>{{$items->price}}</h2>
														      <h5><span class="glyphicon glyphicon-time"></span> Sent: {{$items->created_at}}</h5>
																	@if ($items->status =='Open')
																	<h5><span class="label label-success">Open</span></h5><br>
																@elseif ($items->status =='Close')
																	<h5><span class="label label-danger">Close</span></h5><br>
																	@endif

														      <p>{!! $items->details!!}</p>
														      <br><br>
																	<hr>
																	<ul class="nav nav-tabs" id="myTab" role="tablist">
			<li class="nav-item">
				<a class="nav-link active" data-toggle="tab" href="#home" role="tab" aria-controls="home"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i><b> Edit</b></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"><i class="fa fa-picture-o" aria-hidden="true"></i> <b> Add picture</b> </a>
			</li>
			<li class="nav-item">
				<a class="nav-link" data-toggle="tab" href="#desc" role="tab" aria-controls="desc"><i class="fa fa-eye" aria-hidden="true"></i> <b> Description</b> </a>
			</li>
		</ul>

		<div class="tab-content">
			<div class="tab-pane active" id="home" role="tabpanel">@include('inc.editRent', $items)</div>
			<div class="tab-pane" id="profile" role="tabpanel">@include('inc.addPhotos', $items)</div>
			<div class="tab-pane" id="desc" role="tabpanel">@include('inc.addDesc', $items)</div>
		</div>


														    </div>
														  </div>
														</div>



														</body>
														</html>








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
	<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
<script>
		CKEDITOR.replace( 'details-ckeditor' );
</script>

</html>

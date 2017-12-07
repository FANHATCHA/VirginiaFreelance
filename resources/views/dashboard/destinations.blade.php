<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="ui_assets/img/favicon-nouvini.png">
	<link rel="apple-touch-icon" sizes="76x76" href="ui_assets/img/favicon-nouvini.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Dashboard-Nouvni</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="assets/css/paper-dashboard.css" rel="stylesheet"/>
    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/themify-icons.css" rel="stylesheet">

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-background-color="white" data-active-color="danger">

    <!--
		Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
		Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
	-->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="/home" class="simple-text">
                   Nouvini
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="/home">
                        <i class="ti-panel"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="/ui-homepage">
                        <i class="ti-home"></i>
                        <p>UI-HomePage</p>
                    </a>
                </li>
								<li class="active">
                    <a href="/destinations">
                        <i class="ti-location-pin"></i>
                        <p>Destinations</p>
                    </a>
                </li>
                <li>
                    <a href="table.html">
                        <i class="ti-view-list-alt"></i>
                        <p>Table List</p>
                    </a>
                </li>
                <li>
                    <a href="typography.html">
                        <i class="ti-text"></i>
                        <p>Typography</p>
                    </a>
                </li>
                <li>
                    <a href="/icons">
                        <i class="ti-pencil-alt2"></i>
                        <p>Icons</p>
                    </a>
                </li>
                <li>
                    <a href="maps.html">
                        <i class="ti-map"></i>
                        <p>Maps</p>
                    </a>
                </li>
                <li>
                    <a href="notifications.html">
                        <i class="ti-bell"></i>
                        <p>Notifications</p>
                    </a>
                </li>
				<li class="active-pro">
                    <a href="upgrade.html">
                        <i class="ti-export"></i>
                        <p>Upgrade to PRO</p>
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
                    <a class="navbar-brand" href="#">Destinations</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="ti-panel"></i>
								<p>Stats</p>
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="ti-bell"></i>
                                    <p class="notification">5</p>
									<p>Notifications</p>
									<b class="caret"></b>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Notification 1</a></li>
                                <li><a href="#">Notification 2</a></li>
                                <li><a href="#">Notification 3</a></li>
                                <li><a href="#">Notification 4</a></li>
                                <li><a href="#">Another notification</a></li>
                              </ul>
                        </li>
						<li>
                            <a href="#">
								<i class="ti-settings"></i>
								<p>Settings</p>
                            </a>
                        </li>
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
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-warning text-center">
                                            <i class="ti-server"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p>Capacity</p>
                                            105GB
                                        </div>
                                    </div>
                                </div>
                                <div class="footer">
                                    <hr />
                                    <div class="stats">
                                        <i class="ti-reload"></i> Updated now
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-success text-center">
                                            <i class="ti-wallet"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p>Revenue</p>
                                            $1,345
                                        </div>
                                    </div>
                                </div>
                                <div class="footer">
                                    <hr />
                                    <div class="stats">
                                        <i class="ti-calendar"></i> Last day
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-danger text-center">
                                            <i class="ti-pulse"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p>Errors</p>
                                            23
                                        </div>
                                    </div>
                                </div>
                                <div class="footer">
                                    <hr />
                                    <div class="stats">
                                        <i class="ti-timer"></i> In the last hour
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-info text-center">
                                            <i class="ti-twitter-alt"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p>Followers</p>
                                            +45
                                        </div>
                                    </div>
                                </div>
                                <div class="footer">
                                    <hr />
                                    <div class="stats">
                                        <i class="ti-reload"></i> Updated now
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col-md-12">
											@include('inc.messages')
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Add a destination</h4>
                                <p class="category">Section 1</p>
                            </div>
                            <div class="content">
															{!! Form::open(['action' => 'AddDestinationCtrl@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
															{{ csrf_field() }}
															<div class="row">
																	<div class="col-md-12">
																			<div class="form-group border-input">
																					<label>Destination Name</label>
																					{{Form::text('destinationName', '', ['class' => 'form-control border-input','required'])}}

																			</div>
																	</div>
															</div>
															<div class="row">
																	<div class="col-md-5">
																			<div class="form-group border-input">
																					<label>Destination Image Icon</label>
																					{{Form::file('destImgIcon')}}

																			</div>
																	</div>
															</div>
															<div class="row">
																	<div class="col-md-5">
																			<div class="form-group border-input">
																					<label>Local agent Name</label>
																					{{Form::text('localAgentName', '', ['class' => 'form-control border-input','required'])}}

																			</div>
																	</div>
															</div>
															<div class="row">
																	<div class="col-md-5">
																			<div class="form-group border-input">
																					<label>Local Agent Image</label>
																					{{Form::file('localAgentImg')}}

																			</div>
																	</div>
															</div>
																<div class="row">
																		<div class="col-md-10">
																				<div class="form-group border-input">
																						<label>Local Agent Summary</label>
																						{{Form::textarea('description', '', ['id' => 'localAgent-ckeditor','rows' => '5', 'class' => 'form-control border-input', 'placeholder' => 'Description'])}}
																				</div>
																		</div>
																</div>
																<div class="row">
																		<div class="col-md-10">
																				<div class="form-group border-input">
																						<label>Slug</label>
																						{{Form::text('slug', '', ['class' => 'form-control border-input','required'])}}
																		</div>
																</div>
																</div>

																<div class="text-center">
																		{{Form::submit('Submit', ['class'=>'btn btn-info btn-fill btn-wd'])}}
																		 {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Destinations</h4>

                            </div>
                            <div class="content">
															@if(count($destinations) > 0)
																<table class="table table-striped">
	                         <tr>
	                             <th>Destination Name</th>
	                             <th>Duration</th>
	                             <th>Edit</th>
															 <th>Add </th>

	                         </tr>
	                         @foreach($destinations as $destination)
														 <tr>
                              <td><a href="/destinations/{{$destination->slug}}">{{$destination->destinationName}}</a></td>
															<td>{{$destination->created_at->diffForHumans()}}</td>
															<td>
																<a href="/destinations/{{$destination->id}}/edit" class="btn btn-default"><span class="glyphicon glyphicon-edit"></span> Edit</a></td>

																<td>
																	<a href="/destinations/{{$destination->id}}/edit" class="btn btn-default"><span class="glyphicon glyphicon-edit"></span> Edit</a></td>

														</tr>
															@endforeach
											{{$destinations->links()}}
									        </table>
													@else
															<p>No destination Found!</p>
													@endif

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card ">
                            <div class="header">
                                <h4 class="title">Social</h4>
                            </div>
                            <div class="content">
															<!-- Button trigger modal -->
															<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
															Add a social media Page
															</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>

                        <li>
                            <a href="http://www.creative-tim.com">
                                Creative Tim
                            </a>
                        </li>
                        <li>
                            <a href="http://blog.creative-tim.com">
                               Blog
                            </a>
                        </li>
                        <li>
                            <a href="http://www.creative-tim.com/license">
                                Licenses
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by <a href="http://www.creative-tim.com">Creative Tim</a>
                </div>
            </div>
        </footer>

    </div>
</div>
		<!-- Modal -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Add a social media Page</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					{!! Form::open(['action' => 'socialMediaCtrl@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
					{{ csrf_field() }}
					<div class="row">
				 <div class="col-md-4">
				 <div class="form-group">
				 <label>Social media</label>
					 <select class="form-control border-input" name="socialMedia" id="socialMedia" required>
					 <option disabled="" selected=""></option>
					 <option value="twitter">twitter</option>
					 <option value="facebook">facebook</option>
					 <option value="Instagram"> Instagram</option>
					 <option value="Google+"> Google+</option>
					 </select>
				 </div>
				</div>
				 </div>
				 <div class="row">
						 <div class="col-md-10">
								 <div class="form-group border-input">
										 <label>URL</label>
										 {{Form::text('url', '', ['class' => 'form-control border-input','required'])}}
						 </div>
				 </div>
				 </div>
					{{Form::submit('Submit', ['class'=>'btn btn-info btn-fill btn-wd'])}}
					 {!! Form::close() !!}
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
		</div>
</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="assets/js/bootstrap-checkbox-radio.js"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
		<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
	<script>
			CKEDITOR.replace( 'localAgent-ckeditor' );
	</script>
	<script>
			$('#myModal').on('shown.bs.modal', function () {
		  $('#myInput').focus()
		})
	</script>

</html>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="ui_assets/img/favicon-nouvini.png">
	<link rel="apple-touch-icon" sizes="76x76" href="ui_assets/img/favicon-nouvini.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Dashboard-UI</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="assets/css/paper-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


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
							<li class="active">
									<a href="/ui-homepage">
											<i class="ti-home"></i>
											<p>UI-HomePage</p>
									</a>
							</li>
							<li>
									<a href="user.html">
											<i class="ti-user"></i>
											<p>User Profile</p>
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
                    <a class="navbar-brand" href="#">UI-Homepage</a>
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
                    <div class="col-lg-4 col-md-5">
											  <div class="card">
													<div class="header">
															<h4 class="title">Sliders added</h4>
													</div>
							    @if(count($sliders) > 0)

							           <table class="table table-striped">
													 <tr>
														<th>Slider Position</th>
														<th>Description</th>
														<th>Image</th>
												</tr>
												@foreach($sliders as $slider)
													<tr>

														 <td>
																{{ $slider->slider_position}}
														 </td>
														 <td>
																{!! $slider->description !!}
														 </td>
														 <td>
																<img  style="width:100%"class="img-rounded" src="/img/slider_images/{{$slider->slider_image }}" alt="{{$slider->description}}">
														 </td>
													</tr>
														   @endforeach
												 </table>
							        {{$sliders->links()}}
							    @else
							        <p>No sliders found!</p>
							    @endif
									</div>
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Team Members</h4>
                            </div>
                            <div class="content">
                                <ul class="list-unstyled team-members">
                                            <li>
                                                <div class="row">
                                                    <div class="col-xs-3">
                                                        <div class="avatar">
                                                            <img src="assets/img/faces/face-0.jpg" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        DJ Khaled
                                                        <br />
                                                        <span class="text-muted"><small>Offline</small></span>
                                                    </div>

                                                    <div class="col-xs-3 text-right">
                                                        <btn class="btn btn-sm btn-success btn-icon"><i class="fa fa-envelope"></i></btn>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-xs-3">
                                                        <div class="avatar">
                                                            <img src="assets/img/faces/face-1.jpg" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        Creative Tim
                                                        <br />
                                                        <span class="text-success"><small>Available</small></span>
                                                    </div>

                                                    <div class="col-xs-3 text-right">
                                                        <btn class="btn btn-sm btn-success btn-icon"><i class="fa fa-envelope"></i></btn>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-xs-3">
                                                        <div class="avatar">
                                                            <img src="assets/img/faces/face-3.jpg" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        Flume
                                                        <br />
                                                        <span class="text-danger"><small>Busy</small></span>
                                                    </div>

                                                    <div class="col-xs-3 text-right">
                                                        <btn class="btn btn-sm btn-success btn-icon"><i class="fa fa-envelope"></i></btn>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-7">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Slider</h4>
                            </div>
														@include('inc.messages')
                            <div class="content">
                                  {!! Form::open(['action' => 'SliderCtrl@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
																	{{ csrf_field() }}
																	 <div class="row">
																	<div class="col-md-12">
																	<div class="form-group">
																	<label>Slider Position</label>
																		<select class="form-control border-input" name="slider_position" id="slider_position" required>
																		<option disabled="" selected=""></option>
																		<option value="1"> 1</option>
																		<option value="2"> 2</option>
																		<option value="3"> 3</option>
																		<option value="4"> 4</option>
															</select>


																</textarea>
															</div>
																 </div>
																	</div>
																	<div class="row">
																			<div class="col-md-5">
																					<div class="form-group border-input">
																							<label>Upload image</label>
																							{{Form::file('slider_image')}}

																					</div>
																			</div>
																	</div>
                                    <div class="row">
                                        <div class="col-md-10">
                                            <div class="form-group border-input">
                                                <label>Description</label>
																								{{Form::textarea('description', '', ['id' => 'article-ckeditor','rows' => '5', 'class' => 'form-control border-input', 'placeholder' => 'Description'])}}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-center">
																			  {{ Form::hidden('username', auth()->user()->name) }}
																				{{Form::submit('Submit', ['class'=>'btn btn-info btn-fill btn-wd'])}}
                                         {!! Form::close() !!}
                                    </div>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>

                  @include('inc.hotDeals')
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

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
	<script src="assets/js/paper-dashboard.js"></script>

	<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
	<script>
			CKEDITOR.replace( 'article-ckeditor' );
	</script>
	<script>
			CKEDITOR.replace( 'hotdeals-ckeditor' );
	</script>

</html>

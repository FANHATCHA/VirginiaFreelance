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
    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="../../assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="../../assets/css/paper-dashboard.css" rel="stylesheet"/>
    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="../../assets/css/themify-icons.css" rel="stylesheet">

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

				                    <div class="col-md-12">
															@include('inc.messages')
				                        <div class="card">
				<div class="header">
				    <h4 class="title">{{$editSliders->destination_slug}}</h4>
				    <p class="category">Edit Internal Sliders</p>
				</div>

				  <div class="content">
						{!! Form::open(['action' => ['InternalSliderCtrl@update', $editSliders->id], 'method' => 'POST', 'class' => 'form-horizontal', 'enctype' => 'multipart/form-data']) !!}
 					 {{ csrf_field() }}
 					 {{ method_field('PUT') }}
				    <div class="row">
				        <div class="col-md-5">
				            <div class="form-group border-input">
											<label>Upload image</label>
											{{Form::file('slider_image')}}</br>
											<img src="../../img/internalSlider_images/{{$editSliders->slider_image}}" width="100px"/></br>
				            </div>
				        </div>
				    </div>

				    <div class="row">
				        <div class="col-md-10">
				            <div class="form-group border-input">
											<label>Description</label>
											{{Form::textarea('description', $editSliders->description, ['id' => 'slider-ckeditor','rows' => '5', 'class' => 'form-control border-input', 'placeholder' => 'Description'])}}
				            </div>
				        </div>
				    </div>
				     <div class="row">
				    <div class="col-md-4">
				    <div class="form-group">
							<label> Edit Slider Position</label>
								<select class="form-control border-input" name="slider_position" id="slider_position" required>
								<option disabled="" selected=""></option>
								<option value="1"> 1</option>
								<option value="2"> 2</option>
								<option value="3"> 3</option>
								<option value="4"> 4</option>
								</select>
				</div>
				   </div>
				    </div>
				      <div class="text-center">
                  {{ Form::hidden('username', auth()->user()->name) }}
				          {{Form::submit('Submit', ['class'=>'btn btn-info btn-fill btn-wd'])}}
				           {!! Form::close() !!}
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
    <script src="../../assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="../../assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="../../assets/js/bootstrap-checkbox-radio.js"></script>

	<!--  Charts Plugin -->
	<script src="../../assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="../../assets/js/bootstrap-notify.js"></script>
		<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
	<script>
			CKEDITOR.replace( 'tailorTrip-ckeditor' );
	</script>
	<script>
			$('#myModal').on('shown.bs.modal', function () {
		  $('#myInput').focus()
		})
	</script>
	<script>
			CKEDITOR.replace( 'hotdeals-ckeditor' );
	</script>
	<script>
			CKEDITOR.replace( 'slider-ckeditor' );
	</script>
	<script>
			CKEDITOR.replace( 'subTitle-ckeditor' );
	</script>
	<script>
		$(function () {
			$('#myTab a:last').tab('show')
		})
	</script>


</html>

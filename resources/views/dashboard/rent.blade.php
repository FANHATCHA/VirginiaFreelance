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
                    <a class="navbar-brand" href="#">Rent</a>
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
																<li><a href="/home">website</a></li>
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
                                <h4 class="title">
																	Add Content
																	<!-- Button trigger modal -->
										<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
										  <i class="fa fa-plus-square-o" aria-hidden="true"></i> Create
										</button>

																</h4>
                            </div>
                            <div class="content">
															<div class="panel panel-success">

	  <div class="panel-body">
			@if(count($rents) > 0)
			 <table class="table table-striped">
					 <tr>
							 <th>Reference ID</th>
							 <th>Open</th>
							 <th>Delete</th>
							 <th>Rent (category)</th>
							 <th>Duration</th>
					 </tr>
					 @foreach($rents as $message)
					<tr>
					<td><a href="/admin-rent/{{$message->id}}">{{$message->reference}}</a></td>
					<td><a href="/admin-rent/{{$message->id}}" class="btn btn-success"><span class="fa fa-edit"></span> Open</a></td>
					<td>
				<form action="/admin-rent/{{$message->id}}" method="POST">
				{{ csrf_field()}}
				{{ method_field('DELETE')}}
				<button type="submit" value="delete" name="Delete" class="btn btn-danger"><span class="fa fa-remove"></span> Delete</button>
				</form>
				</td>
					<td>{{$message->whatIsItFor}}</td>
					<td>{{$message->created_at->diffForHumans()}}</td>
				</tr>
				@endforeach
			{{$rents->links()}}

		</table>
	     @else
	   <p>No message found !</p>
	    @endif
	  </div>
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
                    &copy; <script>document.write(new Date().getFullYear())</script> All Rights Reserved</a>
                </div>
            </div>
        </footer>

    </div>
</div>


</body>

										<!-- Modal -->
										<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
										  <div class="modal-dialog" role="document">
										    <div class="modal-content">
										      <div class="modal-header">
										        <h5 class="modal-title" id="exampleModalLabel"> <i class="fa fa-plus-square-o" aria-hidden="true"></i> Add </h5>
										        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
										          <span aria-hidden="true">&times;</span>
										        </button>
										      </div>
										      <div class="modal-body">
										        @include('inc.addForRent')
										      </div>
										      <div class="modal-footer">
										        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
										      </div>
										    </div>
										  </div>
										</div>

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

	<script>
	  $(function () {
	    $('#myTab a:last').tab('show')
	  })
	</script>
	<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
<script>
		CKEDITOR.replace( 'details-ckeditor' );
</script>
<script>
		CKEDITOR.replace( 'description-ckeditor' );
</script>
</html>

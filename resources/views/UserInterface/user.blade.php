
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="ui_assets/img/favicon.ico">
	<link rel="apple-touch-icon" sizes="76x76" href="ui_assets/img/apple-icon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Paper Kit 2 Components by Creative Tim</title>

    <link href="ui_assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="ui_assets/css/paper-kit.css?v=2.1.0" rel="stylesheet"/>
    <link href="ui_assets/css/demo.css" rel="stylesheet" />

    <!--     Fonts and icons     -->
	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,300,700' rel='stylesheet' type='text/css'>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="ui_assets/css/nucleo-icons.css" rel="stylesheet">

	<script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js"></script>
</head>
<body>

	<nav class="navbar navbar-expand-lg fixed-top navbar-transparent" color-on-scroll="450">
		<div class="container">
			<div class="navbar-translate">
				<a class="navbar-brand" href="www.creative-tim.com">Paper Kit 2</a>
				<button class="navbar-toggler navbar-toggler-right navbar-burger" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-bar"></span>
					<span class="navbar-toggler-bar"></span>
					<span class="navbar-toggler-bar"></span>
				</button>
			</div>
			<div class="collapse navbar-collapse" id="navbarToggler">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a href="../index.html" target="_blank" class="nav-link">Back to kit</a>
					</li>
					<li class="nav-item">
						<a href="https://github.com/creativetimofficial/paper-kit" target="_blank" class="nav-link">Have an issue</a>
					</li>
					<li class="nav-item">
						<a href="http://www.creative-tim.com/product/paper-kit-2-pro" target="_blank" class="btn btn-danger btn-round">Upgrade to Pro</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="wrapper">
		<div class="documentation page-header page-header-small" style="background-image: url('ui_assets/img/daniel-olahs.jpg');">
			<div class="filter"></div>
			<div class="motto">
				<h2 class="title-uppercase text-center">Tutorial and Components</h2>
				<h3 class="text-center">Documentation v2.1.0</h3>
				<br/>
			</div>
		</div>
		<div class="main">
	        <div class="section">
	    		<div class="container">
					<!--what is row -->
			            <div class="row tim-row">
							<div class="col-lg-3 col-md-6">
				                <div class="fixed-section">
				                    <ul>
				                        <li><a href="#buttons-row">Buttons</a></li>
				                        <li><a href="#checkbox-row">Checkbox</a></li>
										<li><a href="#radio-row">Radio</a></li>
				                        <li><a href="#dropdown-row">Dropdown</a></li>
				                        <li><a href="#inputs-row">Inputs</a></li>
				                        <li><a href="#textarea-row">Textarea</a></li>
				                        <li><a href="#navbar-row">Navigation</a></li>
				                        <li><a href="#pagination-row">Pagination</a></li>
				                        <li><a href="#progressbar-row">Progress Bars</a></li>
				                        <li><a href="#sliders-row">Sliders</a></li>
				                        <li><a href="#labels-row">Labels</a></li>
				                        <li><a href="#datetimepicker-row">Datetimepicker</a></li>
				                        <li><a href="#modal-row">Modals</a></li>
				                        <li><a href="#tooltip-row">Tooltips</a></li>
										<li><a href="#popover-row">Popovers</a></li>
				                        <li><a href="#notification-row">Notification</a></li>
				                    </ul>
				                </div>
				            </div>
			                <div class="col-lg-8 col-md-12">
								<h2 class="text-center">Short Description and Usage</h2>
								<legend></legend>
			                    <p class="space-top">
			                    Paper kit is a beautiful resource built for Bootstrap. We have redesigned all its components with a pale color scheme and paper-like transitions. We are proud of this new Bootstrap skin and the possibilities for customisation.
			                    </p>
			                    <p>
			                    Using it is very simple and it will enable you to refresh you classic looking application. To get the desired effect you will also need to integrate JS plugins that take a little bit more effort. It the end the result will be worth it.
			                    </p>

			<!--         end row -->

			<!--         usage row -->
								<h2 class="text-center">Getting Started</h2>
								<legend></legend>
				                <p class="space-top">
				                The Paper Kit is built on top of Bootstrap 4, so you can safely use it on your existing or new Bootstrap project. No line of code from Bootstrap 4 was changed, so you don't have to worry about undesired effects in your work.
				                </p>
				                <p>
				                    We provide all the necessary CSS resources. To get going, just include 'css/paper-kit.css' in your HTML template. Your project will get the new look.
				                </p>
				                <p>
				                    The easiest way to start is to use our start-up template where all the files are already included and ready to use.
				                </p>
			<!--         end row -->

			<!--         file structure row -->
								<h2 class="text-center">File Structure</h2>
								<legend></legend>
			                    <p class="space-top">
			                        Once you have downloaded the archive and opened it, you will find the following structure:

			                    </p>
			                    <p>
			                        Let's take it one by one:
			                    </p>
								<pre class="prettyprint">
PAPER-KIT
├── CHANGELOG.md
├── LICENSE.md
├── README.md
├── assets
│   ├── css
│   │   ├── bootstrap-switch.css
│   │   ├── bootstrap.min.css
│   │   ├── demo.css
│   │   ├── examples.css
│   │   ├── paper-kit.css
│   │   └── paper-kit.css.map
│   ├── img
│   ├── js
│   │   ├── bootstrap-datetimepicker.min.js
│   │   ├── bootstrap-select.js
│   │   ├── bootstrap-switch.min.js
│   │   ├── bootstrap.min.js
│   │   ├── jquery-3.2.1.js
│   │   ├── jquery-ui-1.12.1.custom.min.js
│   │   ├── moment.min.js
│   │   ├── nouislider.js
│   │   ├── paper-kit.js
│   │   └── popper.js
│   └── sass
├── documentation
│   ├── style.css
│   ├── tutorial-components.html
│   └── tutorial.html
├── examples
│   ├── landing.html
│   ├── profile.html
│   └── register.html
├── index.html
└── template.html</pre>
		<!--         end row -->

			<!--         restyled components row -->
								<h2 class="text-center">Restyled Components</h2>
								<legend></legend>
			                    <p class="space-top">
			                    Here is the list of Bootstrap 4 components that we restyled in Paper kit:
			                        <ul>
			                            <li> Buttons </li>
			                            <li> Inputs</li>
			                            <li> Textarea</li>
			                            <li> Menu </li>
			                            <li> Dropdown</li>
			                            <li> Progress Bars</li>
			                            <li> Navigation Menu</li>
			                            <li> Pagination</li>
			                            <li> Labels</li>
			                            <li> Notifications</li>
			                            <li> Typography</li>
			                            <li> Images</li>
			                            <li> Tooltips</li>
			                            <li> Popovers</li>
			                            <li> Modal </li>
			                            <li> Carousel</li>
			                        </ul>
			                    </p>
			<!--         end row -->

								<h2 class="text-center">New Components</h2>
								<legend></legend>
			                    <p class="space-top">
			                    Besides giving the existing Bootstrap elements a new look, we added new ones, so that the interface and consistent and homogenous.
			                    </p>
			                    <p>
			                    Going through them, we added:
			                    <ul>
			                        <li> Checkboxes</li>
			                        <li> Radio Buttons</li>
			                        <li> Sliders</li>
			                        <li> Datetimepicker</li>
			                    </ul>
			                    </p>
			                    <p>
			                        For more details regarding the components, go to our <a href="../index.html">components page</a>.
			                    </p>
			        <!-- end row -->


	            <!-- <div class="tim-container" style="min-height: 2000px;"> -->

	    	<!-- buttons row -->
	                <h2>Buttons </h2>
	                <legend></legend>
	                <h4>Colors</h4>
	                    <p class="space-top">We worked over the original Bootstrap classes, choosing a different color pallete. We opted for this beautiful scheme of pale colors:</p>
						<br/>
						<button type="button" class="btn btn-default">Default</button>
				    	<button type="button" class="btn btn-primary">Primary</button>
				    	<button type="button" class="btn btn-info">Info</button>
				    	<button type="button" class="btn btn-success">Success</button>
				    	<button type="button" class="btn btn-warning">Warning</button>
				    	<button type="button" class="btn btn-danger">Danger</button>
				    	<button type="button" class="btn btn-neutral">Neutral</button>
	                    <br />
	                    <div class="area-line">
						    <div id="buttonColor" class="">
							    <pre class="prettyprint">
&lt;button type=&quot;button&quot; class=&quot;btn btn-default&quot;&gt;Default&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Primary&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-info&quot;&gt;Info&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-success&quot;&gt;Success&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-warning&quot;&gt;Warning&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-danger&quot;&gt;Danger&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-neutral&quot;&gt;Neutral&lt;/button&gt;</pre>
						    </div>
	                    </div>
	                	<h4>Sizes</h4>
	                    <p class="space-top">Buttons come in all needed sizes:</p>
						<button type="button" class="btn btn-outline-danger btn-sm">Small</button>
						<button type="button" class="btn btn-outline-danger">Regular</button>
						<button type="button" class="btn btn-outline-danger btn-lg">Large</button>
	                    <div class="area-line">
	                    <!-- <a data-target="#buttonSize" href="javascript: void(0);" data-toggle="collapse">
	                          See Full Implementation
	                    </a> -->
	    <div id="buttonSize" >
	    <pre class="prettyprint">
&lt;button type=&quot;button&quot; class=&quot;btn btn-danger btn-sm&quot;&gt;Small&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-danger&quot;&gt;Regular&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-danger btn-lg&quot;&gt;Large&lt;/button&gt;</pre>
	    </div>
	                    </div>
	                <h4>Styles</h4>
	                    <p class="space-top">
	                        We added extra classes that can help you better customise the look. You can use regular buttons, filled buttons or plain link buttons. Let's see some examples:
	                    </p>
						<button type="button" class="btn btn-info">Default</button>
						<button type="button" class="btn btn-info btn-round">Round</button>
						<button type="button" class="btn btn-info btn-round"><i class="fa fa-heart"></i> With Icon</button>
						<button type="button" class="btn btn-info btn-just-icon"><i class="fa fa-heart"></i></button>
						<button type="button" class="btn btn-info btn-link">Simple</button>
	                    <div class="area-line">
	                    <!-- <a data-target="#buttonStyle" href="javascript: void(0);" data-toggle="collapse">
	                          See Full Implementation
	                    </a> -->
		    				<div id="buttonStyle" >
		    					<pre class="prettyprint">
&lt;button type=&quot;button&quot; class=&quot;btn btn-info&quot;&gt;Default&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-info btn-round&quot;&gt;Round&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-info btn-round&quot;&gt;&lt;i class=&quot;fa fa-heart&quot;&gt;&lt;/i&gt; With Icon&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-info btn-just-icon&quot;&gt;&lt;i class=&quot;fa fa-heart&quot;&gt;&lt;/i&gt;&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-info btn-link&quot;&gt;Simple&lt;/button&gt;</pre>
	    					</div>
	                    </div>
	                    <p class="space-top">
	                        Button groups, toolbars, and disabled state all work like they are supposed to.
	                    </p>

	    <!--     end row -->

	    <!-- checkbox row -->
	        <div class="tim-row" id="checkbox-row">
	                <h2> Checkboxes </h2>
	                <legend></legend>
	                <p class="space-top">
	                    To use the custom checkboxes, you need to include the Sass file called <code>_checkbox-radio.scss</code>.
	                </p>
	                <p>
						<div class="form-check">
							<label class="form-check-label">
								<input class="form-check-input" type="checkbox" value="">
								Unchecked
								<span class="form-check-sign"></span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label">
								<input class="form-check-input" type="checkbox" value="" checked>
								Checked
								<span class="form-check-sign"></span>
							</label>
						</div>
						<div class="form-check disabled">
							<label class="form-check-label">
								<input class="form-check-input" type="checkbox" value="" disabled>
								Disabled unchecked
								<span class="form-check-sign"></span>
							</label>
						</div>
						<div class="form-check disabled">
							<label class="form-check-label">
								<input class="form-check-input" type="checkbox" value="" disabled checked>
								Disabled checked
								<span class="form-check-sign"></span>
							</label>
						</div>
	                </p>
	                <p>Usage can be done via Data Attributes:

	                </p>
	    			<div id="checkboxDataAttribute">
	    				<pre class="prettyprint">
&lt;div class=&quot;form-check&quot;&gt;
    &lt;label class=&quot;form-check-label&quot;&gt;
        &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; value=&quot;&quot;&gt;
        Unchecked
        &lt;span class=&quot;form-check-sign&quot;&gt;&lt;/span&gt;
    &lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;form-check&quot;&gt;
    &lt;label class=&quot;form-check-label&quot;&gt;
        &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; value=&quot;&quot; checked&gt;
        Checked
        &lt;span class=&quot;form-check-sign&quot;&gt;&lt;/span&gt;
    &lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;form-check disabled&quot;&gt;
    &lt;label class=&quot;form-check-label&quot;&gt;
        &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; value=&quot;&quot; disabled&gt;
        Disabled unchecked
        &lt;span class=&quot;form-check-sign&quot;&gt;&lt;/span&gt;
    &lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;form-check disabled&quot;&gt;
    &lt;label class=&quot;form-check-label&quot;&gt;
        &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; value=&quot;&quot; disabled checked&gt;
        Disabled checked
        &lt;span class=&quot;form-check-sign&quot;&gt;&lt;/span&gt;
    &lt;/label&gt;
&lt;/div&gt;</pre>
	    		</div>

	        </div>
	    <!-- end row -->

	    <!-- radio row -->
	        <div class="tim-row" id="radio-row">
	            <h2> Radio Buttons </h2>
	            <legend></legend>
	                <p class="space-top">
	                    To use the custom radio buttons, you need to include the Sass file called <code>_checkbox-radio.scss</code>.
	                </p>
	                <p>
						<div class="form-check-radio">
							<label class="form-check-label">
								<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" >
								Radio is off
								<span class="form-check-sign"></span>
							</label>
						</div>
						<div class="form-check-radio">
							<label class="form-check-label">
								<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2" checked>
								Radio is on
								<span class="form-check-sign"></span>
							</label>
						</div>

						<div class="form-check-radio disabled">
							<label class="form-check-label">
								<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" disabled>
								Disabled radio is off
								<span class="form-check-sign"></span>
							</label>
						</div>

						<div class="form-check-radio disabled">
							<label class="form-check-label">
								<input class="form-check-input" type="radio" name="exampleRadioz" id="exampleRadios4" value="option4" checked disabled>
								Disabled radio is on
								<span class="form-check-sign"></span>
							</label>
						</div>
	                </p>
	                <!-- <p>Usage can be done via Data Attributes: <a data-target="#radioDataAttribute" href="javascript: void(0);" data-toggle="collapse">See example.</a></p> -->
	    			<div id="radioDataAttribute">
	    				<pre class="prettyprint">
&lt;div class=&quot;form-check-radio&quot;&gt;
    &lt;label class=&quot;form-check-label&quot;&gt;
        &lt;input class=&quot;form-check-input&quot; type=&quot;radio&quot; name=&quot;exampleRadios&quot; id=&quot;exampleRadios1&quot; value=&quot;option1&quot; &gt;
        Radio is off
        &lt;span class=&quot;form-check-sign&quot;&gt;&lt;/span&gt;
    &lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;form-check-radio&quot;&gt;
    &lt;label class=&quot;form-check-label&quot;&gt;
        &lt;input class=&quot;form-check-input&quot; type=&quot;radio&quot; name=&quot;exampleRadios&quot; id=&quot;exampleRadios2&quot; value=&quot;option2&quot; checked&gt;
        Radio is on
        &lt;span class=&quot;form-check-sign&quot;&gt;&lt;/span&gt;
    &lt;/label&gt;
&lt;/div&gt;

&lt;div class=&quot;form-check-radio disabled&quot;&gt;
    &lt;label class=&quot;form-check-label&quot;&gt;
        &lt;input class=&quot;form-check-input&quot; type=&quot;radio&quot; name=&quot;exampleRadios&quot; id=&quot;exampleRadios3&quot; value=&quot;option3&quot; disabled&gt;
        Disabled radio is off
        &lt;span class=&quot;form-check-sign&quot;&gt;&lt;/span&gt;
    &lt;/label&gt;
&lt;/div&gt;

&lt;div class=&quot;form-check-radio disabled&quot;&gt;
    &lt;label class=&quot;form-check-label&quot;&gt;
        &lt;input class=&quot;form-check-input&quot; type=&quot;radio&quot; name=&quot;exampleRadioz&quot; id=&quot;exampleRadios4&quot; value=&quot;option4&quot; checked disabled&gt;
        Disabled radio is on
        &lt;span class=&quot;form-check-sign&quot;&gt;&lt;/span&gt;
    &lt;/label&gt;
&lt;/div&gt;</pre>
	    </div>

	        </div>
	    <!-- end row -->

	    <!-- dropdown row -->
	    <div class="tim-row" id="dropdown-row">
	            <h2> Dropdown </h2>
	            <legend></legend>
	            <p class="space-top">
	            We are very proud to present the dropdown, we added a subtle animation resembling a piece of paper sliding down. Here is an example and the code:
	            </p>

	            <div class="row">
	                <div class="col-md-3 dropdown">
	                    <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
	                    	Dropdown
	                    	<b class="caret"></b>
	                	</a>
						<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
							<li class="dropdown-header">Dropdown header</li>
							<a class="dropdown-item" href="#pk">Action</a>
							<a class="dropdown-item" href="#pk">Another action</a>
							<a class="dropdown-item" href="#pk">Something else here</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#pk">Separated link</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#pk">Another separated link</a>
						</ul>
	                </div>
	            </div>


	            <div class="area-line">
	    			<div id="dropdown">
	    				<pre class="prettyprint">
&lt;div class=&quot;dropdown&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;btn btn-default dropdown-toggle&quot; data-toggle=&quot;dropdown&quot;&gt;
        Dropdown
        &lt;b class=&quot;caret&quot;&gt;&lt;/b&gt;
    &lt;/a&gt;
    &lt;ul class=&quot;dropdown-menu&quot; aria-labelledby=&quot;dropdownMenuButton&quot;&gt;
        &lt;li class=&quot;dropdown-header&quot;&gt;Dropdown header&lt;/li&gt;
        &lt;a class=&quot;dropdown-item&quot; href=&quot;#pk&quot;&gt;Action&lt;/a&gt;
        &lt;a class=&quot;dropdown-item&quot; href=&quot;#pk&quot;&gt;Another action&lt;/a&gt;
        &lt;a class=&quot;dropdown-item&quot; href=&quot;#pk&quot;&gt;Something else here&lt;/a&gt;
        &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
        &lt;a class=&quot;dropdown-item&quot; href=&quot;#pk&quot;&gt;Separated link&lt;/a&gt;
        &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
        &lt;a class=&quot;dropdown-item&quot; href=&quot;#pk&quot;&gt;Another separated link&lt;/a&gt;
    &lt;/ul&gt;
&lt;/div&gt;</pre>
	    </div>
	            </div>

	    </div>
	    <!-- end row -->

	    <!-- inputs row -->
	        <div class="tim-row" id="inputs-row">
	                <h2>Inputs </h2>
	                <legend></legend>

	                <p class="space-top">
	                We restyled the Bootstrap input to give it a different look. You can use the classic look, different colors and states or input groups.
	                </p>
	                <div class="row">
		                <div class="col-md-6">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Default">
							</div>
		            	</div>
		            	<div class="col-md-6">
							<div class="form-group has-success">
								<input type="text" class="form-control form-control-success" id="inputSuccess1" value="Success">
							</div>
		            	</div>
	        		</div>
	                <div class="row">
		                <div class="col-md-6">
							<div class="form-group has-danger">
								<input type="text" class="form-control form-control-danger" id="inputDanger1" value="Error">
								<div class="form-control-feedback">Sorry, that username's taken. Try another?</div>
							</div>
		            	</div>
		            	<div class="col-md-6">
							<div class="input-group">
								<input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
								<span class="input-group-addon" id="basic-addon1"><i class="fa fa-group" aria-hidden="true"></i></span>
							</div>
		            	</div>
	        		</div>
	                <div class="area-line">
	        <div id="inputs">
	    <pre class="prettyprint">
&lt;div class=&quot;row&quot;&gt;
    &lt;div class=&quot;col-md-6&quot;&gt;
        &lt;div class=&quot;form-group&quot;&gt;
            &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Default&quot;&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-md-6&quot;&gt;
        &lt;div class=&quot;form-group has-success&quot;&gt;
            &lt;input type=&quot;text&quot; class=&quot;form-control form-control-success&quot; id=&quot;inputSuccess1&quot; placeholder=&quot;Success&quot;&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;row&quot;&gt;
    &lt;div class=&quot;col-md-6&quot;&gt;
        &lt;div class=&quot;form-group has-danger&quot;&gt;
            &lt;input type=&quot;text&quot; class=&quot;form-control form-control-danger&quot; id=&quot;inputDanger1&quot; placeholder=&quot;Error&quot;&gt;
            &lt;div class=&quot;form-control-feedback&quot;&gt;Sorry, that username's taken. Try another?&lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-md-6&quot;&gt;
        &lt;div class=&quot;input-group&quot;&gt;
            &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Username&quot; aria-describedby=&quot;basic-addon1&quot;&gt;
            &lt;span class=&quot;input-group-addon&quot; id=&quot;basic-addon1&quot;&gt;&lt;i class=&quot;fa fa-group&quot; aria-hidden=&quot;true&quot;&gt;&lt;/i&gt;&lt;/span&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</pre>
	    </div>
	    	</div>
	    </div>
	    <!-- end row -->

	    <!-- textarea row -->
	    <div class="tim-row" id="textarea-row">
	        <h2>Textarea</h2>
	        <legend></legend>
	        <p class="space-top">We added custom style for the textarea, so it looks similar to all other inputs.</p>

	        <textarea class="form-control" rows="4" placeholder="Tell us your thoughts and feelings..."></textarea>

	        <div class="area-line">
	    <div id="textarea">
	    <pre class="prettyprint">
&lt;textarea class=&quot;form-control&quot; rows=&quot;4&quot; placeholder=&quot;Tell us your thoughts&quot;&gt;&lt;/textarea&gt;</pre>
	    </div>
	        </div>
	    </div>
	    <!-- end row -->

	    <!-- navbar row -->
	    <div class="tim-row" id="navbar-row">
	            <h2>Navbar </h2>
	            <legend></legend>
	            <p class="space-top">
	                We restyled the classic Bootstrap Navbar:
	            </p>

				<nav class="navbar navbar-expand-md navbar-default">
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        <span class="navbar-toggler-icon"></span>
                        <span class="navbar-toggler-icon"></span>
					</button>
                    <a class="navbar-brand" href="#">Work in progress</a>
                    <div class="collapse navbar-collapse" id="navbar-menu">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="#pk">Link</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#pk">Link</a>
                            </li>
                            <div class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" id="dropdownMenuButton" href="#pk" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <li class="dropdown-header">Dropdown header</li>
                                    <a class="dropdown-item" href="#pk">Action</a>
                                    <a class="dropdown-item" href="#pk">Another action</a>
                                    <a class="dropdown-item" href="#pk">Something else here</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#pk">Separated link</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#pk">Another separated link</a>
                                </ul>
                            </div>
                        </ul>
                    </div>
                </nav>

	            <div class="area-line">

	    <div id="navbarCode">
	    <pre class="prettyprint">
&lt;nav class=&quot;navbar navbar-expand-md navbar-default&quot;&gt;
    &lt;button class=&quot;navbar-toggler navbar-toggler-right&quot; type=&quot;button&quot; data-toggle=&quot;collapse&quot; data-target=&quot;#navbar-menu&quot; aria-controls=&quot;navbarSupportedContent&quot; aria-expanded=&quot;false&quot; aria-label=&quot;Toggle navigation&quot;&gt;
        &lt;span class=&quot;navbar-toggler-icon&quot;&gt;&lt;/span&gt;
        &lt;span class=&quot;navbar-toggler-icon&quot;&gt;&lt;/span&gt;
        &lt;span class=&quot;navbar-toggler-icon&quot;&gt;&lt;/span&gt;
    &lt;/button&gt;
    &lt;a class=&quot;navbar-brand&quot; href=&quot;#&quot;&gt;Work in progress&lt;/a&gt;
    &lt;div class=&quot;collapse navbar-collapse&quot; id=&quot;navbar-menu&quot;&gt;
        &lt;ul class=&quot;navbar-nav mr-auto&quot;&gt;
            &lt;li class=&quot;nav-item&quot;&gt;
                &lt;a class=&quot;nav-link&quot; href=&quot;#pk&quot;&gt;Link&lt;/a&gt;
            &lt;/li&gt;
            &lt;li class=&quot;nav-item&quot;&gt;
                &lt;a class=&quot;nav-link&quot; href=&quot;#pk&quot;&gt;Link&lt;/a&gt;
            &lt;/li&gt;
            &lt;div class=&quot;nav-item dropdown&quot;&gt;
                &lt;a class=&quot;nav-link dropdown-toggle&quot; data-toggle=&quot;dropdown&quot; id=&quot;dropdownMenuButton&quot; href=&quot;#pk&quot; role=&quot;button&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;Dropdown&lt;/a&gt;
                &lt;ul class=&quot;dropdown-menu&quot; aria-labelledby=&quot;dropdownMenuButton&quot;&gt;
                    &lt;li class=&quot;dropdown-header&quot;&gt;Dropdown header&lt;/li&gt;
                    &lt;a class=&quot;dropdown-item&quot; href=&quot;#pk&quot;&gt;Action&lt;/a&gt;
                    &lt;a class=&quot;dropdown-item&quot; href=&quot;#pk&quot;&gt;Another action&lt;/a&gt;
                    &lt;a class=&quot;dropdown-item&quot; href=&quot;#pk&quot;&gt;Something else here&lt;/a&gt;
                    &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
                    &lt;a class=&quot;dropdown-item&quot; href=&quot;#pk&quot;&gt;Separated link&lt;/a&gt;
                    &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
                    &lt;a class=&quot;dropdown-item&quot; href=&quot;#pk&quot;&gt;Another separated link&lt;/a&gt;
                &lt;/ul&gt;
            &lt;/div&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
&lt;/nav&gt;</pre>
	    </div>
	            </div>

	            <p class="space-top">
	                Besides the default navbar, we added 5 new classes for colors: <code>primary</code>, <code>info</code>, <code>success</code>, <code>warning</code>, <code>danger</code>, <code>transparent</code>. If you want to use one of them, you have to replace the <code>navbar-default</code> with the class for the chosen color <code>navbar-#class</code>.
	            </p>

					<nav class="navbar navbar-expand-md bg-primary">
						<div class="container">
							<button class="navbar-toggler navbar-toggler-right burger-menu" type="button" data-toggle="collapse" data-target="#navbar-primary" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-bar"></span>
								<span class="navbar-toggler-bar"></span>
								<span class="navbar-toggler-bar"></span>
							</button>
							<a class="navbar-brand" href="#">Primary Color</a>
							<div class="collapse navbar-collapse" id="navbar-primary">
								<ul class="navbar-nav ml-auto">
									<li class="nav-item">
										<a class="nav-link" href="#"><i class="nc-icon nc-compass-05" aria-hidden="true"></i>&nbsp;Discover</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#"><i class="nc-icon nc-single-02" aria-hidden="true"></i>&nbsp;Profile</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#"><i class="nc-icon nc-settings-gear-65" aria-hidden="true"></i>&nbsp;Settings</a>
									</li>
								</ul>
							</div>
						</div>
					</nav>
					<br />
					<nav class="navbar navbar-expand-md bg-info">
						<div class="container">
							<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar-info" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-bar"></span>
								<span class="navbar-toggler-bar"></span>
								<span class="navbar-toggler-bar"></span>
							</button>
							<a class="navbar-brand" href="#">Info Color</a>
							<div class="collapse navbar-collapse" id="navbar-info">
								<ul class="navbar-nav ml-auto">
									<li class="nav-item">
										<a class="nav-link" href="#">Discover</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#">Profile</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#">Settings</a>
									</li>
								</ul>
							</div>
						</div>
					</nav>
					<br />
					<nav class="navbar navbar-expand-md bg-success">
						<div class="container">
							<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar-success" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-bar"></span>
								<span class="navbar-toggler-bar"></span>
								<span class="navbar-toggler-bar"></span>
							</button>
							<a class="navbar-brand" href="#">Success Color</a>
							<div class="collapse navbar-collapse" id="navbar-success">
								<ul class="navbar-nav ml-auto">
									<li class="nav-item">
										<a class="nav-link" href="#"><i class="nc-icon nc-compass-05" aria-hidden="true"></i></a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#"><i class="nc-icon nc-single-02" aria-hidden="true"></i> </a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#"><i class="nc-icon nc-settings-gear-65" aria-hidden="true"></i></a>
									</li>
								</ul>
							</div>
						</div>
					</nav>
					<br />
					<nav class="navbar navbar-expand-md bg-warning">
						<div class="container">
							<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar-warning" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-bar"></span>
								<span class="navbar-toggler-bar"></span>
								<span class="navbar-toggler-bar"></span>
							</button>
							<a class="navbar-brand" href="#">Warning Color</a>
							<div class="collapse navbar-collapse" id="navbar-warning">
								<ul class="navbar-nav ml-auto">
									<li class="nav-item">
										<a class="nav-link" href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
									</li>
								</ul>
							</div>
						</div>
					</nav>
					<br />
					<nav class="navbar navbar-expand-md bg-danger">
						<div class="container">
							<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar-danger" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-bar"></span>
								<span class="navbar-toggler-bar"></span>
								<span class="navbar-toggler-bar"></span>
							</button>
							<a class="navbar-brand" href="#">Danger Color</a>
							<div class="collapse navbar-collapse" id="navbar-danger">
								<ul class="navbar-nav ml-auto">
									<li class="nav-item">
										<a class="nav-link" href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i> Share</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#"><i class="fa fa-twitter" aria-hidden="true"></i> Tweet</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#"><i class="fa fa-pinterest" aria-hidden="true"></i> Pin</a>
									</li>
								</ul>
							</div>
						</div>
					</nav>
					<br />
					<div class="navigation-example">
						<nav class="navbar navbar-expand-md navbar-transparent nav-no-padding">
							<div class="container">
								<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar-transparent" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
									<span class="navbar-toggler-bar"></span>
									<span class="navbar-toggler-bar"></span>
									<span class="navbar-toggler-bar"></span>
								</button>
								<a class="navbar-brand" href="#">Transparent</a>
								<div class="collapse navbar-collapse" id="navbar-transparent">
									<ul class="navbar-nav ml-auto">
										<li class="nav-item">
											<a class="nav-link" href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i> Facebook</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="#"><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="#"><i class="fa fa-instagram" aria-hidden="true"></i> Instagram</a>
										</li>
									</ul>
								</div>
							</div>
						</nav>
					</div>


        <p class="space-top">
            Besides all this customisation, we have an extra navbar. <code>navbar-transparent</code> is a special class that you can to use if you want the navbar to be transparent. We recommend that the part of your page that has the transparent navbar contains something non-cluttered, like an image.
        </p>

	    <!-- </div> -->
	    <!-- end row -->

	    <!--     nav tabs row -->
	    <div class="tim-row" id="navtabs-row">
	        <h2> Nav Tabs</h2>
	        <legend></legend>
	        <p class="space-top">We changed the look for the nav tabs, so they can easily integrate with the rest of the kit.</p>

			<div class="nav-tabs-navigation">
				<div class="nav-tabs-wrapper">
					<ul class="nav nav-tabs" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" data-toggle="tab" href="#home" role="tab">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#profile" role="tab">Profile</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#messages" role="tab">Messages</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Settings</a>
							<ul class="dropdown-menu ">
								<div class="dropdown-header" data-toggle="tab" href="#action">Header</div>
								<a  class="dropdown-item" href="#">Action</a>
								<a class="dropdown-item" href="#">Another action</a>
							</ul>
						</li>
					</ul>
				</div>
			</div>
			<!-- Tab panes -->
			<div class="tab-content text-center">
				<div class="tab-pane active" id="home" role="tabpanel">Here is information about home.</div>
				<div class="tab-pane" id="profile" role="tabpanel">Here is your profile.</div>
				<div class="tab-pane" id="messages" role="tabpanel">Here are your messages.</div>
				<div class="tab-pane" id="action" role="tabpanel">Vestibulum ex velit, cursus in mauris in, egestas tempor orci.</div>
				<div class="tab-pane" id="another-action" role="tabpanel">Ut sem metus, lacinia id lobortis vel, mollis ut quam.</div>
			</div>
	        <div class="area-line">
	    		<div id="navTabs">
	    			<pre class="prettyprint">
&lt;div class=&quot;nav-tabs-navigation&quot;&gt;
    &lt;div class=&quot;nav-tabs-wrapper&quot;&gt;
        &lt;ul class=&quot;nav nav-tabs&quot; role=&quot;tablist&quot;&gt;
            &lt;li class=&quot;nav-item&quot;&gt;
                &lt;a class=&quot;nav-link active&quot; data-toggle=&quot;tab&quot; href=&quot;#home&quot; role=&quot;tab&quot;&gt;Home&lt;/a&gt;
            &lt;/li&gt;
            &lt;li class=&quot;nav-item&quot;&gt;
                &lt;a class=&quot;nav-link&quot; data-toggle=&quot;tab&quot; href=&quot;#profile&quot; role=&quot;tab&quot;&gt;Profile&lt;/a&gt;
            &lt;/li&gt;
            &lt;li class=&quot;nav-item&quot;&gt;
                &lt;a class=&quot;nav-link&quot; data-toggle=&quot;tab&quot; href=&quot;#messages&quot; role=&quot;tab&quot;&gt;Messages&lt;/a&gt;
            &lt;/li&gt;
            &lt;li class=&quot;nav-item dropdown&quot;&gt;
                &lt;a class=&quot;nav-link dropdown-toggle&quot; data-toggle=&quot;dropdown&quot; href=&quot;#&quot; role=&quot;button&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;Settings&lt;/a&gt;
                &lt;ul class=&quot;dropdown-menu &quot;&gt;
                    &lt;div class=&quot;dropdown-header&quot; data-toggle=&quot;tab&quot; href=&quot;#action&quot;&gt;Header&lt;/div&gt;
                    &lt;a  class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;
                    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;
                &lt;/ul&gt;
            &lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;!-- Tab panes --&gt;
&lt;div class=&quot;tab-content text-center&quot;&gt;
    &lt;div class=&quot;tab-pane active&quot; id=&quot;home&quot; role=&quot;tabpanel&quot;&gt;Here is information about home.&lt;/div&gt;
    &lt;div class=&quot;tab-pane&quot; id=&quot;profile&quot; role=&quot;tabpanel&quot;&gt;Here is your profile.&lt;/div&gt;
    &lt;div class=&quot;tab-pane&quot; id=&quot;messages&quot; role=&quot;tabpanel&quot;&gt;Here are your messages.&lt;/div&gt;
    &lt;div class=&quot;tab-pane&quot; id=&quot;action&quot; role=&quot;tabpanel&quot;&gt;Vestibulum ex velit, cursus in mauris in, egestas tempor orci.&lt;/div&gt;
    &lt;div class=&quot;tab-pane&quot; id=&quot;another-action&quot; role=&quot;tabpanel&quot;&gt;Ut sem metus, lacinia id lobortis vel, mollis ut quam.&lt;/div&gt;
&lt;/div&gt;</pre>
	    	</div>
	    </div>
	</div>
	    <!--     end row -->

	    <!-- nav pills row -->
	    <div class="tim-row" id="navpills-row">
	            <h2> Nav Pills</h2>
	            <legend></legend>
	            <p class="space-top">
	                We changed the design for the Bootstrap nav pills into something a bit more fresh. We also added more color classes for customisation.
	            </p>
				<!-- Nav pills -->
				<ul class="nav nav-pills nav-pills-danger">
					<li class="nav-item">
						<a class="nav-link active" data-toggle="tab" href="#0">Info</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#0">Menu</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#0">Concept</a>
					</li>
				</ul>
				<!-- Pill panes -->
				<div class="tab-content">
					<div class="tab-pane active" id="home" role="tabpanel"></div>
					<div class="tab-pane" id="profile" role="tabpanel"></div>
					<div class="tab-pane" id="messages" role="tabpanel"></div>
					<div class="tab-pane" id="settings" role="tabpanel"></div>
				</div>
	            <div class="area-line">
	    			<div id="navPills" >
	    				<pre class="prettyprint">
&lt;!-- Nav pills --&gt;
&lt;ul class=&quot;nav nav-pills nav-pills-danger&quot;&gt;
    &lt;li class=&quot;nav-item&quot;&gt;
        &lt;a class=&quot;nav-link active&quot; data-toggle=&quot;tab&quot; href=&quot;#0&quot;&gt;Info&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class=&quot;nav-item&quot;&gt;
        &lt;a class=&quot;nav-link&quot; data-toggle=&quot;tab&quot; href=&quot;#0&quot;&gt;Menu&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class=&quot;nav-item&quot;&gt;
        &lt;a class=&quot;nav-link&quot; data-toggle=&quot;tab&quot; href=&quot;#0&quot;&gt;Concept&lt;/a&gt;
    &lt;/li&gt;
&lt;/ul&gt;
&lt;!-- Pill panes --&gt;
&lt;div class=&quot;tab-content&quot;&gt;
    &lt;div class=&quot;tab-pane active&quot; id=&quot;home&quot; role=&quot;tabpanel&quot;&gt;&lt;/div&gt;
    &lt;div class=&quot;tab-pane&quot; id=&quot;profile&quot; role=&quot;tabpanel&quot;&gt;&lt;/div&gt;
    &lt;div class=&quot;tab-pane&quot; id=&quot;messages&quot; role=&quot;tabpanel&quot;&gt;&lt;/div&gt;
    &lt;div class=&quot;tab-pane&quot; id=&quot;settings&quot; role=&quot;tabpanel&quot;&gt;&lt;/div&gt;
&lt;/div&gt;</pre>
		    </div>
		</div>
	</div>
	    <!-- end row -->

	    <!-- pagination row -->
	    <div class="tim-row" id="pagination-row">
	            <h2> Pagination</h2>
	            <legend></legend>
	            <p class="space-top">
	            We took the Bootstrap pagination elements and customised them to fit the overall theme.
	        </p>
			<nav aria-label="Page navigation example">
				<ul class="pagination">
					<li class="page-item">
						<a class="page-link" href="#" aria-label="Previous">
							<i class="fa fa-angle-left" aria-hidden="true"></i>
							<span class="sr-only">Previous</span>
						</a>
					</li>
					<li class="page-item"><a class="page-link" href="#">1</a></li>
					<li class="page-item"><a class="page-link" href="#">2</a></li>
					<li class="page-item"><a class="page-link" href="#">3</a></li>
					<li class="page-item"><a class="page-link" href="#">4</a></li>
					<li class="page-item"><a class="page-link" href="#">5</a></li>
					<li class="page-item">
						<a class="page-link" href="#" aria-label="Next">
							<i class="fa fa-angle-right" aria-hidden="true"></i>
							<span class="sr-only">Next</span>
						</a>
					</li>
				</ul>
			</nav>
			<br/>
			<nav aria-label="...">
				<ul class="pagination">
					<li class="page-item">
						<a class="page-link" href="#" tabindex="-1">Previous</a>
					</li>
					<li class="page-item"><a class="page-link" href="#">1</a></li>
					<li class="page-item"><a class="page-link" href="#">2</a></li>
					<li class="page-item active">
						<a class="page-link" href="#">3<span class="sr-only">(current)</span></a>
					</li>
					<li class="page-item"><a class="page-link" href="#">4</a></li>
					<li class="page-item"><a class="page-link" href="#">5</a></li>
					<li class="page-item">
						<a class="page-link" href="#">Next</a>
					</li>
				</ul>
			</nav>
	            <div class="area-line">
	    			<div id="pagination">
	    				<pre class="prettyprint">
&lt;nav aria-label=&quot;Page navigation example&quot;&gt;
    &lt;ul class=&quot;pagination&quot;&gt;
        &lt;li class=&quot;page-item&quot;&gt;
            &lt;a class=&quot;page-link&quot; href=&quot;#&quot; aria-label=&quot;Previous&quot;&gt;
                &lt;i class=&quot;fa fa-angle-left&quot; aria-hidden=&quot;true&quot;&gt;&lt;/i&gt;
                &lt;span class=&quot;sr-only&quot;&gt;Previous&lt;/span&gt;
            &lt;/a&gt;
        &lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;1&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;2&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;4&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;5&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;
            &lt;a class=&quot;page-link&quot; href=&quot;#&quot; aria-label=&quot;Next&quot;&gt;
                &lt;i class=&quot;fa fa-angle-right&quot; aria-hidden=&quot;true&quot;&gt;&lt;/i&gt;
                &lt;span class=&quot;sr-only&quot;&gt;Next&lt;/span&gt;
            &lt;/a&gt;
        &lt;/li&gt;
    &lt;/ul&gt;
&lt;/nav&gt;
&lt;br/&gt;
&lt;nav aria-label=&quot;...&quot;&gt;
    &lt;ul class=&quot;pagination&quot;&gt;
        &lt;li class=&quot;page-item&quot;&gt;
            &lt;a class=&quot;page-link&quot; href=&quot;#&quot; tabindex=&quot;-1&quot;&gt;Previous&lt;/a&gt;
        &lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;1&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;2&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item active&quot;&gt;
            &lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;3&lt;span class=&quot;sr-only&quot;&gt;(current)&lt;/span&gt;&lt;/a&gt;
        &lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;4&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;5&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;page-item&quot;&gt;
            &lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;Next&lt;/a&gt;
        &lt;/li&gt;
    &lt;/ul&gt;
&lt;/nav&gt;</pre>
	    </div>
	            </div>
	    </div>
	    <!-- end row -->

	    <!-- progressbar row -->
	    <div class="tim-row" id="progressbar-row">
	            <h2> Progress Bars</h2>
	            <legend></legend>

	            <p class="space-top">The progress bars from Bootstrap hold the same classes and functionality. You can use the standard class or you can add the class 'progress-thin' for a progress bar that has only half the height of the normal one.</p>
				<div class="progress">
					<div class="progress-bar progress-bar-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
				</div><br/>
				<div class="progress">
					<div class="progress-bar progress-bar-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
				</div><br/>
				<div class="progress">
					<div class="progress-bar progress-bar-danger" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
				</div><br/>
				<div class="progress">
					<div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
					<div class="progress-bar progress-bar-success" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
					<div class="progress-bar progress-bar-warning" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
				</div>
	            <div class="area-line">

	    <div id="progressBars">
	    <pre class="prettyprint">
&lt;div class=&quot;progress&quot;&gt;
    &lt;div class=&quot;progress-bar progress-bar-success&quot; role=&quot;progressbar&quot; style=&quot;width: 25%&quot; aria-valuenow=&quot;25&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;
&lt;/div&gt;&lt;br/&gt;
&lt;div class=&quot;progress&quot;&gt;
    &lt;div class=&quot;progress-bar progress-bar-info&quot; role=&quot;progressbar&quot; style=&quot;width: 50%&quot; aria-valuenow=&quot;50&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;
&lt;/div&gt;&lt;br/&gt;
&lt;div class=&quot;progress&quot;&gt;
    &lt;div class=&quot;progress-bar progress-bar-danger&quot; role=&quot;progressbar&quot; style=&quot;width: 80%&quot; aria-valuenow=&quot;80&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;
&lt;/div&gt;&lt;br/&gt;
&lt;div class=&quot;progress&quot;&gt;
    &lt;div class=&quot;progress-bar&quot; role=&quot;progressbar&quot; style=&quot;width: 15%&quot; aria-valuenow=&quot;15&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;
    &lt;div class=&quot;progress-bar progress-bar-success&quot; role=&quot;progressbar&quot; style=&quot;width: 30%&quot; aria-valuenow=&quot;30&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;
    &lt;div class=&quot;progress-bar progress-bar-warning&quot; role=&quot;progressbar&quot; style=&quot;width: 20%&quot; aria-valuenow=&quot;20&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;
&lt;/div&gt;</pre>
	    </div>
	             </div>
	    </div>
	    <!-- end row -->

	    <!-- sliders row -->
	    <div class="tim-row" id="sliders-row">
	            <h2> Sliders</h2>
	            <legend></legend>
	            <p class="space-top">We restyled jQuery UI slider, while keeping the design consistent.</p>

				<div id="sliderRegular" class="slider noUi-target noUi-ltr noUi-horizontal noUi-connect"></div>
				<br/>
				<div id="sliderDouble" class="slider slider-info noUi-target noUi-ltr noUi-horizontal noUi-background"></div>
	            <div class="area-line">

	    <div id="sliderMarkup">
	    <pre class="prettyprint">
    &lt;!-- Markup --&gt;
&lt;div id=&quot;sliderRegular&quot; class=&quot;slider noUi-target noUi-ltr noUi-horizontal noUi-connect&quot;&gt;&lt;/div&gt;

&lt;div id=&quot;sliderDouble&quot; class=&quot;slider slider-info noUi-target noUi-ltr noUi-horizontal noUi-background&quot;&gt;&lt;/div&gt;</pre>
	    </div>
	            </div>
	    </div>
	    <!-- end row -->

	    <!-- labels row -->
	    <div class="tim-row" id="labels-row">
	        <h2>Labels</h2>
	        <legend></legend>
	        <p>We restyled the default options for labels and we added the filled class, that can be used in any combination.</p>
			<span class="label label-default">Default</span>
			<span class="label label-primary">Primary</span>
			<span class="label label-info">Info</span>
			<span class="label label-success">Success</span>
			<span class="label label-warning">Warning</span>
			<span class="label label-danger">Danger</span>
	        <div class="area-line">

	    		<div id="labels">
	    			<pre class="prettyprint">
&lt;span class=&quot;label label-default&quot;&gt;Default&lt;/span&gt;
&lt;span class=&quot;label label-primary&quot;&gt;Primary&lt;/span&gt;
&lt;span class=&quot;label label-info&quot;&gt;Info&lt;/span&gt;
&lt;span class=&quot;label label-success&quot;&gt;Success&lt;/span&gt;
&lt;span class=&quot;label label-warning&quot;&gt;Warning&lt;/span&gt;
&lt;span class=&quot;label label-danger&quot;&gt;Danger&lt;/span&gt;</pre>
	    		</div>
	        </div>
	    </div>
	    <!-- end row -->

	    <!-- datepicker row -->
	    <div class="tim-row" id="datetimepicker-row">
	        <h2>Datetimepicker</h2>
	        <legend></legend>
	        <p class="space-top">The re-styled the Bootstrap datepicker and we added the Paper Kit colors, which you can give as parameter to the plugin: color = {blue,azure,green,orange,red}.</p>
	        <div class="row">
	            <div class="col-md-4">
					<div class="form-group">
						<div class='input-group date' id='datetimepicker'>
							<input type='text' class="form-control datetimepicker" placeholder="05/08/2017" />
							<span class="input-group-addon">
								<span class="glyphicon glyphicon-calendar"><i class="fa fa-calendar" aria-hidden="true"></i></span>
							</span>
						</div>
					</div>
	            </div>
	        </div>
	        <div class="area-line">
	    		<div id="datepicker">
	    			<pre class="prettyprint">
    &lt;!-- markup --&gt;
&lt;div class=&quot;form-group&quot;&gt;
    &lt;div class='input-group date' id='datetimepicker'&gt;
        &lt;input type='text' class=&quot;form-control datetimepicker&quot; placeholder=&quot;05/08/2017&quot; /&gt;
        &lt;span class=&quot;input-group-addon&quot;&gt;
            &lt;span class=&quot;glyphicon glyphicon-calendar&quot;&gt;&lt;i class=&quot;fa fa-calendar&quot; aria-hidden=&quot;true&quot;&gt;&lt;/i&gt;&lt;/span&gt;
        &lt;/span&gt;
    &lt;/div&gt;
&lt;/div&gt;
    &lt;!-- javascript --&gt;
$('#datetimepicker').datetimepicker({
	icons: {
		time: "fa fa-clock-o",
		date: "fa fa-calendar",
		up: "fa fa-chevron-up",
		down: "fa fa-chevron-down",
		previous: 'fa fa-chevron-left',
		next: 'fa fa-chevron-right',
		today: 'fa fa-screenshot',
		clear: 'fa fa-trash',
		close: 'fa fa-remove'
	}

});
	</pre>
	    </div>
	        </div>
	    </div>
	    <!-- end row -->

	    <!-- modals row -->
	    <div class="tim-row" id="modal-row">
	        <h2>Modals</h2>
	        <legend></legend>
	        <p class="space-top">We restyled the classic Twitter Bootstrap and gave it a more simple look. TO have the footer splitted into 2 parts, please you the 'left-side' and 'right-side' classes. You can see and an example below.
	        </p>
			<!-- Button trigger modal -->
			<button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">
				Launch demo modal
			</button>

	        <div class="area-line">
	    		<div id="modals">
	    			<pre class="prettyprint">
&lt;!-- Button trigger modal --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-default btn-round&quot; data-toggle=&quot;modal&quot; data-target=&quot;#myModal&quot;&gt;
    Launch demo modal
&lt;/button&gt;
&lt;!-- Modal --&gt;
&lt;div class=&quot;modal fade&quot; id=&quot;myModal&quot; tabindex=&quot;-1&quot; role=&quot;dialog&quot; aria-labelledby=&quot;exampleModalLabel&quot; aria-hidden=&quot;true&quot;&gt;
    &lt;div class=&quot;modal-dialog&quot; role=&quot;document&quot;&gt;
        &lt;div class=&quot;modal-content&quot;&gt;
            &lt;div class=&quot;modal-header&quot;&gt;
                &lt;h5 class=&quot;modal-title text-center&quot; id=&quot;exampleModalLabel&quot;&gt;Modal title&lt;/h5&gt;
                &lt;button type=&quot;button&quot; class=&quot;close&quot; data-dismiss=&quot;modal&quot; aria-label=&quot;Close&quot;&gt;
                    &lt;span aria-hidden=&quot;true&quot;&gt;&amp;times;&lt;/span&gt;
                &lt;/button&gt;
            &lt;/div&gt;
            &lt;div class=&quot;modal-body&quot;&gt; Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.
            &lt;/div&gt;
            &lt;div class=&quot;modal-footer&quot;&gt;
                &lt;div class=&quot;left-side&quot;&gt;
                    &lt;button type=&quot;button&quot; class=&quot;btn btn-default btn-link&quot; data-dismiss=&quot;modal&quot;&gt;Never mind&lt;/button&gt;
                &lt;/div&gt;
                &lt;div class=&quot;divider&quot;&gt;&lt;/div&gt;
                &lt;div class=&quot;right-side&quot;&gt;
                    &lt;button type=&quot;button&quot; class=&quot;btn btn-danger btn-link&quot;&gt;Delete&lt;/button&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</pre>
	    </div>
	        </div>
	    </div>
	    <!-- end row -->

	    <!-- tooltip row -->
	    <div class="tim-row" id="tooltip-row">
	        <h2> Tooltips</h2>
	        <legend></legend>
	        <p class="space-top">
	        We restyled the Bootstrap tooltip.
	        </p>
	        <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">On bottom</button>
	        <div class="area-line">
				<div id="tooltipMarkup">
					<pre class="prettyprint">
    &lt;!-- Markup --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-default btn-round&quot; data-toggle=&quot;tooltip&quot; data-placement=&quot;bottom&quot; title=&quot;Tooltip on bottom&quot;&gt;On bottom&lt;/button&gt;

    &lt;!-- Javascript --&gt;
$('[data-toggle=&quot;tooltip&quot;]').tooltip();</pre>
	    		</div>
	        </div>
	    </div>
	    <!-- end row -->

	    <!-- popover row -->
	    <div class="tim-row" id="popover-row">
	        <h2>Popovers</h2>
	        <legend></legend>
	        <p class="space-top">
	            We restyled the Bootstrap popover and we added an extra effect of opening. When the popover is active, the background of the page gets darker, letting you concentrate on the information inside the popover. <br />
	            See the following example:
	        </p>
	        <button type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="bottom" data-title="Popover on bottom" data-content="Here will be some very useful information about his popover.">on bottom</button>
	        <div class="area-line">
	    		<div id="popover">
	    			<pre class="prettyprint">
	&lt;!-- markup --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-default&quot; data-container=&quot;body&quot; data-toggle=&quot;popover&quot; data-placement=&quot;bottom&quot; data-title=&quot;Popover on bottom&quot; data-content=&quot;Here will be some very useful information about his popover.&quot;&gt;on bottom&lt;/button&gt;

	&lt;!-- javascript --&gt;

pk.initPopovers();</pre>
	    		</div>
	        </div>
	    </div>
	    <!-- end row -->

	    <!-- notification row -->
	    <div class="tim-row" id="notification-row">
	            <h2> Notifications </h2>
	            <legend></legend>
	            <p>
	            The new Paper Kit notifications are looking fresh and clean. They go great with the navbar. If you want to see how we recommend using them, see on of the example pages <a href="../examples/landing.html">here.</a> </p>
			    </div>
			    <!-- end row -->

			    </div>
	                <!-- end container -->
	        <!-- </div> -->
	    </div>
	</div>

</div>
</div>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title text-center" id="exampleModalLabel">Modal title</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body"> Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.
			</div>
			<div class="modal-footer">
				<div class="left-side">
					<button type="button" class="btn btn-default btn-link" data-dismiss="modal">Never mind</button>
				</div>
				<div class="divider"></div>
				<div class="right-side">
					<button type="button" class="btn btn-danger btn-link">Delete</button>
				</div>
			</div>
		</div>
	</div>
</div>
	<footer class="footer footer-black">
		<div class="container">
			<div class="row">
				<nav class="footer-nav">
					<ul>
						<li><a href="https://www.creative-tim.com">Creative Tim</a></li>
						<li><a href="http://blog.creative-tim.com">Blog</a></li>
						<li><a href="https://www.creative-tim.com/license">Licenses</a></li>
					</ul>
				</nav>
				<div class="credits ml-auto">
					<span class="copyright">
						© <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by Creative Tim
					</span>
				</div>
			</div>
		</div>
	</footer>

</div>
</body>

<!-- Core JS Files -->
<script src="ui_assets/js/jquery-3.2.1.js" type="text/javascript"></script>
<script src="ui_assets/js/jquery-ui-1.12.1.custom.min.js" type="text/javascript"></script>
<script src="ui_assets/js/popper.js" type="text/javascript"></script>
<script src="ui_assets/js/bootstrap.min.js" type="text/javascript"></script>

<!-- Plugin for Share buttons -->
<script src="ui_assets/js/jquery.sharrre.js"></script>

<!-- Plugin for Switches -->
<script src="ui_assets/js/bootstrap-switch.min.js"></script>

<!--  Plugins for Slider -->
<script src="ui_assets/js/nouislider.js"></script>

<!--  Plugins for DateTimePicker -->
<script src="ui_assets/js/moment.min.js"></script>
<script src="ui_assets/js/bootstrap-datetimepicker.min.js"></script>

<!--  Paper Kit Initialization snd functons -->
<script src="ui_assets/js/paper-kit.js?v=2.1.0"></script>

</html>

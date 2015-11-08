<?php

include_once('Controllers\DefaultController.php');
include_once('Model\DefaultModel.php');
include_once('View\DefaultView.php');
//initiate the triad

$model = new DefaultModel();

//It is important that the controller and the view share the model

$controller = new DefaultController($model);

$view = new DefaultView($model);

$controller->actionGetSumOfItems();
$controller->actionGetQuantityOfItems();

echo '<!DOCTYPE html>
	<html>
	<head>
		<title>Phones</title>
		<!-- HTML 5 markup and encoding utf-8 -->
		<meta http-equiv="Content-type" content="text/html; charset=utf-8">
		<!-- For Internet Explorer -->
		<meta http-equiv="X-UA-Compatible" content="IE=EDge">
		<!-- file of styles -->
		<link href="css/phones.css" rel="stylesheet" type="text/css">
		<!-- bxSlider CSS file -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/bootstrap.css">
		<!-- Optional theme -->
		<link rel="stylesheet" href="css/bootstrap-theme.css">
		<!-- jQuery library (served from Google) -->
		<script src="js/jquery-min.js"></script>
		<script src="js/bootstrap.min.js"></script>

	</head>
	<body>
	<nav class="navbar navbar-inverse navbar-static-top">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.php">
					<img alt="Brand" src="images/default.png">
				</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-custom" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="phones-all.php">Phones <span class="sr-only">(current)</span></a></li>
					<li><a href="notebooks.html">Notebooks</a></li>
					<li><a href="devices.html">Devices</a></li>
					<li><a href="tv.html">TV</a></li>
					<li><a href="support.html">Support</a></li>
					<li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cart <span class="caret"></span></a>
                        <ul class="dropdown-menu">';
if(isset($_SESSION['login_user'])){
    echo '<li><a href="logout.php">';
    echo 'Logout(' . $_SESSION['login_user'] . ')</a></li>';
} else {
    echo '<li><a href="register.php">Register</a></li>';
    echo '<li><a href="login.php">';
    echo 'Login</a></li>';
}
echo '
																	<li role="separator" class="divider"></li>
																	<li class="dropdown-header">Products</li>';
if(isset($_SESSION['login_user'])) {
    echo '<li><a href="cart.php">Cart: ' . $model->getAPrice() . '$';
    echo '<li><a href="#">' . $model->getAItems() . ' items</a>';
} else {
    echo ' <li><a href="#">Login to see your cart</a></li>';
}
echo    '
                        </ul>
                    </li>


				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>
	<div class="panel-default items-row">
		<div class="col-xs-2"></div>
		<div class="col-xs-8 items-align nav-size">
			<ul>
			    <a style="text-decoration: none; color: #666666;" href="phones.php">All</a>
				<a style="text-decoration: none; color: #666666;" href="apple.php">Apple</a>
				<a style="text-decoration: none; color: #666666;" href="samsung.php">Samsung</a>
			</ul>
		</div>
		<div class="col-xs-2"></div>
	</div>

	<div class="background">
		<div class="col-md-4"></div>
		<div class="col-md-4 items-align">
			<h1 class="header">Phones</h1>
			<p class="the-only">The only thing that can change your life absolutely</p>
			<a class="links" href="/learn-more" style="text-decoration: none">Learn more ></a> <a style="font-size: 20px; text-decoration: none" href="/get" style="text-decoration: none;">Get it now ></a>
			<p class="adding">In business from 2010, opened mainly in Kiev</p>
		</div>
		<div class="col-md-4"></div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-sm-1"></div>
			<div class="col-sm-12">
				<ul class="nav nav-list">
					<li class="divider"></li>
				</ul>
			</div>
			<div class="col-sm-1"></div>
		</div>
	</div>


	<div class="space"></div>

	<div class="iphone">
		<div class="col-sm-2"></div>
		<div class="col-sm-3">
			<h1 id="iphone" class="fc">Most people have at least a simple, if not sophisticated, mobile phone. These devices are convenient to carry around and you can use them on the go as long as there is network coverage wherever you are.Mobile phones have clearly made it easier to communicate.</h1>
		</div>
		<div class="col-sm-5"><img src="images/iphones.jpg"></div>
		<div class="col-sm-2"></div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-sm-1"></div>
			<div class="col-sm-12">
				<ul class="nav nav-list">
					<li class="divider"></li>
				</ul>
			</div>
			<div class="col-sm-1"></div>
		</div>
	</div>


	<div class="iphone">
		<div class="col-sm-1"></div>
		<div class="col-sm-6"><img src="images/galaxy.png"></div>
		<div class="col-sm-5">
			<h1 id="iphone" class="fc">With the upgrades made year in, year out, mobile phones are becoming more like computers with the added benefit of portability. One can receive and send emails, browse websites, download games and videos, book flight tickets,  and even chat with friends.</h1>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-sm-1"></div>
			<div class="col-sm-12">
				<ul class="nav nav-list">
					<li class="divider"></li>
				</ul>
			</div>
			<div class="col-sm-1"></div>
		</div>
	</div>

	<div class="iphone">
		<div class="col-sm-2"></div>
		<div class="col-sm-3">
			<h1 id="iphone" class="fc">Although the mobile phone doesn’t guarantee safety, you can use it to make calls whenever there is an emergency. Travelling with your phone is very important. In case you have an accident, you can always contact someone who will help you.</h1>
		</div>
		<div class="col-sm-5"><img src="images/galaxy.jpg"></div>
		<div class="col-sm-2"></div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-sm-1"></div>
			<div class="col-sm-12">
				<ul class="nav nav-list">
					<li class="divider"></li>
				</ul>
			</div>
			<div class="col-sm-1"></div>
		</div>
	</div>


	<div>
		<div class="col-sm-2"></div>
		<div class="col-sm-12 header">
			<h1 class="fc">Usefull, practical, as well as, pleasurable
				<br /> and much more!</h1>
		</div>
	</div>

	<div>
		<div class="col-xs-1"></div>
		<div class="col-sm-4">
			<img src="images/left-photo.jpg">
		</div>
		<div class="col-xs-1"></div>
		<div class="col-sm-4">
			<img src="images/right-photo.png">
		</div>
	</div>


	<div class="container">
		<div class="row">
			<div class="col-sm-1"></div>
			<div class="col-sm-12">
				<ul class="nav nav-list">
					<li class="divider"></li>
				</ul>
			</div>
			<div class="col-sm-1"></div>
		</div>
	</div>

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-sm-1"></div>
				<div class="col-sm-2">
					<ul>
						<li class="footer-menu"><b>Shop</b></li>
						<li><a class="items" href="/">Home</a></li>
						<li><a class="items" href="/phones">Phones</a></li>
						<li><a class="items" href="/notebooks">Notebooks</a></li>
						<li><a class="items" href="/devices">Devices</a></li>
						<li><a class="items" href="/tv">TV</a></li>
						<li><a class="items" href="/support">Support</a></li>
						<li><a class="items" href="/cart">Cart</a></li>
					</ul>
				</div>
				<div class="col-sm-2">
					<ul>
						<li class="footer-menu"><b>Store</b></li>
						<li><a class="items" href="/store">Find our store</a></li>
						<li><a class="items" href="/financing">Financing</a></li>
						<li><a class="items" href="/order">Order Status</a></li>
						<li><a class="items" href="/shop">Shopping help</a></li>
						<li><a class="items" href="/info">Info</a></li>
						<li><a class="items" href="/offices">Offices</a></li>
						<li><a class="items" href="/cell">Cell</a></li>
					</ul>
				</div>
				<div class="col-sm-2">
					<ul>
						<li class="footer-menu"><b>Account</b></li>
						<li><a class="items" href="/shop-id">Find your Id</a></li>
						<li><a class="items" href="/store">Store account</a></li>
					</ul>
					<ul>
						<li class="footer-menu"><b>Most valuable</b></li>
						<li><a class="items" href="/responsibility">Responsibility</a></li>
						<li><a class="items" href="/privacy">Privacy</a></li>
						<li><a class="items" href="/setting">Setting</a></li>
					</ul>
				</div>
				<div class="col-sm-2">
					<ul>
						<li class="footer-menu"><b>About Us</b></li>
						<li><a class="items" href="/our-company">Our company</a></li>
						<li><a class="items" href="/people">In-touch People</a></li>
						<li><a class="items" href="/managers">Our managers</a></li>
						<li><a class="items" href="/offices">Offices</a></li>
						<li><a class="items" href="/comments">Comments</a></li>
						<li><a class="items" href="/business">Business</a></li>
						<li><a class="items" href="/director">Director</a></li>
						<li><a class="items" href="/job">Job</a></li>
						<li><a class="items" href="/contact-us">Contact Us</a></li>
					</ul>
				</div>
				<div class="col-sm-2">
					<ul>
						<li class="footer-menu"><b>For education</b></li>
						<li><a class="items" href="/notebooks">Notebooks</a></li>
						<li><a class="items" href="/devices">Phones</a></li>
					</ul>
					<ul>
						<li class="footer-menu"><b>Business</b></li>
						<li><a class="items" href="/shop-id">Using notebooks in business</a></li>
						<li><a class="items" href="/store">Using phones in day-to-day life</a></li>
						<li><a class="items" href="/shop-id">Using watches in business</a></li>
					</ul>
				</div>
				<div class="col-sm-1"></div>
			</div>
		</div>


		<div class="container">
			<div class="row">
				<div class="col-sm-1"></div>
				<div class="col-sm-10">
					<p class="more-info pull-left">For more info about return items and shopping & delivery call +(380) 95 094 82 68.</p>
				</div>
				<div class="col-sm-1"></div>
			</div>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-sm-1"></div>
				<div class="col-sm-10">
					<ul class="nav nav-list">
						<li class="divider"></li>
					</ul>
				</div>
				<div class="col-sm-1"></div>
			</div>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-sm-1"></div>
				<div class="col-sm-4">
					<p class="more-info pull-left">Copyright &copy; Woden S Inc. All rights reserved.
				</div>
				<div class="col-sm-4">
					<ul class="hor_nav">
						<li><a class="items" href="/privacy">Privacy</a></li>
						<li><a class="items" href="/refunds">Refunds</a></li>
						<li><a class="items" href="/sales">Sales</a></li>
						<li><a class="items" href="site-map">Site map</a></li>
					</ul>
				</div>
				<div class="col-sm-1"></div>
			</div>
		</div>
	</footer>

	</body>
	</html>';
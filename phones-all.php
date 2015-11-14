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
		<link href="css/styles.css" rel="stylesheet" type="text/css">
		<!-- bxSlider CSS file -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/bootstrap.css">
		<!-- Optional theme -->
		<link rel="stylesheet" href="css/bootstrap-theme.css">
		<!-- jQuery library (served from Google) -->
		<script src="js/jquery-min.js"></script>
		<script src="js/bootstrap.min.js"></script>

	</head>
	<body>';

	$view->headerView();

echo   '<div class="panel-default items-row">
		<div class="col-xs-2"></div>
		<div class="col-xs-8 items-align nav-size text-center">
			<ul>
			    <a style="text-decoration: none; color: #666666;" href="phones.php">All</a>
				<a style="text-decoration: none; color: #666666;" href="apple.php">Apple</a>
				<a style="text-decoration: none; color: #666666;" href="samsung.php">Samsung</a>
			</ul>
		</div>
		<div class="col-xs-2"></div>
	</div>

	<div class="background text-center" style="margin-top: 100px;">
			<h1 class="header">Phones</h1>
			<p class="the-only">The only thing that can change your life absolutely</p>
			<a class="links" href="/learn-more" style="text-decoration: none">Learn more ></a> <a class="links" style="font-size: 20px; text-decoration: none" href="phones.php" style="text-decoration: none;">Get it now ></a>
			<p class="adding">In business from 2010, opened mainly in Kiev</p>
			<!--<h2><a href="phones.php" id="phones">Search phones for your choice ></a></h2>-->

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
		<div class="col-sm-5"><img src="images/iphones.jpg" style="width: 100%"></div>
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
		<div class="col-sm-6"><img src="images/galaxy.png" style="width: 100%"></div>
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
		<div class="col-sm-5"><img src="images/galaxy.jpg" style="width: 100%"></div>
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
		<div class="col-sm-12 header text-center">
			<h1 class="fc">Usefull, practical, as well as, pleasurable
				<br /> and much more!</h1>

			<h1 style="margin-bottom: 100px;"><a href="phones.php" id="phones">Order it now ></a></h1>
		</div>
	</div>


	<div>
		<div class="col-xs-1"></div>
		<div class="col-sm-4">
			<img src="images/left-photo.jpg" style="width: 100%">
		</div>
		<div class="col-xs-1"></div>
		<div class="col-sm-4">
			<img src="images/right-photo.png" style="width: 100%">
		</div>
	</div>';

	$view->actionGetFooter();

echo	'</body>
	</html>';
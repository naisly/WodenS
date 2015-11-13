<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 13.11.2015
 * Time: 16:33
 */

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
        <title>Woden S</title>
        <!-- HTML 5 markup and encoding utf-8 -->
        <meta http-equiv="Content-type" content="text/html; charset=utf-8">
        <!-- For Internet Explorer -->
        <meta http-equiv="X-UA-Compatible" content="IE=EDge">
        <!-- file of styles -->
        <link href="css/styles.css" rel="stylesheet" type="text/css">
        <link href="css/support.css" rel="stylesheet" type="text/css">
        <!-- bxSlider CSS file -->
        <link href="css/jquery.bxslider.css" rel="stylesheet">
        <!-- Bootstrap framework -->
        <!-- Latest compiled and minified CSS -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.css">
        <!-- Optional theme -->
        <link rel="stylesheet" href="css/bootstrap-theme.css">
        <!-- jQuery library (served from Google) -->
        <script src="js/jquery-min.js"></script>
        <!-- bxSlider Javascript file -->
        <script src="js/jquery.bxslider.min.js"></script>
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
                <a class="navbar-brand" href="/index.php">
                    <img alt="Brand" src="images/default.png">
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-custom" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="phones.php">Phones <span class="sr-only">(current)</span></a></li>
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
    <style type="text/css">
      html, body { height: 100%; margin: 0; padding: 0; }
      #map { height: 50%; margin-top: -20px; }
    </style>
    <body>
    <div id="map"></div>
    <div class="container">
        
    </div>


















    <script type="text/javascript">

    var map;
    function initMap() {
          var myLatLng = {lat: 50.4018575010069, lng: 30.6265022835628};

          // Create a map object and specify the DOM element for display.
          var map = new google.maps.Map(document.getElementById("map"), {
            center: myLatLng,
            scrollwheel: false,
            zoom: 14
          });

          // Create a marker and set its position.
          var marker = new google.maps.Marker({
            map: map,
            position: {lat: 50.4018575010069, lng: 30.6265022835628},
            title: "Hello World!"
          });
        }

        </script>
        <script async defer
          src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBYh1m89QdvogaeeaJyNuLBsX0ljdxmuK4&callback=initMap">
        </script>


    ';

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
                <a class="navbar-brand" href="index.php">
                    <img alt="Brand" src="images/default.png">
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-custom" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="phones-all.php">Phones <span class="sr-only">(current)</span></a></li>
                    <li><a href="notebooks.php">Notebooks</a></li>
                    <li><a href="devices.php">Devices</a></li>
                    <li><a href="tv.php">TV</a></li>
                    <li><a href="support.php">Support</a></li>
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
    <div class="support-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="com-md-4">
                    <div class="text-center">
                        <h1 class="lead-h">Welcome to our support service!</h1>
                        <p class="sub-h">We are here to help you</p>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="spacer"></div>

    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-4">
                <img src="images/communication.png" />
            </div>
            <div class="col-md-6">
                <div class="txt">
                    <h1>Our support community: </h1>

                    <div class="divider"></div>

                    <p class="lead-p"><b>Email:</b> serdiuk-it@gmail.com</p><br />
                    <p class="sub-p"><b>Phone:</b> (095) 094 82 68</p><br />
                    <p class="sub-p"><b>Address:</b> 5 Knyajiy zaton, Kyiv, Ukraine 02095</p>
                </div>

            </div>
        </div>
    </div>

    <div class="divider"></div>

    <div id="map"></div>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="text-center">
                    <img src="images/contact.png" style="width: 300px;" class="img-contact" />
                    <h1>Contact us</h1>
                    <p class="contact-p">We are going to help you with any issues with products, shipping details, orders and much more!
                      You could get support by Phone, email, contact form or just in our product
                      center with our costumers
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="text-center">
                    <img src="images/order.png" style="width: 80px;" class="img-contact" />
                    <h1>Find your order</h1>
                    <p class="contact-p">Check the status of your Order <br />
                      See if the product approved and <br />
                      much more!
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="divider"></div>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="images/support-2.jpg" class="img-contact" />
            </div>
            <div class="col-md-6" style="margin-top: 80px;">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-8">
                        <form role="form" action="get-support.php" method="post">
                            <div class="form-group">
                                <label for="name">Your Name</label>
                                <input type="text" class="form-control" name="name" required />
                            </div>
                            <div class="form-group">
                                <label for="email">Your Email</label>
                                <input type="email" class="form-control" name="email" required />
                            </div>
                            <div class="form-group">
                                <label for="subject">Subject</label>
                                <input type="text" class="form-control" name="subject" required />
                            </div>
                            <div class="form-group">
                                <textarea name="message" class="form-control" rows="10"></textarea>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary form-control">Submit</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-1"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="divider"></div>

    <footer>
        <div class="container" style="margin-top: 25px;">
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-2">
                    <ul>
                        <li class="footer-menu"><b>Shop</b></li>
                        <li><a class="items" href="index.php">Home</a></li>
                        <li><a class="items" href="phones-all.php">Phones</a></li>
                        <li><a class="items" href="notebooks.php">Notebooks</a></li>
                        <li><a class="items" href="devices.php">Devices</a></li>
                        <li><a class="items" href="tv.php">TV</a></li>
                        <li><a class="items" href="support.php">Support</a></li>
                        <li><a class="items" href="cart.php">Cart</a></li>
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
    </body>
    </html>';

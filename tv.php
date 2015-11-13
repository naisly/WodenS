<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 13.11.2015
 * Time: 13:50
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
        <link href="css/tv.css" rel="stylesheet" type="text/css">
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
    <div class="text-center">
        <h1 class="future-main">The future of television is here now!</h1>
        <p><a href="television.php" class="link-nav">Search TV for your choice ></a></p>
        <p class="sub-future">And thats where TV on your big screen is headed. The new Apple TV is designed around this reality.<br />
           And the Siri Remote with Touch surface takes the effort out of searching through all these <br/>
           apps to find something great to watch. Its really easy to use with most popular apps <br />
           like Netflix, HBO. Amazing HD will catch your eyes
         </p>
    </div>
    <div class="main-overlay"></div>

    <div class="sub-overlay"></div>

    <div class="text-center">
        <h1 class="future-main">Technical support and the Apple TV warranty</h1>
        <p class="sub-h">Get the longest guarantee</p>
        <p class="sub-future">Every Apple TV comes with complimentary telephone technical support within 90 days of your Apple TV <br />
          purchase. In addition, Apple TV and all accessories are covered against defects for one <br />
          year from the original purchase date by a limited hardware warranty.


        </p>
    </div>

    <div class="mid-overlay"></div>

    <div class="container">
        <div class="divider-main"></div>
    </div>

    <div class="text-center">
        <h1 class="order-margin"><a href="television.php" class="order-nav">Order it now ></a></h1>
        <p class="sub-future">Free shipping available!</p>
    </div>

    <div class="footer-overlay"></div>

    <div class="container">
        <div class="divider-main"></div>
    </div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-2">
                    <ul>
                        <li class="footer-menu"><b>Shop</b></li>
                        <li><a class="items" href="/">Home</a></li>
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

    </body>

    </html>';




































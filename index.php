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
        <title>Woden S</title>
        <!-- HTML 5 markup and encoding utf-8 -->
        <meta http-equiv="Content-type" content="text/html; charset=utf-8">
        <!-- For Internet Explorer -->
        <meta http-equiv="X-UA-Compatible" content="IE=EDge">
        <!-- file of styles -->
        <link href="css/styles.css" rel="stylesheet" type="text/css">
        <!-- Bootstrap framework -->
        <script src="js/bootstrap.min.js"></script>
        <!-- Latest compiled and minified CSS -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.css">
        <!-- Optional theme -->
        <link rel="stylesheet" href="css/bootstrap-theme.css">
        <!-- jQuery library (served from Google) -->
        <script src="js/jquery-min.js"></script>
        <!-- bxSlider CSS file -->
        <link href="css/jquery.bxslider.css" rel="stylesheet">
        <!-- bxSlider Javascript file -->
        <script src="js/jquery.bxslider.min.js"></script>
    </head>
    <body>';

    $view->headerView();

echo   '<div id="slider">
        <ul class="bxslider">
            <li><a href="notebooks.php"><img src="images/laptop1.jpg"></a></li>
            <li><a href="phones-all.php"><img src="images/i6.jpeg"></a></li>
            <li><a href="devices.php"><img src="images/skimn-ipad.png"></a></li>
            <li><a href="tv.php"><img src="images/imac.png"></a></li>
        </ul>
    </div>

    <div class="container margin-top">
        <h1>Devices</h1>
        <p id="only">The only thing thats changed is everything.</p>
        <div class="row">
            <div class="col-sm-3">
                <a href="notebooks.php"><img src="images/laptop.png" style="display: block; margin-left: auto; margin-right: auto"></a>
                <p>Now available with Windows 10, 7, XP, DOS, Linux. </p>
            </div>
            <div class="col-sm-3">
                <a href="phones-all.php"><img src="images/htc.png" style="display: block; margin-left: auto; margin-right: auto"></a>
                <p>Great Android OS</p>
            </div>
            <div class="col-sm-3">
                <a href="phones-all.php"><img src="images/smartphone.png" style="display: block; margin-left: auto; margin-right: auto"></a>
                <p>Nobody knows whats tommorrows technology are going to be</p>
            </div>
            <div class="col-sm-3">
                <a href="devices.php"><img src="images/apple-watch.jpg" style="display: block; margin-left: auto; margin-right: auto"></a>
                <p>Perfect watches with built-in functions</p>
            </div>
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

    <footer>
        <div class="container">
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


    <script>
        $(document).ready(function(){
            $(".bxslider").bxSlider({
                auto: true,
                pause: 4000,
                controls: false,
            });
        });
    </script>

    </body>
    </html>';

?>
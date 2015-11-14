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

$view->DoctypeView( 'index' );

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

    <script>
        $(document).ready(function(){
            $(".bxslider").bxSlider({
                auto: true,
                pause: 4000,
                controls: false,
            });
        });
    </script>';

    $view->actionGetFooter( 'Index' );

echo    '</body>
    </html>';

?>
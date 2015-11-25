<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 24.11.2015
 * Time: 23:49
 */
echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <!-- jQuery library (served from Google) -->
    <script src="js/jquery-min.js"></script>
    <!-- bxSlider Javascript file -->
    <script src="js/jquery.bxslider.min.js"></script>
    <!-- bxSlider CSS file -->
    <link href="css/jquery.bxslider.css" rel="stylesheet" />
    <style>
        .bx-wrapper .bx-viewport
        {
            -moz-box-shadow: none;
            -webkit-box-shadow: none;
            box-shadow: none;
        }
    </style>
</head>
<body>
<div class="slider1">
    <div class="slide">
        <h>Something</h>
        <img src="images/appletv.jpg" width="150" height="150" />
    </div>
    <div class="slide"><img src="http://placehold.it/350x150&text=FooBar2"></div>
    <div class="slide"><img src="http://placehold.it/350x150&text=FooBar3"></div>
    <div class="slide"><img src="http://placehold.it/350x150&text=FooBar4"></div>
    <div class="slide"><img src="http://placehold.it/350x150&text=FooBar5"></div>
    <div class="slide"><img src="http://placehold.it/350x150&text=FooBar6"></div>
    <div class="slide"><img src="http://placehold.it/350x150&text=FooBar7"></div>
    <div class="slide"><img src="http://placehold.it/350x150&text=FooBar8"></div>
    <div class="slide"><img src="http://placehold.it/350x150&text=FooBar9"></div>
</div>
<script>
    $(document).ready(function(){
        $(".slider1" ).bxSlider({
            slideWidth: 200,
            minSlides: 2,
            maxSlides: 6,
            slideMargin: 10
        });
    });
</script>
</body>
</html>';
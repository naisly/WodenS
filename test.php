<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 30.10.2015
 * Time: 19:19
 */
echo   '<!DOCTYPE html>
        <html>
        <head>
            <title>Test</title>
            <link rel="stylesheet" href="css/bootstrap.css" />
        </head>
        <style>
            .main {
                background-color: #e4e4e4;
            }
        </style>
        <body>
        <div class="container">
            <div class="row">
                <div class="col-md-3 main">
                    Items: <input type="checkbox" /> Iphone 6S <br />
                           <input type="checkbox" /> Iphone 6 <br />
                           <input type="checkbox" /> Iphone 5S <br />
                           <input type="checkbox" /> Iphone 5 <br />
                           <input type="checkbox" /> Iphone 4S <br />
                           <input type="checkbox" /> Iphone 4 <br />

                    <h class="search-item">Min:</h> <input type="text" name="min" value="';
                    if (isset($_POST['min'])) echo $_POST['min'];
                    echo '"><br />
                    <h class="search-item">Max:</h> <input type="text" name="max" value="';
                    if (isset($_POST['max'])) echo $_POST['max'];
                    echo '"><br />
                    <h class="search-item">Sort by price:</h><br />
                                               <input type="radio" name="sort_by_price" value="price " /> By highest <br />
                                               <input type="radio" name="sort_by_price" value="price DESC" /> By lowest <br />
                    <h class="search-item">Sort by time of adding:</h><br />
                                               <input type="radio" name="sort_by_time" value="time" /> By latest <br />
                                               <input type="radio" name="sort_by_time" value="time DESC" /> By oldest <br />
                    <h class="search-item">Shipping: <br /></h>
                                               <input type="radio" name="sort_by_shipping" value="shipping" /> By fastest <br />
                                               <input type="radio" name="sort_by_shipping" value="shipping DESC" /> By slowest <br />
                                               <input class="btn btn-primary" id="submit" type="submit" value="Pick up goods">
                    </div>';
$i = 0;
echo '<div class="col-md-9">';
    while ($i < 5){
    echo   '<div class="row">
            <div class="col-md-3">
                <img src="images/samsungS6.jpg" />
            </div>
            <div class="col-md-5">
                <p class="spacer"></p>
                <h id="header-items" style="font-size: 20px;">' . 'Alex' . '</h>
                <span><br />by ' . 'Apple' . '</span>
                <p id="price">' . '1599' . '$' . ' ' . '<span id="prev-price"><strike>' . '1699' . '$' . '</strike> (' . '5' . ' ' . 'days shipping)</span></p>
                <p id="prev-price"> In stock on ' . '24th October' . '</p>
                <p>Average price for this product: ' . '1000' . '$' . '</p>
                <p style="text-align: left"><em>Short description: </em>' . 'Something' . '</p>
            </div>
            <div class="col-md-4">
                <p class="spacer"></p>
                <p class="align-left">Free shipping on orders greater than $35 </p>
                <p class="align-left"><b>Product features: </b></p>
                <p class="align-left">' . 'With headphones and micro USB' . '</p>
                <button class="btn btn-default">
                    Add to cart
                </button>
            </div>
        </div>';
$i++;
}
<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 12.11.2015
 * Time: 10:21
 */

include_once('Controllers/CheckoutController.php');
include_once('Model/CheckoutModel.php');
include_once('View/CheckoutView.php');

$model = new CheckoutModel();

$controller = new CheckoutController($model);

$view = new CheckoutView($model);

$controller->actionDone( 'doneOrders', 'completeOrders');
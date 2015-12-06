<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 09.11.2015
 * Time: 16:47
 */

include_once('Controllers/OrderController.php');
include_once('Model/OrderModel.php');
include_once('View/OrderView.php');

$model = new OrderModel();

//It is important that the controller and the view share the model

$controller = new OrderController($model);

$view = new OrderView($model);

$controller->actionCompleteOrder();

$view->DoctypeView( 'order' );
$view->headerView( 'complete-order' );

$view->thanksMessage();
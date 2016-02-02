<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 09.11.2015
 * Time: 16:15
 */

include_once $_SERVER['DOCUMENT_ROOT'] . '/Controllers/OrderController.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/Model/OrderModel.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/View/OrderView.php';

$model = new OrderModel();

//It is important that the controller and the view share the model

$controller = new OrderController($model);

$view = new OrderView($model);

$controller->actionGetHeaderCart();
$controller->getDefaultBilling();

$view->DoctypeView( 'Place Order' );
$view->headerView();

$view->getPlaceOrder();
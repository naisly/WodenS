<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 28.11.2015
 * Time: 22:06
 */

include_once $_SERVER['DOCUMENT_ROOT'] . '/Model/CheckOrderModel.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/Controllers/CheckOrderController.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/View/OrderStatusView.php';

$model = new CheckOrderModel();

$controller = new CheckOrderController( $model );

$view = new OrderStatusView( $model );

$controller->actionGetOrders();

$view->getCheckOrderPage();
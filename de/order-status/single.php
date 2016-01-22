<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 28.11.2015
 * Time: 22:06
 */

include_once('../../Model/CheckOrderModel.php');
include_once('../../Controllers/CheckOrderController.php');
include_once('../../View/OrderStatusView.php');

$model = new CheckOrderModel();

$controller = new CheckOrderController( $model );

$view = new OrderStatusView( $model );

$controller->actionGetOrders();

$view->getCheckOrderPage();
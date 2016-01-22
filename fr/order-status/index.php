<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 28.11.2015
 * Time: 13:49
 */

include_once('../../Model/CheckOrderModel.php');
include_once('../../Controllers/CheckOrderController.php');
include_once('../../View/CheckOrderView.php');

$model = new CheckOrderModel();

$controller = new CheckOrderController( $model );

$view = new CheckOrderView( $model );

$controller->actionGetHeaderCart();

$view->getOrderPage();
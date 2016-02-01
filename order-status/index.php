<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 28.11.2015
 * Time: 13:49
 */

include_once $_SERVER['DOCUMENT_ROOT'] . '/Model/CheckOrderModel.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/Controllers/CheckOrderController.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/View/CheckOrderView.php';

$model = new CheckOrderModel();

$controller = new CheckOrderController( $model );

$view = new CheckOrderView( $model );

$controller->actionGetHeaderCart();

$view->getOrderPage();
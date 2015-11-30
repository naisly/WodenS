<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 29.11.2015
 * Time: 19:04
 */

include_once('Model/AccountOrderModel.php');
include_once('Controllers/AccountOrderController.php');
include_once('View/AccountOrderView.php');

$model = new AccountOrderModel();

$controller = new AccountOrderController( $model );

$view = new AccountOrderView( $model );

$controller->actionGetData();

$view->getAccountOrderPage();
<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 03.12.2015
 * Time: 0:08
 */

include_once $_SERVER['DOCUMENT_ROOT'] . '/Model/AccountBillingModel.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/Controllers/AccountBillingController.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/View/AccountBillingView.php';

$model = new AccountBillingModel();

$controller = new AccountBillingController( $model );

$view = new AccountBillingView( $model );

$controller->getBilling();

$view->getAccountBilling();
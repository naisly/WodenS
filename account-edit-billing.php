<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 03.12.2015
 * Time: 0:52
 */

include_once('Model/AccountBillingModel.php');
include_once('Controllers/AccountBillingController.php');
include_once('View/AccountBillingView.php');

$model = new AccountBillingModel();

$controller = new AccountBillingController( $model );

$view = new AccountBillingView( $model );

$controller->actionInsertBillingData();

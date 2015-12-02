<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 01.12.2015
 * Time: 18:36
 */

include_once('Model/AccountInfoModel.php');
include_once('Controllers/AccountInfoController.php');
include_once('View/AccountInfoView.php');

$model = new AccountInfoModel();

$controller = new AccountInfoController( $model );

$view = new AccountInfoView( $model );

$controller->getAccount();

$view->getAccountPage();
<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 01.12.2015
 * Time: 19:30
 */

include_once $_SERVER['DOCUMENT_ROOT'] . '/Model/AccountInfoModel.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/Controllers/AccountInfoController.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/View/AccountInfoView.php';

$model = new AccountInfoModel();

$controller = new AccountInfoController( $model );

$view = new AccountInfoView( $model );

$controller->actionCancelOrder();
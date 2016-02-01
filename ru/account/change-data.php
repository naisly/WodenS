<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 11.01.2016
 * Time: 22:56
 */

include_once $_SERVER['DOCUMENT_ROOT'] . '/Model/AccountInfoModel.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/Controllers/AccountInfoController.php';

$model = new AccountInfoModel();

$controller = new AccountInfoController( $model );

$controller->actionChangeData();
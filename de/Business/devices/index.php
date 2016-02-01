<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 08.12.2015
 * Time: 18:53
 */

include_once $_SERVER['DOCUMENT_ROOT'] . '/Model/DefaultModel.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/Controllers/DefaultController.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/View/BusinessDevicesView.php';

$model = new DefaultModel();

$controller = new DefaultController( $model );

$view = new BusinessDevicesView( $model );

$controller->actionGetHeaderCart();

$view->getBusinessDevicesPage();
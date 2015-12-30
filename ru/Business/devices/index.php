<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 08.12.2015
 * Time: 18:53
 */

include_once('../../../Model/DefaultModel.php');
include_once('../../../Controllers/DefaultController.php');
include_once('../../../View/BusinessDevicesView.php');

$model = new DefaultModel();

$controller = new DefaultController( $model );

$view = new BusinessDevicesView( $model );

$controller->actionGetHeaderCart();

$view->getBusinessDevicesPage();
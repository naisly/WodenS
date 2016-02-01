<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 07.12.2015
 * Time: 18:02
 */

include_once $_SERVER['DOCUMENT_ROOT'] . '/Model/DefaultModel.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/Controllers/DefaultController.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/View/BusinessLaptopsView.php';

$model = new DefaultModel();

$controller = new DefaultController( $model );

$view = new BusinessLaptopsView( $model );

$controller->actionGetHeaderCart();

$view->getBusinessLaptopsPage();
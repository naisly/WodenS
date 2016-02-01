<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 27.11.2015
 * Time: 18:53
 */

include_once $_SERVER['DOCUMENT_ROOT'] . '/Model/DefaultModel.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/Controllers/DefaultController.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/View/StoreView.php';

$model = new DefaultModel();

//It is important that the controller and the view share the model

$controller = new DefaultController($model);

$view = new StoreView($model);

$controller->actionGetHeaderCart();

$view->getStorePage();
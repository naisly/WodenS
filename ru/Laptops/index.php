<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 12.11.2015
 * Time: 21:25
 */

include_once('..\..\Controllers\DefaultController.php');
include_once('..\..\Model\DefaultModel.php');
include_once('..\..\View\LaptopsView.php');
//initiate the triad

$model = new DefaultModel();

//It is important that the controller and the view share the model

$controller = new DefaultController($model);

$view = new LaptopsView($model);

$controller->actionGetHeaderCart();

$view->getLaptopsPage();
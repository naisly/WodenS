<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 13.11.2015
 * Time: 16:33
 */

include_once('..\Controllers\DefaultController.php');
include_once('..\Model\DefaultModel.php');
include_once('..\View\SupView.php');
//initiate the triad

$model = new DefaultModel();

//It is important that the controller and the view share the model

$controller = new DefaultController($model);

$view = new SupView($model);

$controller->actionGetHeaderCart();

$view->getSupportPage();

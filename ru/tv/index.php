<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 13.11.2015
 * Time: 13:50
 */

include_once $_SERVER['DOCUMENT_ROOT'] . '/Controllers/DefaultController.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/Model/DefaultModel.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/View/TvView.php';
//initiate the triad

$model = new DefaultModel();

//It is important that the controller and the view share the model

$controller = new DefaultController($model);

$view = new TvView($model);

$controller->actionGetHeaderCart();

$view->getTVPage();



































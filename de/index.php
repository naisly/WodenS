<?php

include_once $_SERVER['DOCUMENT_ROOT'] . '/Controllers/DefaultController.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/Model/DefaultModel.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/View/IndexView.php';

#include_once('Translate.php');
//initiate the triad

$model = new DefaultModel();

//It is important that the controller and the view share the model

$controller = new DefaultController($model);

$view = new IndexView($model);

$controller->actionGetHeaderCart();

$view->getIndexPage();




?>
<?php

include_once('Controllers\DefaultController.php');
include_once('Model\DefaultModel.php');
include_once('View\PhonesView.php');
//initiate the triad

$model = new DefaultModel();

//It is important that the controller and the view share the model

$controller = new DefaultController($model);

$view = new PhonesView($model);

$controller->actionGetHeaderCart();

$view->getPhonesPage();
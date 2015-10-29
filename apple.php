<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 29.10.2015
 * Time: 8:51
 */

include_once('Controllers\AppleController.php');
include_once('Model\AppleModel.php');
include_once('View\AppleView.php');
//initiate the triad

$model = new AppleModel();

//It is important that the controller and the view share the model

$controller = new AppleController($model);

$view = new AppleView($model);

$controller->actionGetDistinctCategories();

$controller->actionGetCategories();

$controller->actionGetAvaragePrice();

$controller->setAveragePrice();

echo $view->DoctypeView();

echo $view->headerView();

$view->getItems();
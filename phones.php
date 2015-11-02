<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 28.10.2015
 * Time: 18:57
 */

include_once('Controllers\DefaultController.php');
include_once('Model\DefaultModel.php');
include_once('View\DefaultView.php');
//initiate the triad

$model = new DefaultModel();

//It is important that the controller and the view share the model

$controller = new DefaultController($model);

$view = new DefaultView($model);

$controller->actionSetAveragePrice( 'All' );

$controller->actionGetDistinctCategories();

$controller->actionGetItemNames( 'All' );

$controller->actionGetCategories( 'All' );

echo $view->DoctypeView();

echo $view->headerView();

$view->getItems();

$view->actionGetFooter();

$model->show();
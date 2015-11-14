<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 03.11.2015
 * Time: 23:15
 */

include_once('Controllers\DefaultController.php');
include_once('Model\DefaultModel.php');
include_once('View\DefaultView.php');
//initiate the triad

$model = new DefaultModel();

//It is important that the controller and the view share the model

$controller = new DefaultController($model);

$view = new DefaultView($model);

$controller->actionGetQuantityOfItems();
$controller->actionGetSumOfItems();

$controller->actionSetAveragePrice( 'Samsung' );

$controller->actionGetDistinctCategories();

$controller->actionGetItemNames( 'Samsung' );

$controller->actionGetCategories( 'Samsung' );

$view->DoctypeView( 'Samsung' );

$view->headerView();

$view->getItemsNames();
$view->getFilterMenu( 'Samsung' );
$view->getItems();

$view->actionGetFooter( 'Samsung' );
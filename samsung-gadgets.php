<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 22.11.2015
 * Time: 1:04
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

$controller->actionSetAveragePrice( 'gadgets' );

$controller->actionGetDistinctCategories( 'gadgets' );

$controller->actionGetItemNames( 'Samsung', 'gadgets' );

$controller->actionGetCategories( 'Samsung','gadgets', 'Samsung' );

$view->DoctypeView( 'gadgets' );

$view->headerView();

$view->getItemsNames( 'gadgets' );
$view->getFilterMenu( 'samsung-gadgets' );
$view->getItems( 'samsung-gadgets' );

$view->actionGetFooter( 'gadgets' );
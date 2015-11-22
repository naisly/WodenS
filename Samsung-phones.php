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

$controller->actionSetAveragePrice( 'phones' );

$controller->actionGetDistinctCategories( 'phones' );

$controller->actionGetItemNames( 'Samsung', 'Phones' );

$controller->actionGetCategories( 'Samsung','phones', 'Samsung' );

$view->DoctypeView( 'Samsung' );

$view->headerView();

$view->getItemsNames( 'phones' );
$view->getFilterMenu( 'samsung-phones' );
$view->getItems( 'phones' );

$view->actionGetFooter( 'Samsung' );
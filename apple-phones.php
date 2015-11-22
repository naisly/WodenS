<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 29.10.2015
 * Time: 8:51
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

$controller->actionGetItemNames( 'Apple','Phones' );

$controller->actionGetCategories( 'Apple','phones', 'Apple' );

$view->DoctypeView( 'Apple' );

$view->headerView();

$view->getItemsNames( 'phones' );
$view->getFilterMenu( 'apple-phones' );
$view->getItems( 'phones' );

$view->actionGetFooter( 'Apple' );
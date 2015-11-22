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

$model = new DefaultModel();

//It is important that the controller and the view share the model

$controller = new DefaultController($model);

$view = new DefaultView($model);

$controller->actionGetQuantityOfItems();
$controller->actionGetSumOfItems();

$controller->actionSetAveragePrice( 'gadgets' );

$controller->actionGetDistinctCategories( 'gadgets' );

$controller->actionGetItemNames( 'Apple', 'gadgets' );

$controller->actionGetCategories( 'Apple' ,'gadgets', 'Apple' );

$view->DoctypeView( 'gadgets' );

$view->headerView();

$view->getItemsNames( 'gadgets' );
$view->getFilterMenu( 'apple-gadgets' );
$view->getItems( 'apple-gadgets' );

$view->actionGetFooter( 'gadgets' );
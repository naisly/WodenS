<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 20.11.2015
 * Time: 20:40
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

$controller->actionSetAveragePrice( 'Television' );

$controller->actionGetDistinctCategories( 'Television' );

$controller->actionGetItemNames( 'Television', 'All' );

$controller->actionGetCategories( 'Television' ,'Television' );

$view->DoctypeView( 'phones' );

$view->headerView();

$view->getItemsNames( 'television' );
$view->getFilterMenu( 'television' );
$view->getItems( 'television' );

$view->actionGetFooter( 'phones' );
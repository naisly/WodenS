<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 21.11.2015
 * Time: 1:32
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

$controller->actionGetItemNames( 'IMac', 'Television' );

$controller->actionGetCategories( 'IMac', 'Television', 'Imac' );

$view->DoctypeView( 'phones' );

$view->headerView();

$view->getItemsNames( 'television' );
$view->getFilterMenu( 'IMac-television' );
$view->getItems( 'television' );

$view->actionGetFooter( 'phones' );
<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 17.11.2015
 * Time: 22:40
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

$controller->actionSetAveragePrice( 'Notebooks' );

$controller->actionGetDistinctCategories( 'Notebooks' );

$controller->actionGetItemNames( 'Notebooks' );

$controller->actionGetCategories( 'Notebooks' );

$view->DoctypeView( 'phones' );

$view->headerView();

$view->getItemsNames( 'notebooks' );
$view->getFilterMenu( 'laptop' );
$view->getItems( 'notebooks' );

$view->actionGetFooter( 'phones' );
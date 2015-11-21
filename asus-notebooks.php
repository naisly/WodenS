<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 20.11.2015
 * Time: 20:20
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

$controller->actionGetItemNames( 'asus', 'notebooks' );

$controller->actionGetCategories( 'Asus','Notebooks' );

$view->DoctypeView( 'phones' );

$view->headerView();

$view->getItemsNames( 'notebooks' );
$view->getFilterMenu( 'asus-notebooks' );
$view->getItems( 'asus-notebooks' );

$view->actionGetFooter( 'phones' );
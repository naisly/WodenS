<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 22.11.2015
 * Time: 15:02
 */
include_once('Controllers\SubdescriptionController.php');
include_once('Model\SubdescriptionModel.php');
include_once('View\SubdescriptionView.php');
//initiate the triad

$model = new SubdescriptionModel();

//It is important that the controller and the view share the model

$controller = new SubdescriptionController($model);

$view = new SubdescriptionView($model);

$controller->actionGetSubdescription( $_POST['original_name'], $_POST['table'], $_POST['id_num'], $_POST['id'] );
$controller->actionSetDistinctProductsPrice( $_POST['table'], $_POST['product_name']);
$controller->actionSelectRandomProduct();
$controller->actionMakeComparison( $_POST['table'] );
$controller->actionGetAssocProducts( $_POST['table'], $_POST['original_name'] );

$controller->actionGetQuantityOfItems();
$controller->actionGetSumOfItems();

$view->DoctypeView( 'subdescription' );

$view->headerView();
$view->MainView( 'Apple', 'Phones' );

$view->actionGetFooter( 'Index' );
<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 22.11.2015
 * Time: 15:02
 */
include_once('..\Controllers\SubdescriptionController.php');
include_once('..\Model\SubdescriptionModel.php');
include_once('..\View\SubdescriptionView.php');
//initiate the triad

$model = new SubdescriptionModel();

//It is important that the controller and the view share the model

$controller = new SubdescriptionController($model);

$view = new SubdescriptionView($model);

$controller->actionGetData( $_GET['original_name'], $_GET['table'], $_GET['id_num'], $_GET['id'], $_GET['product_name'], 0);

$view->getSubdescriptionPage( 'Apple', 'Phones' );
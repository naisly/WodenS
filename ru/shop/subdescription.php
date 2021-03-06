<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 22.11.2015
 * Time: 15:02
 */
include_once $_SERVER['DOCUMENT_ROOT'] . '/Controllers/SubdescriptionController.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/Model/SubdescriptionModel.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/View/SubdescriptionView.php';
//initiate the triad

$model = new SubdescriptionModel();

//It is important that the controller and the view share the model

$controller = new SubdescriptionController($model);

$view = new SubdescriptionView($model);

$controller->actionGetData( $_GET['name'], $_GET['category'], $_GET['product_price'], $_GET['id'], $_GET['product_name'] );

$view->getSubdescriptionPage();
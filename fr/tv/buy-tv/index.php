<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 20.11.2015
 * Time: 20:40
 */

include_once $_SERVER['DOCUMENT_ROOT'] . '/Controllers/ShopController.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/Model/DefaultModel.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/View/ShopView.php';
//initiate the triad

$model = new DefaultModel();

//It is important that the controller and the view share the model

$controller = new ShopController($model);

$view = new ShopView($model);

$controller->actionGetData( 'Television', 'Television', 'All' );

$view->DoctypeView( 'Buy TV' );

$view->headerView();

$view->GetUI( 'tv', 'television' );
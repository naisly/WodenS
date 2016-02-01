<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 29.10.2015
 * Time: 8:51
 */

include_once $_SERVER['DOCUMENT_ROOT'] . '/Controllers/ShopController.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/Model/DefaultModel.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/View/ShopView.php';
//initiate the triad

$model = new DefaultModel();

//It is important that the controller and the view share the model

$controller = new ShopController($model);

$view = new ShopView($model);

$controller->actionGetData( 'Apple', 'Phones', 'Apple' );

$view->DoctypeView( 'Buy Iphone' );

$view->headerView();

$view->GetUI( 'phone', 'phones' );
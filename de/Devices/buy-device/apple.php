<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 22.11.2015
 * Time: 1:04
 */

include_once('..\..\..\Controllers\ShopController.php');
include_once('..\..\..\Model\DefaultModel.php');
include_once('..\..\..\View\ShopView.php');

$model = new DefaultModel();

//It is important that the controller and the view share the model

$controller = new ShopController($model);

$view = new ShopView($model);

$controller->actionGetData( 'Apple', 'Gadgets', 'Apple' );

$view->DoctypeView( 'Buy Ipad' );

$view->headerView();

$view->GetUI( 'device', 'gadgets' );
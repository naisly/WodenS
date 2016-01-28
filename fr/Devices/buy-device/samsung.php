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
//initiate the triad

$model = new DefaultModel();

//It is important that the controller and the view share the model

$controller = new ShopController($model);

$view = new ShopView($model);

$controller->actionGetData( 'Samsung', 'Gadgets', 'Samsung' );

$view->DoctypeView( 'Buy Galaxy Tab' );

$view->headerView( 'samsung-gadgets' );

$view->GetUI( 'device', 'gadgets' );

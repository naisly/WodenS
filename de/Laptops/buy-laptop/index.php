<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 17.11.2015
 * Time: 22:40
 */

include_once('..\..\..\Controllers\ShopController.php');
include_once('..\..\..\Model\DefaultModel.php');
include_once('..\..\..\View\ShopView.php');
//initiate the triad

$model = new DefaultModel();

//It is important that the controller and the view share the model

$controller = new ShopController($model);

$view = new ShopView($model);

$controller->actionGetData( 'Notebooks', 'Notebooks', 'All' );

$view->DoctypeView( 'Buy Laptop' );

$view->headerView();

$view->GetUI( 'laptop', 'notebooks' );
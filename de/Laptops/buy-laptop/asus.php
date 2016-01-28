<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 20.11.2015
 * Time: 20:20
 */

include_once('..\..\..\Controllers\ShopController.php');
include_once('..\..\..\Model\DefaultModel.php');
include_once('..\..\..\View\ShopView.php');
//initiate the triad

$model = new DefaultModel();

//It is important that the controller and the view share the model

$controller = new ShopController($model);

$view = new ShopView($model);

$controller->actionGetData( 'Asus', 'Notebooks', 'Asus' );

$view->DoctypeView( 'Buy Asus Laptop' );

$view->headerView( 'asus-notebooks' );

$view->GetUI( 'laptop', 'notebooks' );
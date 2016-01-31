<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 28.10.2015
 * Time: 18:57
 */

include_once('..\..\..\Controllers\ShopController.php');
include_once('..\..\..\Model\DefaultModel.php');
include_once('..\..\..\View\ShopView.php');
//initiate the triad

$model = new DefaultModel();

//It is important that the controller and the view share the model

$controller = new ShopController($model);

$view = new ShopView($model);

$controller->actionGetData( 'Phones', 'Phones', 'All' );

$view->DoctypeView( 'Buy Phone' );

$view->headerView();

$view->GetUI( 'phone', 'phones' );
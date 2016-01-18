<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 22.11.2015
 * Time: 0:12
 */

include_once('..\..\..\Controllers\DefaultController.php');
include_once('..\..\..\Model\DefaultModel.php');
include_once('..\..\..\View\DefaultView.php');
//initiate the triad

$model = new DefaultModel();

//It is important that the controller and the view share the model

$controller = new DefaultController($model);

$view = new DefaultView($model);

$controller->actionGetData( 'Gadgets', 'Gadgets', 'All' );

$view->DoctypeView( 'Buy Device' );

$view->headerView( 'gadgets' );

$view->GetUI( 'device', 'gadgets' );
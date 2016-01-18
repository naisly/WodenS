<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 28.10.2015
 * Time: 18:57
 */

include_once('..\..\..\Controllers\DefaultController.php');
include_once('..\..\..\Model\DefaultModel.php');
include_once('..\..\..\View\DefaultView.php');
//initiate the triad

$model = new DefaultModel();

//It is important that the controller and the view share the model

$controller = new DefaultController($model);

$view = new DefaultView($model);

$controller->actionGetData( 'Phones', 'Phones', 'All' );

$view->DoctypeView( 'Buy Phone' );

$view->headerView( 'phones' );

$view->GetUI( 'phone', 'phones' );
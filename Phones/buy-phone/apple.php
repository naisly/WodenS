<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 29.10.2015
 * Time: 8:51
 */

include_once('..\..\Controllers\DefaultController.php');
include_once('..\..\Model\DefaultModel.php');
include_once('..\..\View\DefaultView.php');
//initiate the triad

$model = new DefaultModel();

//It is important that the controller and the view share the model

$controller = new DefaultController($model);

$view = new DefaultView($model);

$controller->actionGetData( 'Apple', 'Phones', 'Apple' );

$view->DoctypeView( 'Buy Iphone' );

$view->headerView( 'apple-phones' );

$view->GetUI( 'phone', 'phones' );
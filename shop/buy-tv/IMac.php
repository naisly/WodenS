<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 21.11.2015
 * Time: 1:32
 */

include_once('..\..\Controllers\DefaultController.php');
include_once('..\..\Model\DefaultModel.php');
include_once('..\..\View\DefaultView.php');
//initiate the triad

$model = new DefaultModel();

//It is important that the controller and the view share the model

$controller = new DefaultController($model);

$view = new DefaultView($model);

$controller->actionGetData( 'IMac', 'Television', 'IMac' );

$view->DoctypeView( 'phones' );

$view->headerView( 'Imac-television' );

$view->GetUI( 'tv', 'television' );
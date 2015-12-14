<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 17.11.2015
 * Time: 22:40
 */

include_once('..\..\Controllers\DefaultController.php');
include_once('..\..\Model\DefaultModel.php');
include_once('..\..\View\DefaultView.php');
//initiate the triad

$model = new DefaultModel();

//It is important that the controller and the view share the model

$controller = new DefaultController($model);

$view = new DefaultView($model);

$controller->actionGetData( 'Notebooks', 'Notebooks', 'All' );

$view->DoctypeView( 'phones' );

$view->headerView( 'notebooks' );

$view->GetUI( 'notebooks', 'notebooks' );
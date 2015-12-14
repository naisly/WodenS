<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 20.11.2015
 * Time: 18:25
 */

include_once('..\..\Controllers\DefaultController.php');
include_once('..\..\Model\DefaultModel.php');
include_once('..\..\View\DefaultView.php');
//initiate the triad

$model = new DefaultModel();

//It is important that the controller and the view share the model

$controller = new DefaultController($model);

$view = new DefaultView($model);

$controller->actionGetData( 'Apple', 'Notebooks', 'Apple' );

$view->DoctypeView( 'phones' );

$view->headerView( 'apple-notebooks' );

$view->GetUI( 'notebooks', 'apple-notebooks' );

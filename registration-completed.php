<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 05.11.2015
 * Time: 23:44
 */

include_once('Controllers\LoginController.php');
include_once('Model\LoginModel.php');
include_once('View\LoginView.php');
//initiate the triad

$model = new LoginModel();

//It is important that the controller and the view share the model

$controller = new LoginController($model);

$view = new LoginView($model);

$controller->actionGetHeaderCart();
$controller->actionGetData();
$controller->actionCheckProvidedEmail();

$view->DoctypeView( 'Registration Completed' );

$view->actionValidate();

$controller->actionDoInsertion();
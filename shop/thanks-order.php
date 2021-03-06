<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 08.11.2015
 * Time: 0:41
 */

include_once $_SERVER['DOCUMENT_ROOT'] . '/Controllers/LoginController.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/Model/LoginModel.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/View/LoginView.php';
//initiate the triad

$model = new LoginModel();

//It is important that the controller and the view share the model

$controller = new LoginController($model);

$view = new LoginView($model);

$controller->actionGetHeaderCart();
$controller->actionGetTotalAndSum();

$view->DoctypeView( 'Thanks message' );
$view->headerView();

$view->addedItemMessage();
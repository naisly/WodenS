<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 05.11.2015
 * Time: 22:32
 */

include_once('..\Controllers\LoginController.php');
include_once('..\Model\LoginModel.php');
include_once('..\View\LoginView.php');
//initiate the triad

$model = new LoginModel();

//It is important that the controller and the view share the model

$controller = new LoginController($model);

$view = new LoginView($model);

$controller->actionGetHeaderCart();

if(!isset($_POST['email'])) {
    $view->DoctypeView( 'Registration' );
    $view->getRegisterHeader();
    $view->RegisterView();
} else {
    #$controller->actionGetData();
    $controller->actionCheckProvidedEmail();

    $view->DoctypeView( 'Registration' );
    $view->actionValidate();
    $controller->actionDoInsertion();
}
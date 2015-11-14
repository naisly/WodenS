<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 05.11.2015
 * Time: 22:32
 */

include_once('Controllers\LoginController.php');
include_once('Model\LoginModel.php');
include_once('View\LoginView.php');
//initiate the triad

$model = new LoginModel();

//It is important that the controller and the view share the model

$controller = new LoginController($model);

$view = new LoginView($model);

$view->DoctypeView( 'login' );

if(isset($_SESSION['email_error'])){
    if($_SESSION['email_error'] == 1){
        $view->errorRegisteredEmailMessage();
    }
}

$view->RegisterView();
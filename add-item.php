<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 08.11.2015
 * Time: 0:30
 */

include_once('Controllers\LoginController.php');
include_once('Model\LoginModel.php');
include_once('View\LoginView.php');
//initiate the triad

$model = new LoginModel();

//It is important that the controller and the view share the model

$controller = new LoginController($model);

$view = new LoginView($model);

session_start();
if(!$_SESSION['login_user']){
    header('Location: login.php');
    $_SESSION['add_item'] = '1';
} else {
    $_SESSION['add_item'] = '0';
    $controller->actionAddItems();
    header('Location: thanks-order.php');
}
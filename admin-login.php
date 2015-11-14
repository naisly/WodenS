<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 09.11.2015
 * Time: 22:49
 */

include_once('Model/AdminModel.php');
include_once('Controllers/AdminController.php');
include_once('View/AdminView.php');

$model = new AdminModel();

//It is important that the controller and the view share the model

$controller = new AdminController($model);

$view = new AdminView($model);

session_start();

$view->DoctypeView( 'admin' );

if(isset($_SESSION['admin'])){
    if($_SESSION['admin'] == 'admin'){
        header('Location: admin.php');
    }
}
if(isset($_SESSION['error'])){
    if($_SESSION['error'] == 1) {
        $view->errorLoginMessage();
    }
}

$view->getLoginForm();
$controller->actionLogin();

<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 10.11.2015
 * Time: 0:08
 */

include_once $_SERVER['DOCUMENT_ROOT'] . '/Model/AdminModel.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/Controllers/AdminController.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/View/AdminView.php';

$model = new AdminModel();

//It is important that the controller and the view share the model

$controller = new AdminController($model);

$view = new AdminView($model);

session_start();

if(!isset($_SESSION['admin'])){
    header('Location: /admin/login');
}

session_write_close();

if(isset($_POST['delete_id'])){
    $controller->actionDeleteData();
} else if(isset($_POST['edit_category'])){
    $view->DoctypeView( 'Admin' );
    $controller->actionSaveData();
    $view->getForm();
} else if(isset($_POST['id'])){
    $controller->actionUpdateData();
} else {
    $view->DoctypeView( 'Admin' );
    $controller->actionGetAdminProducts();
    $view->ProductsPage();
}
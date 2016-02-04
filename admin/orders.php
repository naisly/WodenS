<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 11.11.2015
 * Time: 20:08
 */

include_once $_SERVER['DOCUMENT_ROOT'] . '/Controllers/CheckoutController.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/Model/CheckoutModel.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/View/CheckoutView.php';

$model = new CheckoutModel();

$controller = new CheckoutController($model);

$view = new CheckoutView($model);

session_start();

if(!isset($_SESSION['admin'])){
    header('Location: /admin/login');
}

session_write_close();

if(isset($_POST['done'])){
    $controller->actionDone( 'completeorders', 'doneorders');
} else if(isset($_POST['pull-back'])){
    $controller->actionDone( 'doneorders', 'completeorders');
} else {
    $view->DoctypeView('Admin');
    $controller->actionGetData('completeorders');
    $view->getTable('latest');
    $controller->actionGetData('doneorders');
    $view->getTable('done');
}
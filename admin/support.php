<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 16.11.2015
 * Time: 20:07
 */

include_once $_SERVER['DOCUMENT_ROOT'] . '/Controllers/SupportController.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/Model/SupportModel.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/View/SupportView.php';

$model = new SupportModel();

$controller = new SupportController( $model );

$view = new SupportView( $model );

session_start();

if(!isset($_SESSION['admin'])){
    header('Location: /admin/login');
}

session_write_close();

if(isset($_POST['id'])){
    $controller->actionGetSolved();
} else {
    $controller->actionGetSupportMessages();
    $view->DoctypeView('Admin');
    $view->getSupport();
}
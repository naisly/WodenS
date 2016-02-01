<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 09.11.2015
 * Time: 23:29
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
    header('Location: admin-login.php');
}

$view->DoctypeView( 'admin' );
$view->adminBlocks();
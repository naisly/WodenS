<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 09.11.2015
 * Time: 22:49
 */

include_once $_SERVER['DOCUMENT_ROOT'] . '/Model/AdminModel.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/Controllers/AdminController.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/View/AdminView.php';

$model = new AdminModel();

$controller = new AdminController($model);

$view = new AdminView($model);

$view->DoctypeView( 'Admin' );

$view->getLoginForm();

if(isset($_POST['username'])){
    $controller->actionLogin();
}

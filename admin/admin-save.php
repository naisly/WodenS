<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 12.11.2015
 * Time: 18:14
 */

include_once $_SERVER['DOCUMENT_ROOT'] . '/Model/AdminModel.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/Controllers/AdminController.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/View/AdminView.php';

$model = new AdminModel();

//It is important that the controller and the view share the model

$controller = new AdminController($model);

$view = new AdminView($model);

session_start();

$_SESSION['language'] = 'us';

session_write_close();

$view->DoctypeView( 'admin' );

$controller->actionSaveData();

$view->getForm();
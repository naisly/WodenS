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

/*if(!isset($_SESSION['admin'])){
    header('Location: admin-login.php');
}*/
session_start();

$_SESSION['language'] = 'us';

session_write_close();


$view->DoctypeView( 'admin-orders' );

$controller->actionGetData( 'completeorders' );

$view->getTable( 'latest' );

$controller->actionGetData( 'doneorders' );

$view->getTable( 'done' );
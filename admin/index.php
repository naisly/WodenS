<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 09.11.2015
 * Time: 23:29
 */

include_once $_SERVER['DOCUMENT_ROOT'] . '/Model/AdminModel.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/View/AdminView.php';

$model = new AdminModel();

$view = new AdminView($model);

session_start();

if(!isset($_SESSION['admin'])){
    header('Location: /admin/login');
}

session_write_close();

$view->DoctypeView( 'Admin' );
$view->adminBlocks();
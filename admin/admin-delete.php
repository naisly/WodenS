<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 17.11.2015
 * Time: 19:13
 */

include_once $_SERVER['DOCUMENT_ROOT'] . '/Controllers/AdminController.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/Model/AdminModel.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/View/AdminView.php';

$model = new AdminModel();

$controller = new AdminController( $model );

$view = new AdminView( $model );

$controller->actionDeleteData();
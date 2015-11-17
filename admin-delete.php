<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 17.11.2015
 * Time: 19:13
 */

include_once('Controllers/AdminController.php');
include_once('Model/AdminModel.php');
include_once('View/AdminView.php');

$model = new AdminModel();

$controller = new AdminController( $model );

$view = new AdminView( $model );

$controller->actionDeleteData();
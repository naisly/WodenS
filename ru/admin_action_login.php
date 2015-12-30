<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 26.11.2015
 * Time: 23:16
 */

include_once('../Model/AdminModel.php');
include_once('../Controllers/AdminController.php');
include_once('../View/AdminView.php');

$model = new AdminModel();

//It is important that the controller and the view share the model

$controller = new AdminController($model);

$view = new AdminView($model);

$controller->actionLogin();
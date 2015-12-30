<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 06.11.2015
 * Time: 14:51
 */

include_once('..\Controllers\LoginController.php');
include_once('..\Model\LoginModel.php');
include_once('..\View\LoginView.php');
//initiate the triad

$model = new LoginModel();

//It is important that the controller and the view share the model

$controller = new LoginController($model);

$view = new LoginView($model);

$controller->actionCheckProvidedEmail();
$controller->actionLogin();
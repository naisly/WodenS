<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 08.11.2015
 * Time: 0:30
 */

include_once('..\Controllers\LoginController.php');
include_once('..\Model\LoginModel.php');
//initiate the triad

$model = new LoginModel();

//It is important that the controller and the view share the model

$controller = new LoginController($model);

$controller->actionAddItem();
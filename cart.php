<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 08.11.2015
 * Time: 17:01
 */

include_once('Controllers\ProfileController.php');
include_once('Model\ProfileModel.php');
include_once('View\ProfileView.php');
//initiate the triad

$model = new ProfileModel();

//It is important that the controller and the view share the model

$controller = new ProfileController($model);

$view = new ProfileView($model);

$controller->actionGetUserData();

$view->getCartPage();
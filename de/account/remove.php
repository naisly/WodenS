<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 08.11.2015
 * Time: 23:23
 */

include_once $_SERVER['DOCUMENT_ROOT'] . '/Controllers/ProfileController.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/Model/ProfileModel.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/View/ProfileView.php';
//initiate the triad

$model = new ProfileModel();

//It is important that the controller and the view share the model

$controller = new ProfileController($model);

$view = new ProfileView($model);

$controller->actionRemoveData();
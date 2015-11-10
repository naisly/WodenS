<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 10.11.2015
 * Time: 23:30
 */

include_once('Model/EditModel.php');
include_once('Controllers/EditController.php');
include_once('View/EditView.php');

$model = new EditModel();

//It is important that the controller and the view share the model

$controller = new EditController($model);

$view = new EditView($model);

$controller->actionChangeSession();
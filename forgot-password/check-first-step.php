<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 11.01.2016
 * Time: 0:04
 */

include_once('../Model/ForgotModel.php');
include_once('../Controllers/ForgotController.php');

$model = new ForgotModel();

$controller = new ForgotController( $model );

$controller->actionCheckEmail();
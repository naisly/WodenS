<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 07.12.2015
 * Time: 0:05
 */

include_once('../Model/DefaultModel.php');
include_once('../Controllers/DefaultController.php');
include_once('../View/EducationLaptopsView.php');

$model = new DefaultModel();

$controller = new DefaultController( $model );

$view = new EducationLaptopsView( $model );

$controller->actionGetHeaderCart();

$view->getEducationLaptops();
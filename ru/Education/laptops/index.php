<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 07.12.2015
 * Time: 0:05
 */

include_once $_SERVER['DOCUMENT_ROOT'] . '/Model/DefaultModel.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/Controllers/DefaultController.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/View/EducationLaptopsView.php';

$model = new DefaultModel();

$controller = new DefaultController( $model );

$view = new EducationLaptopsView( $model );

$controller->actionGetHeaderCart();

$view->getEducationLaptops();
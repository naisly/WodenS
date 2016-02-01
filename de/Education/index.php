<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 14.12.2015
 * Time: 0:30
 */

include_once $_SERVER['DOCUMENT_ROOT'] . '/Model/DefaultModel.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/Controllers/DefaultController.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/View/EducationView.php';

$model = new DefaultModel();

$controller = new DefaultController( $model );

$view = new EducationView( $model );

$controller->actionGetHeaderCart();

$view->getEducationPage();
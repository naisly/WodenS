<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 06.12.2015
 * Time: 20:59
 */

include_once $_SERVER['DOCUMENT_ROOT'] . '/Model/DefaultModel.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/Controllers/DefaultController.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/View/EducationPhonesView.php';

$model = new DefaultModel();

$controller = new DefaultController( $model );

$view = new EducationPhonesView( $model );

$controller->actionGetHeaderCart();

$view->getEducationPhones();
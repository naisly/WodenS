<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 08.12.2015
 * Time: 15:26
 */

include_once $_SERVER['DOCUMENT_ROOT'] . '/Model/DefaultModel.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/Controllers/DefaultController.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/View/BusinessPhonesView.php';

$model = new DefaultModel();

$controller = new DefaultController( $model );

$view = new BusinessPhonesView( $model );

$controller->actionGetHeaderCart();

$view->getBusinessPhonesPage();
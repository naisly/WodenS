<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 10.12.2015
 * Time: 17:14
 */

include_once $_SERVER['DOCUMENT_ROOT'] . '/Model/DefaultModel.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/Controllers/DefaultController.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/View/ContactUsView.php';

$model = new DefaultModel();

$controller = new DefaultController( $model );

$view = new ContactUsView( $model );

$controller->actionGetHeaderCart();

$view->getContactPage();
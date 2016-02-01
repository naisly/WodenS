<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 31.12.2015
 * Time: 19:07
 */

include_once $_SERVER['DOCUMENT_ROOT'] . '/Model/DefaultModel.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/Controllers/DefaultController.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/View/PrivacyView.php';

$model = new DefaultModel();

$controller = new DefaultController( $model );

$view = new PrivacyView( $model );

$controller->actionGetHeaderCart();

$view->getPrivacyPage();
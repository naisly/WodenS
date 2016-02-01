<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 24.12.2015
 * Time: 23:33
 */

include_once $_SERVER['DOCUMENT_ROOT'] . '/Model/DefaultModel.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/Controllers/DefaultController.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/View/PageNotFoundView.php';

$model = new DefaultModel();

$controller = new DefaultController( $model );

$view = new PageNotFoundView( $model );

$controller->actionGetHeaderCart();
$view->getNotFoundPage();
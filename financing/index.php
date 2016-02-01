<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 03.12.2015
 * Time: 19:57
 */

include_once $_SERVER['DOCUMENT_ROOT'] . '/Model/DefaultModel.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/Controllers/DefaultController.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/View/FinancingView.php';

$model = new DefaultModel();

$controller = new DefaultController( $model );

$view = new FinancingView( $model );

$controller->actionGetHeaderCart();

$view->getFinancingPage();
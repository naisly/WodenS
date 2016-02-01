<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 14.12.2015
 * Time: 14:46
 */

include_once $_SERVER['DOCUMENT_ROOT'] . '/Model/DefaultModel.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/Controllers/DefaultController.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/View/BusinessView.php';

$model = new DefaultModel();

$controller = new DefaultController( $model );

$view = new BusinessView( $model );

$controller->actionGetHeaderCart();

$view->getBusinessPage();
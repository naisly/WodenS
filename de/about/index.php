<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 02.01.2016
 * Time: 1:29
 */

include_once $_SERVER['DOCUMENT_ROOT'] . '/Model/DefaultModel.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/Controllers/DefaultController.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/View/CompanyView.php';

$model = new DefaultModel();

$view = new CompanyView( $model );

$controller = new DefaultController( $model );

$controller->actionGetHeaderCart();

$view->getCompanyPage();
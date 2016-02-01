<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 31.12.2015
 * Time: 1:47
 */

include_once $_SERVER['DOCUMENT_ROOT'] . '/Model/DefaultModel.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/Controllers/DefaultController.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/View/TermsView.php';

$model = new DefaultModel();

$controller = new DefaultController( $model );

$view = new TermsView( $model );

$controller->actionGetHeaderCart();

$view->getTermsPage();
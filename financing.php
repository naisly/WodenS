<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 03.12.2015
 * Time: 19:57
 */

include_once('Model/DefaultModel.php');
include_once('Controllers/DefaultController.php');
include_once('View/FinancingView.php');

$model = new DefaultModel();

$controller = new DefaultController( $model );

$view = new FinancingView( $model );

$controller->actionGetHeaderCart();

$view->getFinancingPage();
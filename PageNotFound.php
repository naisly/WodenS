<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 24.12.2015
 * Time: 23:33
 */

include_once('Model/DefaultModel.php');
include_once('Controllers/DefaultController.php');
include_once('View/PageNotFoundView.php');

$model = new DefaultModel();

$controller = new DefaultController( $model );

$view = new PageNotFoundView( $model );

$controller->actionGetHeaderCart();
$view->getNotFoundPage();
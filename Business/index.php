<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 14.12.2015
 * Time: 14:46
 */

include_once('../Model/DefaultModel.php');
include_once('../Controllers/DefaultController.php');
include_once('../View/BusinessView.php');

$model = new DefaultModel();

$controller = new DefaultController( $model );

$view = new BusinessView( $model );

$controller->actionGetHeaderCart();

$view->getBusinessPage();
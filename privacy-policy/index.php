<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 31.12.2015
 * Time: 19:07
 */

include_once('../Model/DefaultModel.php');
include_once('../Controllers/DefaultController.php');
include_once('../View/PrivacyView.php');

$model = new DefaultModel();

$controller = new DefaultController( $model );

$view = new PrivacyView( $model );

$controller->actionGetHeaderCart();

$view->getPrivacyPage();
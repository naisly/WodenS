<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 08.12.2015
 * Time: 15:26
 */

include_once('../../Model/DefaultModel.php');
include_once('../../Controllers/DefaultController.php');
include_once('../../View/BusinessPhonesView.php');

$model = new DefaultModel();

$controller = new DefaultController( $model );

$view = new BusinessPhonesView( $model );

$controller->actionGetHeaderCart();

$view->getBusinessPhonesPage();
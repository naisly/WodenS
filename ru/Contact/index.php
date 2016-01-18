<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 10.12.2015
 * Time: 17:14
 */

include_once('../../Model/DefaultModel.php');
include_once('../../Controllers/DefaultController.php');
include_once('../../View/ContactUsView.php');

$model = new DefaultModel();

$controller = new DefaultController( $model );

$view = new ContactUsView( $model );

$controller->actionGetHeaderCart();

$view->getContactPage();
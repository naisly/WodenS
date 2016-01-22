<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 02.01.2016
 * Time: 1:29
 */

include_once('../../Model/DefaultModel.php');
include_once('../../Controllers/DefaultController.php');
include_once('../../View/CompanyView.php');

$model = new DefaultModel();

$view = new CompanyView( $model );

$controller = new DefaultController( $model );

$controller->actionGetHeaderCart();

$view->getCompanyPage();
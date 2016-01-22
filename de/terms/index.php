<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 31.12.2015
 * Time: 1:47
 */

include_once('../../Model/DefaultModel.php');
include_once('../../Controllers/DefaultController.php');
include_once('../../View/TermsView.php');

$model = new DefaultModel();

$controller = new DefaultController( $model );

$view = new TermsView( $model );

$controller->actionGetHeaderCart();

$view->getTermsPage();
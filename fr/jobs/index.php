<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 31.12.2015
 * Time: 21:59
 */

include_once('../../Model/DefaultModel.php');
include_once('../../Controllers/DefaultController.php');
include_once('../../View/JobsView.php');

$model = new DefaultModel();

$controller = new DefaultController( $model );

$view = new JobsView( $model );

$controller->actionGetHeaderCart();

$view->getJobsPage();
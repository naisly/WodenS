<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 06.12.2015
 * Time: 20:59
 */

include_once('../../Model/DefaultModel.php');
include_once('../../Controllers/DefaultController.php');
include_once('../../View/EducationPhonesView.php');

$model = new DefaultModel();

$controller = new DefaultController( $model );

$view = new EducationPhonesView( $model );

$controller->actionGetHeaderCart();

$view->getEducationPhones();
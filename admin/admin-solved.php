<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 16.11.2015
 * Time: 21:14
 */

include_once $_SERVER['DOCUMENT_ROOT'] . '/Controllers/SupportController.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/Model/SupportModel.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/View/SupportView.php';

$model = new SupportModel();

$controller = new SupportController( $model );

$view = new SupportView( $model );

$controller->actionGetSolved();
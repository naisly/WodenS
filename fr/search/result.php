<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 18.01.2016
 * Time: 20:27
 */

include_once $_SERVER['DOCUMENT_ROOT'] . '/Model/SearchModel.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/Controllers/SearchController.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/View/SearchView.php';

$model = new SearchModel();

$controller = new SearchController( $model );

$view = new SearchView( $model );

$controller->actionGetResults();

$view->getResults();
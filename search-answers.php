<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 25.11.2015
 * Time: 20:38
 */

include_once('Controllers\SearchAnswersController.php');
include_once('Model\SearchAnswersModel.php');
include_once('View\SearchAnswersView.php');
//initiate the triad

$model = new SearchAnswersModel();

//It is important that the controller and the view share the model

$controller = new SearchAnswersController($model);

$view = new SearchAnswersView($model);

$controller->actionGetQuestionsAndAnswers( $_GET['q'], 1 );

$view->getSearchAnswersPage();
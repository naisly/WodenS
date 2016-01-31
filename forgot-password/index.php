<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 10.01.2016
 * Time: 22:17
 */

include_once('../Model/ForgotModel.php');
include_once('../Controllers/ForgotController.php');
include_once('../View/ForgotView.php');

$model = new ForgotModel();

$controller = new ForgotController( $model );

$view = new ForgotView( $model );

$controller->actionGetHeaderCart();

$controller->actionSaveDataFromInjection();

$view->DoctypeView( 'Recover your Woden Sims Account' );
$view->headerView();

if(!isset($_GET['email']) && !isset($_GET['success'])){
    $view->getTopBar( 'Any problems with Sign In?' );
    $view->getFirstStep();
} else if(isset($_GET['email']) && !isset($_GET['day_of_birth'])){
    $view->getTopBar( 'Reset Password' );
    $view->getSecondStep();
} else if(isset($_GET['day_of_birth']) && !isset($_GET['sc-a-1'])){
    $controller->actionGetQuestion();
    $view->getTopBar( 'Secret Questions' );
    $view->getThirdStep();
} else if(isset($_GET['sc-a-1']) && isset($_GET['sc-a-2']) && isset($_GET['sc-a-3'])){
    $view->getTopBar( 'Change your password' );
    $view->getLastStep();
} else if(isset($_GET['success'])){
    $view->getSuccessMessage();
}

$view->actionGetFooter( 'Recover your Woden Sims Account' );
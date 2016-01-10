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

$view->DoctypeView( 'Recover your Woden Sims Account' );
$view->headerView( 'Recover your Woden Sims Account' );

if(isset($_GET['session_auth']) && !isset($_GET['email'])){
    $view->getProblemsBar();
    $view->getFirstStep();
} else if(isset($_GET['email'])){
    $view->getSecondStep();
} else if(isset($_GET['birthday'])){
    $view->getThirdStep();
} else if(isset($_GET['email']) && isset($_GET['first_name']) && isset($_GET['last_name'])){
    $view->getFourthStep();
} else if(isset($_POST['new-password']) && isset($_POST['password-again'])){
    $view->getLastStep();
}

$view->actionGetFooter( 'Recover your Woden Sims Account' );
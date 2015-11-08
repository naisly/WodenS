<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 05.11.2015
 * Time: 23:44
 */

include_once('Controllers\LoginController.php');
include_once('Model\LoginModel.php');
include_once('View\LoginView.php');
//initiate the triad

$model = new LoginModel();

//It is important that the controller and the view share the model

$controller = new LoginController($model);

$view = new LoginView($model);

$controller->actionGetData();
$controller->actionCheckProvidedEmail();

echo $view->DoctypeView();

if($model->getEmail() !== $model->getEmailAgain()){
    $view->errorEmailMessage();
    $view->RegisterView();
} else if($model->getPassword() !== $model->getPasswordAgain()){
    $view->errorPasswordMessage();
    $view->RegisterView();
} else if($model->getPassword() === $model->getPasswordAgain() && (strlen($model->getPassword()) < 7)){
    $view->errorMinCountMessage();
    $view->RegisterView();
} else if($_SESSION['email_error'] == 1){
    $view->errorRegisteredEmailMessage();
    $view->RegisterView();
} else {
    $view->headerView();
    $view->successMessage();

    $view->getFooter();

    $controller->actionInsertData();
}
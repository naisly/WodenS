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

if(isset($_POST['name'])){
    $model->setName($_POST['name']);
}
if(isset($_POST['email'])){
    $model->setEmail($_POST['email']);
}
if(isset($_POST['email-again'])){
    $model->setEmailAgain($_POST['email-again']);
}
if(isset($_POST['password'])){
    $model->setPassword($_POST['password']);
}
if(isset($_POST['password-again'])){
    $model->setPasswordAgain($_POST['password-again']);
}

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
} else {
    $view->DoctypeView();
    $view->headerView();
    $view->successMessage();
    echo $model->getPassword();
    echo $model->getName();
    echo $model->getEmail();
}
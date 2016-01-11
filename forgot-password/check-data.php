<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 11.01.2016
 * Time: 17:20
 */

include_once('../Model/ForgotModel.php');
include_once('../Controllers/ForgotController.php');

$model = new ForgotModel();

$controller = new ForgotController( $model );

if(isset($_GET['email']) && !isset($_GET['day_of_birth'])){
    $controller->actionCheckEmail();
} else if(isset($_GET['day_of_birth']) && !isset($_GET['sc-a-1'])){
    $controller->actionCheckBirthday();
} else if(isset($_GET['sc-a-1']) && isset($_GET['sc-a-2']) && isset($_GET['sc-a-3'])){
    $controller->actionCheckSecurityQuestions();
} else {
    $controller->actionChangePassword();
}
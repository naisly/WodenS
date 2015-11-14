<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 10.11.2015
 * Time: 0:08
 */

include_once('Model/AdminModel.php');
include_once('Controllers/AdminController.php');
include_once('View/AdminView.php');

$model = new AdminModel();

//It is important that the controller and the view share the model

$controller = new AdminController($model);

$view = new AdminView($model);

/*if(!isset($_SESSION['admin'])){
    header('Location: admin-login.php');
}*/

$view->DoctypeView( 'admin' );

$controller->getAdminProductsData();
$view->ProductsPage();
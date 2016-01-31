<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 07.11.2015
 * Time: 22:38
 */

include_once('Model/DefaultModel.php');
include_once('Controllers/DefaultController.php');

$model = new DefaultModel();

$controller = new DefaultController( $model );

$controller->actionGetHeaderCart();

session_start();

session_destroy();

if($_SESSION['language'] !== 'us') {
    header('Location: /' . $_SESSION['language'] . '/');
} else {
    header('Location: /');
}

session_write_close();
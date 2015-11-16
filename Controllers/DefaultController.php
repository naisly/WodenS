<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 16.11.2015
 * Time: 23:14
 */

include_once('Controller.php');

class DefaultController extends Controller
{
    public function actionGetSumOfItems() {

        Controller::actionGetSumOfItems();
    }

    public function actionGetQuantityOfItems() {

        Controller::actionGetQuantityOfItems();
    }
}
<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 15.11.2015
 * Time: 0:28
 */

include_once('DefaultController.php');

class SupportController extends DefaultController
{
    public $model;
    public function __construct(SupportModel $model){
        parent::__construct($model);
        $this->model = $model;
    }

    public function actionGetData() {

        include_once('/../Storage.php');
        $db = Storage::getInstance();
        $mysqli = $db->getConnection();

        if(isset($_POST['name'])){
            $name = $_POST['name'];
        }
        if(isset($_POST['email'])){
            $email = $_POST['email'];
        }
        if(isset($_POST['subject'])){
            $subject = $_POST['subject'];
        }
        if(isset($_POST['message'])){
            $message = $_POST['message'];
        }

        $mysql_query = $mysqli->prepare("INSERT INTO support VALUES ( '', '$name', '$email', '$subject', '$message')");

        $mysql_query->execute();

        header('Location: thanks-support.php');


    }
}
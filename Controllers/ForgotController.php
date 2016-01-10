<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 10.01.2016
 * Time: 22:17
 */

include_once('DefaultController.php');

class ForgotController extends DefaultController
{
    /*
     * MVC constructor
     * with LoginModel
     *
     * @global $model
     */
    public $model;
    public function __construct(DefaultModel $model) {
        parent::__construct($model);
        $this->model = $model;

    }

    public function actionCheckEmail() {

        include_once('/../Storage.php');
        $db = Storage::getInstance();
        $mysqli = $db->getConnection();

        if(isset($_GET['email'])){
            $email = $_GET['email'];
        }

        $sql_query = "SELECT email FROM users WHERE email='$email'";

        echo $sql_query;

        $result = $mysqli->query($sql_query);

        session_start();

        if ($result->num_rows == 1) {
            header('Location: /shop/forgot-password/?session_auth=' . $_SESSION['session_auth'] . '&email=' . urldecode($email));
        } else {

            session_start();

            $this->actionGenerateSessionAuth();
            $_SESSION['session_auth'] = $this->model->getSessionAuth();

            session_write_close();

            header('Location: /shop/forgot-password/?session_auth=' . $_SESSION['session_auth'] . '&error_email=1');
        }

        session_write_close();
    }
}
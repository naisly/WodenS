<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 05.11.2015
 * Time: 22:32
 */
class LoginController
{
    public $model;
    public function __construct(LoginModel $model) {
        $this->model = $model;

    }

    public function actionGetData() {
        if(isset($_POST['name'])){
            $this->model->setName($_POST['name']);
        }
        if(isset($_POST['email'])){
            $this->model->setEmail($_POST['email']);
        }
        if(isset($_POST['email-again'])){
            $this->model->setEmailAgain($_POST['email-again']);
        }
        if(isset($_POST['password'])){
            $this->model->setPassword($_POST['password']);
        }
        if(isset($_POST['password-again'])){
            $this->model->setPasswordAgain($_POST['password-again']);
        }

    }

    public function actionInsertData() {

        include_once('/../Storage.php');
        $db = Storage::getInstance();
        $mysqli = $db->getConnection();

        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql_stmt = "INSERT INTO users VALUES ('', '$name', '$email', '$password')";
        $stmt = $mysqli->prepare($sql_stmt);

        $stmt->execute();
    }

    public function actionLogin() {

        include_once('/../Storage.php');
        $db = Storage::getInstance();
        $mysqli = $db->getConnection();

        $email = $_POST['email'];
        $password = $_POST['password'];

        $email = stripslashes($email);
        $password = stripcslashes($password);

        $sql_query = "SELECT * FROM users where email='$email' AND password='$password'";

        $result = $mysqli->query($sql_query);

        session_start();

        if ($result->num_rows == 1) {
            $_SESSION['login_user'] = $email;
            header("Location: profile.php");
        } else {
            header("Location: login.php");
            $_SESSION['error'] = '1';
        }

        session_write_close();
    }
}
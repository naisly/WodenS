<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 09.11.2015
 * Time: 19:28
 */
class AdminController
{
    public $model;
    public function __construct(AdminModel $model) {
        $this->model = $model;
    }

    public function actionLogin() {

        include_once('/../Storage.php');
        $db = Storage::getInstance();
        $mysqli = $db->getConnection();

        if(isset($_POST['username'])){
            $username = $_POST['username'];
            $username = stripslashes($username);
        }
        if(isset($_POST['password'])) {
            $password = $_POST['password'];
            $password = stripcslashes($password);
        }

        $sql_query = "SELECT * FROM users WHERE email='$username' AND password='$password'";

        $result = $mysqli->query($sql_query);

        session_start();

        if ($result->num_rows == 1) {
            $_SESSION['admin'] = $username;
            header("Location: admin.php");
        } else {
            header("Location: admin-login.php");
            $_SESSION['error'] = '1';
        }

        session_write_close();
    }
}
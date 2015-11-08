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

    public function actionCheckProvidedEmail() {

        include_once('/../Storage.php');
        $db = Storage::getInstance();
        $mysqli = $db->getConnection();

        $email = $_POST['email'];

        $sql_stmt = "SELECT email FROM users WHERE email='$email'";

        $result = $mysqli->query($sql_stmt);

        session_start();

        if ($result->num_rows == 1){
            $_SESSION['email_error'] = '1';
        } else {
            $_SESSION['email_error'] = '0';
        }
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
            $_SESSION['add_item'] = '0';
            header("Location: profile.php");
        } else {
            header("Location: login.php");
            $_SESSION['error'] = '1';
        }

        session_write_close();
    }

    public function actionAddItems() {

        include_once('/../Storage.php');
        $db = Storage::getInstance();
        $mysqli = $db->getConnection();

        session_start();

        if(isset($_POST['id'])){
            $id = $_POST['id'];
        }
        if(isset($_POST['product_name'])){
            $product_name = $_POST['product_name'];
        }
        if(isset($_POST['category'])){
            $category = $_POST['category'];
        }
        if(isset($_POST['photo'])){
            $photo = $_POST['photo'];
        }
        if(isset($_POST['price'])){
            $price = $_POST['price'];
        }

        $user = $_SESSION['login_user'];

        $sql_query = "INSERT INTO orderedItems VALUES ('$id', '$product_name', '$category', '$price', '$user')";
        $stmt = $mysqli->prepare($sql_query);

        $stmt->execute();

        session_start();
        $_SESSION['photo'] = $photo;

        session_write_close();
    }

    public function actionGetQuantityOfItems() {

        include_once('/../Storage.php');
        $db = Storage::getInstance();
        $mysqli = $db->getConnection();

        session_start();

        $user = $_SESSION['login_user'];

        $sql_query = "SELECT id FROM orderedItems WHERE user='$user'";

        $result = $mysqli->query($sql_query);

        $quantity = $result->num_rows;

        $this->model->setQuantity($quantity);
    }

    public function actionGetSumOfItems() {

        include_once('/../Storage.php');
        $db = Storage::getInstance();
        $mysqli = $db->getConnection();

        $user = $_SESSION['login_user'];

        $sql_query = "SELECT price FROM orderedItems WHERE user='$user'";

        $result = $mysqli->query($sql_query);

        $price_array = array();

        if ($result->num_rows > 0){
            while ($row = $result->fetch_assoc()){
                $price_array = array_merge($price_array, array_map('trim', explode(",", $row['price'])));
            }
        }

        $count = count($price_array);
        $sum = 0;

        for($i = 0; $i < $count; $i++){
            $sum += $price_array[$i];
        }

        $this->model->setPrice( $sum );
    }
}
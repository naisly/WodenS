<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 05.11.2015
 * Time: 22:32
 */

include_once('Controller.php');

class LoginController extends Controller
{
    public $model;
    public function __construct(LoginModel $model) {
        parent::__construct($model);
        $this->model = $model;

    }

    /*
     * Incapsulated method
     */

    public function actionGetSumOfItems() {

        Controller::actionGetSumOfItems();
    }

    /*
     * Incapsulated method
     */

    public function actionGetQuantityOfitems() {
        Controller::actionGetQuantityOfItems();
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

        if(isset($_POST['email'])) {
            $email = $_POST['email'];
        }
        if(isset($_POST['password'])) {
            $password = $_POST['password'];
        }

        $email = stripslashes($email);
        $password = stripcslashes($password);

        $sql_query = "SELECT * FROM users WHERE email='$email' AND password='$password'";

        $result = $mysqli->query($sql_query);

        session_start();

        if ($result->num_rows == 1) {
            $_SESSION['login_user'] = $email;
            $_SESSION['admin'] = $email;
            $_SESSION['add_item'] = '0';
            header("Location: cart.php");
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

        $sql_stmt = "SELECT id,quantity FROM orderedItems WHERE id=$id AND product_name='$product_name' AND category='$category'
                      AND price=$price AND user='$user'";

        echo $sql_stmt;

        $result = $mysqli->query($sql_stmt);
        if ($result->num_rows > 0){
            while ($row = $result->fetch_assoc()){
                $quantity = $row['quantity'];
                $idQ = $row['id'];
            }
        }
        echo $idQ . "<br />";
        echo $quantity . "<br />";

        if(!isset($idQ)) {
            $sql_query = "INSERT INTO orderedItems VALUES ('$id', '$product_name', '$category', '$price', '$user', 1)";
            $stmt = $mysqli->prepare($sql_query);
            echo $sql_query . '<br />';
            $stmt->execute();
        }

        if(isset($quantity)) {
            if ($quantity !== 1) {
                $quantity++;

                $sql_res = $mysqli->prepare("UPDATE orderedItems SET quantity=$quantity WHERE user='$user' AND price=$price
                            AND product_name='$product_name' AND category='$category'");
                $sql_res->execute();
            }
        }

        $_SESSION['photo'] = $photo;

        session_write_close();
    }
}
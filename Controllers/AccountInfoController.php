<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 01.12.2015
 * Time: 18:35
 */

include_once('AccountOrderController.php');

class AccountInfoController extends AccountOrderController
{
    /*
     * MVC constructor
     * with AdminModel
     *
     * @global $model
     */
    public $model;
    public function __construct(AccountInfoModel $model) {
        parent::__construct( $model );
        $this->model = $model;
    }

    public function getAccount() {

        session_start();

        if(!isset($_SESSION['login_user'])){
            header('Location: /shop/login');
        }

        session_write_close();

        $this->actionGetHeaderCart();
        $this->actionGetUser();
        $this->getAllOrders();
        $this->getBillingData();
        $this->actionGetBilling();
    }

    public function actionCancelOrder() {

        include_once('/../Storage.php');
        $db = Storage::getInstance();
        $mysqli = $db->getConnection();

        if(isset($_POST['order_id'])){
            $order_id = $_POST['order_id'];
        }

        session_start();

        if(isset($_SESSION['login_user'])){
            $user = $_SESSION['login_user'];
        }

        $sql_stmt = "SELECT completeorders.order_id as comp, doneorders.order_id as done FROM completeorders, doneorders";
        $result = $mysqli->query( $sql_stmt );

        $complete_orders = array();
        $done_orders = array();

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                $complete_orders = array_merge($complete_orders, array_map('trim', explode(",", $row['comp'])));
                $done_orders = array_merge($done_orders, array_map('trim', explode(",", $row['done'])));
            }
        }

        if(in_array($order_id, $complete_orders) && in_array($order_id, $done_orders)){
            $num_tables = 'completeorders, doneorders';
            $table = explode(",", $num_tables);
        }
        if(in_array($order_id, $complete_orders)){
            $table[0] = 'completeorders';
        } else {
            $table[0] = 'doneorders';
        }
        $i = 0;
        while($i < count($table)){
            $sql_query = $mysqli->prepare("DELETE FROM $table[$i] WHERE user='$user' AND order_id='$order_id'");
            $sql_query->execute();

            $i++;
        }

        header('Location: account.php');
    }

    public function getBillingData() {

        include_once('/../Storage.php');
        $db = Storage::getInstance();
        $mysqli = $db->getConnection();

        $this->model->setAllOrders();

        if(isset($_SESSION['login_user'])){
            $user = $_SESSION['login_user'];
        }

        $name_array = array();
        $street_array = array();
        $city_array = array();
        $state_array = array();
        $zip_array = array();
        $country_array = array();
        $wrap_array = array();

        $i = 0;
        while($i < count($this->model->getAllOrders())) {
            $sql_query = "SELECT name, street, city, state, zip, country, wrap FROM orders WHERE order_id='{$this->model->getEachOrder($i)}'";
            $result = $mysqli->query( $sql_query );

            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    array_push($name_array, $row['name']);
                    array_push($street_array, $row['street']);
                    array_push($city_array, $row['city']);
                    array_push($state_array, $row['state']);
                    array_push($zip_array, $row['zip']);
                    array_push($country_array, $row['country']);
                    array_push($wrap_array, $row['wrap']);
                }
            }

            $i++;
        }

        $this->model->setAccountName( $name_array );
        $this->model->setAccountStreet( $street_array );
        $this->model->setAccountCity( $city_array );
        $this->model->setAccountState( $state_array );
        $this->model->setAccountZip( $zip_array );
        $this->model->setAccountCountry( $country_array );
        $this->model->setAccountGift( $wrap_array );
    }

    public function actionChangeData() {

        if(isset($_POST['email']) && isset($_POST['email_again']) && isset($_POST['password'])) {
            $this->actionChangeEmail();
        } else if(isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['password'])) {
            $this->actionChangeUsername();
        } else if(isset($_POST['new_password']) && isset($_POST['confirm_new_password']) && isset($_POST['password'])){
            $this->actionChangePassword();
        }
    }

    private function actionChangeEmail(){

        include_once('/../Storage.php');
        $db = Storage::getInstance();
        $mysqli = $db->getConnection();

        session_start();

        $sql_query = "SELECT password FROM users WHERE email='" . $_SESSION['login_user'] . '\'';
        $result = $mysqli->query( $sql_query );

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                $password_database = $row['password'];
            }
        }

        $sql_stmt = "SELECT email FROM users";
        $result_stmt = $mysqli->query($sql_stmt);

        $email_array = array();

        if ($result_stmt->num_rows > 0) {
            while ($row = $result_stmt->fetch_assoc()) {
                $email_array = array_merge($email_array, array_map('trim', explode(",", $row['email'])));
            }
        }

        if(isset($_POST['email']) && isset($_POST['email_again']) && isset($_POST['password'])){
            $email = $_POST['email'];
            $email_again = $_POST['email_again'];
            $password = $_POST['password'];
        }

        if($_POST['email'] !== $_POST['email_again']){
            header('Location: /shop/account/?email_error=1');
        } else if($password !== $password_database){
            header('Location: /shop/account/?wrong_password=1');
        } else if(in_array($email, $email_array)){
            header('Location: /shop/account/?email_registered=1');
        } else {

            $query = $mysqli->prepare("UPDATE users SET email='$email' WHERE email='" . $_SESSION['login_user'] . '\'');
            $query->execute();

            $_SESSION['login_user'] = $email;

            header('Location: /shop/account/?success_email=1');

        }

        session_write_close();

    }

    private function actionChangeUsername() {

        include_once('/../Storage.php');
        $db = Storage::getInstance();
        $mysqli = $db->getConnection();

        session_start();

        $sql_query = "SELECT password FROM users WHERE email='" . $_SESSION['login_user'] . '\'';
        $result = $mysqli->query( $sql_query );

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                $password_database = $row['password'];
            }
        }

        if(isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['password'])){
            $first_name = $_POST['first_name'];
            $last_name = $_POST['last_name'];
            $password = $_POST['password'];
        }

        if($password !== $password_database){
            header('Location: /shop/account/?wrong_password=1');
        } else {

            $query = $mysqli->prepare("UPDATE users SET first_name='$first_name', last_name='$last_name' WHERE email='" . $_SESSION['login_user'] . '\'');
            $query->execute();

            header('Location: /shop/account/?success_username=1');

        }

        session_write_close();
    }

    private function actionChangePassword(){

        include_once('/../Storage.php');
        $db = Storage::getInstance();
        $mysqli = $db->getConnection();

        session_start();

        $sql_query = "SELECT password FROM users WHERE email='" . $_SESSION['login_user'] . '\'';
        $result = $mysqli->query( $sql_query );

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                $password_database = $row['password'];
            }
        }

        if(isset($_POST['new_password']) && isset($_POST['confirm_new_password']) && isset($_POST['password'])){
            $new_password = $_POST['new_password'];
            $confirm_new_password = $_POST['confirm_new_password'];
            $password = $_POST['password'];
        }

        if($new_password !== $confirm_new_password){
            header('Location: /shop/account/?incorrect_password=1');
        } else if($password !== $password_database){
            header('Location: /shop/account/?wrong_password=1');
        } else if(strlen($new_password) < 7){
            header('Location: /shop/account/?password_error=2');
        } else {

            $query = $mysqli->prepare("UPDATE users SET password='$new_password' WHERE email='" . $_SESSION['login_user'] . '\'');
            $query->execute();

            header('Location: /shop/account/?success_password=1');
        }

        session_write_close();

    }
}
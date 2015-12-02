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
}
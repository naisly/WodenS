<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 08.11.2015
 * Time: 17:00
 */
class ProfileController
{
    public $model;
    public function __construct(ProfileModel $model) {
        $this->model = $model;

    }

    public function actionGetOrderedItems(){

        include_once('/../Storage.php');
        $db = Storage::getInstance();
        $mysqli = $db->getConnection();

        session_start();
        if(isset($_SESSION['login_user'])){
            $user = $_SESSION['login_user'];
        }
        $sql_query = "SELECT * FROM orderedItems WHERE user='$user'";

        session_write_close();

        $result = $mysqli->query($sql_query);

        $id_array = array();
        $product_name_array = array();
        $category_array = array();
        $price_array = array();
        $quantity_array = array();

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                $id_array = array_merge($id_array, array_map('trim', explode(",", $row['id'])));
                $product_name_array = array_merge($product_name_array, array_map('trim', explode(",", $row['product_name'])));
                $category_array = array_merge($category_array, array_map('trim', explode(",", $row['category'])));
                $price_array = array_merge($price_array, array_map('trim', explode(",", $row['price'])));
                $quantity_array = array_merge($quantity_array, array_map('trim', explode(",", $row['quantity'])));
            }
        }

        $this->model->setIdArray( $id_array );
        $this->model->setProductNameArray( $product_name_array );
        $this->model->setCategoryArray( $category_array );
        $this->model->setPriceArray( $price_array );
        $this->model->setQuantityOfItem( $quantity_array );
    }

    public function actionGetQuantityOfItems() {

        include_once('/../Storage.php');
        $db = Storage::getInstance();
        $mysqli = $db->getConnection();

        session_start();

        $user = $_SESSION['login_user'];

        $sql_query = "SELECT quantity FROM orderedItems WHERE user='$user'";
        $result = $mysqli->query($sql_query);

        $quantity_array = array();

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                $quantity_array = array_merge($quantity_array, array_map('trim', explode(",", $row['quantity'])));
            }
        }

        session_write_close();

        $i = 0;
        $q = count($quantity_array);
        $quantity = 0;

        while ($i < $q){
            $quantity += $quantity_array[$i];
            $i++;
        }

        $this->model->setQuantity($quantity);
    }

    public function actionGetSumOfItems() {

        include_once('/../Storage.php');
        $db = Storage::getInstance();
        $mysqli = $db->getConnection();

        $user = $_SESSION['login_user'];

        $sql_query = "SELECT price, quantity FROM orderedItems WHERE user='$user'";

        $result = $mysqli->query($sql_query);

        $price_array = array();
        $quantity_array = array();

        if ($result->num_rows > 0){
            while ($row = $result->fetch_assoc()){
                $price_array = array_merge($price_array, array_map('trim', explode(",", $row['price'])));
                $quantity_array = array_merge($quantity_array, array_map('trim', explode(",", $row['quantity'])));
            }
        }

        $sum = 0;
        $i = 0;
        $q = count($price_array);
        while ($i < $q){
            $sum += $price_array[$i] * $quantity_array[$i];
            $i++;
        }

        $this->model->setPrice( $sum );
    }

    public function actionRemoveData() {

        include_once('/../Storage.php');
        $db = Storage::getInstance();
        $mysqli = $db->getConnection();

        session_start();
        $user = $_SESSION['login_user'];

        if(isset($_POST['id'])){
            $id = $_POST['id'];
        }

        session_write_close();

        $sql_query = $mysqli->prepare("DELETE FROM orderedItems WHERE user='$user' AND id=$id");

        $sql_query->execute();
    }

}
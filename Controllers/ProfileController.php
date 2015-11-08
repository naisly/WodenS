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

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                $id_array = array_merge($id_array, array_map('trim', explode(",", $row['id'])));
                $product_name_array = array_merge($product_name_array, array_map('trim', explode(",", $row['product_name'])));
                $category_array = array_merge($category_array, array_map('trim', explode(",", $row['category'])));
                $price_array = array_merge($price_array, array_map('trim', explode(",", $row['price'])));
            }
        }

        $this->model->setIdArray( $id_array );
        $this->model->setProductNameArray( $product_name_array );
        $this->model->setCategoryArray( $category_array );
        $this->model->setPriceArray( $price_array );
    }

    public function actionGetQuantityOfItems() {

        include_once('/../Storage.php');
        $db = Storage::getInstance();
        $mysqli = $db->getConnection();

        session_start();

        $user = $_SESSION['login_user'];

        $sql_query = "SELECT id FROM orderedItems WHERE user='$user'";

        $result = $mysqli->query($sql_query);

        session_write_close();

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
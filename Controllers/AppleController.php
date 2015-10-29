<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 28.10.2015
 * Time: 23:46
 */
include_once('DefaultController.php');

class AppleController extends DefaultController
{
    public $model;


    public function __construct(AppleModel $model) {

        parent::__construct($model);
        $this->model = $model;

    }

    public function actionGetCategories(){

        /*$_POST['iphones[]'] = $iphone;
        $_POST['min'] = $min;
        $_POST['max'] = $max;*/

        include_once('/../Storage.php');

        $db = Storage::getInstance();
        $mysqli = $db->getConnection();
        /*if(isset($iphone) && isset($min) && isset($max)) {
            $sql_query = "SELECT product_name, photo, description, category, price, previous_price, time_of_adding, features,
                          id, quantity, shipping FROM phones WHERE product_name = '$iphone' AND price > '$min' AND price < '$maxd'";
        } else if(isset($iphone) && isset($min)){
            $sql_query = "SELECT product_name, photo, description, category, price, previous_price, time_of_adding, features,
                          id, quantity, shipping FROM phones WHERE product_name = '$iphone' AND price > '$min'";
        } else if(isset($iphone) && isset($max)){
            $sql_query = "SELECT product_name, photo, description, category, price, previous_price, time_of_adding, features,
                          id, quantity, shipping FROM phones WHERE product_name = '$iphone' AND price < '$max'";
        } else if(isset($min) && isset($max)){
            $sql_query = "SELECT product_name, photo, description, category, price, previous_price, time_of_adding, features,
                          id, quantity, shipping FROM phones WHERE price > '$min' AND price < '$max'";
        } else if(isset($iphone)){
            $sql_query = "SELECT product_name, photo, description, category, price, previous_price, time_of_adding, features,
                          id, quantity, shipping FROM phones WHERE product_name = '$iphone'";
        } else if(isset($min)) {
            $sql_query = "SELECT product_name, photo, description, category, price, previous_price, time_of_adding, features,
                          id, quantity, shipping FROM phones WHERE price > '$min'";
        } else if(isset($max)){
            $sql_query = "SELECT product_name, photo, description, category, price, previous_price, time_of_adding, features,
                          id, quantity, shipping FROM phones WHERE price < '$max'";
        } else {
            $sql_query = "SELECT product_name, photo, description, category, price, previous_price, time_of_adding, features,
                          id, quantity, shipping FROM phones WHERE category='Apple'";
        }*/
        $sql_query = "SELECT product_name, photo, description, category, price, previous_price, time_of_adding, features,
                          id, quantity, shipping FROM phones WHERE category='Apple'";
        $result = $mysqli->query($sql_query);

        $product_name_array = array();
        $photo_array = array();
        $description_array = array();
        $category_array = array();
        $price_array = array();
        $previous_price_array = array();
        $time_of_adding_array = array();
        $features_array = array();
        $id_array = array();
        $quantity_array = array();
        $shipping_array = array();


        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {

                $id_array = array_merge($id_array, array_map('trim', explode(",", $row['id'])));
                $product_name_array = array_merge($product_name_array, array_map('trim', explode(",", $row['product_name'])));
                $photo_array = array_merge($photo_array, array_map('trim', explode(",", $row['photo'])));
                $description_array = array_merge($description_array, array_map('trim', explode(",", $row['description'])));
                $category_array = array_merge($category_array, array_map('trim', explode(",", $row['category'])));
                $price_array = array_merge($price_array, array_map('trim', explode(",", $row['price'])));
                $previous_price_array = array_merge($previous_price_array, array_map('trim', explode(",", $row['previous_price'])));
                $time_of_adding_array = array_merge($time_of_adding_array, array_map('trim', explode(",", $row['time_of_adding'])));
                $features_array = array_merge($features_array, array_map('trim', explode(",", $row['features'])));
                $quantity_array = array_merge($quantity_array, array_map('trim', explode(",", $row['quantity'])));
                $shipping_array = array_merge($shipping_array, array_map('trim', explode(",", $row['shipping'])));

            }

            $this->model->setProductName($product_name_array);
            $this->model->setPhoto($photo_array);
            $this->model->setDescription($description_array);
            $this->model->setCategory($category_array);
            $this->model->setPrice($price_array);
            $this->model->setPreviousPrice($previous_price_array);
            $this->model->setTimeOfAdding($time_of_adding_array);
            $this->model->setFeatures($features_array);
            $this->model->setId($id_array);
            $this->model->setQuantity($quantity_array);
            $this->model->setShipping($shipping_array);
        }
    }

    public function SetAveragePrice() {

        include_once('/../Storage.php');

        $db = Storage::getInstance();
        $mysqli = $db->getConnection();
        $sql_query = "SELECT price FROM phones WHERE category='Apple'";
        $sql_products = "SELECT DISTINCT product_name FROM phones WHERE category='Apple'";

        $result = $mysqli->query($sql_query);
        $result_products = $mysqli->query($sql_products);

        $list_price = array();
        $list_products = array();

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                $list_price = array_merge($list_price, array_map('trim', explode(",", $row['price'])));
            }

            $this->model->setPrice($list_price);
        }

        if ($result_products->num_rows > 0) {
            // output data of each row
            while ($row = $result_products->fetch_assoc()) {
                $list_products = array_merge($list_price, array_map('trim', explode(",", $row['products'])));
            }

            $this->model->setProductName($list_products);
        }

        $i = 0;
        foreach($list_products as $value => $key){
            echo $list_produts[value];
        }
    }
}

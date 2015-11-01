<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 27.10.2015
 * Time: 21:57
 */
class DefaultController
{
    public $model;


    public function __construct(DefaultModel $model) {

        $this->model = $model;

    }

    /*public function actionGetAvaragePrice() {

        include_once('/../Storage.php');

        $db = Storage::getInstance();
        $mysqli = $db->getConnection();
        $sql_query = "SELECT price FROM phones";
        $result = $mysqli->query($sql_query);

        $_array = array();

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                $_array = array_merge($_array, array_map('trim', explode(",", $row['price'])));
            }

            $sum = array_sum($_array);
            $q = count($_array);

            $res = $sum / $q;

            $this->model->setAverage($res);
        }
    }
    */

    public function actionGetCategories( $category ) {

        include_once('/../Storage.php');

        $db = Storage::getInstance();
        $mysqli = $db->getConnection();

        $sql_query = "SELECT * FROM phones";

        if ($category === 'All') {
            $sql_query = "SELECT * FROM phones";
        } else {
            $sql_query = "SELECT * FROM phones WHERE category='$category'";
        }
        if (isset($_POST['array'])) {
            $array = $_POST["array"];
        }
        if (isset($_POST['min'])) {
            $min = $_POST["min"];
        }
        if (isset($_POST['max'])) {
            $max = $_POST["max"];
        }

        if (isset($_POST['sort_by_price'])) {
            $sort_by_price = $_POST["sort_by_price"];
        }
        if (isset($_POST['sort_by_time'])) {
            $sort_by_time = $_POST["sort_by_time"];
        }
        if (isset($_POST['sort_by_shipping'])) {
            $sort_by_shipping = $_POST["sort_by_shipping"];
        }

        if (isset($min) || isset($max)) {
            if (isset($array) || $min !== '' || $max !== '') {
                if ($category === 'All') {
                    $sql_query .= ' WHERE';
                } else {
                    $sql_query .= ' AND';
                }
            }
        }

        if (isset($array)) {
            $i = 0;
            while ($i < count($array)) {
                $sql_query .= " product_name='" . $array[$i] . "' OR ";
                $i++;
            }
            /*$str_count = strlen($sql_query); */
            $sql_query = substr($sql_query, 0, -3);
            if(isset($min) || isset($max)){
                if ($min !== '' || $max !== '') {
                    $sql_query .= " AND";
                }
            }
        }
        if (isset($min) && isset($max)) {
            if ($min === '') {
            } else {
                $sql_query .= " price > " . $min . " AND";
            }
        }
        if (isset($min)) {
            if ($min === '') {
            } else {
                $sql_query .= " price > " . $min . " ";
            }
        }
        if (isset($max)) {
            if ($max === '') {
            } else {
                $sql_query .= " price < " . $max . " ";
            }
        }

        $order_array = array();

        if(isset($sort_by_price)){
            array_push($order_array, $sort_by_price);
        }
        if(isset($sort_by_time)){
            array_push($order_array, $sort_by_time);
        }
        if(isset($sort_by_shipping)) {
            array_push($order_array, $sort_by_shipping);
        }

        if(isset($sort_by_price) || isset($sort_by_time) || isset($sort_by_shipping)) {
            $sql_query .= " ORDER BY ";
            if ( count($order_array) === 3) {
                $sql_query .= $order_array[0] . ", " . $order_array[1] . ", " . $order_array[2];
            }
            if ( count($order_array) === 2) {
                $sql_query .= $order_array[0] . ", " . $order_array[1];
            }
            if ( count($order_array) === 1) {
                $sql_query .= $order_array[0];
            }
        }
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
        $average_price_array = array();


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
                $average_price_array = array_merge($average_price_array, array_map('trim', explode(",", $row['average_price'])));

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
            $this->model->setAverage($average_price_array);
        }
        
    }

    public function actionGetDistinctCategories() {

        include_once('/../Storage.php');

        $db = Storage::getInstance();
        $mysqli = $db->getConnection();
        $sql_query = "SELECT DISTINCT category FROM phones";
        $result = $mysqli->query($sql_query);

        $list_categories = array();

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                $list_categories = array_merge($list_categories, array_map('trim', explode(",", $row['category'])));
            }

            $this->model->setDistinctCategories($list_categories);
        }

    }

    public function actionSetAveragePrice( $category ) {

        $i = 0;

        include_once('/../Storage.php');

        $db = Storage::getInstance();
        $mysqli = $db->getConnection();
        if ( $category === 'All') {
            $sql_query = "SELECT price FROM phones";
            $sql_products = "SELECT DISTINCT product_name FROM phones";
        } else if ( $category === 'Apple'){
            $sql_query = "SELECT price FROM phones WHERE category='Apple'";
            $sql_products = "SELECT DISTINCT product_name FROM phones WHERE category='Apple'";
        }


        $result = $mysqli->query($sql_query);
        $result_products = $mysqli->query($sql_products);

        $list_price = array();
        $list_products = array();

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                $list_price = array_merge($list_price, array_map('trim', explode(",", $row['price'])));
            }

        }

        if ($result_products->num_rows > 0) {
            // output data of each row
            while ($row = $result_products->fetch_assoc()) {
                $list_products = array_merge($list_products, array_map('trim', explode(",", $row['product_name'])));
            }

        }

        while ($i < count($list_products)){

            $sql_avr = "SELECT price, average_price FROM phones WHERE product_name='$list_products[$i]'";
            $result_avr = $mysqli->query($sql_avr);

            $list_avr = array();

            if ($result_avr->num_rows > 0){
                while ($row = $result_avr->fetch_assoc()) {
                    $list_avr = array_merge($list_avr, array_map('trim', explode(",", $row['price'])));
                }
                $sum = array_sum($list_avr);
                $quantity = count($list_avr);
                $res = $sum / $quantity;

                $sql_res = $mysqli->prepare("UPDATE phones SET average_price='$res' WHERE product_name='$list_products[$i]'");
                $sql_res->execute();

            }
            $i++;
        }
    }
}
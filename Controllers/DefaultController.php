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

    public function actionGetAvaragePrice() {

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

    public function actionGetCategories() {

        include_once('/../Storage.php');

        $db = Storage::getInstance();
        $mysqli = $db->getConnection();
        $sql_query = "SELECT product_name, photo, description, category, price, previous_price, time_of_adding, features, id, quantity, shipping FROM phones";
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
}
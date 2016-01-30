<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 29.01.2016
 * Time: 0:23
 *
 * ==================
 * getting categories, search method, setting average price for each product,
 * getting distinct item names, setting sum of Each users cart,
 * setting sum of all items
 * =================
 */

include_once('DefaultController.php');

class ShopController extends DefaultController
{
    /**
     * MVC constructor
     * with DefaultModel
     *
     * @global $model
     */
    public $model;
    public function __construct(DefaultModel $model) {
        parent::__construct($model);
        $this->model = $model;
    }

    public function actionGetData( $category, $table, $sort ) {

        $this->actionGetHeaderCart();
        $this->actionSetAveragePrice( $table );
        $this->actionGetDistinctCategories( $table );
        $this->actionGetItemNames( $category, $table );
        $this->actionGetCategories( $category, $table, $sort );

    }

    /**
     * Method for setting Average Price
     * for each product in the Database
     * and in the view
     *
     * @var $result
     * @var $result_products
     * @var $list_price
     * @var $list_products
     *
     * @var $res
     */
    private function actionSetAveragePrice( $category ) {
        $i = 0;
        include_once('/../Storage.php');
        $db = Storage::getInstance();
        $mysqli = $db->getConnection();
        if ( $category == 'Phones') {
            $sql_query = "SELECT price FROM phones";
            $sql_products = "SELECT DISTINCT product_name FROM phones";
        } else if ( $category == 'Notebooks') {
            $sql_query = "SELECT price FROM notebooks";
            $sql_products = "SELECT DISTINCT product_name FROM notebooks";
        } else if ( $category == 'Television') {
            $sql_query = "SELECT price FROM television";
            $sql_products = "SELECT DISTINCT product_name FROM television";
        } else if ( $category == 'Gadgets'){
            $sql_query = "SELECT price FROM gadgets";
            $sql_products = "SELECT DISTINCT product_name FROM gadgets";
        }
        else {
            $sql_query = "SELECT price FROM phones WHERE category='$category'";
            $sql_products = "SELECT DISTINCT product_name FROM phones WHERE category='$category'";
        }
        $result = $mysqli->query($sql_query);
        $result_products = $mysqli->query($sql_products);
        $list_price = array();
        $list_products = array();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $list_price = array_merge($list_price, array_map('trim', explode(",", $row['price'])));
            }
        }
        if ($result_products->num_rows > 0) {
            while ($row = $result_products->fetch_assoc()) {
                $list_products = array_merge($list_products, array_map('trim', explode(",", $row['product_name'])));
            }
        }

        while ($i < count($list_products)){
            $sql_avr = "SELECT price, average_price FROM $category WHERE product_name='$list_products[$i]'";
            $result_avr = $mysqli->query($sql_avr);
            $list_avr = array();
            if ($result_avr->num_rows > 0){
                while ($row = $result_avr->fetch_assoc()) {
                    $list_avr = array_merge($list_avr, array_map('trim', explode(",", $row['price'])));
                }
                $sum = array_sum($list_avr);
                $quantity = count($list_avr);
                $res = $sum / $quantity;
                $sql_res = $mysqli->prepare("UPDATE $category SET average_price='$res' WHERE product_name='$list_products[$i]'");
                $sql_res->execute();
            }
            $i++;
        }
    }

    /**
     * Getting Distinct categories
     * for the product page
     */
    private function actionGetDistinctCategories( $category ) {

        include_once('/../Storage.php');
        $db = Storage::getInstance();
        $mysqli = $db->getConnection();

        $sql_query = "SELECT DISTINCT category FROM $category";
        $result = $mysqli->query($sql_query);
        $list_categories = array();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $list_categories = array_merge($list_categories, array_map('trim', explode(",", $row['category'])));
            }
            $this->model->setDistinctCategories($list_categories);
        }
    }

    /**
     * Method for getting distinct product
     * names for the Product cart
     *
     * @param $category
     *
     * @var $product_names_array
     */
    private function actionGetItemNames( $category , $data) {
        $db = Storage::getInstance();
        $mysqli = $db->getConnection();
        if ( $category == 'Phones') {
            $sql_query = "SELECT DISTINCT product_name FROM phones";
        } else if ( $category == 'Notebooks'){
            $sql_query = "SELECT DISTINCT product_name FROM notebooks";
        } else if ( $category == 'Television'){
            $sql_query = "SELECT DISTINCT product_name FROM television";
        } else if ( $category == 'Gadgets'){
            $sql_query = "SELECT DISTINCT product_name FROM gadgets";
        } else {
            $sql_query = "SELECT DISTINCT product_name FROM $data WHERE category='$category'";
        }
        $result = $mysqli->query($sql_query);

        $product_names_array = array();

        if ($result->num_rows > 0){
            while ($row = $result->fetch_assoc()){
                $product_names_array = array_merge($product_names_array, array_map('trim', explode(",", $row['product_name'])));
            }
        }

        $this->model->setDistinctProductNames($product_names_array);
    }

    /**
     * Search method for Selling
     * page for adding items in your Cart
     * Products page
     *
     * @param $category
     *
     * @var $timer
     * @var $min
     * @var $max
     * @var $sort_by_price
     * @var $sort_by_time
     * @var $sort_by_shipping
     *
     * Getting DATA
     *
     * @var $result
     * @var $product_name_array
     * @var $photo_array
     * @var $description_array
     * @var $category_array
     * @var $price_array
     * @var $previous_price_array
     * @var $time_of_adding_array
     * @var $features_array
     * @var $id_array
     * @var $quantity_array
     * @var $shipping_array
     * @var $average_price_array
     *
     * ! REDIRECT
     */
    private function actionGetCategories( $category, $table, $sort ) {
        include_once('/../Storage.php');
        $db = Storage::getInstance();
        $mysqli = $db->getConnection();

        $_SESSION['status'] = 0;
        $sql_query = "SELECT * FROM phones";
        if ($category == 'Phones') {
            $sql_query = "SELECT * FROM phones";
        } else if ($category == 'Notebooks'){
            $sql_query = "SELECT * FROM notebooks";
        } else if ($category == 'Television'){
            $sql_query = "SELECT * FROM television";
        } else if ($category == 'Gadgets'){
            $sql_query = "SELECT * FROM gadgets";
        } else {
            $sql_query = "SELECT * FROM $table WHERE category='$category'";
            $_SESSION['status'] = 1;
        }

        $timer = 0;
        $array = array();
        while($timer < 11) {
            if (isset($_GET['selected_item_' . $timer])) {
                array_push($array, $_GET['selected_item_' . $timer]);
            }
            $timer++;
        }
        if (isset($_GET['min'])) {
            $min = $_GET['min'];
        }
        if (isset($_GET['max'])) {
            $max = $_GET["max"];
        }
        if (isset($_GET['sort_by_price'])) {
            $sort_by_price = $_GET["sort_by_price"];
        }
        if (isset($_GET['sort_by_time'])) {
            $sort_by_time = $_GET["sort_by_time"];
        }
        if (isset($_GET['sort_by_shipping'])) {
            $sort_by_shipping = $_GET["sort_by_shipping"];
        }

        if((isset($min) || isset($max)) && (count($array) === 0)) {
            if($min == '' && $max == ''){

            } else {
                if($_SESSION['status'] == 1){
                    $sql_query .= ' AND';
                } else {
                    $sql_query .= ' WHERE';
                }
            }
        }

        if(isset($array)){
            if(count($array) !== 0) {
                if($_SESSION['status'] == 1){
                    $sql_query .= ' AND';
                } else {
                    $sql_query .= ' WHERE';
                }
            }
        }

        if (isset($array)) {
            if(count($array) !== 0) {
                $i = 0;
                $sql_query .= '(';
                while ($i < count($array)) {
                    $sql_query .= " product_name='" . $array[$i] . "' OR ";
                    $i++;
                }
            }

            if(count($array) !== 0) {
                $sql_query = substr($sql_query, 0, -3);
                if (isset($min) || isset($max)) {
                    if ($min !== '' || $max !== '') {
                        $sql_query .= ") AND";
                    }
                }
            }
            if(count($array) === 1 && !isset($max) && !isset($min)){
                $sql_query .= ')';
            }
            if(isset($max) && isset($min)) {
                if ($max == '' && $min == '' && count($array) !== 0) {
                    $sql_query .= ')';
                }
            }
        }
        if (isset($min) && isset($max)) {
            if ($min !== '') {
                $sql_query .= " (price > " . $min;
                if(isset($max)) {
                    if ($max !== '') {
                        $sql_query .=" AND";
                    }
                }
            }
        }
        if (isset($max)) {
            if ($max === '') {
            } else {
                $sql_query .= " price < " . $max;
            }
            if(isset($min) && $min !== ''){
                $sql_query .= ' )';
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
        $original_name_array = array();
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
            while ($row = $result->fetch_assoc()) {
                $id_array = array_merge($id_array, array_map('trim', explode(",", $row['id'])));
                $product_name_array = array_merge($product_name_array, array_map('trim', explode(",", $row['product_name'])));
                $original_name_array = array_merge($original_name_array, array_map('trim', explode(",", $row['original_name'])));
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

            $all_product_names = array();

            if($sort === 'All') {
                $sql_num = "SELECT DISTINCT product_name FROM $table";
            } else {
                $sql_num = "SELECT DISTINCT product_name FROM $table WHERE category='$sort'";
            }
            $result_num = $mysqli->query( $sql_num );
            $num = $result_num->num_rows;
            if ($result_num->num_rows > 0) {
                while ($row = $result_num->fetch_assoc()) {
                    $all_product_names = array_merge($all_product_names, array_map('trim', explode(",", $row['product_name'])));
                }
            }
            $amount_array = array( $num );
            $g = 0;
            while($g < $num){
                $amount_array[$all_product_names[$g]] = 0;
                $g++;
            }
            array_shift($amount_array);
            $k = 0;
            while($k < count($product_name_array)) {
                if(isset($min) && (!isset($max) || $max == '') && $min !== '') {
                    $amount_sql = "SELECT COUNT(*) as amount FROM $table WHERE product_name='$product_name_array[$k]' AND price > $min";
                } else if((!isset($min) || $min == '') && isset($max) && $max !== ''){
                    $amount_sql = "SELECT COUNT(*) as amount FROM $table WHERE product_name='$product_name_array[$k]' AND price < $max";
                } else if (isset($max) && isset($min) && $max !== '' && $min !== ''){
                    $amount_sql = "SELECT COUNT(*) as amount FROM $table WHERE product_name='$product_name_array[$k]' AND price > $min AND price < $max";
                } else {
                    $amount_sql = "SELECT COUNT(*) as amount FROM $table WHERE product_name='$product_name_array[$k]'";
                }
                $result_sql = $mysqli->query($amount_sql);
                if ($result_sql->num_rows > 0) {
                    while ($row = $result_sql->fetch_assoc()) {
                        $amount = $row['amount'];
                        $amount_array[$product_name_array[$k]] = $amount;
                    }
                }
                $k++;
            }

            $result_products = array();
            foreach($amount_array as $num => $ass){
                array_push($result_products, $ass);
            }

            $this->model->setNoDataFound( 0 );

            $this->model->setProductName($product_name_array);
            $this->model->setOriginalName($original_name_array);
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
            $this->model->setQuantityOfItems($result_products);
        } else {
            $this->model->setNoDataFound( 1 );
        }

        if(isset($_GET['page'])){
            $uri_parts = explode('?', $_SERVER['REQUEST_URI'], 2);

            if($this->model->getPages() != 0) {
                if ($_GET['page'] > $this->model->getPages()) {

                    header('Location: ' . $uri_parts[0] . '?page=' . $this->model->getPages());
                } elseif ($_GET['page'] < 1) {
                    header('Location: ' . $uri_parts[0] . '?page=1');
                }
            }
        }
    }
}
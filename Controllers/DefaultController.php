<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 27.10.2015
 * Time: 21:57
 *
 * ==================
 * getting categories, search method, setting average price for each product,
 * getting distinct item names, setting sum of Each users cart,
 * setting sum of all items
 * =================
 */
class DefaultController
{
    /*
     * MVC constructor
     * with DefaultModel
     *
     * @global $model
     */
    public $model;
    public function __construct(DefaultModel $model) {
        $this->model = $model;
    }

    public function actionGetData( $category, $table, $sort ) {

        $this->actionGetHeaderCart();
        $this->actionSetAveragePrice( $table );
        $this->actionGetDistinctCategories( $table );
        $this->actionGetItemNames( $category, $table );
        $this->actionGetCategories( $category, $table, $sort );

    }

    public function actionGenerateSessionAuth($length = 25) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        $this->model->setSessionAuth($randomString);
    }

    /*
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
     * @var sort_by_shipping
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
        //echo $_SESSION['status'];
        $timer = 0;
        $array = array();
        while($timer < 10) {
            if (isset($_POST['array' . $timer])) {
                array_push($array, $_POST['array' . $timer]);
            }
            $timer++;
        }
        if (isset($_POST['min'])) {
            $min = $_POST['min'];
        }
        //echo $min;
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
        /*if (isset($min) || isset($max)) {
            $sql_query .= ' WHERE';
            if (isset($array) || $min !== '' || $max !== '') {
                if(count($array) !== 0) {
                    if ($category === 'All' || $category === 'Notebooks') {
                        $sql_query .= ' WHERE';
                    } else {
                        $sql_query .= ' AND';
                    }
                }
            }
        }*/
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
            /*$str_count = strlen($sql_query); */
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

        //echo $sql_query;
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
            // output data of each row
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
            //echo $sql_query;
            if($sort === 'All') {
                $sql_num = "SELECT DISTINCT product_name FROM $table";
            } else {
                $sql_num = "SELECT DISTINCT product_name FROM $table WHERE category='$sort'";
            }
            $result_num = $mysqli->query( $sql_num );
            $num = $result_num->num_rows;
            if ($result_num->num_rows > 0) {
                // output data of each row
                while ($row = $result_num->fetch_assoc()) {
                    $all_product_names = array_merge($all_product_names, array_map('trim', explode(",", $row['product_name'])));
                }
            }
            //print_r($all_product_names);
            #echo "<br />";
            $amount_array = array( $num );
            $g = 0;
            while($g < $num){
                $amount_array[$all_product_names[$g]] = 0;
                $g++;
            }
            array_shift($amount_array);
            //print_r($amount_array);
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
                //echo $amount_sql;
                $result_sql = $mysqli->query($amount_sql);
                if ($result_sql->num_rows > 0) {
                    while ($row = $result_sql->fetch_assoc()) {
                        $amount = $row['amount'];
                        $amount_array[$product_name_array[$k]] = $amount;
                    }
                }
                $k++;
            }
            //print_r($amount_array);
            $result_products = array();
            foreach($amount_array as $num => $ass){
                array_push($result_products, $ass);
            }
            //print_r($result_products);

            //print_r($id_array);
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
        }
    }

    /*
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
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                $list_categories = array_merge($list_categories, array_map('trim', explode(",", $row['category'])));
            }
            $this->model->setDistinctCategories($list_categories);
        }
    }

    /*
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
            //echo $sql_query;
            //echo $sql_products;
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
        //print_r($list_price);
        //print_r($list_products);

        //echo count($list_products);

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

    /*
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

    private function actionGetLanguage() {

        //echo $_SESSION['language'];
        header("Content-Type: text/html; charset=utf-8");
        session_start();

        $language_array = ['ru', 'us', 'fr', 'de'];

        /*
         * Change for language
         */
        $pageURL = 'http';

        $pageURL .= "://";
        if ($_SERVER["SERVER_PORT"] != "80") {
            $pageURL .= $_SERVER["SERVER_NAME"] . ":" . $_SERVER["SERVER_PORT"] . $_SERVER["REQUEST_URI"];
        } else {
            $pageURL .= $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
        }

        $links_array = explode("/", $pageURL);
        $array = explode("/", $pageURL);

        if(in_array($array[3], $language_array)){
            $_SESSION['language'] = $array[3];
        } else {
            $_SESSION['language'] = 'us';
        }
        /*
         * End
         */

        /*if(!isset($_SESSION['language'])){
            $_SESSION['language'] = 'us';
        }*/
        session_write_close();
        //echo $_SESSION['language'];
        if($_SESSION['language'] !== 'us') {
            include_once('C:/xampp/htdocs/shop/Languages/lang.' . $_SESSION['language'] . '.php');

            if(isset($lang)) {
                $this->model->setLanguage($lang);
            }
        }

        $language = $_SESSION['language'];

        switch ($language) {
            case 'ru': $name_of_country =  'Россия';
                break;
            case 'us': $name_of_country =  'United States';
                break;
            case 'fr': $name_of_country =  'France';
                break;
            case 'de': $name_of_country = 'Deutschland';
                break;
        }

        foreach($language_array as $val => $assoc){
            if($assoc == $language){
                unset($language_array[$val]);
            }
        }
        sort($language_array);

        $name_of_country_array = array();
        $i = 0;
        $k = count($language_array);
        while ($i < $k){
            switch($language_array[$i]){
                case 'ru': array_push($name_of_country_array, 'Россия');
                    break;
                case 'us': array_push($name_of_country_array, 'United States');
                    break;
                case 'fr': array_push($name_of_country_array, 'France');
                    break;
                case 'de': array_push($name_of_country_array, 'Deutschland');
                    break;
            }

            $i++;
        }

        /*
         * Setting Model
         */
        $this->model->setCurrentLanguage( $language );
        $this->model->setCurrentCountry( $name_of_country );
        $this->model->setNameOfLanguages( $language_array );
        $this->model->setNameOfCountries( $name_of_country_array );
    }
    /*
     * Incapsulation for
     * header area
     * Cart menu
     */
    public function actionGetHeaderCart() {

        $this->actionGetLanguage();
        $this->actionGetSumOfItems();
        $this->actionGetQuantityOfItems();
        $this->actionGetBreadcrumbs();
    }

    /*
     * Method for summing all amount
     * of Items in User's cart Interface
     *
     * @var $price_array
     * @var $quantity_array
     *
     * @var $sum
     */
    private function actionGetSumOfItems() {

        include_once('/../Storage.php');
        $db = Storage::getInstance();
        $mysqli = $db->getConnection();

        session_start();
        if(isset($_SESSION['login_user'])) {
            $user = $_SESSION['login_user'];

            session_write_close();

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

            $this->model->setAPrice( $sum );
        } else {
            session_write_close();
        }
    }

    /*
     * Method for summing quantity of items
     * of each Person's cart
     *
     * @var $quantity_array
     * @var $quantity
     */
    private function actionGetQuantityOfItems() {

        include_once('/../Storage.php');
        $db = Storage::getInstance();
        $mysqli = $db->getConnection();

        session_start();

        if(isset($_SESSION['login_user'])) {
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

            $this->model->setAItems($quantity);
        }

    }

    protected function actionGetBreadcrumbs() {

        $pageURL = 'http';

        $pageURL .= "://";
        if ($_SERVER["SERVER_PORT"] != "80") {
            $pageURL .= $_SERVER["SERVER_NAME"] . ":" . $_SERVER["SERVER_PORT"] . $_SERVER["REQUEST_URI"];
        } else {
            $pageURL .= $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
        }

        $links_array = explode("/", $pageURL);
        $array = explode("/", $pageURL);

        $language_check = explode("/", $pageURL);

        $languages = ['us', 'ru', 'de', 'fr'];

        if($links_array[0] == 'http:' && $links_array[2] == 'localhost:8080' && $links_array[3] == ''){
            $breadcrumbs[0] = 'Woden Sims';
            $links = $pageURL;

            $this->model->setBreadcrumbs( $breadcrumbs );
            $this->model->setBreadcrumbsLink( $links );
        } elseif ($links_array[3] !== ''){
            array_shift($links_array);
            array_shift($links_array);
            array_shift($links_array);

            array_shift($array);
            array_shift($array);
            array_shift($array);

            $i = 0;
            while($i < count($array)){
                if(strlen($array[$i]) < 2){
                    unset($array[$i]);
                }
                $i++;
            }

            array_unshift($array, 'Woden Sims');

            $breadcrumbs_links = array();

            session_start();

            if(in_array($languages, $language_check)) {
                $breadcrumbs_links[0] = 'http://localhost:8080';
            } else {
                if($_SESSION['language'] !== 'us') {
                    $breadcrumbs_links[0] = "http://localhost:8080/" . $_SESSION['language'];

                    array_shift($links_array);

                    array_shift($array);
                    array_shift($array);
                    array_unshift($array, 'Woden Sims');

                } else {
                    $breadcrumbs_links[0] = "http://localhost:8080";
                }
            }

            session_write_close();

            $i = 0;
            while($i < count($links_array) && count($links_array) > 1){
                $links_array[$i] .= '/';

                $i++;
            }

            $i = 0;
            if(count($links_array) > 1){
                $count = count($links_array) - 1;
            } else {
                $count = count($links_array);
            }
            while ($i < $count){

                $link = $breadcrumbs_links[$i];

                if($i % 2 == 0){
                    $link .= '/';
                }

                $link .= $links_array[$i];

                if (end($links_array) == '' && $i == $count - 1) {
                    $link .= '/';
                }

                array_push($breadcrumbs_links, $link);

                $i++;
            }

            $this->model->setBreadcrumbs( $array );
            $this->model->setBreadcrumbsLink( $breadcrumbs_links );
        }

    }
}
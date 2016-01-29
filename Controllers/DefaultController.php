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

    public function actionGenerateSessionAuth($length = 25) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        $this->model->setSessionAuth($randomString);
    }

    private function actionGetLanguage() {
        //echo $_SESSION['language'];
        header("Content-Type: text/html; charset=utf-8");
        if (session_status() == PHP_SESSION_NONE) {
                session_start();
        }
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
        #$this->actionGetSumOfItems();
        #$this->actionGetQuantityOfItems();
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
    protected function actionGetSumOfItems() {

        include_once('/../Storage.php');
        $db = Storage::getInstance();
        $mysqli = $db->getConnection();

        //session_start();
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
    protected function actionGetQuantityOfItems() {

        include_once('/../Storage.php');
        $db = Storage::getInstance();
        $mysqli = $db->getConnection();

        //session_start();

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

            //print_r($links_array);

            $i = 0;
            while($i < count($array)){
                if(strlen($array[$i]) < 2){
                    unset($array[$i]);
                } else {
                    $array[$i] = ucfirst($array[$i]);
                }
                $i++;
            }

            array_unshift($array, 'Woden Sims');

            $breadcrumbs_links = array();

            /*if (session_status() == PHP_SESSION_NONE) {
                session_start();
            }*/

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

            //print_r($links_array);

            $i = 0;
            if(count($links_array) >= 1){
                $count = count($links_array);

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
            } /*else {
                $count = count($links_array) - 1;
            }*/

            //print_r($array);
            $i = 0;
            while($i < count($array)){
                if(substr($array[$i], 0, 1) == '?'){
                    array_pop($array);
                    array_pop($breadcrumbs_links);
                }

                $i++;
            }

            $this->model->setBreadcrumbs( $array );
            $this->model->setBreadcrumbsLink( $breadcrumbs_links );
        }

    }
}
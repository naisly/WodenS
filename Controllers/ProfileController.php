<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 08.11.2015
 * Time: 17:00
 *
 * ==================
 * Getting data from orders for each User,
 * deleting from the order -> done, otherwise rollback
 * =================
 */

include_once('DefaultController.php');

class ProfileController extends DefaultController
{
    /*
     * MVC constructor
     * with ProfileModel
     *
     * @global $model
     */
    public $model;
    public function __construct(ProfileModel $model) {
        parent::__construct($model);
        $this->model = $model;

    }

    public function actionGetUserData() {

        session_start();

        if(!isset($_SESSION['login_user'])){
            header('Location: /' . $_SESSION['language'] . 'login');
        }

        session_write_close();

        $this->actionGetHeaderCart();
        $this->actionGetOrderedItems();
        $this->actionGetUser();
        $this->actionGetMinPrice();
        $this->actionGetBilling();
    }

    /*
     * Getting data from orders for
     * each user
     *
     * @var $id_array
     * @var $product_name_array
     * @var $category_array
     * @var $price_array
     * @var $quantity_array
     */
    private function actionGetOrderedItems(){

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

        if ($result->num_rows !== 0) {
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

            $this->model->setNotFound(0);
            $this->model->setIdArray($id_array);
            $this->model->setProductNameArray($product_name_array);
            $this->model->setCategoryArray($category_array);
            $this->model->setPriceArray($price_array);
            $this->model->setQuantityOfItem($quantity_array);
        } else if ($result->num_rows == 0) {
            $this->model->setNotFound(1);
        }

    }

    /*
     * Deleting the row from the OrderedItems
     * while clicking on the button
     * in the Admin Page
     *
     * @var $id
     */
    public function actionRemoveData() {

        include_once('/../Storage.php');
        $db = Storage::getInstance();
        $mysqli = $db->getConnection();

        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        $user = $_SESSION['login_user'];

        if(isset($_POST['id'])){
            $id = $_POST['id'];
        }
        if(isset($_POST['name'])){
            $name = $_POST['name'];
        }

        $sql_query = $mysqli->prepare("DELETE FROM orderedItems WHERE user='$user' AND id=$id AND product_name='$name'");

        $sql_query->execute();

        header('Location: /' . $_SESSION['language'] . '/account/cart');
    }

    protected function actionGetUser() {

        include_once('/../Storage.php');
        $db = Storage::getInstance();
        $mysqli = $db->getConnection();

        session_start();
        $user = $_SESSION['login_user'];

        $sql_query = "SELECT users.first_name, users.last_name, completeorders.order_id  FROM users INNER JOIN completeorders
                      WHERE users.email='$user' AND completeorders.user='$user' ORDER BY completeorders.sort_id DESC LIMIT 1";

        //echo $sql_query;

        $result = $mysqli->query( $sql_query );

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                $f_name = $row['first_name'];
                $l_name = $row['last_name'];
                $order_id = $row['order_id'];
            }

            $full_name = $f_name . ' ' . $l_name;
            $this->model->setName( $full_name );

        }

        /*
         * If no order found
         */
        if($result->num_rows == 0){
            $sql_names = "SELECT first_name, last_name FROM users WHERE email='$user' LIMIT 1";
            $sql_names_result = $mysqli->query( $sql_names );

            if ($sql_names_result->num_rows > 0) {
                // output data of each row
                while ($row = $sql_names_result->fetch_assoc()) {
                    $first_name = $row['first_name'];
                    $last_name = $row['last_name'];
                }

                $full_name = $first_name . ' ' . $last_name;

                $this->model->setName( $full_name );
            }
        }

        if(!isset($order_id)){
            $this->model->setOrderId( 'None' );
        }

        if(isset($order_id)){
            $this->model->setOrderId( $order_id );

            $sql_stmt = "SELECT price, quantity FROM completeorders WHERE order_id='$order_id'";

            $result_stmt = $mysqli->query( $sql_stmt );

            $price_array = array();
            $quantity_array = array();

            if ($result_stmt->num_rows > 0) {
                // output data of each row
                while ($row = $result_stmt->fetch_assoc()) {
                    $price_array = array_merge($price_array, array_map('trim', explode(",", $row['price'])));
                    $quantity_array = array_merge($quantity_array, array_map('trim', explode(",", $row['quantity'])));
                }
            }

            $items = '';
            $price = '';
            $i = 0;
            while( $i < count($quantity_array)){
                $items += $quantity_array[$i];
                $price += $quantity_array[$i] * $price_array[$i];

                $i++;
            }

            $this->model->setLastOrderItems( $items );
            $this->model->setLastOrderSum( $price );

        }

        $sql_table = "SELECT product_table, id FROM orderedItems WHERE user='$user' ORDER BY 'sort_id' DESC LIMIT 1";
        $result_table = $mysqli->query( $sql_table );

        if($result_table->num_rows == 0){
            $sql_another = "SELECT product_table, id FROM completeOrders WHERE user='$user' ORDER BY sort_id DESC LIMIT 1";
            $result_another = $mysqli->query( $sql_another );

            if($result_another->num_rows > 0){
                while ($row = $result_another->fetch_assoc()){
                    $table = $row['product_table'];
                    $id = $row['id'];
                }
            }

            if($result_another->num_rows == 0){
                $sql_final = "SELECT product_table, id FROM doneOrders WHERE user='$user' ORDER BY sort_id DESC LIMIT 1";
                $result_final = $mysqli->query( $sql_final );

                if($result_final->num_rows > 0){
                    while($row = $result_final->fetch_assoc()){
                        $table = $row['product_table'];
                        $id = $row['id'];
                    }
                }
            }

        } else if ($result_table->num_rows > 0) {
            // output data of each row
            while ($row = $result_table->fetch_assoc()) {
                $table = $row['product_table'];
                $id = $row['id'];
            }
        }

        if(isset($table) && isset($id)) {

            $sql_item = "SELECT original_name, price, shipping, photo
                     FROM $table WHERE $table.id='$id' LIMIT 1";

            $result_item = $mysqli->query($sql_item);

            if ($result_item->num_rows > 0) {
                // output data of each row
                while ($row = $result_item->fetch_assoc()) {
                    $original_name_item = $row['original_name'];
                    $price_item = $row['price'];
                    $shipping_item = $row['shipping'];
                    $photo_item = $row['photo'];
                }
            }

            $this->model->setOriginalName($original_name_item);
            $this->model->setItemPrice($price_item);
            $this->model->setItemShipping($shipping_item);
            $this->model->setPhoto($photo_item);
        } else {
            $this->model->setNoProduct( 'none' );
        }


    }

    protected function actionGetMinPrice() {

        include_once('/../Storage.php');
        $db = Storage::getInstance();
        $mysqli = $db->getConnection();

        $sql_query = "SELECT min(phones.price) as price1, min(notebooks.price) as price2, min(gadgets.price) as price3,
                      min(television.price) as price4 FROM phones, notebooks, gadgets, television";

        $result = $mysqli->query( $sql_query );


        if($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $min_phones = $row['price1'];
                $min_notebooks = $row['price2'];
                $min_gadgets = $row['price3'];
                $min_tv = $row['price4'];
            }
        }

        $this->model->setMinPhones( $min_phones );
        $this->model->setMinNotebooks( $min_notebooks );
        $this->model->setMinGadgets( $min_gadgets );
        $this->model->setMinTV( $min_tv );


    }

    protected function actionGetBilling() {

        include_once('/../Storage.php');
        $db = Storage::getInstance();
        $mysqli = $db->getConnection();

        //session_start();
        if(isset($_SESSION['login_user'])){
            $user = $_SESSION['login_user'];
        }

        $sql_query = "SELECT name, street, city, state, zip, country, wrap FROM billing WHERE user='$user'";
        $result = $mysqli->query( $sql_query );

        //echo $sql_query;

        if($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $name = $row['name'];
                $street = $row['street'];
                $city = $row['city'];
                $state = $row['state'];
                $zip = $row['zip'];
                $country = $row['country'];
                $wrap = $row['wrap'];
            }
        }
        if($result->num_rows !== 0){
            $this->model->setBillingName( $name );
            $this->model->setBillingStreet( $street );
            $this->model->setBillingCity( $city );
            $this->model->setBillingState( $state );
            $this->model->setBillingZip( $zip );
            $this->model->setBillingCountry( $country );
            $this->model->setBillingWrap( $wrap );

            $this->model->setBillingNotFound(0);
        } else {
            $this->model->setBillingNotFound(1);
        }


    }

}
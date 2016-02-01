<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 28.11.2015
 * Time: 13:47
 *
 * ===================
 * Checking if Order exists ( Done & Complete orders Tables )
 * If exists -> get items
 *
 * Getting Language & Breadcrumbs
 * ===================
 */

include_once('DefaultController.php');

class CheckOrderController extends DefaultController
{
    /**
     * MVC constructor
     * with CheckOrderModel
     *
     * @global $model
     */
    public $model;
    public function __construct(CheckOrderModel $model) {
        parent::__construct( $model );
        $this->model = $model;
    }

    /**
     * Checking if Order exists ( Done & Complete orders Tables )
     * If exists -> get items
     *
     */
    public function actionGetOrders() {

        $this->actionGetHeaderCart();
        $this->actionCheckOrder();
        $this->actionGetOrderedItems();
    }

    /**
     * Checking if Order exists
     * @var $order_number
     * @var $order_email
     *
     * -> else set Not Found
     */
    private function actionCheckOrder() {

        if(isset($_GET['order_number'])) {
            $order_number = $_GET['order_number'];
        }
        if(isset($_GET['order_email'])) {
            $order_email = $_GET['order_email'];
        }

        include_once $_SERVER['DOCUMENT_ROOT'] . '/Storage.php';
        $db = Storage::getInstance();
        $mysqli = $db->getConnection();

        if(isset($order_number) || isset($order_email)){

            $status_tables = ['doneorders', 'completeorders'];

            $i = 0;

            while($i < count($status_tables)) {
                $sql_query = "SELECT DISTINCT $status_tables[$i].*, users.email, users.first_name, users.last_name FROM $status_tables[$i] INNER JOIN users WHERE (order_id='$order_number'
                              AND user='$order_email') AND $status_tables[$i].user = users.email";
                $result = $mysqli->query($sql_query);


                $first_name_array = array();
                $last_name_array = array();

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $first_name_array = array_merge($first_name_array, array_map('trim', explode(",", $row['first_name'])));
                        $last_name_array = array_merge($last_name_array, array_map('trim', explode(",", $row['last_name'])));
                    }

                    $name_array[0] = $first_name_array[0] . ' ' . $last_name_array[0];

                    if ($i == 0){
                        $status = 'done';
                    } else if ($i == 1){
                        $status = 'wait';
                    }

                    $this->model->setName($name_array[0]);

                }

                $i++;
            }

            if(!isset($status)) {
                $this->model->setStatus( 'not_found' );
            } else {
                $this->model->setStatus($status);
            }

            $this->model->setOrderId( $order_number );
            $this->model->setOrderEmail( $order_email );
        }
    }

    /**
     * Getting Data of Order
     *
     * (items) Sum, quantity, original_name, shipping, photo, price
     * category
     */
    private function actionGetOrderedItems() {

        include_once $_SERVER['DOCUMENT_ROOT'] . '/Storage.php';
        $db = Storage::getInstance();
        $mysqli = $db->getConnection();

        if(isset($_GET['order_number'])) {
            $order_number = $_GET['order_number'];
        }
        if(isset($_GET['order_email'])) {
            $order_email = $_GET['order_email'];
        }

        if($this->model->getStatus() == 'done'){
            $status = 'doneorders';
        } else if($this->model->getStatus() == 'wait'){
            $status = 'completeorders';
        }
        if(isset($status)) {
            $sql_stmt = "SELECT product_table, id FROM $status WHERE order_id='$order_number'";
            $result_stmt = $mysqli->query( $sql_stmt );

            $product_table_array = array();
            $id_array = array();

            if ($result_stmt->num_rows > 0) {
                while ($row = $result_stmt->fetch_assoc()) {
                    $product_table_array = array_merge($product_table_array, array_map('trim', explode(",", $row['product_table'])));
                    $id_array = array_merge($id_array, array_map('trim', explode(",", $row['id'])));
                }
            }

            $i = 0;

            $original_name_array = array();
            $photo_array = array();
            $shipping_array = array();
            $price_array = array();
            $category_array = array();
            $product_name_array = array();

            while ($i < count($id_array)) {
                $sql_query = "SELECT $product_table_array[$i].original_name, $product_table_array[$i].photo, $product_table_array[$i].shipping,
                              $status.price, $status.category, $status.id, $product_table_array[$i].product_name FROM
                              $product_table_array[$i] INNER JOIN $status WHERE $status.id = $product_table_array[$i].id AND $status.id = $id_array[$i]
                              AND $status.order_id = '$order_number' LIMIT 1";

                $result = $mysqli->query( $sql_query );

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $original_name_array = array_merge($original_name_array, array_map('trim', explode(",", $row['original_name'])));
                        $photo_array = array_merge($photo_array, array_map('trim', explode(",", $row['photo'])));
                        $shipping_array = array_merge($shipping_array, array_map('trim', explode(",", $row['shipping'])));
                        $price_array = array_merge($price_array, array_map('trim', explode(",", $row['price'])));
                        $category_array = array_merge($category_array, array_map('trim', explode(",", $row['category'])));
                        $product_name_array = array_merge($product_name_array, array_map('trim', explode(",", $row['product_name'])));
                    }
                }


                $i++;
            }

            $count_price = 0;
            $i = 0;
            while($i < count($category_array)){
                if($category_array[$i] == 'AppleTV' || $category_array[$i] == 'IMac'){
                    $category_array[$i] = 'Apple';
                } else if($category_array[$i] == 'ShowTop'){
                    $category_array[$i] = 'Amazon';
                }

                $count_price += $price_array[$i];

                $i++;
            }

            $this->model->setId( $id_array );
            $this->model->setTable( $product_table_array );
            $this->model->setOriginalName( $original_name_array );
            $this->model->setPhoto( $photo_array );
            $this->model->setShipping( $shipping_array );
            $this->model->setPrice( $price_array );
            $this->model->setCategory( $category_array );
            $this->model->setProductName( $product_name_array );

            $this->model->setCountItems( $original_name_array );
            $this->model->setCountPrice( $count_price );

        }
    }

}
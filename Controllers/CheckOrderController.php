<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 28.11.2015
 * Time: 13:47
 */

include_once('DefaultController.php');

class CheckOrderController extends DefaultController
{
    /*
     * MVC constructor
     * with CheckoutModel
     *
     * @global $model
     */
    public $model;
    public function __construct(CheckOrderModel $model) {
        parent::__construct( $model );
        $this->model = $model;
    }

    public function actionCheckOrder() {

        if(isset($_POST['order_number'])) {
            $order_number = $_POST['order_number'];
        }
        if(isset($_POST['order_email'])) {
            $order_email = $_POST['order_email'];
        }

        include_once('/../Storage.php');
        $db = Storage::getInstance();
        $mysqli = $db->getConnection();

        if(isset($order_number) || isset($order_email)){

            $status_tables = ['doneorders', 'completeorders'];

            $i = 0;

            while($i < count($status_tables)) {
                $sql_query = "SELECT DISTINCT $status_tables[$i].*, users.name FROM $status_tables[$i] INNER JOIN users WHERE (order_id='$order_number'
                              AND user='$order_email') AND $status_tables[$i].user = users.email";
                $result = $mysqli->query($sql_query);

                //echo $sql_query;

                $product_name_array = array();
                $category_array = array();
                $price_array = array();
                $quantity_array = array();
                $name_array = array();
                $result_quantity = array();

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $product_name_array = array_merge($product_name_array, array_map('trim', explode(",", $row['product_name'])));
                        $category_array = array_merge($category_array, array_map('trim', explode(",", $row['category'])));
                        $price_array = array_merge($price_array, array_map('trim', explode(",", $row['price'])));
                        $quantity_array = array_merge($quantity_array, array_map('trim', explode(",", $row['quantity'])));
                        $name_array = array_merge($name_array, array_map('trim', explode(",", $row['name'])));
                    }

                    if ($i == 0){
                        $status = 'done';
                    } else if ($i == 1){
                        $status = 'wait';
                    }

                    if(isset($status)) {
                        $this->model->setStatus($status);
                    }
                    $this->model->setProductName($product_name_array);
                    $this->model->setCategory($category_array);
                    $this->model->setPrice($price_array);
                    $this->model->setQuantity($quantity_array);
                    $this->model->setName($name_array[0]);

                    $sql_stmt = "SELECT DISTINCT category FROM $status_tables[$i] WHERE order_id='$order_number' AND user='$order_email'";
                    $result_stmt = $mysqli->query( $sql_stmt );

                    $category_result_array = array();

                    if ($result_stmt->num_rows > 0) {
                        while ($row = $result_stmt->fetch_assoc()) {
                            $category_result_array = array_merge($category_result_array, array_map('trim', explode(",", $row['category'])));
                        }
                    }

                    $j =0;

                    while($j < count($category_result_array)){
                        $sql_count = "SELECT COUNT(category) AS items FROM $status_tables[$i] WHERE category='$category_result_array[$j]'
                        AND order_id='$order_number' AND user='$order_email'";


                        $sql_result = $mysqli->query( $sql_count );

                        if ($sql_result->num_rows > 0) {
                            while ($row = $sql_result->fetch_assoc()) {
                                array_push($result_quantity, $row['items']);
                            }
                        }

                        $j++;
                    }

                    $this->model->setCategory( $category_result_array );
                    $this->model->setCountCategories( $result_quantity );
                }

                $i++;
            }

            //print_r($result_quantity);

            if(!isset($status)) {
                $this->model->setStatus( 'not_found' );
            }

            $this->model->setOrderId( $order_number );
            $this->model->setOrderEmail( $order_email );
        }
    }

    public function actionGetOrderedItems() {

        include_once('/../Storage.php');
        $db = Storage::getInstance();
        $mysqli = $db->getConnection();

        if(isset($_POST['order_number'])) {
            $order_number = $_POST['order_number'];
        }
        if(isset($_POST['order_email'])) {
            $order_email = $_POST['order_email'];
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

            while ($i < count($id_array)) {
                $sql_query = "SELECT $product_table_array[$i].original_name, $product_table_array[$i].photo, $product_table_array[$i].shipping,
                              $status.price, $status.category FROM
                              $product_table_array[$i] INNER JOIN $status WHERE $status.id = $product_table_array[$i].id AND $status.id = $id_array[$i]";

                $result = $mysqli->query( $sql_query );

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $original_name_array = array_merge($original_name_array, array_map('trim', explode(",", $row['original_name'])));
                        $photo_array = array_merge($photo_array, array_map('trim', explode(",", $row['photo'])));
                        $shipping_array = array_merge($shipping_array, array_map('trim', explode(",", $row['shipping'])));
                        $price_array = array_merge($price_array, array_map('trim', explode(",", $row['price'])));
                        $category_array = array_merge($category_array, array_map('trim', explode(",", $row['category'])));
                    }
                }


                $i++;
            }

            $this->model->setOriginalName( $original_name_array );
            $this->model->setPhoto( $photo_array );
            $this->model->setShipping( $shipping_array );
            $this->model->setPrice( $price_array );
            $this->model->setCategory( $category_array );
        }
    }

}
<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 29.11.2015
 * Time: 19:00
 */

include_once('ProfileController.php');

class AccountOrderController extends ProfileController
{
    /*
     * MVC constructor
     * with AdminModel
     *
     * @global $model
     */
    public $model;
    public function __construct(AccountOrderModel $model) {
        parent::__construct( $model );
        $this->model = $model;
    }

    public function actionGetData() {

        $this->actionGetHeaderCart();
        $this->actionGetUser();
        $this->getOrders();
    }

    private function getOrders() {

        include_once('/../Storage.php');
        $db = Storage::getInstance();
        $mysqli = $db->getConnection();

        if(isset($_SESSION['login_user'])){
            $user = $_SESSION['login_user'];

            $sql_query = "SELECT DISTINCT order_id FROM completeorders WHERE user='$user'";
            $result = $mysqli->query( $sql_query );

            $order_id_array = array();

            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    $order_id_array = array_merge($order_id_array, array_map('trim', explode(",", $row['order_id'])));
                }
            }

            $i =0;
            $count_array = array();

            while($i < count($order_id_array)){
                $sql_count = "SELECT COUNT(*) as result FROM completeorders where user='$user' AND order_id='$order_id_array[$i]'";
                $sql_count_result = $mysqli->query( $sql_count );

                if ($sql_count_result->num_rows > 0){
                    while ($row = $sql_count_result->fetch_assoc()){
                        array_push($count_array, $row['result']);
                    }
                }

                $i++;
            }

            $i = 0;
            while($i < count($order_id_array)){
                ${'product_name_array' . $i} = array();
                ${'category_array' . $i} = array();
                ${'price_array' . $i} = array();
                ${'quantity_array' . $i} = array();
                ${'photo_array' . $i} = array();

                $i++;
            }

            $product_name_array = array();
            $category_array = array();
            $price_array = array();
            $quantity_array = array();

            static $i = 0;
            while($i < count($order_id_array)){
                $sql_select = "SELECT product_name, category, price, quantity FROM completeorders WHERE order_id='$order_id_array[$i]'";
                $result_select = $mysqli->query( $sql_select );

                if ($result_select->num_rows > 0) {
                    while ($row = $result_select->fetch_assoc()) {
                        array_push(${'product_name_array' . $i}, $row['product_name']);
                        array_push(${'category_array' . $i}, $row['category']);
                        array_push(${'quantity_array' . $i}, $row['quantity']);
                        array_push(${'price_array' . $i}, $row['price']);
                    }
                }

                $i++;
            }

            //print_r($product_name_array0);
            //print_r($product_name_array1);
            $k = 0;
            while($k < $i){

                array_push($product_name_array, ${'product_name_array' . $k});
                array_push($category_array, ${'category_array' . $k});
                array_push($quantity_array, ${'quantity_array' . $k});
                array_push($price_array, ${'price_array' . $k});
                $k++;
            }

            $this->model->setProductItem( $product_name_array );
            $this->model->setCategoryItem( $category_array );
            $this->model->setQuantityItem( $quantity_array );
            $this->model->setPriceItem( $price_array );

            //echo count($product_name_array);







            /*$sql_query1 = "SELECT DISTINCT order_id FROM doneorders WHERE user='$user'";
            $result1 = $mysqli->query( $sql_query1 );

            if ($result1->num_rows > 0) {
                // output data of each row
                while ($row = $result1->fetch_assoc()) {
                    $order_id_array = array_merge($order_id_array, array_map('trim', explode(",", $row['order_id'])));
                }
            }*/

            //print_r($order_id_array);

            /*$sql_stmt = "select completeorders.product_name, completeorders.category, completeorders.price, completeorders.quantity,
                         notebooks.photo FROM completeorders, notebooks WHERE completeorders.product_name=notebooks.product_name AND
                         completeorders.id=notebooks.id";*/





            /*$i = 0;
            while($i < 1) {
                $sql_photo = "SELECT product_table, id FROM completeorders WHERE user='$user'";
                $photo_result = $mysqli->query($photo_result);
            }*/

        }

    }
}
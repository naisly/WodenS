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

            //print_r($order_id_array);

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

            $i = 0;
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

            $k = 0;
            while($k < $i){

                array_push($product_name_array, ${'product_name_array' . $k});
                array_push($category_array, ${'category_array' . $k});
                array_push($quantity_array, ${'quantity_array' . $k});
                array_push($price_array, ${'price_array' . $k});
                $k++;
            }





            $sql_done = "SELECT DISTINCT order_id FROM doneorders WHERE user='$user'";
            $result_done = $mysqli->query( $sql_done );

            $order_done_id_array = array();

            if ($result_done->num_rows > 0) {
                // output data of each row
                while ($row = $result_done->fetch_assoc()) {
                    $order_done_id_array = array_merge($order_done_id_array, array_map('trim', explode(",", $row['order_id'])));
                }
            }

            //print_r($order_done_id_array);

            $k = 0;
            $count_done_array = array();

            while($k < count($order_done_id_array)){
                $sql_count = "SELECT COUNT(*) as result FROM completeorders where user='$user' AND order_id='$order_id_array[$k]'";
                $sql_count_result = $mysqli->query( $sql_count );

                if ($sql_count_result->num_rows > 0){
                    while ($row = $sql_count_result->fetch_assoc()){
                        array_push($count_done_array, $row['result']);
                    }
                }

                $k++;
            }

            //print_r($count_done_array);

            $z = $i;
            while($i < count($order_id_array) + count($order_done_id_array)){
                ${'product_name_array' . $i} = array();
                ${'category_array' . $i} = array();
                ${'price_array' . $i} = array();
                ${'quantity_array' . $i} = array();
                ${'photo_array' . $i} = array();

                $i++;
            }

            //print_r($product_name_array3);

            $done_product_name_product = array();
            $done_category_product = array();
            $done_price_product = array();
            $done_quantity_product = array();
            $r = 0;
            while($r < count($order_done_id_array)){
                $sql_select = "SELECT product_name, category, price, quantity FROM doneorders WHERE order_id='$order_done_id_array[$r]'";
                $result_select = $mysqli->query( $sql_select );

                //echo $i;

                if ($result_select->num_rows > 0) {
                    while ($row = $result_select->fetch_assoc()) {

                        $done_product_name_product = array_merge($done_product_name_product, array_map('trim', explode(",", $row['product_name'])));
                        $done_category_product = array_merge($done_category_product, array_map('trim', explode(",", $row['category'])));
                        $done_price_product = array_merge($done_price_product, array_map('trim', explode(",", $row['price'])));
                        $done_quantity_product = array_merge($done_quantity_product, array_map('trim', explode(",", $row['quantity'])));
                    }
                }

                $r++;
            }

            $i--;
            array_push(${'product_name_array' . $i}, $done_product_name_product);
            array_push(${'category_array' . $i}, $done_category_product);
            array_push(${'quantity_array' . $i}, $done_quantity_product);
            array_push(${'price_array' . $i}, $done_price_product);

            while($i < count($order_id_array) + count($order_done_id_array)){

                array_push($product_name_array, ${'product_name_array' . $i});
                array_push($category_array, ${'category_array' . $i});
                array_push($quantity_array, ${'quantity_array' . $i});
                array_push($price_array, ${'price_array' . $i});
                $i++;
            }

            $decrease_product_array = array();
            $decrease_category_array = array();
            $decrease_quantity_aray = array();
            $decrease_price_array = array();

            $l = 0;
            $m = 0;
            while($l < count($product_name_array)){
                if(isset($product_name_array[$l][0]) && count($product_name_array[$l][0]) > 1){
                    while($m < count($product_name_array[$l][0])){
                        array_push($decrease_product_array, $product_name_array[$l][0][$m]);
                        array_push($decrease_category_array, $category_array[$l][0][$m]);
                        array_push($decrease_quantity_aray, $quantity_array[$l][0][$m]);
                        array_push($decrease_price_array, $price_array[$l][0][$m]);

                        $m++;
                    }

                    unset($product_name_array[$l]);
                    unset($category_array[$l]);
                    unset($quantity_array[$l]);
                    unset($price_array[$l]);

                    $product_name_array[$l] = $decrease_product_array;
                    $category_array[$l] = $decrease_category_array;
                    $quantity_array[$l] = $decrease_quantity_aray;
                    $price_array[$l] = $decrease_price_array;

                }

                $l++;
            }

            $order_array = array();

            $n = 0;
            while($n < count($order_id_array)){
                array_push($order_array, $order_id_array[$n]);

                $n++;
            }
            $n = 0;
            while($n < count($order_done_id_array)){
                array_push($order_array, $order_done_id_array[$n]);

                $n++;
            }

            /*
             * @var $count_done_array
             * @var $count_array
             */
            //print_r($order_array);

            $v = 0;
            $position = '';
            while ($v < count($count_array)){
                $position += $count_array[$v];

                $v++;
            }


            $this->model->setCountItems( $position );
            $this->model->setCountDoneItems( $count_done_array );

            $this->model->setItemsOrder($order_array);
            $this->model->setProductItem( $product_name_array );
            $this->model->setCategoryItem( $category_array );
            $this->model->setQuantityItem( $quantity_array );
            $this->model->setPriceItem( $price_array );







            $i = 0;
            $u = 0;

            $tables_array = [ 'completeorders', 'doneorders' ];

            $product_table_array = array();
            $id_array = array();

            while ($i < count($tables_array)) {
                while ($u < $this->model->countItemsOrder()) {

                    $sql_query = "SELECT product_table, id FROM $tables_array[$i] WHERE order_id='{$this->model->getItemsOrder( $u )}'";
                    $result = $mysqli->query( $sql_query );

                    //echo $sql_query;

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            array_push( $product_table_array, $row['product_table']);
                            array_push( $id_array, $row['id']);
                        }
                    }

                    $u++;
                }

                $u = 0;
                $i++;
            }

            //print_r($product_table_array);
            //print_r($id_array);

            $result_photo_array = array();
            //$photo_array = array();

            $i = 0;
            $j = 0;

            while($j < count($order_array)) {
                while ($i < count($product_table_array)) {

                    $sql_query = "SELECT photo FROM $product_table_array[$i] WHERE id='$id_array[$i]'";
                    $sql_result = $mysqli->query($sql_query);

                    if ($sql_result->num_rows > 0) {
                        while ($row = $sql_result->fetch_assoc()) {

                            array_push($result_photo_array, $row['photo']);
                        }
                    }
                    $i++;
                }

                $j++;
            }

            $photo_count_array = array();
            $g = 0;
            while($g < count($product_name_array)){
                array_push($photo_count_array, count($product_name_array[$g]));

                $g++;
            }

            $photos = array();

            $i = 0;
            while($i < count($result_photo_array)){

                ${'photo_array' . $i} = array_splice($result_photo_array, 0, $photo_count_array[$i]);
                array_push($photos, ${'photo_array' . $i});
                $i++;
            }

            $this->model->setPhotoItems( $photos );




        }

    }

}
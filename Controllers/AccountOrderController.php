<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 29.11.2015
 * Time: 19:00
 *
 * ==================
 * Language changer
 * Getting quantity of items in basket
 * Getting sum of items in basket
 * Getting Account Data
 * Done & Complete orders data
 * Min & Max price for each category of Woden-sims.hol.es
 * Billing Account Data
 * ==================
 */
include_once('ProfileController.php');
class AccountOrderController extends ProfileController
{
    /**
     * MVC constructor
     * with AccountOrderModel
     *
     * @global $model
     */
    public $model;

    public function __construct(AccountOrderModel $model)
    {
        parent::__construct($model);
        $this->model = $model;
    }

    /**
     * Language changer
     * Getting quantity of items in basket
     * Getting sum of items in basket
     * Getting Account Data
     * Done & Complete orders data
     * Min & Max price for each category of Woden-sims.hol.es
     * Billing Account Data
     */
    public function actionGetData()
    {
        session_start();

        $this->actionGetHeaderCart();
        $this->actionGetQuantityOfItems();
        $this->actionGetSumOfItems();

        if(!isset($_SESSION['login_user'])){
            if($_SESSION['language'] !== 'us') {
                header('Location: /' . $_SESSION['language'] . '/login');
            } else {
                header('Location: /login');
            }
        }

        session_write_close();

        $this->actionGetUser();

        $this->getAllOrders();
        $this->getCompleteOrders();
        $this->getDoneOrders();

        $this->actionGetMinPrice();
        $this->actionGetBilling();
    }

    /**
     * Getting Complete and Done Orders
     *
     * @var $complete_order_id_array
     * @var $done_order_id_array
     */
    protected function getAllOrders() {

        include_once $_SERVER['DOCUMENT_ROOT'] . '/Storage.php';
        $db = Storage::getInstance();
        $mysqli = $db->getConnection();
        if (isset($_SESSION['login_user'])) {
            $user = $_SESSION['login_user'];

            $sql_query = "SELECT DISTINCT order_id FROM completeorders WHERE user='$user'";
            $result = $mysqli->query($sql_query);

            /*
             * GETTING ALL COMPLETE ORDERS
             */
            $complete_order_id_array = array();
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    $complete_order_id_array = array_merge($complete_order_id_array, array_map('trim', explode(",", $row['order_id'])));
                }
            }

            $sql_stmt = "SELECT DISTINCT order_id FROM doneorders WHERE user='$user'";
            $result_stmt = $mysqli->query( $sql_stmt );

            $done_order_id_array = array();
            if ($result_stmt->num_rows > 0) {
                // output data of each row
                while ($row = $result_stmt->fetch_assoc()) {
                    $done_order_id_array = array_merge($done_order_id_array, array_map('trim', explode(",", $row['order_id'])));
                }
            }

        }

        $this->model->setCompleteOrderIds( $complete_order_id_array );
        $this->model->setDoneOrderIds( $done_order_id_array );
    }

    /**
     * Getting Data from Complete Orders
     * id, original_name, category, price, quantity, table
     *
     * Photo from Product Table
     * Doing multi-array with associations like a[1][n] has k items in row
     * print them all -> go next
     */
    private function getCompleteOrders()
    {

        include_once $_SERVER['DOCUMENT_ROOT'] . '/Storage.php';
        $db = Storage::getInstance();
        $mysqli = $db->getConnection();
        if (isset($_SESSION['login_user'])) {
            $user = $_SESSION['login_user'];

            /*
             * GETTING DATA FOR EACH ORDER ( COMPLETED )
             */

            $complete_id = array();
            $complete_original_name = array();
            $complete_category = array();
            $complete_price = array();
            $complete_quantity = array();
            $complete_product_table = array();

            $i = 0;
            while ($i < count($this->model->getCompleteOrderIds())) {
                $sql_stmt = "SELECT id, product_name, category, price, quantity, product_table FROM completeorders WHERE order_id='{$this->model->getCompleteOrderIdsIteration($i)}'";
                $sql_result = $mysqli->query($sql_stmt);

                if ($sql_result->num_rows > 0) {
                    // output data of each row
                    while ($row = $sql_result->fetch_assoc()) {
                        array_push($complete_id, $row['id']);
                        array_push($complete_original_name, $row['product_name']);
                        array_push($complete_category, $row['category']);
                        array_push($complete_price, $row['price']);
                        array_push($complete_quantity, $row['quantity']);
                        array_push($complete_product_table, $row['product_table']);
                    }
                }


                $i++;
            }

            /*
             * GETTING PHOTOS FOR EACH
             * PRODUCT FOR THE ORDER
             * ******* COMPLETE ORDERS TABLE *****
             */
            $complete_photo = array();
            $complete_product_name = array();

            $k = 0;
            while ($k < count($complete_original_name)) {

                $sql_stmt = "SELECT photo, product_name FROM $complete_product_table[$k] WHERE id='$complete_id[$k]'";
                $sql_result = $mysqli->query($sql_stmt);

                if ($sql_result->num_rows > 0) {
                    // output data of each row
                    while ($row = $sql_result->fetch_assoc()) {
                        array_push($complete_photo, $row['photo']);
                        array_push($complete_product_name, $row['product_name']);
                    }
                }

                $k++;
            }

            /*
             * COUNTING OF EACH ORDER
             */
            $complete_order_count = array();

            $k = 0;
            while ($k < count($this->model->getCompleteOrderIds())) {
                $sql_stmt = "SELECT COUNT(*) as items FROM completeorders WHERE order_id='{$this->model->getCompleteOrderIdsIteration($k)}'";
                $sql_result = $mysqli->query($sql_stmt);

                if ($sql_result->num_rows > 0) {
                    // output data of each row
                    while ($row = $sql_result->fetch_assoc()) {
                        array_push($complete_order_count, $row['items']);
                    }
                }

                $k++;
            }

            /*
             * DIVIDING ARRAY FOR MULTI ONE
             * ACCORDING TO QUANTITY
             * OF ITEMS FOR EACH ORDER
             * ******* COMPLETE ORDER TABLE ********
             */
            $final_complete_id = array();
            $final_complete_product_tables = array();
            $final_complete_order = $this->model->getCompleteOrderIds();
            $final_complete_original_name = array();
            $final_complete_product_name = array();
            $final_complete_category = array();
            $final_complete_price = array();
            $final_complete_quantity = array();
            $final_complete_photo = array();

            $complete_count = count($complete_order_count);
            $i = 0;
            while ($i < $complete_count) {

                $complete_id_for_each = array_splice($complete_id, 0, $complete_order_count[$i]);
                array_push($final_complete_id, $complete_id_for_each);
                $complete_product_tables_for_each = array_splice($complete_product_table, 0, $complete_order_count[$i]);
                array_push($final_complete_product_tables, $complete_product_tables_for_each);
                $complete_original_name_for_each = array_splice($complete_original_name, 0, $complete_order_count[$i]);
                array_push($final_complete_original_name, $complete_original_name_for_each);
                $complete_product_name_for_each = array_splice($complete_product_name, 0, $complete_order_count[$i]);
                array_push($final_complete_product_name, $complete_product_name_for_each);
                $complete_category_for_each = array_splice($complete_category, 0, $complete_order_count[$i]);
                array_push($final_complete_category, $complete_category_for_each);
                $complete_price_for_each = array_splice($complete_price, 0, $complete_order_count[$i]);
                array_push($final_complete_price, $complete_price_for_each);
                $complete_quantity_for_each = array_splice($complete_quantity, 0, $complete_order_count[$i]);
                array_push($final_complete_quantity, $complete_quantity_for_each);
                $complete_photo_for_each = array_splice($complete_photo, 0, $complete_order_count[$i]);
                array_push($final_complete_photo, $complete_photo_for_each);


                $i++;
            }

            $this->model->setCompleteId( $final_complete_id );
            $this->model->setCompleteProductTable( $final_complete_product_tables );
            $this->model->setCompleteOriginalName( $final_complete_original_name );
            $this->model->setCompleteCategory( $final_complete_category );
            $this->model->setCompleteQuantity( $final_complete_quantity );
            $this->model->setCompletePrice( $final_complete_price );
            $this->model->setCompleteOrder( $final_complete_order );
            $this->model->setCompletePhoto( $final_complete_photo );
            $this->model->setCompleteProductName( $final_complete_product_name );

        }

    }

    /**
     * Getting Data from Done Orders
     * id, original_name, category, price, quantity, table
     *
     * Photo from Product Table
     * Doing multi-array with associations like a[1][n] has k items in row
     * print them all -> go next
     */
    private function getDoneOrders()
    {

        include_once $_SERVER['DOCUMENT_ROOT'] . '/Storage.php';
        $db = Storage::getInstance();
        $mysqli = $db->getConnection();
        if (isset($_SESSION['login_user'])) {
            $user = $_SESSION['login_user'];

            /*
             * GETTING DATA FOR EACH ORDER ( COMPLETED )
             */

            $complete_id = array();
            $complete_original_name = array();
            $complete_category = array();
            $complete_price = array();
            $complete_quantity = array();
            $complete_product_table = array();

            $i = 0;

            while($i < count($this->model->getDoneOrderIds())) {
                $sql_stmt = "SELECT id, product_name, category, price, quantity, product_table FROM doneorders WHERE order_id='{$this->model->getDoneOrderIdsIteration($i)}'";
                $sql_result = $mysqli->query( $sql_stmt );

                if ($sql_result->num_rows > 0) {
                    // output data of each row
                    while ($row = $sql_result->fetch_assoc()) {
                        array_push($complete_id, $row['id']);
                        array_push($complete_original_name, $row['product_name']);
                        array_push($complete_category, $row['category']);
                        array_push($complete_price, $row['price']);
                        array_push($complete_quantity, $row['quantity']);
                        array_push($complete_product_table, $row['product_table']);
                    }
                }


                $i++;
            }

            /**
             * GETTING PHOTOS FOR EACH
             * PRODUCT FOR THE ORDER
             * ******* COMPLETE ORDERS TABLE *****
             */
            $complete_photo = array();
            $complete_product_name = array();
            $k = 0;
            while($k < count($complete_original_name)){

                $sql_stmt = "SELECT photo, product_name FROM $complete_product_table[$k] WHERE id='$complete_id[$k]'";
                $sql_result = $mysqli->query( $sql_stmt );

                if ($sql_result->num_rows > 0) {
                    // output data of each row
                    while ($row = $sql_result->fetch_assoc()) {
                        array_push($complete_photo, $row['photo']);
                        array_push($complete_product_name, $row['product_name']);
                    }
                }

                $k++;
            }

            /*
             * COUNTING OF EACH ORDER
             */
            $complete_order_count = array();

            $k = 0;
            while($k < count($this->model->getDoneOrderIds())) {
                $sql_stmt = "SELECT COUNT(*) as items FROM doneorders WHERE order_id='{$this->model->getDoneOrderIdsIteration($k)}'";
                $sql_result = $mysqli->query($sql_stmt);

                if ($sql_result->num_rows > 0) {
                    // output data of each row
                    while ($row = $sql_result->fetch_assoc()) {
                        array_push($complete_order_count, $row['items']);
                    }
                }

                $k++;
            }

            /*
             * DIVIDING ARRAY FOR MULTI ONE
             * ACCORDING TO QUANTITY
             * OF ITEMS FOR EACH ORDER
             * ******* COMPLETE ORDER TABLE ********
             */
            $final_complete_id = array();
            $final_complete_product_tables = array();
            $final_complete_order = $this->model->getDoneOrderIds();
            $final_complete_original_name = array();
            $final_complete_product_name = array();
            $final_complete_category = array();
            $final_complete_price = array();
            $final_complete_quantity = array();
            $final_complete_photo = array();

            $complete_count = count($complete_order_count);
            $i = 0;
            while($i < $complete_count){

                $complete_id_for_each = array_splice($complete_id, 0, $complete_order_count[$i]);
                array_push($final_complete_id, $complete_id_for_each);
                $complete_product_tables_for_each = array_splice($complete_product_table, 0, $complete_order_count[$i]);
                array_push($final_complete_product_tables, $complete_product_tables_for_each);
                $complete_original_name_for_each = array_splice($complete_original_name, 0, $complete_order_count[$i]);
                array_push($final_complete_original_name, $complete_original_name_for_each);
                $complete_product_name_for_each = array_splice($complete_product_name, 0, $complete_order_count[$i]);
                array_push($final_complete_product_name, $complete_product_name_for_each);
                $complete_category_for_each = array_splice($complete_category, 0, $complete_order_count[$i]);
                array_push($final_complete_category, $complete_category_for_each);
                $complete_price_for_each = array_splice($complete_price, 0, $complete_order_count[$i]);
                array_push($final_complete_price, $complete_price_for_each);
                $complete_quantity_for_each = array_splice($complete_quantity, 0, $complete_order_count[$i]);
                array_push($final_complete_quantity, $complete_quantity_for_each);
                $complete_photo_for_each = array_splice($complete_photo, 0, $complete_order_count[$i]);
                array_push($final_complete_photo, $complete_photo_for_each);


                $i++;
            }

            $this->model->setDoneId( $final_complete_id );
            $this->model->setDoneProductTable( $final_complete_product_tables );
            $this->model->setDoneOriginalName( $final_complete_original_name );
            $this->model->setDoneCategory( $final_complete_category );
            $this->model->setDoneQuantity( $final_complete_quantity );
            $this->model->setDonePrice( $final_complete_price );
            $this->model->setDoneOrder( $final_complete_order );
            $this->model->setDonePhoto( $final_complete_photo );
            $this->model->setDoneProductName( $final_complete_product_name );

        }
    }
}
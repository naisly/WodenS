<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 11.11.2015
 * Time: 20:05
 *
 * ====================
 * Getting data for the order table,
 * Action done or roll-back with the
 * orders
 * ===================
 */
class CheckoutController
{
    /*
     * MVC constructor
     * with CheckoutModel
     *
     * @global $model
     */
    public $model;
    public function __construct(CheckoutModel $model) {
        $this->model = $model;
    }

    /*
     * Getting data table
     * for Admin page
     *
     * @var $name_array
     * @var $email_array
     * @var $order_id_array
     *
     * @var $all_totals
     * @var $sum
     */
    public function actionGetData( $table )
    {
        /*
         * Connection to the Database
         */
        include_once('/../Storage.php');
        $db = Storage::getInstance();
        $mysqli = $db->getConnection();

        /*
         * Getting names, emails, orders
         */
        $sql_query = "SELECT DISTINCT users.name, users.email, $table.order_id FROM users INNER JOIN
                    $table WHERE $table.user = users.email";
        $result = $mysqli->query($sql_query);

        $name_array = array();
        $email_array = array();
        $order_id_array = array();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $name_array = array_merge($name_array, array_map('trim', explode(",", $row['name'])));
                $email_array = array_merge($email_array, array_map('trim', explode(",", $row['email'])));
                $order_id_array = array_merge($order_id_array, array_map('trim', explode(",", $row['order_id'])));
            }
        }

        $this->model->setName($name_array);
        $this->model->setUser($email_array);
        $this->model->setOrderId($order_id_array);

        /*
         * Getting Full price of products
         */
        $i = 0;
        $all_totals = array();
        while ($i < $this->model->countId()) {
            $sql_stmt = "SELECT SUM(price) AS total FROM $table WHERE order_id='$order_id_array[$i]'";

            $result_stmt = $mysqli->query($sql_stmt);
            $totalPrice = 0;
            if ($result_stmt->num_rows > 0) {
                while ($row = $result_stmt->fetch_assoc()) {
                    $totalPrice = $row['total'];
                }
            }
            array_push($all_totals, $totalPrice);
            $i++;
        }
        $this->model->setPrice($all_totals);

        $sum = 0;
        $k = 0;
        $q = count($all_totals);
        while ($k < $q) {
            $sum += $all_totals[$k];
            $k++;
        }

        $this->model->setFullPrice($sum);

    }

    /*
     * Admin page
     * Button for dropping data
     * for the orders page
     *
     * @var $order
     * @var $id_array
     * @var $product_name_array
     * @var $category_array
     * @var $price_array
     * @var user_array
     * @var $quantity_array
     * @var $order_id_array
     *
     * @var $q
     *
     * ! REDIRECTION
     */
    public function actionDone( $complete_table, $done_table ) {

        /*
         * Connection to the Database
         */
        include_once('/../Storage.php');
        $db = Storage::getInstance();
        $mysqli = $db->getConnection();

        if(isset($_POST['order'])){
            $order = $_POST['order'];

            $sql_stmt = "SELECT * FROM $complete_table WHERE order_id='$order'";
            $result = $mysqli->query($sql_stmt);

            $id_array = array();
            $product_name_array = array();
            $category_array = array();
            $price_array = array();
            $user_array = array();
            $quantity_array = array();
            $order_id_array = array();

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $id_array = array_merge($id_array, array_map('trim', explode(",", $row['id'])));
                    $product_name_array = array_merge($product_name_array, array_map('trim', explode(",", $row['product_name'])));
                    $category_array = array_merge($category_array, array_map('trim', explode(",", $row['category'])));
                    $price_array = array_merge($price_array, array_map('trim', explode(",", $row['price'])));
                    $user_array = array_merge($user_array, array_map('trim', explode(",", $row['user'])));
                    $quantity_array = array_merge($quantity_array, array_map('trim', explode(",", $row['quantity'])));
                    $order_id_array = array_merge($order_id_array, array_map('trim', explode(",", $row['order_id'])));
                }
            }

            $i = 0;
            $q = count($id_array);

            while($i < $q){
                $sql_insert = $mysqli->prepare("INSERT INTO $done_table VALUES ('$id_array[$i]', '$product_name_array[$i]', '$category_array[$i]',
                              '$price_array[$i]', '$user_array[$i]', '$quantity_array[$i]', '$order_id_array[$i]')");

                $sql_insert->execute();

                $i++;
            }
            /*
             * Deletion process from completeorders with order
             */
            $sql_query = $mysqli->prepare("DELETE FROM $complete_table WHERE order_id='$order'");

            $sql_query->execute();
        }

        header('Location: admin-orders.php');
    }

}
<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 11.11.2015
 * Time: 20:05
 */
class CheckoutController
{
    public $model;
    public function __construct(CheckoutModel $model) {
        $this->model = $model;
    }

    public function actionGetData()
    {

        include_once('/../Storage.php');
        $db = Storage::getInstance();
        $mysqli = $db->getConnection();

        /*
         * Get Names of Orders owners
         */
        $sql_query = "SELECT DISTINCT users.name, users.email, completeorders.order_id FROM users INNER JOIN
                    completeorders WHERE completeorders.user = users.email";
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

        session_start();

        $i = 0;
        $all_totals = array();
        while ($i < $this->model->countId()) {
            $sql_stmt = "SELECT SUM(price) AS total FROM completeorders WHERE order_id='$order_id_array[$i]'";

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

}
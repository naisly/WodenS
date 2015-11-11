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

    public function actionGetData() {

        include_once('/../Storage.php');
        $db = Storage::getInstance();
        $mysqli = $db->getConnection();

        $sql_stmt = "SELECT completeorders.id, completeorders.product_name, completeorders.category, completeorders.user, completeorders.price,
                    completeorders.quantity, completeorders.order_id, users.email, users.name FROM completeorders INNER JOIN users WHERE
                    completeorders.user = users.email";

        $result = $mysqli->query($sql_stmt);

        $id_array = array();
        $product_name_array = array();
        $category_array = array();
        $user_array = array();
        $price_array = array();
        $quantity_array = array();
        $order_id_array = array();
        $email_array = array();
        $name_array = array();

        if ($result->num_rows > 0){
            while ($row = $result->fetch_assoc()){
                $id_array = array_merge($id_array, array_map('trim', explode(",", $row['id'])));
                $product_name_array = array_merge($product_name_array, array_map('trim', explode(",", $row['product_name'])));
                $category_array = array_merge($category_array, array_map('trim', explode(",", $row['category'])));
                $user_array = array_merge($user_array, array_map('trim', explode(",", $row['user'])));
                $price_array = array_merge($price_array, array_map('trim', explode(",", $row['price'])));
                $quantity_array = array_merge($quantity_array, array_map('trim', explode(",", $row['quantity'])));
                $order_id_array = array_merge($order_id_array, array_map('trim', explode(",", $row['order_id'])));
                $email_array = array_merge($email_array, array_map('trim', explode(",", $row['email'])));
                $name_array = array_merge($name_array, array_map('trim', explode(",", $row['name'])));
            }
        }

        $this->model->setId($id_array);
        $this->model->setProductName($product_name_array);
        $this->model->setCategory($category_array);
        $this->model->setUser($user_array);
        $this->model->setPrice($price_array);
        $this->model->setQuantity($quantity_array);
        $this->model->setOrderId($order_id_array);
        $this->model->setEmail($email_array);
        $this->model->setName($name_array);
    }
}
<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 09.11.2015
 * Time: 19:28
 */
class AdminController
{
    public $model;
    public function __construct(AdminModel $model) {
        $this->model = $model;
    }

    public function actionLogin() {

        include_once('/../Storage.php');
        $db = Storage::getInstance();
        $mysqli = $db->getConnection();

        if(isset($_POST['username'])){
            $username = $_POST['username'];
            $username = stripslashes($username);
        }
        if(isset($_POST['password'])) {
            $password = $_POST['password'];
            $password = stripcslashes($password);
        }

        $sql_query = "SELECT * FROM users WHERE email='$username' AND password='$password'";

        $result = $mysqli->query($sql_query);

        session_start();

        if ($result->num_rows == 1) {
            $_SESSION['admin'] = $username;
            header("Location: admin.php");
        } else {
            header("Location: admin-login.php");
            $_SESSION['error'] = '1';
        }

        session_write_close();
    }

    public function getAdminProductsData()
    {

        include_once('/../Storage.php');
        $db = Storage::getInstance();
        $mysqli = $db->getConnection();
        $sql_query = "SELECT * FROM phones";

        $result = $mysqli->query($sql_query);


        $product_name_array = array();
        $photo_array = array();
        $description_array = array();
        $category_array = array();
        $price_array = array();
        $previous_price_array = array();
        $time_of_adding_array = array();
        $features_array = array();
        $id_array = array();
        $quantity_array = array();
        $shipping_array = array();
        $average_price_array = array();

        $items_array = $result->num_rows;

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                $id_array = array_merge($id_array, array_map('trim', explode(",", $row['id'])));
                $product_name_array = array_merge($product_name_array, array_map('trim', explode(",", $row['product_name'])));
                $photo_array = array_merge($photo_array, array_map('trim', explode(",", $row['photo'])));
                $description_array = array_merge($description_array, array_map('trim', explode(",", $row['description'])));
                $category_array = array_merge($category_array, array_map('trim', explode(",", $row['category'])));
                $price_array = array_merge($price_array, array_map('trim', explode(",", $row['price'])));
                $previous_price_array = array_merge($previous_price_array, array_map('trim', explode(",", $row['previous_price'])));
                $time_of_adding_array = array_merge($time_of_adding_array, array_map('trim', explode(",", $row['time_of_adding'])));
                $features_array = array_merge($features_array, array_map('trim', explode(",", $row['features'])));
                $quantity_array = array_merge($quantity_array, array_map('trim', explode(",", $row['quantity'])));
                $shipping_array = array_merge($shipping_array, array_map('trim', explode(",", $row['shipping'])));
                $average_price_array = array_merge($average_price_array, array_map('trim', explode(",", $row['average_price'])));
            }
            $this->model->setProductName($product_name_array);
            $this->model->setPhoto($photo_array);
            $this->model->setDescription($description_array);
            $this->model->setCategory($category_array);
            $this->model->setPrice($price_array);
            $this->model->setPreviousPrice($previous_price_array);
            $this->model->setTimeOfAdding($time_of_adding_array);
            $this->model->setFeatures($features_array);
            $this->model->setId($id_array);
            $this->model->setQuantity($quantity_array);
            $this->model->setShipping($shipping_array);
            $this->model->setAverage($average_price_array);
            $this->model->setItems($items_array);

            $this->model->setItems($product_name_array);

        }
    }

    public function saveData() {

        if (isset($_POST['edit_id'])) {
            $id = $_POST['edit_id'];
        }
        if (isset($_POST['edit_product_name'])) {
            $product_name = $_POST['edit_product_name'];
        }
        if (isset($_POST['edit_photo'])) {
            $photo = $_POST['edit_photo'];
        }
        if (isset($_POST['edit_description'])) {
            $description = $_POST['edit_description'];
        }
        if (isset($_POST['edit_category'])) {
            $category = $_POST['edit_category'];
        }
        if (isset($_POST['edit_price'])) {
            $price = $_POST['edit_price'];
        }
        if (isset($_POST['edit_previous_price'])) {
            $previous_price = $_POST['edit_previous_price'];
        }
        if (isset($_POST['edit_time_of_adding'])) {
            $time_of_adding = $_POST['edit_time_of_adding'];
        }
        if (isset($_POST['edit_features'])) {
            $features = $_POST['edit_features'];
        }
        if (isset($_POST['edit_quantity'])) {
            $quantity = $_POST['edit_quantity'];
        }
        if (isset($_POST['edit_shipping'])) {
            $shipping = $_POST['edit_shipping'];
        }

        $this->model->setId($id);
        $this->model->setProductName($product_name);
        $this->model->setPhoto($photo);
        $this->model->setDescription($description);
        $this->model->setCategory($category);
        $this->model->setPrice($price);
        $this->model->setPreviousPrice($previous_price);
        $this->model->setTimeOfAdding($time_of_adding);
        $this->model->setFeatures($features);
        $this->model->setQuantity($quantity);
        $this->model->setShipping($shipping);
    }

    public function UnsetSession() {

        session_start();
        unset($_SESSION['product_num']);

        session_write_close();

        header('Location: admin-products.php');
    }

    public function nextPage() {

        include_once('/../Storage.php');
        $db = Storage::getInstance();
        $mysqli = $db->getConnection();

        if (isset($_POST['id'])) {
            $id = $_POST['id'];
        }
        if (isset($_POST['product_name'])) {
            $product_name = $_POST['product_name'];
        }
        if (isset($_POST['photo'])) {
            $photo = $_POST['photo'];
        }
        if (isset($_POST['description'])) {
            $description = $_POST['description'];
        }
        if (isset($_POST['category'])) {
            $category = $_POST['category'];
        }
        if (isset($_POST['price'])) {
            $price = $_POST['price'];
        }
        if (isset($_POST['previous_price'])) {
            $previous_price = $_POST['previous_price'];
        }
        if (isset($_POST['time_of_adding'])) {
            $time_of_adding = $_POST['time_of_adding'];
        }
        if (isset($_POST['features'])) {
            $features = $_POST['features'];
        }
        if (isset($_POST['quantity'])) {
            $quantity = $_POST['quantity'];
        }
        if (isset($_POST['shipping'])) {
            $shipping = $_POST['shipping'];
        }

        $sql_edit = $mysqli->prepare("UPDATE phones SET product_name='$product_name', photo='$photo', description='$description',
                    category='$category', price='$price', previous_price='$previous_price', time_of_adding='$time_of_adding',
                    features='$features', quantity='$quantity', shipping='$shipping' WHERE id='$id'");

        $sql_edit->execute();

        header('Location: admin-products.php');
    }

    public function actionUnsetAdmin() {

        session_start();

        if(isset($_SESSION['admin'])){
            unset($_SESSION['admin']);
        }
    }

}
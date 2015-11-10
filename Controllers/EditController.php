<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 10.11.2015
 * Time: 20:07
 */
class EditController
{
    public $model;
    public function __construct(EditModel $model) {
        $this->model = $model;
    }

    /*public function actionEditData() {

        include_once('/../Storage.php');
        $db = Storage::getInstance();
        $mysqli = $db->getConnection();

        $mysql_query = "SELECT * FROM phones";
        $result = $mysqli->query($mysql_query);

        $times = $result->num_rows;

        session_start();

        //echo $times;

        $i = 0;
        if(!isset($_SESSION['product_num'])) {
            while ($i < $times) {
                if (!isset($_SESSION['product_num'])) {
                    //if (isset($_POST['product_num' . $i])) {
                        $product = $_POST['product_num' . $i];
                        $_SESSION['product_num'] = $product;
                //}
                }
                $i++;
            }
            echo $_SESSION['product_num' . $i];
            //header('Location: admin-products.php');
        }

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

     /*       $sql_edit = $mysqli->prepare("UPDATE phones SET product_name='$product_name', photo='$photo', description='$description',
                    category='$category', price='$price', previous_price='$previous_price', time_of_adding='$time_of_adding',
                    features='$features', quantity='$quantity', shipping='$shipping' WHERE id='$id'");

            $sql_edit->execute();
    }*/

    public function actionChangeSession() {
        include_once('/../Storage.php');
        $db = Storage::getInstance();
        $mysqli = $db->getConnection();

        $mysql_query = "SELECT * FROM phones";
        $result = $mysqli->query($mysql_query);

        $times = $result->num_rows;
        $i = 0;

        while($i < $times) {
            if (isset($_POST['edit_id' . $i])) {
                $id = $_POST['edit_id' . $i];
            }
            $i++;
        }

        session_start();
        $_SESSION['edit'] = $id - 1;

        session_write_close();

        header('Location: admin-products.php');
    }

    public function actionDeleteData() {

        include_once('/../Storage.php');
        $db = Storage::getInstance();
        $mysqli = $db->getConnection();

        $mysql_query = "SELECT * FROM phones";
        $result = $mysqli->query($mysql_query);

        $times = $result->num_rows;
        $i = 0;

        while($i < $times) {
            if (isset($_POST['edit_id' . $i])) {
                $id = $_POST['edit_id' . $i];
            }
            $i++;
        }

        $sql_stmt = $mysqli->prepare("DELETE FROM phones WHERE id='$id'");
        $sql_stmt->execute();

        header('Location: admin-products.php');

    }
    public function actionUnsetData() {

        session_start();

        if(isset($_SESSION['edit'])){
            $_SESSION['edit'] = -1;
        }

        session_write_close();

        header('Location: admin-products.php');
    }

    public function actionUpdateData() {

        include_once('/../Storage.php');
        $db = Storage::getInstance();
        $mysqli = $db->getConnection();

        $mysql_query = "SELECT * FROM phones";
        $result = $mysqli->query($mysql_query);

        $times = $result->num_rows;
        $i = 0;

        session_start();
        $id = $_SESSION['edit'];

        if(isset($_POST['edit_product_name'])){
            $product_name = $_POST['edit_product_name'];
        }
        if(isset($_POST['edit_photo'])){
            $photo = $_POST['edit_photo'];
        }
        if(isset($_POST['edit_description'])){
            $description = $_POST['edit_description'];
        }
        if(isset($_POST['edit_category'])){
            $category = $_POST['edit_category'];
        }
        if(isset($_POST['edit_price'])){
            $price = $_POST['edit_price'];
        }
        if(isset($_POST['edit_previous_price'])){
            $previous_price = $_POST['edit_previous_price'];
        }
        if(isset($_POST['edit_time_of_adding'])){
            $time_of_adding = $_POST['edit_time_of_adding'];
        }
        if(isset($_POST['edit_features'])){
            $features = $_POST['edit_features'];
        }
        if(isset($_POST['edit_quantity'])){
            $quantity = $_POST['edit_quantity'];
        }
        if(isset($_POST['edit_shipping'])){
            $shipping = $_POST['edit_shipping'];
        }

        $sql_query = $mysqli->prepare("UPDATE phones SET product_name='$product_name', photo='$photo', description='$description',
                      category='$category', price='$price', previous_price='$previous_price', time_of_adding='$time_of_adding',
                      features='$features', quantity='$quantity', shipping='$shipping' WHERE id='$id'");

        $sql_query->execute();

        //header('Location: admin-products.php');
    }
}
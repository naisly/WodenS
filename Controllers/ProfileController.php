<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 08.11.2015
 * Time: 17:00
 *
 * ==================
 * Getting data from orders for each User,
 * deleting from the order -> done, otherwise rollback
 * =================
 */

include_once('DefaultController.php');

class ProfileController extends DefaultController
{
    /*
     * MVC constructor
     * with ProfileModel
     *
     * @global $model
     */
    public $model;
    public function __construct(ProfileModel $model) {
        parent::__construct($model);
        $this->model = $model;

    }

    /*
     * Getting data from orders for
     * each user
     *
     * @var $id_array
     * @var $product_name_array
     * @var $category_array
     * @var $price_array
     * @var $quantity_array
     */
    public function actionGetOrderedItems(){

        $this->actionGetHeaderCart();

        include_once('/../Storage.php');
        $db = Storage::getInstance();
        $mysqli = $db->getConnection();

        session_start();
        if(isset($_SESSION['login_user'])){
            $user = $_SESSION['login_user'];
        }
        $sql_query = "SELECT * FROM orderedItems WHERE user='$user'";

        session_write_close();

        $result = $mysqli->query($sql_query);

        $id_array = array();
        $product_name_array = array();
        $category_array = array();
        $price_array = array();
        $quantity_array = array();

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                $id_array = array_merge($id_array, array_map('trim', explode(",", $row['id'])));
                $product_name_array = array_merge($product_name_array, array_map('trim', explode(",", $row['product_name'])));
                $category_array = array_merge($category_array, array_map('trim', explode(",", $row['category'])));
                $price_array = array_merge($price_array, array_map('trim', explode(",", $row['price'])));
                $quantity_array = array_merge($quantity_array, array_map('trim', explode(",", $row['quantity'])));
            }
        }

        $this->model->setIdArray( $id_array );
        $this->model->setProductNameArray( $product_name_array );
        $this->model->setCategoryArray( $category_array );
        $this->model->setPriceArray( $price_array );
        $this->model->setQuantityOfItem( $quantity_array );

    }

    /*
     * Deleting the row from the OrderedItems
     * while clicking on the button
     * in the Admin Page
     *
     * @var $id
     */
    public function actionRemoveData() {

        include_once('/../Storage.php');
        $db = Storage::getInstance();
        $mysqli = $db->getConnection();

        session_start();
        $user = $_SESSION['login_user'];

        if(isset($_POST['id'])){
            $id = $_POST['id'];
        }

        session_write_close();

        $sql_query = $mysqli->prepare("DELETE FROM orderedItems WHERE user='$user' AND id=$id");

        $sql_query->execute();

        header('Location: cart.php');
    }

}
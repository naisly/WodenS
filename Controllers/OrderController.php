<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 09.11.2015
 * Time: 16:06
 *
 * ==================
 * Generalize random Id for order, making order to the Database,
 * Inserting billing info into the Database
 * ==================
 */

include_once('DefaultController.php');

class OrderController extends DefaultController
{
    /*
     * MVC constructor
     * with OrderModel
     *
     * @global $model
     */
    public $model;
    public function __construct(OrderModel $model) {
        parent::__construct($model);
        $this->model = $model;
    }

    public function actionCompleteOrder() {

        $this->actionGetHeaderCart();
        $this->actionGeneralizeId();
        $this->actionInsertData();
        $this->actionInsertIntoOrders();
    }

    /*
     * Set new Id
     * with Randomize method
     */
    private function actionGeneralizeId() {

        $this->model->setOrderId();
    }

    /*
     * Inserting product's data to the
     * Order table
     * And deleting from products table
     *
     * @var $id_array
     * @var $product_name_array
     * @var $category_array
     * @var $price_array
     * @var $quantity_array
     *
     */
    private function actionInsertData() {

        include_once('/../Storage.php');
        $db = Storage::getInstance();
        $mysqli = $db->getConnection();

        session_start();
        $user = $_SESSION['login_user'];

        $sql_query = "SELECT * FROM orderedItems WHERE user='$user'";
        $result = $mysqli->query($sql_query);

        $id_array = array();
        $product_name_array = array();
        $category_array = array();
        $price_array = array();
        $quantity_array = array();
        $table_array = array();

        if ($result->num_rows > 0){
            while ($row = $result->fetch_assoc()){
                $id_array = array_merge($id_array, array_map('trim', explode(",", $row['id'])));
                $product_name_array = array_merge($product_name_array, array_map('trim', explode(",", $row['product_name'])));
                $category_array = array_merge($category_array, array_map('trim', explode(",", $row['category'])));
                $price_array = array_merge($price_array, array_map('trim', explode(",", $row['price'])));
                $quantity_array = array_merge($quantity_array, array_map('trim', explode(",", $row['quantity'])));
                $table_array = array_merge($table_array, array_map('trim', explode(",", $row['product_table'])));
            }
        }

        $order_id = $this->model->getOrderId();

        $i = 0;
        $q = $result->num_rows;

        while( $i < $q ) {

            $result_price = $price_array[$i] * $quantity_array[$i];
            $sql_stmt = "INSERT INTO completeOrders VALUES('$id_array[$i]', '$product_name_array[$i]',
                            '$category_array[$i]', $result_price , '$user', '$quantity_array[$i]', '$order_id', '$table_array[$i]', '')";

            $sql = $mysqli->prepare($sql_stmt);

            $sql->execute();
            $i++;
        }

        $sql_delete = $mysqli->prepare("DELETE FROM orderedItems WHERE user='$user'");

        $sql_delete->execute();

    }

    /*
     * Inserting Billing info from user's
     * details
     *
     * @var $name
     * @var $street
     * @var $city
     * @var $state
     * @var $zip
     * @var $country
     * @var $giftwrap
     * @var $order_id
     */
    private function actionInsertIntoOrders() {

        include_once('/../Storage.php');
        $db = Storage::getInstance();
        $mysqli = $db->getConnection();

        if(isset($_POST['name'])){
            $name = $_POST['name'];
        }
        if(isset($_POST['street'])){
            $street = $_POST['street'];
        }
        if(isset($_POST['city'])){
            $city = $_POST['city'];
        }
        if(isset($_POST['state'])){
            $state = $_POST['state'];
        }
        if(isset($_POST['zip'])){
            $zip = $_POST['zip'];
        }
        if(isset($_POST['country'])){
            $country = $_POST['country'];
        }
        if(isset($_POST['giftwrap'])){
            $giftwrap = $_POST['giftwrap'];
        }

        $order_id = $this->model->getOrderId();

        $sql_query = "INSERT INTO orders VALUES ('$order_id', '$name', '$street', '$city', '$state', '$zip', '$country', '$giftwrap')";

        $sql = $mysqli->prepare($sql_query);

        $sql->execute();
    }

    public function getDefaultBilling(){

        include_once('/../Storage.php');
        $db = Storage::getInstance();
        $mysqli = $db->getConnection();

        session_start();

        if(isset($_SESSION['login_user'])){
            $user = $_SESSION['login_user'];
        }

        $sql_query = "SELECT * FROM billing WHERE user='$user'";
        $result = $mysqli->query( $sql_query );

        //echo $sql_query;

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $name = $row['name'];
                $street = $row['street'];
                $city = $row['city'];
                $state = $row['state'];
                $zip = $row['zip'];
                $country = $row['country'];
                $wrap = $row['wrap'];
            }
        }

        $this->model->setDefaultName( $name );
        $this->model->setDefaultStreet( $street );
        $this->model->setDefaultCity( $city );
        $this->model->setDefaultState( $state );
        $this->model->setDefaultZip( $zip );
        $this->model->setDefaultCountry( $country );
        $this->model->setDefaultWrap( $wrap );
    }
}
<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 03.12.2015
 * Time: 0:08
 *
 * ===================
 * Billing - Account Page
 * Getting Quantity of items in basket
 * Getting Sum of items in basket
 * @var $_SESSION['language']
 * Getting Account Data
 * Getting default Billing Data
 * ===================
 */

include_once('AccountOrderController.php');

class AccountBillingController extends AccountOrderController
{
    /**
     * MVC constructor
     * with AccountBillingModel
     *
     * @global $model
     */
    public $model;
    public function __construct(AccountBillingModel $model) {
        parent::__construct( $model );
        $this->model = $model;
    }

    /**
     * Billing - Account Page
     * Getting Quantity of items in basket
     * Getting Sum of items in basket
     * @var $_SESSION['language']
     * Getting Account Data
     * Getting default Billing Data
     */
    public function getBilling() {

        session_start();

        $this->actionGetHeaderCart();

        if(!isset($_SESSION['login_user'])){
            if($_SESSION['language'] !== 'us') {
                header('Location: /' . $_SESSION['language'] . '/login');
            } else {
                header('Location: /login');
            }
        }

        session_write_close();

        if(isset($_POST['name']) && isset($_POST['street']) && isset($_POST['city'])){
            $this->actionInsertBillingData();
        }

        $this->actionGetQuantityOfItems();
        $this->actionGetSumOfItems();

        $this->actionGetUser();
        $this->actionGetBilling();

    }

    /**
     * Adding Billing Data to the DB
     * @var $table : billing
     */
    private function actionInsertBillingData() {

        $this->actionGetLanguage();

        include_once $_SERVER['DOCUMENT_ROOT'] . '/Storage.php';
        $db = Storage::getInstance();
        $mysqli = $db->getConnection();

        session_start();

        if(isset($_SESSION['login_user'])){
            $user = $_SESSION['login_user'];
        }

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
        } else {
            $giftwrap = 0;
        }

        if(isset($name) && isset($street) && isset($city) && isset($state) && isset($zip) && isset($country) && isset($giftwrap) && isset($user)){

            $sql_query = $mysqli->prepare("INSERT INTO billing VALUES ('$user', '$name', '$street', '$city', '$state', '$zip', '$country',
                                          $giftwrap)");
            $sql_query->execute();

        } else {
            header('HTTP/1.0 403 Forbidden');
        }
    }
}
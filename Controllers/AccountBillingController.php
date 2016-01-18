<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 03.12.2015
 * Time: 0:08
 */

include_once('AccountOrderController.php');

class AccountBillingController extends AccountOrderController
{
    /*
     * MVC constructor
     * with AdminModel
     *
     * @global $model
     */
    public $model;
    public function __construct(AccountBillingModel $model) {
        parent::__construct( $model );
        $this->model = $model;
    }

    public function getBilling() {

        session_start();

        if(!isset($_SESSION['login_user'])){
            header('Location: /login');
        }

        session_write_close();

        $this->actionGetHeaderCart();
        $this->actionGetUser();
        $this->actionGetBilling();
    }

    public function actionInsertBillingData() {

        include_once('/../Storage.php');
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
        }

        if(isset($name) && isset($street) && isset($city) && isset($state) && isset($zip) && isset($country) && isset($giftwrap) && isset($user)){

            $sql_query = $mysqli->prepare("INSERT INTO billing VALUES ('$user', '$name', '$street', '$city', '$state', '$zip', '$country',
                                          $giftwrap)");
            $sql_query->execute();

            header('Location: account.php');
        } else {
            header('HTTP/1.0 403 Forbidden');
        }
    }
}
<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 05.11.2015
 * Time: 22:32
 *
 * ==================
 * Getting data from register, inserting into the Database,
 * checking Email, login validation, method for adding items
 * into the cart
 * =================
 */

include_once('DefaultController.php');

class LoginController extends DefaultController
{
    /**
     * MVC constructor
     * with LoginModel
     *
     * @global $model
     */
    public $model;
    public function __construct(LoginModel $model) {
        parent::__construct($model);
        $this->model = $model;

    }

    /**
     * Getting Quantity of items in basket
     * Getting Sum of items in basket
     */
    public function actionGetTotalAndSum() {

        $this->actionGetSumOfItems();
        $this->actionGetQuantityOfItems();
    }

    /**
     * Inserting into the Database
     * data of the Register Page
     *
     * @var $email
     * @var $password
     *
     * @var $first_name
     * @var $last_name
     * @var $day_of_birth
     *
     * @var $sc_q_1
     * @var $sc_q_2
     * @var $sc_q_3
     *
     * @var $sc_a_1
     * @var $sc_a_2
     * @var $sc_a_3
     *
     * @var $country
     * @var $advertisements
     */
    private function actionInsertData() {

        include_once $_SERVER['DOCUMENT_ROOT'] . '/Storage.php';
        $db = Storage::getInstance();
        $mysqli = $db->getConnection();

        if(isset($_POST['email'])){
            $email = $_POST['email'];
        }
        if(isset($_POST['password'])){
            $password = $_POST['password'];
        }
        if(isset($_POST['first_name'])){
            $first_name = str_replace("'", "''", $_POST['first_name']);
        }
        if(isset($_POST['last_name'])){
            $last_name = str_replace("'", "''", $_POST['last_name']);
        }
        if(isset($_POST['day_of_birth'])){
            $day_of_birth = $_POST['day_of_birth'];
        }
        if(isset($_POST['sc-q-1'])){
            $sc_q_1 = str_replace("'", "''", $_POST['sc-q-1']);
        }
        if(isset($_POST['sc-q-2'])){
            $sc_q_2 = str_replace("'", "''", $_POST['sc-q-2']);
        }
        if(isset($_POST['sc-q-3'])){
            $sc_q_3 = str_replace("'", "''", $_POST['sc-q-3']);
        }
        if(isset($_POST['sc-a-1'])){
            $sc_a_1 = str_replace("'", "''", $_POST['sc-a-1']);
        }
        if(isset($_POST['sc-a-2'])){
            $sc_a_2 = str_replace("'", "''", $_POST['sc-a-2']);
        }
        if(isset($_POST['sc-a-3'])){
            $sc_a_3= str_replace("'", "''", $_POST['sc-a-3']);
        }
        if(isset($_POST['country'])){
            $country = $_POST['country'];
        }
        if(isset($_POST['advertisements'])){
            $advertisements = '1';
        } else {
            $advertisements = '0';
        }

        $sql_stmt = "INSERT INTO users VALUES ('', '$email', '$password', '$first_name', '$last_name', '$day_of_birth', '$sc_q_1', '$sc_q_2',
                    '$sc_q_3', '$sc_a_1', '$sc_a_2', '$sc_a_3', '$country', 'advertisements')";

        $stmt = $mysqli->prepare($sql_stmt);

        $stmt->execute();
    }

    /**
     * Checking params for Inserting into the DB
     * into the DB data from
     * register view
     *
     * @var $password
     * @var $password-again
     *
     */
    public function actionDoInsertion()
    {
        if(isset($_POST['password'])){
            $password = $_POST['password'];
        }
        if(isset($_POST['password-again'])){
            $password_again = $_POST['password-again'];
        }
        if ($password == $password_again) {
                if (strlen($password) > 7) {
                    if (!isset($_GET['email_error'])) {
                        $this->actionInsertData();
                    }
                }
            }
    }

    /**
     * Checking provided Email
     * from the Register Page
     *
     * @var $email
     * @var $_SESSION['email_error']
     */
    public function actionCheckProvidedEmail() {

        $this->actionGetLanguage();

        include_once $_SERVER['DOCUMENT_ROOT'] . '/Storage.php';
        $db = Storage::getInstance();
        $mysqli = $db->getConnection();

        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        if(isset($_POST['email'])){
            $email = $_POST['email'];
        }

        $sql_stmt = "SELECT email FROM users WHERE email='$email'";

        $result = $mysqli->query($sql_stmt);

        if ($result->num_rows >= 1){
            if($_SESSION['language'] !== 'us') {
                header('Location: /' . $_SESSION['language'] . '/register?email_error=1');
            } else {
                header('Location: /register?email_error=1');
            }
        }
    }

    /**
     * Checking data from the Login Page
     * If exists redirecting to the account page
     * otherwise display error
     *
     * @var $email
     * @var $password
     * @var $_SESSION['login_user']
     * @var $_SESSION['admin']
     * @var $_SESSION['add_item']
     * @var $_SESSION['error']
     */
    public function actionLogin() {

        $this->actionGetLanguage();

        include_once $_SERVER['DOCUMENT_ROOT'] . '/Storage.php';
        $db = Storage::getInstance();
        $mysqli = $db->getConnection();

        if(isset($_POST['email'])) {
            $email = $_POST['email'];
        }
        if(isset($_POST['password'])) {
            $password = $_POST['password'];
        }

        $email = stripslashes($email);
        $password = stripcslashes($password);

        $sql_query = "SELECT * FROM users WHERE email='$email' AND password='$password'";

        $result = $mysqli->query($sql_query);

        session_start();

        if(!isset($_SESSION['login_try'])){
            $_SESSION['login_try'] = 1;
        }

        if ($result->num_rows == 1) {
            $_SESSION['login_user'] = $email;
            $_SESSION['admin'] = $email;
            $_SESSION['add_item'] = '0';

            if($_SESSION['language'] !== 'us') {
                header("Location: /" . $_SESSION['language'] . "/account/");
            } else {
                header('Location: /account/');
            }

            $_SESSION['login_try'] = 1;
        } else {
            if($_SESSION['language'] !== 'us') {
                header("Location: /" . $_SESSION['language'] . "/login?auth=false&try=" . $_SESSION['login_try']++);
            } else {
                header("Location: /login?auth=false&try=" . $_SESSION['login_try']++);
            }
        }

        session_write_close();
    }

    /**
     * Method for adding data to the Cart
     * If exists product in the User's Cart
     * add Quantity plus one
     * otherwise Add item
     *
     * @var $id
     * @var $product_name
     * @var $category
     * @var $photo
     * @var $price
     *
     * @var $idQ
     * @var $quantity
     */
    private function actionAddItems() {

        include_once $_SERVER['DOCUMENT_ROOT'] . '/Storage.php';
        $db = Storage::getInstance();
        $mysqli = $db->getConnection();

        if(isset($_POST['id'])){
            $id = $_POST['id'];
        }
        if(isset($_POST['original_name'])){
            $original_name = $_POST['original_name'];
        }
        if(isset($_POST['category'])){
            $category = $_POST['category'];
        }
        if(isset($_POST['photo'])){
            $photo = $_POST['photo'];
        }
        if(isset($_POST['price'])){
            $price = $_POST['price'];
        }

        if(isset($_POST['table'])){
            $table = $_POST['table'];
        }
        if(isset($_POST['item_quantity'])){
            $post_quantity = $_POST['item_quantity'];
        }

        $user = $_SESSION['login_user'];

        $sql_stmt = "SELECT id,quantity FROM orderedItems WHERE id=$id AND product_name='$original_name' AND category='$category'
                      AND price=$price AND user='$user'";

        //echo $sql_stmt;

        $result = $mysqli->query($sql_stmt);
        if ($result->num_rows > 0){
            while ($row = $result->fetch_assoc()){
                $quantity = $row['quantity'];
                $idQ = $row['id'];
            }
        }

        if(isset($post_quantity) && !isset($idQ)){
            $sql_query = "INSERT INTO orderedItems VALUES ('$id', '$original_name', '$category', '$price', '$user', '$post_quantity', '$table', '')";
            $stmt = $mysqli->prepare($sql_query);

            $stmt->execute();
        } else if(!isset($idQ)) {
            $sql_query = "INSERT INTO orderedItems VALUES ('$id', '$original_name', '$category', '$price', '$user', 1, '$table', '')";
            $stmt = $mysqli->prepare($sql_query);
            $stmt->execute();
        }

        if(isset($quantity)) {
            if(isset($post_quantity)){

                $res_quantity = $quantity + $post_quantity;

                $sql_res = $mysqli->prepare("UPDATE orderedItems SET quantity=$res_quantity WHERE user='$user' AND price=$price
                            AND product_name='$original_name' AND category='$category'");
                $sql_res->execute();
            } else if ($quantity !== 1) {
                $quantity++;

                $sql_res = $mysqli->prepare("UPDATE orderedItems SET quantity=$quantity WHERE user='$user' AND price=$price
                            AND product_name='$original_name' AND category='$category'");
                $sql_res->execute();
            }
        }

        session_start();

        $_SESSION['photo'] = $photo;

        session_write_close();
    }

    /**
     * Add item to the Basket
     * @check if user exists
     * @check for one click order
     *
     * ! MANY REDIRECTS
     */
    public function actionAddItem() {

        $this->actionGetLanguage();

        if(!$_SESSION['login_user']){

            if($_SESSION['language'] !== 'us') {
                header('Location: /' . $_SESSION['language'] . '/login?error_add_item=1');
            } else {
                header('Location: /login?error_add_item=1');
            }

        } else {

            $this->actionAddItems();
            if(isset($_POST['one-click-order'])){

                if($_SESSION['language'] !== 'us') {
                    header('Location: /' . $_SESSION['language'] . '/account/placeorder');
                } else {
                    header('Location: /account/placeorder');
                }

            } else {
                if($_SESSION['language'] !== 'us') {
                    header('Location: /' . $_SESSION['language'] . '/shop/thanks-order');
                } else {
                    header('Location: /shop/thanks-order');
                }
            }
        }
    }
}
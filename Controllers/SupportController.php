<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 15.11.2015
 * Time: 0:28
 *
 * ==================
 * Getting data from support page,
 * Getting Support messages in Admin page,
 * Action get solved for each one
 * =================
 */

include_once('DefaultController.php');

class SupportController extends DefaultController
{
    /*
     * MVC constructor
     * with SupportModel
     *
     * @global $model
     */
    public $model;
    public function __construct(SupportModel $model){
        parent::__construct($model);
        $this->model = $model;
    }

    /*
     * Inserting data to the Support table
     * from the support Page
     *
     * @var $name
     * @var $email
     * @var $subject
     * @var $message
     */
    public function actionGetData() {

        include_once('/../Storage.php');
        $db = Storage::getInstance();
        $mysqli = $db->getConnection();

        if(isset($_POST['name'])){
            $name = $_POST['name'];
        }
        if(isset($_POST['email'])){
            $email = $_POST['email'];
        }
        if(isset($_POST['subject'])){
            $subject = $_POST['subject'];
        }
        if(isset($_POST['message'])){
            $message = $_POST['message'];
        }

        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        $mysql_query = $mysqli->prepare("INSERT INTO support VALUES ( '', '$name', '$email', '$subject', '$message')");

        $mysql_query->execute();

        header('Location: /' . $_SESSION['language'] . 'thanks-support');

        session_write_close();


    }

    /*
     * Getting support messages to the
     * Admin Page
     *
     * @var $id_array
     * @var $name_array
     * @var $email_array
     * @var $subject_array
     * @var $message_array
     */
    public function actionGetSupportMessages() {

        include_once('/../Storage.php');
        $db = Storage::getInstance();
        $mysqli = $db->getConnection();

        $sql_query = "SELECT * FROM support";
        $result = $mysqli->query($sql_query);

        $id_array = array();
        $name_array = array();
        $email_array = array();
        $subject_array = array();
        $message_array = array();

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                $id_array = array_merge($id_array, array_map('trim', explode(",", $row['id'])));
                $name_array = array_merge($name_array, array_map('trim', explode(",", $row['name'])));
                $email_array = array_merge($email_array, array_map('trim', explode(",", $row['email'])));
                $subject_array = array_merge($subject_array, array_map('trim', explode(",", $row['subject'])));
                $message_array = array_merge($message_array, array_map('trim', explode(",", $row['message'])));
            }
        }

        $this->model->setId( $id_array );
        $this->model->setName( $name_array );
        $this->model->setEmail( $email_array );
        $this->model->setSubject( $subject_array );
        $this->model->setMessage( $message_array );
    }

    /*
     * Solving message while clicking
     * on the button on
     * Admin page (Deleting from table)
     *
     * @var $id
     */
    public function actionGetSolved() {

        include_once('/../Storage.php');
        $db = Storage::getInstance();
        $mysqli = $db->getConnection();

        if(isset($_POST['id'])) {
            $id = $_POST['id'];

            $sql_stmt = $mysqli->prepare("DELETE FROM support WHERE id='$id'");

            $sql_stmt->execute();

            header('Location: admin-support.php');
        } else {
            header('HTTP/1.1 403 Forbidden');
        }
    }
}
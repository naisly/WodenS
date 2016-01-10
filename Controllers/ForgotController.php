<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 10.01.2016
 * Time: 22:17
 */

include_once('DefaultController.php');

class ForgotController extends DefaultController
{
    /*
     * MVC constructor
     * with LoginModel
     *
     * @global $model
     */
    public $model;
    public function __construct(ForgotModel $model) {
        parent::__construct($model);
        $this->model = $model;

    }

    public function actionCheckEmail() {

        include_once('/../Storage.php');
        $db = Storage::getInstance();
        $mysqli = $db->getConnection();

        if(isset($_GET['email'])){
            $email = $_GET['email'];
        }

        $sql_query = "SELECT email FROM users WHERE email='$email'";

        $result = $mysqli->query($sql_query);

        session_start();

        if ($result->num_rows == 1) {
            header('Location: /shop/forgot-password/?session_auth=' . $_SESSION['session_auth'] . '&email=' . urldecode($email));
        } else {

            session_start();

            $this->actionGenerateSessionAuth();
            $_SESSION['session_auth'] = $this->model->getSessionAuth();

            session_write_close();

            header('Location: /shop/forgot-password/?session_auth=' . $_SESSION['session_auth'] . '&error_email=1');
        }

        session_write_close();
    }

    public function actionCheckBirthday() {


        include_once('/../Storage.php');
        $db = Storage::getInstance();
        $mysqli = $db->getConnection();

        if(isset($_GET['email'])){
            $email = $_GET['email'];
        }
        if(isset($_GET['day_of_birth'])){
            $day_of_birth = $_GET['day_of_birth'];
        }

        $sql_query = "SELECT day_of_birth FROM users WHERE email='$email'";

        //echo $sql_query;

        $result = $mysqli->query($sql_query);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $unix_day_of_birth = $row['day_of_birth'];
            }
        }

        $new_date = substr($unix_day_of_birth, 0, 10);

        session_start();

        if($new_date == $day_of_birth){
            header('Location: /shop/forgot-password/?session_auth=' . $_SESSION['session_auth'] . '&email=' . urldecode($email) . '&day_of_birth=' . urldecode($day_of_birth));
        } else {
            header('Location: /shop/forgot-password/?session_auth=' . $_SESSION['session_auth'] . '&email=' . urldecode($email) . '&error_day_of_birth=1');
        }

        session_write_close();

    }

    public function actionGetQuestion() {

        include_once('/../Storage.php');
        $db = Storage::getInstance();
        $mysqli = $db->getConnection();

        if(isset($_GET['email'])){
            $email = $_GET['email'];
        }

        $sql_query = "SELECT question1, question2, question3 FROM users WHERE email='$email'";

        $result = $mysqli->query($sql_query);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $question1 = $row['question1'];
                $question2 = $row['question2'];
                $question3 = $row['question3'];
            }
        }

        $this->model->setQuestion1($question1);
        $this->model->setQuestion2($question2);
        $this->model->setQuestion3($question3);
    }
}
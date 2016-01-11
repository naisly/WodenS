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

    public function actionCheckSecurityQuestions() {

        include_once('/../Storage.php');
        $db = Storage::getInstance();
        $mysqli = $db->getConnection();

        if(isset($_GET['email'])){
            $email = $_GET['email'];
        }
        if(isset($_GET['day_of_birth'])){
            $day_of_birth = $_GET['day_of_birth'];
        }
        if(isset($_GET['sc-a-1'])){
            $sc_a_1 = $_GET['sc-a-1'];
        }
        if(isset($_GET['sc-a-2'])){
            $sc_a_2 = $_GET['sc-a-2'];
        }
        if(isset($_GET['sc-a-3'])){
            $sc_a_3 = $_GET['sc-a-3'];
        }

        $sql_query = "SELECT answer1, answer2, answer3 FROM users WHERE email='$email'";

        $result = $mysqli->query($sql_query);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $answer1 = $row['answer1'];
                $answer2 = $row['answer2'];
                $answer3 = $row['answer3'];
            }
        }

        session_start();

        if(( $sc_a_1 == $answer1 ) && ( $sc_a_2 == $answer2 ) && ( $sc_a_3 == $answer3 )){
            header('Location: /shop/forgot-password/?session_auth=' . $_SESSION['session_auth'] . '&email=' . urldecode($email) . '&day_of_birth=' . urldecode($day_of_birth) . '&sc-a-1=' . urldecode($sc_a_1) . '&sc-a-2=' . urldecode($sc_a_2) . '&sc-a-3=' . urldecode($sc_a_3));
        } else {
            header('Location: /shop/forgot-password/?session_auth=' . $_SESSION['session_auth'] . '&email=' . urldecode($email) . '&day_of_birth=' . urldecode($day_of_birth) . '&error_questions=1');
        }

        session_write_close();
    }

    public function actionChangePassword() {

        include_once('/../Storage.php');
        $db = Storage::getInstance();
        $mysqli = $db->getConnection();

        if(isset($_POST['email'])){
            $email = $_POST['email'];
        }
        if(isset($_GET['day_of_birth'])){
            $day_of_birth = $_GET['day_of_birth'];
        }
        if(isset($_GET['sc-a-1'])){
            $sc_a_1 = $_GET['sc-a-1'];
        }
        if(isset($_GET['sc-a-2'])){
            $sc_a_2 = $_GET['sc-a-2'];
        }
        if(isset($_GET['sc-a-3'])){
            $sc_a_3 = $_GET['sc-a-3'];
        }
        if(isset($_POST['password'])){
            $password = $_POST['password'];
        }
        if(isset($_POST['repeat_password'])){
            $repeat_password = $_POST['repeat_password'];
        }

        if($password == $repeat_password){
            $sql_query = $mysqli->prepare("UPDATE users SET password='$password' where email='$email'");

            $sql_query->execute();

            header('Location: /shop/forgot-password/?success=true');
        } else {
            header('Location: /shop/forgot-password/?session_auth=' . $_SESSION['session_auth'] . '&email=' . urldecode($email) . '&day_of_birth=' . urldecode($day_of_birth) . '&sc-a-1=' . urldecode($sc_a_1) . '&sc-a-2=' . urldecode($sc_a_2) . '&sc-a-3=' . urldecode($sc_a_3) . '&success=false');
        }

    }

    public function actionSaveDataFromInjection() {

        include_once('/../Storage.php');
        $db = Storage::getInstance();
        $mysqli = $db->getConnection();

        if(isset($_GET['email'])){
            $email = $_GET['email'];

            $sql_query = "SELECT * FROM users WHERE email='$email'";

            $result = $mysqli->query($sql_query);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $day_of_birth = $row['day_of_birth'];
                    $answer1 = $row['answer1'];
                    $answer2 = $row['answer2'];
                    $answer3 = $row['answer3'];
                }

                if(isset($_GET['day_of_birth'])){
                    $new_date = substr($day_of_birth, 0, 10);

                    if($_GET['day_of_birth'] !== $new_date){
                        header('Location: /shop/forgot-password/');
                    }
                }

                if(isset($_GET['sc-a-1'])){
                    if($_GET['sc-a-1'] !== $answer1){
                        header('Location: /shop/forgot-password/');
                    }
                }

                if(isset($_GET['sc-a-2'])){
                    if($_GET['sc-a-2'] !== $answer2){
                        header('Location: /shop/forgot-password/');
                    }
                }

                if(isset($_GET['sc-a-3'])){
                    if($_GET['sc-a-3'] !== $answer3){
                        header('Location: /shop/forgot-password/');
                    }
                }
            } else {
                header('Location: /shop/forgot-password/');
            }
        } else {
            #header('Location: /shop/forgot-password/');
        }

    }
}
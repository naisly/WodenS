<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 10.01.2016
 * Time: 22:17
 *
 * ==================
 * Four steps in process of recovering Account Password
 * 1) Email
 * 2) Day of Birth
 * 3) Security Questions
 * 4) Change Passwords
 *
 * Save data from injection from the site of URL
 * Fixed manipulation of $_GET data
 * No SQL Injection
 * ==================
 */

include_once('DefaultController.php');

class ForgotController extends DefaultController
{
    /**
     * MVC constructor
     * with ForgotModel
     *
     * @global $model
     */
    public $model;
    public function __construct(ForgotModel $model) {
        parent::__construct($model);
        $this->model = $model;

    }

    /**
     * First step in recovering Account Password process
     * Checking $_GET email data
     * if exists in DataBase
     *
     * @var $email
     *
     * ! Redirect
     */
    public function actionCheckEmail() {

        $this->actionGetLanguage();

        include_once $_SERVER['DOCUMENT_ROOT'] . '/Storage.php';
        $db = Storage::getInstance();
        $mysqli = $db->getConnection();

        if(isset($_GET['email'])){
            $email = $_GET['email'];
        }

        $sql_query = "SELECT email FROM users WHERE email='$email'";

        $result = $mysqli->query($sql_query);

        session_start();

        if ($result->num_rows == 1) {
            if($_SESSION['language'] !== 'us') {
                header('Location: /' . $_SESSION['language'] . '/forgot-password/?session_auth=' . $_SESSION['session_auth'] . '&email=' . urldecode($email));
            } else {
                header('Location: /forgot-password/?session_auth=' . $_SESSION['session_auth'] . '&email=' . urldecode($email));
            }
        } else {

            $this->actionGenerateSessionAuth();
            $_SESSION['session_auth'] = $this->model->getSessionAuth();

            if($_SESSION['language'] !== 'us') {
                header('Location: /' . $_SESSION['language'] . '/forgot-password/?session_auth=' . $_SESSION['session_auth'] . '&error_email=1');
            } else {
                header('Location: /forgot-password/?session_auth=' . $_SESSION['session_auth'] . '&error_email=1');
            }
        }

        session_write_close();
    }

    /**
     * Second step in recovering Account Password process
     *
     * Checking Date of Birth
     *
     * Getting @data { UNIX } @var $unix_day_of_birth
     * comparing with @var $day_of_birth
     *
     * ! REDIRECT
     */
    public function actionCheckBirthday() {

        $this->actionGetLanguage();

        include_once $_SERVER['DOCUMENT_ROOT'] . '/Storage.php';
        $db = Storage::getInstance();
        $mysqli = $db->getConnection();

        if(isset($_GET['email'])){
            $email = $_GET['email'];
        }
        if(isset($_GET['day_of_birth'])){
            $day_of_birth = $_GET['day_of_birth'];
        }

        $sql_query = "SELECT day_of_birth FROM users WHERE email='$email'";

        $result = $mysqli->query($sql_query);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $unix_day_of_birth = $row['day_of_birth'];
            }
        }

        $new_date = substr($unix_day_of_birth, 0, 10);

        session_start();

        if($new_date == $day_of_birth){
            if($_SESSION['language'] !== 'us') {
                header('Location: /' . $_SESSION['language'] . '/forgot-password/?session_auth=' . $_SESSION['session_auth'] . '&email=' . urldecode($email) . '&day_of_birth=' . urldecode($day_of_birth));
            } else {
                header('Location: /forgot-password/?session_auth=' . $_SESSION['session_auth'] . '&email=' . urldecode($email) . '&day_of_birth=' . urldecode($day_of_birth));
            }
        } else {
            if($_SESSION['language'] !== 'us') {
                header('Location: /' . $_SESSION['language'] . '/forgot-password/?session_auth=' . $_SESSION['session_auth'] . '&email=' . urldecode($email) . '&error_day_of_birth=1');
            } else {
                header('Location: /forgot-password/?session_auth=' . $_SESSION['session_auth'] . '&email=' . urldecode($email) . '&error_day_of_birth=1');
            }
        }

        session_write_close();

    }

    /**
     * Third step in recovering Account Password process
     * Getting security questions from the DataBase
     *
     * @var $question1
     * @var $question2
     * @var $question3
     */
    public function actionGetQuestion() {

        $this->actionGetLanguage();

        include_once $_SERVER['DOCUMENT_ROOT'] . '/Storage.php';
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

    /**
     * Checking the correctness of answers for the Security Account Questions
     *
     * @var $email
     * @var $day_of_birth
     * @var $sc_a_1 == @var $answer1
     * @var $sc_a_2 == @var $answer2
     * @var $sc_a_3 == @var $answer3
     *
     * ! REDIRECT
     */
    public function actionCheckSecurityQuestions() {

        $this->actionGetLanguage();

        include_once $_SERVER['DOCUMENT_ROOT'] . '/Storage.php';
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
            if($_SESSION['language'] !== 'us') {
                header('Location: /' . $_SESSION['language'] . '/forgot-password/?session_auth=' . $_SESSION['session_auth'] . '&email=' . urldecode($email) . '&day_of_birth=' . urldecode($day_of_birth) . '&sc-a-1=' . urldecode($sc_a_1) . '&sc-a-2=' . urldecode($sc_a_2) . '&sc-a-3=' . urldecode($sc_a_3));
            } else {
                header('Location: /forgot-password/?session_auth=' . $_SESSION['session_auth'] . '&email=' . urldecode($email) . '&day_of_birth=' . urldecode($day_of_birth) . '&sc-a-1=' . urldecode($sc_a_1) . '&sc-a-2=' . urldecode($sc_a_2) . '&sc-a-3=' . urldecode($sc_a_3));
            }
        } else {
            if($_SESSION['language'] !== 'us') {
                header('Location: /' . $_SESSION['language'] . '/forgot-password/?session_auth=' . $_SESSION['session_auth'] . '&email=' . urldecode($email) . '&day_of_birth=' . urldecode($day_of_birth) . '&error_questions=1');
            } else {
                header('Location: /forgot-password/?session_auth=' . $_SESSION['session_auth'] . '&email=' . urldecode($email) . '&day_of_birth=' . urldecode($day_of_birth) . '&error_questions=1');
            }
        }

        session_write_close();
    }

    /**
     * Last step in recovering Account Password process
     * Change Account Password
     *
     * @var $email
     * @var $day_of_birth
     * @var $sc_a_1
     * @var $sc_a_2
     * @var $sc_a_3
     *
     * @var $password
     * @var $repeat_password
     *
     * ! REDIRECT
     *
     */
    public function actionChangePassword() {

        $this->actionGetLanguage();

        include_once $_SERVER['DOCUMENT_ROOT'] . '/Storage.php';
        $db = Storage::getInstance();
        $mysqli = $db->getConnection();

        if(isset($_POST['email'])){
            $email = $_POST['email'];
        }
        if(isset($_POST['day_of_birth'])){
            $day_of_birth = $_POST['day_of_birth'];
        }
        if(isset($_POST['sc-a-1'])){
            $sc_a_1 = $_POST['sc-a-1'];
        }
        if(isset($_POST['sc-a-2'])){
            $sc_a_2 = $_POST['sc-a-2'];
        }
        if(isset($_POST['sc-a-3'])){
            $sc_a_3 = $_POST['sc-a-3'];
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

            if($_SESSION['language'] !== 'us') {
                header('Location: /' . $_SESSION['language'] . '/forgot-password/?success=true');
            } else {
                header('Location: /forgot-password/?success=true');
            }
        } else {
            session_start();

            if($_SESSION['language']) {
                header('Location: /' . $_SESSION['language'] . '/forgot-password/?session_auth=' . $_SESSION['session_auth'] . '&email=' . urldecode($email) . '&day_of_birth=' . urldecode($day_of_birth) . '&sc-a-1=' . urldecode($sc_a_1) . '&sc-a-2=' . urldecode($sc_a_2) . '&sc-a-3=' . urldecode($sc_a_3) . '&success=false');
            } else {
                header('Location: /forgot-password/?session_auth=' . $_SESSION['session_auth'] . '&email=' . urldecode($email) . '&day_of_birth=' . urldecode($day_of_birth) . '&sc-a-1=' . urldecode($sc_a_1) . '&sc-a-2=' . urldecode($sc_a_2) . '&sc-a-3=' . urldecode($sc_a_3) . '&success=false');
            }

            session_write_close();
        }

    }

    /**
     * Save data from injection from the site of URL
     * Fixed manipulation of $_GET data
     * No SQL Injection
     *
     * @var $day_of_birth
     * @var $sc_a_1
     * @var $sc_a_2
     * @var $sc_a_3
     *
     * ! MANY REDIRECTS
     */
    public function actionSaveDataFromInjection() {

        $this->actionGetLanguage();

        include_once $_SERVER['DOCUMENT_ROOT'] . '/Storage.php';
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
                        if($_SESSION['language'] !== 'us') {
                            header('Location: /' . $_SESSION['language'] . '/forgot-password/');
                        } else {
                            header('Location: /forgot-password/');
                        }
                    }
                }

                if(isset($_GET['sc-a-1'])){
                    if($_GET['sc-a-1'] !== $answer1){
                        if($_SESSION['language'] !== 'us') {
                            header('Location: /' . $_SESSION['language'] . '/forgot-password/');
                        } else {
                            header('Location: /forgot-password/');
                        }
                    }
                }

                if(isset($_GET['sc-a-2'])){
                    if($_GET['sc-a-2'] !== $answer2){
                        if($_SESSION['language'] !== 'us') {
                            header('Location: /' . $_SESSION['language'] . '/forgot-password/');
                        } else {
                            header('Location: /forgot-password/');
                        }
                    }
                }

                if(isset($_GET['sc-a-3'])){
                    if($_GET['sc-a-3'] !== $answer3){
                        if($_SESSION['language'] !== 'us') {
                            header('Location: /' . $_SESSION['language'] . '/forgot-password/');
                        } else {
                            header('Location: /forgot-password/');
                        }
                    }
                }
            } else {
                if($_SESSION['language'] !== 'us') {
                    header('Location: /' . $_SESSION['language'] . '/forgot-password/');
                } else {
                    header('Location: /forgot-password/');
                }
            }
        }

    }
}
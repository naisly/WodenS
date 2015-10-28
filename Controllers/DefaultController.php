<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 27.10.2015
 * Time: 21:57
 */
class DefaultController
{
    public $model;


    public function __construct(DefaultModel $model) {

        $this->model = $model;

    }

    public function actionGetCategories() {

        include_once('/../Storage.php');

        $db = Storage::getInstance();
        $mysqli = $db->getConnection();
        $sql_query = "SELECT category FROM phones";
        $result = $mysqli->query($sql_query);

        $_array = array();

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {

                $_array = array_merge($_array, array_map('trim', explode(",", $row['category'])));

            }

            $this->model->setCategory($_array);
        }
    }
}
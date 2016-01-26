<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 18.01.2016
 * Time: 20:30
 */

include_once('DefaultController.php');

class SearchController extends DefaultController
{
    /*
     * MVC constructor
     * with ProfileModel
     *
     * @global $model
     */
    public $model;
    public function __construct(SearchModel $model) {
        parent::__construct($model);
        $this->model = $model;

    }

    public function actionGetResults() {

        $this->actionGetHeaderCart();

        $this->actionSearch();
    }

    private function actionSearch() {

        include_once('/../Storage.php');
        $db = Storage::getInstance();
        $mysqli = $db->getConnection();

        $sql_stmt = $mysqli->prepare("set names 'utf8'");
        $sql_stmt->execute();

        if(isset($_GET['generalnav'])){
            $search = $_GET['generalnav'];

            $sql_query = "SELECT * FROM search WHERE description LIKE '%$search%' ORDER BY CHAR_LENGTH(description) DESC";

            $result = $mysqli->query($sql_query);

            $title_array = array();
            $url_array = array();
            $description_array = array();

            if ($result->num_rows > 0){
                while ($row = $result->fetch_assoc()){
                    array_push($title_array, $row['title']);
                    array_push($url_array, $row['url']);
                    array_push($description_array, $row['description']);
                }
            }

            $this->model->setTitle($title_array);
            $this->model->setUrl($url_array);
            $this->model->setDescription($description_array);
            $this->model->setCountResults($result->num_rows);
        }

    }
}
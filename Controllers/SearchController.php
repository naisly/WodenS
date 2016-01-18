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

    }
}
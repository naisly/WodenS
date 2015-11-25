<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 25.11.2015
 * Time: 20:39
 */

include_once('SubdescriptionController.php');

class SearchAnswersController extends SubdescriptionController
{
    public $model;
    public function __construct(SearchAnswersModel $model)
    {
        parent::__construct($model);
        $this->model = $model;
    }
}
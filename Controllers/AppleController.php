<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 28.10.2015
 * Time: 23:46
 */
include_once('DefaultController.php');

class AppleController extends DefaultController
{
    public $model;


    public function __construct(AppleModel $model) {

        parent::__construct($model);
        $this->model = $model;

    }

}

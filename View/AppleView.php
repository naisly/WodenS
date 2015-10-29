<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 28.10.2015
 * Time: 23:47
 */

include_once('DefaultView.php');

class AppleView extends DefaultView
{
    private $model;


    public function __construct(AppleModel $model)
    {
        parent::__construct($model);
        $this->model = $model;

    }
}
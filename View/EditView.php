<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 10.11.2015
 * Time: 20:07
 */
class EditView
{
    private $model;
    public function __construct(EditModel $model)
    {
        $this->model = $model;
    }
}
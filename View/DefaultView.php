<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 27.10.2015
 * Time: 21:57
 */
class DefaultView
{
    private $model;


    public function __construct(DefaultModel $model) {

        $this->model = $model;

    }

    public function output() {

        return '<h1>' . $this->model->text .'</h1>';

    }
}
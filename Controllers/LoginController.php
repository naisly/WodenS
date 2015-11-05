<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 05.11.2015
 * Time: 22:32
 */
class LoginController
{
    public $model;
    public function __construct(LoginModel $model) {
        $this->model = $model;
    }
}
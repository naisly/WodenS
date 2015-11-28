<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 28.11.2015
 * Time: 13:47
 */

include_once('DefaultController.php');

class CheckOrderController extends DefaultController
{
    /*
     * MVC constructor
     * with CheckoutModel
     *
     * @global $model
     */
    public $model;
    public function __construct(CheckOrderModel $model) {
        parent::__construct( $model );
        $this->model = $model;
    }
}
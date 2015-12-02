<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 03.12.2015
 * Time: 0:08
 */

include_once('AccountOrderController.php');

class AccountBillingController extends AccountOrderController
{
    /*
     * MVC constructor
     * with AdminModel
     *
     * @global $model
     */
    public $model;
    public function __construct(AccountBillingModel $model) {
        parent::__construct( $model );
        $this->model = $model;
    }

    public function getBilling() {

        $this->actionGetHeaderCart();
        $this->actionGetUser();
    }
}
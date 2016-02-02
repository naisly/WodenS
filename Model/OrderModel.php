<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 09.11.2015
 * Time: 16:06
 * ==================
 * Getters and Setters
 * ==================
 */

include_once('DefaultBillingModel.php');

class OrderModel extends DefaultBillingModel
{
    public function setOrderId() {

        $id = rand(100000, 10000000);
        $this->id = $id;
    }
    public function getOrderId() {

        return $this->id;
    }

}
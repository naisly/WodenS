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

include_once('DefaultModel.php');

class OrderModel extends DefaultModel
{

    public function setQuantity( $quantity ) {

        $this->quantity = $quantity;
    }

    public function getQuantity() {

        return $this->quantity;
    }

    public function setPrice( $price ){

        $this->price = $price;
    }

    public function getPrice() {

        return $this->price;
    }

    public function setOrderId() {

        $id = rand(100000, 10000000);
        $this->id = $id;
    }
    public function getOrderId() {

        return $this->id;
    }
}
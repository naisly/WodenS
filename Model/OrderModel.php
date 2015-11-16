<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 09.11.2015
 * Time: 16:06
 */

include_once('Model.php');

class OrderModel extends Model
{
    public $id;
    public $quantity;
    public $price;


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
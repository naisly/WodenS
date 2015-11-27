<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 11.11.2015
 * Time: 20:05
 * ==================
 * Getters and Setters
 * ==================
 */

include_once('DefaultModel.php');

class CheckoutModel extends DefaultModel
{
    public $id;
    public $product_name;
    public $category;
    public $user;
    public $price;
    public $quantity;
    public $order_id;
    public $email;
    public $name;

    public $sum;


    public function countId() {

        return count($this->order_id);
    }

    public function setUser( $user ){

        $this->user = $user;
    }

    public function getUser( $i ) {

        return $this->user[$i];
    }

    public function setOrderId( $order_id ){

        $this->order_id = $order_id;
    }

    public function getOrderId( $i ) {

        return $this->order_id[$i];
    }

    public function setEmail( $email ){

        $this->email = $email;
    }

    public function getEmail( $i ) {

        return $this->email[$i];
    }

    public function setName( $name ) {

        $this->name = $name;
    }

    public function getName( $i ) {

        return $this->name[$i];
    }

    public function setFullPrice ( $sum ){

        $this->sum = $sum;
    }

    public function getFullPrice() {

        return $this->sum;
    }
}
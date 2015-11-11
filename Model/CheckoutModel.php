<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 11.11.2015
 * Time: 20:05
 */
class CheckoutModel
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

    public function setId( $id ){

        $this->id = $id;
    }

    public function getId() {

        return $this->id;
    }

    public function setProductName( $product_name ){

        $this->product_name = $product_name;
    }

    public function getProductName() {

        return $this->product_name;
    }

    public function setCategory( $category ){

        $this->category = $category;
    }

    public function getCategory() {

        return $this->category;
    }

    public function setUser( $user ){

        $this->user = $user;
    }

    public function getUser() {

        return $this->user;
    }

    public function setPrice( $price ){

        $this->price = $price;
    }

    public function getPrice() {

        return $this->price;
    }

    public function setQuantity( $quantity ){

        $this->quantity = $quantity;
    }

    public function getQuantity() {

        return $this->quantity;
    }

    public function setOrderId( $order_id ){

        $this->order_id = $order_id;
    }

    public function getOrderId() {

        return $this->order_id;
    }

    public function setEmail( $email ){

        $this->email = $email;
    }

    public function getEmail() {

        return $this->email;
    }

    public function setName( $name ) {

        $this->name = $name;
    }

    public function getName() {

        return $this->name;
    }
}
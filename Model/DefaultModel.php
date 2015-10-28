<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 27.10.2015
 * Time: 21:58
 */
class DefaultModel
{
    public $product_name;
    public $photo;
    public $description;
    public $category;
    public $price;
    public $previous_price;
    public $time_of_adding;
    public $features;
    public $id;
    public $quantity;
    public $shipping;
    /*
    public $text;


    public function __construct() {

        $this->text = 'Hello world!';

    }
    */
    public function setProductName ( $product_name ) {

        $this->product_name = $product_name;

    }

    public function getProductName($i) {

        return $this->product_name[$i];

    }

    public function setPhoto( $photo ) {

        $this->photo = $photo;
    }

    public function getPhoto($i) {

        return $this->photo[$i];
    }

    public function setDescription( $description ) {

        $this->description = $description;
    }

    public function getDescription($i) {

        return $this->description[$i];
    }

    public function setCategory( $category ) {

        $this->category = $category;
    }

    public function getCategory($i) {

        return $this->category[$i];
    }

    public function setPrice( $price ) {

        $this->price = $price;
    }

    public function getPrice($i) {

        return $this->price[$i];
    }

    public function setPreviousPrice( $previous_price ){

        $this->previous_price = $previous_price;
    }

    public function getPriviousPrice($i) {

        return $this->previous_price[$i];
    }

    public function setTimeOfAdding( $time_of_adding) {

        $this->time_of_adding = $time_of_adding;
    }

    public function getTimeOfAdding($i) {

        return $this->time_of_adding[$i];
    }

    public function setFeatures( $features ) {

        $this->features = $features;
    }

    public function getFeatures($i) {

        return $this->features[$i];
    }

    public function setId ( $id ) {

        $this->id = $id;
    }

    public function getId($i) {

        return $this->id[$i];
    }

    public function setQuantity( $quantity ){

        $this->quantity = $quantity;
    }

    public function getQuantity($i) {

        return $this->quantity[$i];
    }

    public function setShipping( $shipping ) {

        $this->shipping = $shipping;
    }

    public function getShipping($i) {

        return $this->shipping[$i];
    }

}
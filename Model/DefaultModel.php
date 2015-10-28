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
    /*
    public $text;


    public function __construct() {

        $this->text = 'Hello world!';

    }
    */
    public function setProductName ( $product_name ) {

        $this->product_name = $product_name;

    }

    public function getProductName() {

        echo $this->product_name;

    }

    public function setPhoto( $photo ) {

        $this->photo = $photo;
    }

    public function getPhoto() {

        echo $this->photo;
    }

    public function setDescription( $description ) {

        $this->description = $description;
    }

    public function getDescription() {

        echo $this->description;
    }

    public function setCategory( $category ) {

        $this->category = $category;
    }

    public function getCategory () {

        echo $this->category;
    }

    public function setPrice( $price ) {

        $this->price = $price;
    }

    public function getPrice() {

        echo $this->price;
    }

    public function setPreviousPrice( $previous_price ){

        $this->previous_price = $previous_price;
    }

    public function getPriviousPrice() {

        echo $this->previous_price;
    }

    public function setTimeOfAdding( $time_of_adding) {

        $this->time_of_adding = $time_of_adding;
    }

    public function getTimeOfAdding() {

        echo $this->time_of_adding;
    }

    public function setFeatures( $features ) {

        $this->features = $features;
    }

    public function getFeatures() {

        echo $this->features;
    }

    public function setId ( $id ) {

        $this->id = $id;
    }

    public function getId ( $id ) {

        echo $this->id();
    }

    public function setQuantity( $quantity ){

        $this->quantity = $quantity;
    }

    public function getQuantity() {

        echo $this->quantity;
    }

}
<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 08.11.2015
 * Time: 17:00
 */
class ProfileModel
{
    public $id_array;
    public $product_name_array;
    public $category_array;
    public $price_array;

    public $quantity;
    public $price;

    public function setIdArray( $id_array ){

        $this->id_array = $id_array;
    }

    public function getIdArray( $i ) {

        return $this->id_array[$i];
    }

    public function setProductNameArray( $product_name_array ){

        $this->product_name_array = $product_name_array;
    }

    public function getProductNameArray( $i ) {

        return $this->product_name_array[$i];
    }

    public function setCategoryArray( $category_array ){

        $this->category_array = $category_array;
    }

    public function getCategoryArray( $i ) {

        return $this->category_array[$i];
    }

    public function setPriceArray( $price_array ){

        $this->price_array = $price_array;
    }

    public function getPriceArray( $i ) {

        return $this->price_array[$i];
    }

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
}
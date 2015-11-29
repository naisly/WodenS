<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 29.11.2015
 * Time: 19:00
 */

include_once('ProfileModel.php');

class AccountOrderModel extends ProfileModel
{

    private $product_item;
    private $quantity_item;
    private $price_item;
    private $category_item;

    public function setProductItem( $product_item ){

        $this->product_item = $product_item;
    }

    public function getProductItem($i){

        return $this->product_item[$i][0];
    }

    public function countProductItem() {

        return count($this->product_item);
    }

    public function setCategoryItem( $category_item ){

        $this->category_item = $category_item;
    }

    public function getCategoryItem($i){

        return $this->category_item[$i][0];
    }

    public function setQuantityItem( $quantity_item ){

        $this->quantity_item = $quantity_item;
    }

    public function getQuantityItem($i){

        return $this->quantity_item[$i][0];
    }

    public function setPriceItem( $price_item ){

        $this->price_item = $price_item;
    }

    public function getPriceItem($i){

        return $this->price_item[$i][0];
    }
}
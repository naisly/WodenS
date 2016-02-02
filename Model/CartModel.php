<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 29.11.2015
 * Time: 16:55
 */

include_once('ProfileMinPriceModel.php');

class CartModel extends ProfileMinPriceModel
{

    private $name;
    private $order_id;
    private $last_order_items;
    private $last_order_sum;

    private $item_price;
    private $item_shipping;
    private $no_product;

    private $not_found;

    public function setName( $name ){

        $this->name = $name;
    }

    public function getName() {

        return $this->name;
    }

    public function setOrderId( $order_id ){

        $this->order_id = $order_id;
    }

    public function getOrderId() {

        return $this->order_id;
    }

    public function setLastOrderItems( $last_order_items ){

        $this->last_order_items = $last_order_items;
    }

    public function getLastOrderItems() {

        return $this->last_order_items;
    }

    public function setLastOrderSum( $last_order_sum ){

        $this->last_order_sum = $last_order_sum;
    }

    public function getLastOrderSum() {

        return $this->last_order_sum;
    }

    public function setNoProduct( $no_product ){

        $this->no_product = $no_product;
    }

    public function getNoProduct() {

        return $this->no_product;
    }

    public function setNotFound( $not_found ){

        $this->not_found = $not_found;
    }

    public function getNotFound() {

        return $this->not_found;
    }
}
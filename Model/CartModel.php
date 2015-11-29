<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 29.11.2015
 * Time: 16:55
 */

include_once('DefaultModel.php');

class CartModel extends DefaultModel
{

    private $name;
    private $order_id;
    private $last_order_items;
    private $last_order_sum;

    private $item_price;
    private $item_shipping;

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

    public function setOriginalName( $original_name ){

        $this->original_name = $original_name;
    }

    public function getOriginalName() {

        return $this->original_name;
    }

    public function setItemPrice( $item_price ){

        $this->item_price = $item_price;
    }

    public function getItemPrice() {

        return $this->item_price;
    }

    public function setItemShipping( $item_shipping ){

        $this->item_shipping = $item_shipping;
    }

    public function getItemShipping() {

        return $this->item_shipping;
    }

    public function setPhoto( $photo ){

        $this->photo = $photo;
    }

    public function getPhoto() {

        return $this->photo;
    }
}
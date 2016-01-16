<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 28.11.2015
 * Time: 13:47
 */

include_once('DefaultModel.php');

class CheckOrderModel extends DefaultModel
{
    private $status;
    private $order_id;
    private $order_email;
    private $name;

    private $categories;
    private $count_categories;
    private $table;

    private $count_items;
    private $count_price;

    public function setStatus ( $status ) {

        $this->status = $status;
    }

    public function getStatus() {

        return $this->status;
    }

    public function setOrderId ( $order_id ) {

        $this->order_id = $order_id;
    }

    public function getOrderId() {

        return $this->order_id;
    }

    public function setOrderEmail ( $order_email ) {

        $this->order_email = $order_email;
    }

    public function getOrderEmail() {

        return $this->order_email;
    }

    public function setName ( $name ) {

        $this->name = $name;
    }

    public function getName() {

        return $this->name;
    }

    public function countNames() {

        return count($this->name);
    }

    public function setCategories ( $category ) {

        $this->category = $category;
    }

    public function getCategories($i) {

        return $this->category[$i];
    }

    public function countCategories() {

        return count($this->category);
    }

    public function setCountCategories( $count_categories ) {

        $this->count_categories = $count_categories;
    }

    public function getCountCategories($i) {

        return $this->count_categories[$i];
    }

    public function setTable( $table ) {

        $this->table = $table;
    }

    public function getTable( $i ) {

        return $this->table[$i];
    }

    public function setProductCategory( $categories ){

        $this->categories = $categories;
    }

    public function getProductCategory( $i ){

        return $this->categories[$i];
    }

    public function setCountItems( $count_items ){

        $this->count_items = $count_items;
    }

    public function getCountItems(){

        return count($this->count_items);
    }

    public function setCountPrice( $count_price ){

        $this->count_price = $count_price;
    }

    public function getCountPrice() {

        return $this->count_price;
    }


}
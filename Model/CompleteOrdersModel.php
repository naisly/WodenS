<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 02.12.2015
 * Time: 19:23
 */

include_once('DoneOrdersModel.php');

class CompleteOrdersModel extends DoneOrdersModel
{

    private $complete_id;
    private $complete_product_table;
    private $complete_original_name;
    private $complete_category;
    private $complete_quantity;
    private $complete_price;
    private $complete_order;
    private $complete_photo;
    private $complete_product_name;

    public $complete_count;

    public function setCompleteId( $complete_id ) {

        $this->complete_id = $complete_id;
    }

    public function getCompleteId( $i, $k) {

        return $this->complete_id[$i][$k];
    }

    public function setCompleteProductTable( $complete_product_table ){

        $this->complete_product_table = $complete_product_table;
    }

    public function getCompleteProductTable( $i, $k) {

        return $this->complete_product_table[$i][$k];
    }

    public function setCompleteOriginalName( $complete_original_name ){

        $this->complete_original_name = $complete_original_name;
    }

    public function getCompleteOriginalName( $i, $k) {

        return $this->complete_original_name[$i][$k];
    }

    public function setCompleteCategory( $complete_category ){

        $this->complete_category = $complete_category;
    }

    public function getCompleteCategory( $i, $k) {

        return $this->complete_category[$i][$k];
    }

    public function setCompleteQuantity( $complete_quantity ){

        $this->complete_quantity = $complete_quantity;
    }

    public function getCompleteQuantity( $i, $k) {

        return $this->complete_quantity[$i][$k];
    }

    public function setCompletePrice( $complete_price ){

        $this->complete_price = $complete_price;
    }

    public function getCompletePrice( $i, $k) {

        return $this->complete_price[$i][$k];
    }

    public function setCompleteOrder( $complete_order ){

        $this->complete_order = $complete_order;
    }

    public function getCompleteOrder( $i ) {

        return $this->complete_order[$i];
    }

    public function countCompleteOrder() {

        return count($this->complete_order);
    }

    public function setCompletePhoto( $complete_photo ){

        $this->complete_photo = $complete_photo;
    }

    public function getCompletePhoto( $i, $k) {

        return $this->complete_photo[$i][$k];
    }

    public function setCompleteProductName( $complete_product_name ){

        $this->complete_product_name = $complete_product_name;
    }

    public function getCompleteProductName( $i, $k) {

        return $this->complete_product_name[$i][$k];
    }

    public function countCompleteProductNameIteration( $i ){

        return count($this->complete_product_name[$i]);
    }
}
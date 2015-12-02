<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 02.12.2015
 * Time: 19:23
 */

include_once('BillingModel.php');

class DoneOrdersModel extends BillingModel
{
    private $done_id;
    private $done_product_table;
    private $done_original_name;
    private $done_category;
    private $done_quantity;
    private $done_price;
    private $done_order;
    private $done_photo;
    private $done_product_name;

    public function setDoneId( $done_id ) {

        $this->done_id = $done_id;
    }

    public function getDoneId( $i, $k) {

        return $this->done_id[$i][$k];
    }

    public function setDoneProductTable( $done_product_table ){

        $this->done_product_table = $done_product_table;
    }

    public function getDoneProductTable( $i, $k) {

        return $this->done_product_table[$i][$k];
    }

    public function setDoneOriginalName( $done_original_name ){

        $this->done_original_name = $done_original_name;
    }

    public function getDoneOriginalName( $i, $k) {

        return $this->done_original_name[$i][$k];
    }

    public function setDoneCategory( $done_category ){

        $this->done_category = $done_category;
    }

    public function getDoneCategory( $i, $k) {

        return $this->done_category[$i][$k];
    }

    public function setDoneQuantity( $done_quantity ){

        $this->done_quantity = $done_quantity;
    }

    public function getDoneQuantity( $i, $k) {

        return $this->done_quantity[$i][$k];
    }

    public function setDonePrice( $done_price ){

        $this->done_price = $done_price;
    }

    public function getDonePrice( $i, $k) {

        return $this->done_price[$i][$k];
    }

    public function setDoneOrder( $done_order ){

        $this->done_order = $done_order;
    }

    public function getDoneOrder( $i ) {

        return $this->done_order[$i];
    }

    public function countDoneOrder() {

        return count($this->done_order);
    }

    public function setDonePhoto( $done_photo ){

        $this->done_photo = $done_photo;
    }

    public function getDonePhoto( $i, $k) {

        return $this->done_photo[$i][$k];
    }

    public function setDoneProductName( $done_product_name ){

        $this->done_product_name = $done_product_name;
    }

    public function getDoneProductName( $i, $k) {

        return $this->done_product_name[$i][$k];
    }

    public function countDoneProductNameIteration( $i ){

        return count($this->done_product_name[$i]);
    }
}
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

    private $complete_id;
    private $complete_product_table;
    private $complete_original_product_name;
    private $complete_category;
    private $complete_quantity;
    private $complete_price;
    private $complete_order;
    private $complete_photo;
    private $complete_product_name;


    private $complete_order_ids;
    private $done_order_ids;

    public function setCompleteOrderIds( $complete_order_ids ){

        $this->complete_order_ids = $complete_order_ids;
    }

    public function getCompleteOrderIdsIteration( $i ){

        return $this->complete_order_ids[$i];
    }

    public function getCompleteOrderIds() {

        return $this->complete_order_ids;
    }

    public function setDoneOrderIds( $done_order_ids ){

        $this->done_order_ids = $done_order_ids;
    }

    public function getDoneOrderIds() {

        return $this->done_order_ids;
    }

    public function getDoneOrderIdsIteration( $i ){

        return $this->done_order_ids[$i];
    }
}
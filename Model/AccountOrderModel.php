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


    private $complete_order_ids;
    private $done_order_ids;

    private $all_orders;

    public function setCompleteOrderIds( $complete_order_ids ){

        $this->complete_order_ids = $complete_order_ids;
    }

    public function getCompleteOrderIdsIteration( $i ){

        return $this->complete_order_ids[$i];
    }

    public function getCompleteOrderIds() {

        return $this->complete_order_ids;
    }

    public function countAccountComplete() {

        return count($this->complete_order_ids);
    }

    public function getAccountComplete( $i ){

        return $this->complete_order_ids[$i];
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

    public function countAccountDone() {

        return count($this->done_order_ids);
    }

    public function getAccountDone( $i ){

        return $this->done_order_ids[$i];
    }

    public function setAllOrders() {

        $all_orders = array_merge($this->getCompleteOrderIds(), $this->getDoneOrderIds());
        $this->all_orders = $all_orders;
    }

    public function getAllOrders() {

        return $this->all_orders;
    }

    public function getEachOrder( $i ) {

        return $this->all_orders[$i];
    }
}
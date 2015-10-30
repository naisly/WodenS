<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 28.10.2015
 * Time: 23:47
 */

include_once('DefaultModel.php');
class AppleModel extends DefaultModel
{
    public $average_price;

    public function setAveragePrice( $average_price ){

        $this->average_price = $average_price;
    }

    public function getAveragePrice() {

        return $this->average_price;
    }
}
<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 30.11.2015
 * Time: 22:41
 */

include_once('CompleteOrdersModel.php');

class ProfileMinPriceModel extends CompleteOrdersModel
{

    private $min_phones;
    private $min_notebooks;
    private $min_gadgets;
    private $min_tv;

    public function setMinPhones( $min_phones ){

        $this->min_phones = $min_phones;
    }

    public function getMinPhones() {

        return $this->min_phones;
    }

    public function setMinNotebooks( $min_notebooks ){

        $this->min_notebooks = $min_notebooks;
    }

    public function getMinNotebooks() {

        return $this->min_notebooks;
    }

    public function setMinGadgets( $min_gadgets ){

        $this->min_gadgets = $min_gadgets;
    }

    public function getMinGadgets() {

        return $this->min_gadgets;
    }

    public function setMinTV( $min_tv ) {

        $this->min_tv = $min_tv;
    }

    public function getMinTV() {

        return $this->min_tv;
    }
}
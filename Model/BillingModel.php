<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 03.12.2015
 * Time: 1:06
 */

include_once('DefaultModel.php');

class BillingModel extends DefaultModel
{
    private $billing_name;
    private $billing_street;
    private $billing_city;
    private $billing_state;
    private $billing_zip;
    private $billing_country;
    private $billing_wrap;

    private $billing_not_found;

    public function setBillingName( $billing_name ){

        $this->billing_name = $billing_name;
    }

    public function getBillingName() {

        return $this->billing_name;
    }

    public function issetBillingName() {

        if(isset($this->billing_name)){
            return 1;
        } else {
            return 0;
        }
    }

    public function setBillingStreet( $billing_street ){

        $this->billing_street = $billing_street;
    }

    public function getBillingStreet() {

        return $this->billing_street;
    }

    public function setBillingCity( $billing_city ){

        $this->billing_city = $billing_city;
    }

    public function getBillingCity() {

        return $this->billing_city;
    }

    public function setBillingState( $billing_state ){

        $this->billing_state = $billing_state;
    }

    public function getBillingState() {

        return $this->billing_state;
    }

    public function setBillingZip( $billing_zip ){

        $this->billing_zip = $billing_zip;
    }

    public function getBillingZip() {

        return $this->billing_zip;
    }

    public function setBillingCountry( $billing_country ){

        $this->billing_country = $billing_country;
    }

    public function getBillingCountry() {

        return $this->billing_country;
    }

    public function setBillingWrap( $billing_wrap ){

        $this->billing_wrap = $billing_wrap;
    }

    public function getBillingWrap() {

        return $this->billing_wrap;
    }

    public function setBillingNotFound( $billing_not_found ){

        $this->billing_not_found = $billing_not_found;
    }

    public function getBillingNotFound() {

        return $this->billing_not_found;
    }
}
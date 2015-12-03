<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 03.12.2015
 * Time: 19:20
 */

include_once('DefaultModel.php');

class DefaultBillingModel extends DefaultModel
{

    private $default_name;
    private $default_street;
    private $default_city;
    private $default_state;
    private $default_zip;
    private $default_country;
    private $default_wrap;

    public function setDefaultName( $default_name ){

        $this->default_name = $default_name;
    }

    public function getDefaultName() {

        return $this->default_name;
    }

    public function setDefaultStreet( $default_street ){

        $this->default_street = $default_street;
    }

    public function getDefaultStreet() {

        return $this->default_street;
    }

    public function setDefaultCity( $default_city ){

        $this->default_city = $default_city;
    }

    public function getDefaultCity() {

        return $this->default_city;
    }

    public function setDefaultState( $default_state ){

        $this->default_state = $default_state;
    }

    public function getDefaultState() {

        return $this->default_state;
    }

    public function setDefaultZip( $default_zip ){

        $this->default_zip = $default_zip;
    }

    public function getDefaultZip() {

        return $this->default_zip;
    }

    public function setDefaultCountry( $default_country ){

        $this->default_country = $default_country;
    }

    public function getDefaultCountry() {

        return $this->default_country;
    }

    public function setDefaultWrap( $default_wrap ){

        $this->default_wrap = $default_wrap;
    }

    public function getDefaultWrap() {

        return $this->default_wrap;
    }
}
<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 27.11.2015
 * Time: 18:25
 */

include_once('ComparisonModel.php');

class AssocModel extends ComparisonModel
{

    private $assoc_photo;
    private $assoc_price;
    private $assoc_previous_price;
    private $assoc_shipping;
    private $differential_assoc_price;

    private $assoc_table;
    private $assoc_id;
    private $assoc_name;

    public function setAssocPhoto( $assoc_photo ) {

        $this->assoc_photo = $assoc_photo;
    }

    public function getAssocPhoto( $i ) {

        return $this->assoc_photo[$i];
    }

    public function setAssocPrice( $assoc_price ) {

        $this->assoc_price = $assoc_price;
    }

    public function getAssocPrice( $i ) {

        return $this->assoc_price[$i];
    }

    public function setAssocPreviousPrice( $assoc_previous_price ) {

        $this->assoc_previous_price = $assoc_previous_price;
    }

    public function getAssocPreviousPrice( $i ) {

        return $this->assoc_previous_price[$i];
    }

    public function setAssocShipping( $assoc_shipping ) {

        $this->assoc_shipping = $assoc_shipping;
    }

    public function getAssocShipping( $i ) {

        return $this->assoc_shipping[$i];
    }

    private function setAssocDifferentialPrice( $i ) {

        $this->differential_assoc_price = $this->getAssocPreviousPrice($i) - $this->getAssocPrice($i);
    }

    public function getAssocDifferentialPrice( $i ) {

        $this->setAssocDifferentialPrice($i);
        return $this->differential_assoc_price;
    }

    public function setAssocTable( $assoc_table ) {

        $this->assoc_table = $assoc_table;
    }

    public function getAssocTable() {

        return $this->assoc_table;
    }

    public function setAssocId( $assoc_id ) {

        $this->assoc_id = $assoc_id;
    }

    public function getAssocId( $i ) {

        return $this->assoc_id[$i];
    }

    public function setAssocName( $assoc_name ) {

        $this->assoc_name = $assoc_name;
    }

    public function getAssocName( $i ) {

        return $this->assoc_name[$i];
    }
}
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
}
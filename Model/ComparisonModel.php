<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 27.11.2015
 * Time: 18:23
 */

include_once('SequenceModel.php');

class ComparisonModel extends SequenceModel
{
    private $comparison_id;
    private $comparison_product_name;
    private $comparison_original_name;
    private $comparison_photo;
    private $comparison_description;
    private $comparison_category;
    private $comparison_price;
    private $comparison_previous_price;
    private $comparison_time_of_adding;
    private $comparison_features;
    private $comparison_quantity;
    private $comparison_shipping;
    private $comparison_average;

    public function setComparisonProductName ( $comparison_product_name ) {

        $this->comparison_product_name = $comparison_product_name;

    }

    public function getComparisonProductName($i) {

        return $this->comparison_product_name[$i];

    }

    public function setComparisonPhoto( $comparison_photo ) {

        $this->comparison_photo = $comparison_photo;
    }

    public function setComparisonOriginalName( $comparison_original_name ) {

        $this->comparison_original_name = $comparison_original_name;
    }

    public function getComparisonOriginalName( $i ) {

        return $this->comparison_original_name[$i];
    }

    public function getComparisonPhoto($i) {

        return $this->comparison_photo[$i];
    }

    public function setComparisonDescription( $comparison_description ) {

        $this->comparison_description = $comparison_description;
    }

    public function getComparisonDescription($i) {

        return $this->comparison_description[$i];
    }

    public function setComparisonCategory( $comparison_category ) {

        $this->comparison_category = $comparison_category;
    }

    public function getComparisonCategory($i) {

        return $this->comparison_category[$i];
    }

    public function setComparisonPrice( $comparison_price ) {

        $this->comparison_price = $comparison_price;
    }

    public function getComparisonPrice($i) {

        return $this->comparison_price[$i];
    }

    public function setComparisonPreviousPrice( $comparison_previous_price ){

        $this->comparison_previous_price = $comparison_previous_price;
    }

    public function getComparisonPriviousPrice($i) {

        return $this->comparison_previous_price[$i];
    }

    public function setComparisonTimeOfAdding( $comparison_time_of_adding) {

        $this->comparison_time_of_adding = $comparison_time_of_adding;
    }

    public function getComparisonTimeOfAdding($i) {

        return gmdate('D M m H:i:s Y', $this->comparison_time_of_adding[$i]);
    }

    public function setComparisonFeatures( $comparison_features ) {

        $this->comparison_features = $comparison_features;
    }

    public function getComparisonFeatures($i) {

        return $this->comparison_features[$i];
    }

    public function setComparisonId ( $comparison_id ) {

        $this->comparison_id = $comparison_id;
    }

    public function getComparisonId ($i) {

        return $this->comparison_id[$i];
    }

    public function countComparisonId() {

        return count($this->comparison_id);
    }

    public function setComparisonQuantity( $comparison_quantity ){

        $this->comparison_quantity = $comparison_quantity;
    }

    public function getComparisonQuantity($i) {

        return $this->comparison_quantity[$i];
    }

    public function setComparisonShipping( $comparison_shipping ) {

        $this->comparison_shipping = $comparison_shipping;
    }

    public function getComparisonShipping($i) {

        return $this->comparison_shipping[$i];
    }

    public function setComparisonAverage( $comparison_average ) {

        $this->comparison_average = $comparison_average;
    }

    public function getComparisonAverage($i) {

        return $this->comparison_average[$i];
    }
}
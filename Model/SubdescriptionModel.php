<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 22.11.2015
 * Time: 16:06
 */

include_once('DefaultModel.php');

class SubdescriptionModel extends DefaultModel
{
    public $product_name;
    public $original_name;
    public $photo;
    public $description;
    public $category;
    public $price;
    public $previous_price;
    public $time_of_adding;
    public $features;
    public $id;
    public $quantity;
    public $shipping;

    public $assoc_products;
    public $technical_details;
    public $technical_details1;
    public $technical_details2;
    public $technical_details3;
    public $technical_details4;
    public $technical_details5;
    public $technical_details6;
    public $product_details;
    public $product_photo;

    public $differential_price;
    public $min;

    public function setProductName ( $product_name ) {

        $this->product_name = $product_name;

    }

    public function getProductName() {

        return $this->product_name;

    }

    public function setPhoto( $photo ) {

        $this->photo = $photo;
    }

    public function getPhoto() {

        return $this->photo;
    }

    public function setOriginalName( $original_name ) {

        $this->original_name = $original_name;
    }

    public function getOriginalName() {

        return $this->original_name;
    }

    public function setDescription( $description ) {

        $this->description = $description;
    }

    public function getDescription( $i ) {

        return $this->description[$i];
    }

    public function countDescription() {

        return count($this->description);
    }

    public function setCategory( $category ) {

        $this->category = $category;
    }

    public function getCategory() {

        return $this->category;
    }

    public function setPrice( $price ) {

        $this->price = $price;
    }

    public function getPrice() {

        return $this->price;
    }

    public function setPreviousPrice( $previous_price ){

        $this->previous_price = $previous_price;
    }

    public function getPriviousPrice() {

        return $this->previous_price;
    }

    public function setTimeOfAdding( $time_of_adding) {

        $this->time_of_adding = $time_of_adding;
    }

    public function getTimeOfAdding() {

        return $this->time_of_adding;
    }

    public function setFeatures( $features ) {

        $this->features = $features;
    }

    public function getFeatures() {

        return $this->features;
    }

    public function setId ( $id ) {

        $this->id = $id;
    }

    public function getId() {

        return $this->id;
    }

    public function setQuantity( $quantity ){

        $this->quantity = $quantity;
    }

    public function getQuantity() {

        return $this->quantity;
    }

    public function setShipping( $shipping ) {

        $this->shipping = $shipping;
    }

    public function getShipping() {

        return $this->shipping;
    }

    public function setAssocProducts( $assoc_products ){

        $this->assoc_products = $assoc_products;
    }

    public function getAssocProducts() {

        return $this->assoc_products;
    }

    public function setTechnicalDetails( $technical_details ){

        $this->technical_details = $technical_details;
    }

    public function getTechnicalDetails( $i ) {

        return $this->technical_details[$i];
    }

    public function countTechnicalDetails() {

        return count($this->technical_details);
    }

    public function setTechnicalDetails1( $technical_details1 ){

        $this->technical_details1 = $technical_details1;
    }

    public function getTechnicalDetails1() {

        return $this->technical_details1;
    }

    public function setTechnicalDetails2( $technical_details2 ){

        $this->technical_details2 = $technical_details2;
    }

    public function getTechnicalDetails2() {

        return $this->technical_details2;
    }

    public function setTechnicalDetails3( $technical_details3 ){

        $this->technical_details3 = $technical_details3;
    }

    public function getTechnicalDetails3() {

        return $this->technical_details3;
    }

    public function setTechnicalDetails4( $technical_details4 ){

        $this->technical_details4 = $technical_details4;
    }

    public function getTechnicalDetails4() {

        return $this->technical_details4;
    }

    public function setTechnicalDetails5( $technical_details5 ){

        $this->technical_details5 = $technical_details5;
    }

    public function getTechnicalDetails5() {

        return $this->technical_details5;
    }

    public function setTechnicalDetails6( $technical_details6 ){

        $this->technical_details6 = $technical_details6;
    }

    public function getTechnicalDetails6() {

        return $this->technical_details6;
    }

    public function setProductDetails( $product_details ){

        $this->product_details = $product_details;
    }

    public function getProductDetails() {

        return $this->product_details;
    }

    public function setProductPhoto( $product_photo ){

        $this->product_photo = $product_photo;
    }

    public function getProductPhoto() {

        return $this->product_photo[0];
    }

    public function setDifferentialBtwPrice() {

        $this->differential_price = $this->getPriviousPrice() - $this->getPrice();
    }

    public function getDifferentialBtwPrice() {

        return $this->differential_price;
    }

    public function getDifferentialPercent() {

        return intval((($this->previous_price * 100) / $this->price) - 100);
    }

    public function setMinimum( $min ){

        $this->min = $min;
    }

    public function getMinimum() {

        return $this->min;
    }


}
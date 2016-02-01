<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 27.11.2015
 * Time: 18:17
 */

include_once('DefaultModel.php');

class DescriptionModel extends DefaultModel
{
    private $assoc_products;
    private $technical_details;
    private $technical_details1;
    private $technical_details2;
    private $technical_details3;
    private $technical_details4;
    private $technical_details5;
    private $technical_details6;
    private $product_details;
    private $product_photo;

    private $differential_price;
    private $min;

    public function countDescription() {

        return count($this->description);
    }

    public function setAssocProducts( $assoc_products ){

        $this->assoc_products = $assoc_products;
    }

    public function getAssocProducts( $i ) {

        return $this->assoc_products[$i];
    }

    public function countAssocProducts() {

        return count($this->assoc_products);
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

    public function getTechnicalDetails1( $i ) {

        return $this->technical_details1[$i];
    }

    public function countTechnicalDetails1() {

        return count($this->technical_details1);
    }

    public function setTechnicalDetails2( $technical_details2 ){

        $this->technical_details2 = $technical_details2;
    }

    public function getTechnicalDetails2( $i ) {

        return $this->technical_details2[$i];
    }

    public function countTechnicalDetails2() {

        return count($this->technical_details2);
    }

    public function setTechnicalDetails3( $technical_details3 ){

        $this->technical_details3 = $technical_details3;
    }

    public function getTechnicalDetails3( $i ) {

        return $this->technical_details3[$i];
    }

    public function countTechnicalDetails3() {

        return count($this->technical_details3);
    }

    public function setTechnicalDetails4( $technical_details4 ){

        $this->technical_details4 = $technical_details4;
    }

    public function getTechnicalDetails4( $i ) {

        return $this->technical_details4[$i];
    }

    public function countTechnicalDetails4() {

        return count($this->technical_details4);
    }

    public function setTechnicalDetails5( $technical_details5 ){

        $this->technical_details5 = $technical_details5;
    }

    public function getTechnicalDetails5( $i ) {

        return $this->technical_details5[$i];
    }

    public function countTechnicalDetails5() {

        return count($this->technical_details5);
    }

    public function setTechnicalDetails6( $technical_details6 ){

        $this->technical_details6 = $technical_details6;
    }

    public function getTechnicalDetails6( $i ) {

        return $this->technical_details6[$i];
    }

    public function countTechnicalDetails6() {

        return count($this->technical_details6);
    }

    public function setProductDetails( $product_details ){

        $this->product_details = $product_details;
    }

    public function getProductDetails( $i ) {

        return $this->product_details[$i];
    }

    public function countProductDetails() {

        return count($this->product_details);
    }

    public function setProductPhoto( $product_photo ){

        $this->product_photo = $product_photo;
    }

    public function getProductPhoto() {

        return $this->product_photo[0];
    }

    private function setDifferentialBtwPrice() {

        $this->differential_price = $this->getPriviousPrice(0) - $this->getPrice(0);
    }

    public function getDifferentialBtwPrice() {

        $this->setDifferentialBtwPrice();
        return $this->differential_price;
    }

    public function getDifferentialPercent() {

        return intval((($this->previous_price[0] * 100) / $this->price[0]) - 100);
    }

    public function setMinimum( $min ){

        $this->min = $min;
    }

    public function getMinimum() {

        return $this->min;
    }
}
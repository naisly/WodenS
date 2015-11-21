<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 27.10.2015
 * Time: 21:58
 * ==================
 * Getters and Setters
 * ==================
 */
class DefaultModel
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
    public $distinct_categories;

    public $average;
    public $distinct_product_names;
    public $APrice;
    public $AItems;

    public $array;
    public $quantity_of_items;
    /*public $array; */

    public function setProductName ( $product_name ) {

        $this->product_name = $product_name;

    }

    public function getProductName($i) {

        return $this->product_name[$i];

    }

    public function setPhoto( $photo ) {

        $this->photo = $photo;
    }

    public function setOriginalName( $original_name ) {

        $this->original_name = $original_name;
    }

    public function getOriginalName( $i ) {

        return $this->original_name[$i];
    }

    public function getPhoto($i) {

        return $this->photo[$i];
    }

    public function setDescription( $description ) {

        $this->description = $description;
    }

    public function getDescription($i) {

        return $this->description[$i];
    }

    public function setCategory( $category ) {

        $this->category = $category;
    }

    public function getCategory($i) {

        return $this->category[$i];
    }

    public function setPrice( $price ) {

        $this->price = $price;
    }

    public function getPrice($i) {

        return $this->price[$i];
    }

    public function setPreviousPrice( $previous_price ){

        $this->previous_price = $previous_price;
    }

    public function getPriviousPrice($i) {

        return $this->previous_price[$i];
    }

    public function setTimeOfAdding( $time_of_adding) {

        $this->time_of_adding = $time_of_adding;
    }

    public function getTimeOfAdding($i) {

        return $this->time_of_adding[$i];
    }

    public function setFeatures( $features ) {

        $this->features = $features;
    }

    public function getFeatures($i) {

        return $this->features[$i];
    }

    public function setId ( $id ) {

        $this->id = $id;
    }

    public function getId($i) {

        return $this->id[$i];
    }

    public function setQuantity( $quantity ){

        $this->quantity = $quantity;
    }

    public function getQuantity($i) {

        return $this->quantity[$i];
    }

    public function setShipping( $shipping ) {

        $this->shipping = $shipping;
    }

    public function getShipping($i) {

        return $this->shipping[$i];
    }

    public function setAverage( $average ) {

        $this->average = $average;
    }

    public function getAverage($i) {

        return $this->average[$i];
    }

    public function setDistinctCategories( $distinct_categories ) {

        $this->distinct_categories = $distinct_categories;
    }

    public function getDistinctCategories() {

        return $this->distinct_categories;
    }

    public function setDistinctProductNames ( $distinct_product_names ){

        $this->distinct_product_names = $distinct_product_names;
    }

    public function getDistinctProductNames($i) {

        return $this->distinct_product_names[$i];
    }

    public function countDistinctProductNames() {

        return count($this->distinct_product_names);
    }

    public function setProductNamesForShow( $array ){

        $this->array = $array;
    }

    public function getProductNamesForShow() {

        return $this->array;
    }

    public function setProductsForShow( $array ){

        $this->array = $array;
    }

    public function getProductsForShow() {

        echo $this->array;
    }

    public function setAPrice ( $APrice ){

        $this->APrice = $APrice;
    }

    public function getAPrice() {

        return $this->APrice;
    }

    public function setAItems( $AItems ) {

        $this->AItems = $AItems;
    }

    public function getAItems() {

        return $this->AItems;
    }

    public function setQuantityOfItems( $quantity_of_items ){

        $this->quantity_of_items = $quantity_of_items;
    }

    public function getQuantityOfItems( $i ) {

        return $this->quantity_of_items[$i];
    }

    public function setCountOfItems() {

        return count($this->quantity_of_items);
    }
}
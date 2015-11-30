<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 29.11.2015
 * Time: 19:00
 */

include_once('ProfileModel.php');

class AccountOrderModel extends ProfileModel
{

    private $product_item;
    private $quantity_item;
    private $price_item;
    private $category_item;

    private $items_order;

    private $countItems;
    private $countDoneItems;
    private $photo_items;
    private $product_name_items;
    private $product_table_items;
    private $id_items;

    public function setProductItem( $product_item ){

        $this->product_item = $product_item;
    }

    public function getProductItem($i, $k){

        return $this->product_item[$i][$k];
    }

    public function countProductItem() {

        return count($this->product_item);
    }

    public function countProductItemIteration( $i ){

        return count($this->product_item[$i]);
    }

    public function setCategoryItem( $category_item ){

        $this->category_item = $category_item;
    }

    public function getCategoryItem($i, $k){

        return $this->category_item[$i][$k];
    }

    public function setQuantityItem( $quantity_item ){

        $this->quantity_item = $quantity_item;
    }

    public function getQuantityItem($i, $k){

        return $this->quantity_item[$i][$k];
    }

    public function setPriceItem( $price_item ){

        $this->price_item = $price_item;
    }

    public function getPriceItem($i, $k){

        return $this->price_item[$i][$k];
    }

    public function setItemsOrder( $items_order ){

        $this->items_order = $items_order;
    }

    public function getItemsOrder( $i ){

        return $this->items_order[$i];
    }

    public function countItemsOrder() {

        return count($this->items_order);
    }

    public function setCountItems( $countItems ){

        $this->countItems = $countItems;
    }

    public function getCountItems() {

        return $this->countItems;
    }

    public function setCountDoneItems( $countDoneItems ){

        $this->countDoneItems = $countDoneItems;
    }

    public function getCountDoneItems() {

        return $this->countDoneItems[0];
    }

    public function setPhotoItems( $photo_items ){

        $this->photo_items = $photo_items;
    }

    public function getPhotoItems( $i, $k ){

        return $this->photo_items[$i][$k];
    }

    public function countPhotoItems() {

        return count($this->photo_items);
    }

    public function setProductNameItems( $product_name_items ){

        $this->product_name_items = $product_name_items;
    }

    public function getProductNameItems( $i, $k){

        return $this->product_name_items[$i][$k];
    }

    public function setProductTableItems( $product_table_items ){

        $this->product_table_items = $product_table_items;
    }

    public function getProductTableItems( $i, $k ){

        return $this->product_table_items[$i][$k];
    }

    public function setIdItems( $id_items ){

        $this->id_items = $id_items;
    }

    public function getIdItems( $i, $k){

        return $this->id_items[$i][$k];
    }
}
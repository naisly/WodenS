<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 09.11.2015
 * Time: 19:28
 *
 * ==================
 * Getters and Setters
 * ==================
 */

include_once('DefaultModel.php');

class AdminModel extends DefaultModel
{

    public $items;

    public function getOneProductName() {

        return $this->product_name;

    }

    public function getOnePhoto() {

        return $this->photo;

    }

    public function getOneDescription() {

        return $this->description;

    }

    public function getOneCategory() {

        return $this->category;

    }

    public function getOnePrice() {

        return $this->price;

    }

    public function getOnePreviousPrice() {

        return $this->previous_price;

    }

    public function getOneTimeOfAdding() {

        return $this->time_of_adding;

    }

    public function getOneFeature() {

        return $this->features;

    }

    public function getOneId() {

        return $this->id;

    }

    public function getOneQuantity() {

        return $this->quantity;

    }

    public function getOneShipping() {

        return $this->shipping;

    }


    public function getOneAverage() {

        return $this->average;

    }

    public function setItems( $items ) {

        $this->items = $items;
    }

    public function getItems() {

        return $this->items;
    }
}
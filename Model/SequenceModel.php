<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 27.11.2015
 * Time: 18:22
 */

include_once('SortModel.php');

class SequenceModel extends SortModel
{

    private $sequence_id;
    private $sequence_original_name;
    private $sequence_price;
    private $sequence_previous_price;
    private $sequence_quantity;
    private $sequence_photo;

    public function setSequenceId ( $sequence_id ) {

        $this->sequence_id = $sequence_id;
    }

    public function getSequenceId() {

        return $this->sequence_id;
    }

    public function setSequenceOriginalName ( $sequence_original_name ) {

        $this->sequence_original_name = $sequence_original_name;
    }

    public function getSequenceOriginalName() {

        return $this->sequence_original_name;
    }

    public function setSequencePrice ( $sequence_price ) {

        $this->sequence_price = $sequence_price;
    }

    public function getSequencePrice() {

        return $this->sequence_price;
    }

    public function setSequencePreviousPrice ( $sequence_previous_price ){

        $this->sequence_previous_price = $sequence_previous_price;
    }

    public function getSequencePreviousPrice() {

        return $this->sequence_previous_price;
    }

    public function setSequenceQuantity ( $sequence_quantity ) {

        $this->sequence_quantity = $sequence_quantity;
    }

    public function getSequenceQuantity() {

        return $this->sequence_quantity;
    }

    public function setSequencePhoto( $sequence_photo ) {

        $this->sequence_photo = $sequence_photo;
    }

    public function getSequencePhoto() {

        return $this->sequence_photo;
    }
}
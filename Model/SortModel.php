<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 27.11.2015
 * Time: 18:20
 */

include_once('DescriptionModel.php');

class SortModel extends DescriptionModel
{

    private $sort_id;
    private $sort_price;
    private $sort_product_names;
    private $sort_category;
    private $sort_photo;

    public function setSortId( $sort_id ){

        $this->sort_id = $sort_id;
    }

    public function getSortId( $i ){

        return $this->sort_id[$i];
    }

    public function setSortPrice( $sort_price ){

        $this->sort_price = $sort_price;
    }

    public function getSortPrice( $i ) {

        return $this->sort_price[$i];
    }

    public function countSortPrice() {

        return count($this->sort_price);
    }

    public function setSortProductNames( $sort_product_names ){

        $this->sort_product_names = $sort_product_names;
    }

    public function getSortProductNames( $i ){

        return $this->sort_product_names[$i];
    }

    public function setSortCategory( $sort_category ){

        $this->sort_category = $sort_category;
    }

    public function getSortCategory( $i ){

        return $this->sort_category[$i];
    }

    public function setSortPhoto( $sort_photo ){

        $this->sort_photo = $sort_photo;
    }

    public function getSortPhoto( $i ){

        return $this->sort_photo[$i];
    }
}
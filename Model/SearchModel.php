<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 18.01.2016
 * Time: 20:33
 */

include_once('DefaultModel.php');

class SearchModel extends DefaultModel
{
    public $title;
    public $url;
    public $description;
    public $count_results;

    public function setTitle( $title ) {

        $this->title = $title;
    }

    public function getTitle( $i ){

        return $this->title[$i];
    }

    public function setUrl( $url ) {

        $this->url = $url;
    }

    public function getUrl( $i ) {

        return $this->url[$i];
    }

    public function setDescription( $description ) {

        $this->description = $description;
    }

    public function getDescription( $i ) {

        return $this->description[$i];
    }
}
<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 27.10.2015
 * Time: 21:58
 */
class DefaultModel
{
    public $category;
    /*
    public $text;


    public function __construct() {

        $this->text = 'Hello world!';

    }
    */

    public function setCategory( $category ) {

        $this->category = $category;

    }

    public function getCategory () {

        echo $this->category;

    }
}
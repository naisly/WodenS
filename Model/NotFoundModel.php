<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 01.12.2015
 * Time: 0:17
 */

include_once('DefaultModel.php');

class NotFoundModel extends DefaultModel
{
    private $not_found;
    private $no_complete_order;
    private $no_done_order;

    public function setNotFound( $not_found ){

        $this->not_found = $not_found;
    }

    public function getNotFound() {

        return $this->not_found;
    }

    public function setNoCompleteOrder( $no_complete_order ){

        $this->no_complete_order = $no_complete_order;
    }

    public function getNoCompleteOrder() {

        return $this->no_complete_order;
    }

    public function setNoDoneOrder( $no_done_order ){

        $this->no_done_order = $no_done_order;
    }

    public function getNoDoneOrder() {

        return $this->no_done_order;
    }
}
<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 15.11.2015
 * Time: 0:28
 * ==================
 * Getters and Setters
 * ==================
 */

include_once('DefaultModel.php');

class SupportModel extends DefaultModel {

    public $name;
    public $email;
    public $subject;
    public $message;

    /*private function setSupportId ( $id ){

        $this->id = $id;
    }

    private function getSupportId( $i ) {

        echo $this->id[$i];
    }*/

    public function getAllId() {

        return $this->id;
    }

    public function setName( $name ){

        $this->name = $name;
    }

    public function getName( $i ){

        return $this->name[$i];
    }

    public function setEmail( $email ){

        $this->email = $email;
    }

    public function getEmail( $i ){

        return $this->email[$i];
    }

    public function setSubject( $subject ){

        $this->subject = $subject;
    }

    public function getSubject( $i ){

        return $this->subject[$i];
    }

    public function setMessage( $message ){

        $this->message = $message;
    }

    public function getMessage( $i ){

        return $this->message[$i];
    }
    public function countItems() {

        return $this->countItems = count($this->getAllId());
    }
}
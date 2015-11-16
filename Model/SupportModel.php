<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 15.11.2015
 * Time: 0:28
 */

include_once('Model.php');

class SupportModel extends Model {

    public $name;
    public $email;
    public $subject;
    public $message;

    /*public function setId( $id ){

        $this->id = $id;
    }

    public function getId( $i ) {

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
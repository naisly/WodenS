<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 05.11.2015
 * Time: 22:32
 */
class LoginModel
{
    public $name;
    public $email;
    public $email_again;
    public $password;
    public $password_again;

    public $quantity;
    public $price;
    public $photo;

    public $APrice;
    public $AItems;

    public function setName ( $name ){

        $this->name = $name;
    }

    public function getName() {

        return $this->name;
    }

    public function setEmail( $email ) {

        $this->email = $email;
    }

    public function getEmail() {

        return $this->email;
    }

    public function setEmailAgain( $email_again ){

        $this->email_again = $email_again;
    }

    public function getEmailAgain() {

        return $this->email_again;
    }

    public function setPassword ( $password ){

        $this->password = $password;
    }

    public function getPassword() {

        return $this->password;
    }

    public function setPasswordAgain( $password_again ){

        $this->password_again = $password_again;
    }

    public function getPasswordAgain() {

        return $this->password_again;
    }

    public function setQuantity ( $quantity ) {

        $this->quantity = $quantity;
    }

    public function getQuantity() {

        return $this->quantity;
    }

    public function setPrice ( $price ) {

        $this->price = $price;
    }

    public function getPrice() {

        return $this->price;
    }

    public function setPhoto ( $photo ) {

        $this->photo = $photo;
    }

    public function getPhoto() {

        return $this->photo;
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
}
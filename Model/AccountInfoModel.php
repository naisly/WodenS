<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 02.12.2015
 * Time: 22:43
 */

include_once('AccountOrderModel.php');

class AccountInfoModel extends AccountOrderModel
{
    private $account_name;
    private $account_street;
    private $account_city;
    private $account_state;
    private $account_zip;
    private $account_country;

    private $account_gift;

    public function setAccountName( $account_name ){

        $this->account_name = $account_name;
    }

    public function getAccountName( $i ){

        return $this->account_name[$i];
    }

    public function setAccountStreet( $account_street ){

        $this->account_street = $account_street;
    }

    public function getAccountStreet( $i ){

        return $this->account_street[$i];
    }

    public function setAccountCity( $account_city ){

        $this->account_city = $account_city;
    }

    public function getAccountCity( $i ){

        return $this->account_city[$i];
    }

    public function setAccountState( $account_state ){

        $this->account_state = $account_state;
    }

    public function getAccountState( $i ){

        return $this->account_state[$i];
    }

    public function setAccountZip( $account_zip ){

        $this->account_zip = $account_zip;
    }

    public function getAccountZip( $i ){

        return $this->account_zip[$i];
    }

    public function setAccountCountry( $account_country ){

        $this->account_country = $account_country;
    }

    public function getAccountCountry( $i ){

        return $this->account_country[$i];
    }

    public function setAccountGift( $account_gift ){

        $this->account_gift = $account_gift;
    }

    public function getAccountGift( $i ){

        return $this->account_gift[$i];
    }
}
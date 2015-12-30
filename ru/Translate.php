<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 23.12.2015
 * Time: 22:46
 */
class Translate
{

    static public function t( $text ){
        if(!isset($_SESSION['language'])){
            $_SESSION['language'] = 'en';
        }

        include_once('/Languages/lang.' . $_SESSION['language'] . '.php');

        return $lang[$text];
    }
}

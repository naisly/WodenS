<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 24.12.2015
 * Time: 19:25
 */

class ChangeLanguage {

    public function ChangeLanguage() {

        $language = $_POST['checked-language'];

        $_SESSION['language'] = $language;

        session_start();

        header("Location: /shop/");
    }
}
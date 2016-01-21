<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 07.11.2015
 * Time: 22:38
 */

session_start();

session_destroy();

if($_SESSION['language'] !== 'us') {
    header('Location: /' . $_SESSION['language'] . '/logout');
} else {
    header('Location: /logout');
}

session_write_close();
<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 27.10.2015
 * Time: 23:47
 */

/*      $db = Storage::getInstance();
 *      $mysqli = $db->getConnection();
 *      $sql_query = "SELECT foo FROM .....";
 *      $result = $mysqli->query($sql_query);
 */

include_once('Mutex.php');

class Storage
{
    private $_connection;
    private static $_instance; //The single instance

    private $_host = "localhost";
    private $_username = "root";
    private $_password = "";
    private $_database = "shop";

    /*
	Get an instance of the Database
	@return Instance
	*/
    public static function getInstance() {
        $mutex = new Mutex( 'Storage.php' );

        if($mutex->isLocked() == false){

            $mutex->getLock();

            if (!self::$_instance) {
                self::$_instance = new self();
            }

            $mutex->releaseLock();
        }

        return self::$_instance;
    }

    // Constructor
    private function __construct() {
        $this->_connection = new mysqli($this->_host, $this->_username,
            $this->_password, $this->_database);

        // Error handling
        if(mysqli_connect_error()) {
            trigger_error("Failed to conencto to MySQL: " . mysqli_connect_errno(),
                E_USER_ERROR);
        }
    }

    // Magic method clone is empty to prevent duplication of connection
    private function __clone() { }

    // Get mysqli connection
    public function getConnection() {
        return $this->_connection;
    }
}
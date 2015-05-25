<?php

/**
 * Database operations
 *
 * @category   Musikparadies
 * @package    Wunschbox
 * @author     Anna Völkl <anna@voelkl.at>
 * @copyright  2015 Anna Völkl
 * @version    0.1
 * @since      Class available since Release 1.2.0
 */

class Db {
    private $_mysqlHost;
    private $_mysqlUser;
    private $_mysqlPassword;
    private $_mysqlDb;

    function __construct() {
        $dbConfig = file_get_contents(__DIR__ . '/../config/database.json');
        $config = json_decode($dbConfig);
        $this->_mysqlHost       = $config->database->host;
        $this->_mysqlUser       = $config->database->user;
        $this->_mysqlPassword   = $config->database->password;
        $this->_mysqlDb         = $config->database->database;

    }

    public function connect() {
        $link = mysql_connect($this->_mysqlHost, $this->_mysqlUser, $this->_mysqlPassword);
        if (!$link) {
            //todo: error message
            return false;
        }
        mysql_select_db($this->_mysqlDb);
        return true;
    }

    public function save() {

    }

    //todo: close connection
}

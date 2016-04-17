<?php

class DataBase
{
    private static $_singleton;
    private $_connection;
    private $dns = 'mysql:host=localhost;dbname=test';

    private function __construct()
    {
        $this->_connection = new PDO($this->dns);
        $this->_connection->setAttribute(PDO::ATTR_EMULATE_PREPARES, TRUE);
        $this->_connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public static function getInstance()
    {
        if (is_null(self::$_singleton)) {
            self::$_singleton = new DataBase();
        }
        return self::$_singleton;
    }
}
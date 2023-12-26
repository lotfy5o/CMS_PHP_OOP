<?php

// creating a singelton
// final so no one will inherite from
final class DatabaseConnection {
    // contain the class instance or the object instance
    private static $instance = null;
    // the connection => localhost, username, pass, dbname
    private static $connection;

    public static function getInstance() {
        // checks if the $instance has ever been created
        if (is_null(self::$instance)){
            // this class wil never be initialized as an object
            self::$instance = new DatabaseConnection();
        }
        return self::$instance;
    }

    private function __construct(){}
    
    private function __clone(){}
    // private function __wakeup(){}

    public static function connect ($host, $dbName, $user, $password){
        self::$connection = new PDO("mysql:dbname=$dbName; host=$host", $user, $password);
    }

    public static function getConnection() {
        return self::$connection;
    }
}
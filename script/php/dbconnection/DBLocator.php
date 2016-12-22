<?php

/**
 * Class used to get the connection to the database.
 */
class DBLocator {
    var $user;
    var $password;
    var $host;
    var $db;
    
    function __construct() {
        $this->user = 'chef_admin';
        $this->password = 'chefbastiano';
        $this->host = '160.80.216.233';
        $this->db = 'chefcalculator';
    }
    
    /**
     * Returns the connection to the database.
     */
    function getConnection() {
        $connection = null;
        
        try {
            $connection = new PDO("mysql:host=$this->host;dbname=$this->db", $this->user, $this->password);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        
        return $connection;
    }
}
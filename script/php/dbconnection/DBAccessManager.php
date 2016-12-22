<?php
include('DBLocator.php');

/**
 * Class implementing the DB Access Manager pattern. It has two functions for the
 * select and the update.
 */
class DBAccessManager {
    var $dbLocator;
    var $connection;
    
    function __construct() {
        $this->dbLocator = new DBLocator();
        $this->connection = $this->dbLocator->getConnection();
    }
    
    /**
     * Given an associative array and a (prepared statement) query, this method 
     * executes the select query and returns the result as a JSON.
     *
     * Example of $paramenters and $query values:
     *  $parameters = array('nome' => 'Pasta');
     *  $query = 'select * from ingredienti where nome = :nome';
     */
    function select($parameters, $query) {
        $result = array();
        
        try {
            
            $stmt = $this->connection->prepare($query);

  /*          foreach ($parameters as $key => $value) {
                $stmt->bindParam(':' . $key, $value);
            }*/

            $stmt->execute($parameters);
            
            $result = $stmt->fetchAll();

        } catch (Exception $e) {
            echo $e->getMessage();
        }
        
        //var_dump($result);
        
        return json_encode($result);
    }
    
    function insert($parameters, $query) {
        $stmt = $this->connection->prepare($query);
        
        try {
            
            $stmt = $this->connection->prepare($query);

/*            foreach ($parameters as $key => $value) {
                $stmt->bindParam(':' . $key, $value);
            }*/

            $stmt->execute($parameters);

        } 
        
        catch (Exception $e) {
            echo $e->getMessage();
        }
        
    }
    
}

// $parameters = array();
// $query = 'select * from ingredienti';
// $parameters = array('nome' => 'Sperma');
// $query = 'select * from ingredienti where nome = :nome';

/*
ESEMPIO
$parameters = array('nome' => 'Sperma', 'id' => '1');
$query = 'select * from ingredienti where nome = :nome and id = :id';
 $parameters = array('nome' => 'Sperma');
 $query = 'select * from ingredienti where nome = :nome';
 //$parameters = array('nome' => 'Sperma', 'id' => '1');
 //$query = 'select * from ingredienti where nome = :nome and id = :id';
$dbAM = new DBAccessManager();
$result = $dbAM->select($parameters, $query);
var_dump($result);
*/
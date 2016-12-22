<?php
include 'dbconnection/DBAccessManager.php';

$parameters = array('username' => 'ale');
$query = 'insert into utente (username) values(:username)';
$dbAM = new DBAccessManager();
$dbAM->insert($parameters, $query);
    
?>
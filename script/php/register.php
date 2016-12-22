<?php
require 'dbconnection/DBAccessManager.php';
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

$parameters = array('username' => $username, 'password' => hash('sha512', $password), 'email' => $email);

$query = 'insert into utente (id, username, password, email) values(\N, :username, :password, :email)';
$dbAM = new DBAccessManager();
$dbAM->insert($parameters, $query);
?>
<?php


require 'dbconnection/DBAccessManager.php';
$username = $_POST['username'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm-password'];
$email = $_POST['email'];

if($password != $confirm_password)
    header('Location: ../../error.php');

else {
$parameters = array('username' => $username, 'password' => hash('sha512', $password), 'email' => $email);

$query = 'insert into utente (id, username, password, email) values(\N, :username, :password, :email)';
$dbAM = new DBAccessManager();
$dbAM->insert($parameters, $query);

$newURL = "/chefcost";
header('Location: '.$newURL);
}

?>
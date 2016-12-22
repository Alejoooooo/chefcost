<?php
include 'dbconnection/DBAccessManager.php';

$username = $_POST['username'];
$password = hash('sha512', $_POST['password']);
$query = "select * from utente where username = :username and password = :password";

$db = new DBAccessManager();
$result = $db->select(array('username' => $username, 'password' => $password), $query);
$risultati = json_decode($result, true);
if(count($risultati) == 1 && $username == $risultati[0]['username'] && $password == $risultati[0]['password']){
    /*echo "utente presente nel db";*/
    session_start();
    $_SESSION['username'] = $username;
    var_dump($_SESSION['username']);
}
else
    echo "utente non presente";

$newURL = "/chefcalculator2";
header('Location: '.$newURL);

?>

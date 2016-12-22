<?php
    session_start();
    session_destroy();
    $newURL = "/chefcalculator2";
header('Location: '.$newURL);
?>
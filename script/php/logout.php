<?php
    session_start();
    session_destroy();
    $newURL = "/chefcost";
header('Location: '.$newURL);
?>
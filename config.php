<?php

$host       = "localhost"; 
$username   = "root"; 
$pass       = ""; 
$db         = "bless_profile"; 
$conn    = mysqli_connect($host, $username, $pass, $db); 

if (!$conn) {
    die("Not connected: " . mysqli_connect_error());
}

?>
<?php

$servername = "localhost";
$user = "root";
$pass = "";
$databasename = "sign-up";

if($conn->connect_error)
{
    die('Connection Failed : '. $conn->connect_error);
}else{
    echo "<h1> Connected! </h1>";
}
?>
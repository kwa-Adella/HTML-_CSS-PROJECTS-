
<?php
 
$servername = "localhost";
$username = "root";
$password = "";
$databasename = "details";

$con = new mysqli($servername, $username, $password, $databasename);
if(!$con){
    echo "<h1> Connection failed </h1>";
}else{
    echo "connected";
}




?>
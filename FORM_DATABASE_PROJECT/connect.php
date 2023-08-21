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
/* // definding the data parameter that has to be collected from the form we created into the database
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$adress = $_POST['adress'];
$telephone = $_POST['telephone'];
$password= $_POST['password'];

// connecting to the database but we need to create the data base since we have just the form
$conn = new mysqli('localhost','root','','sign-up');

else
{
    $stmt = $conn->prepare("insert into registration(firstName,lastName,adress,telephone,password)
                values(?,?,?,?,?)") ;
                          $stmt->blind_param("sssis",$firstName,$lastName,$adress,$telephone,$password );
                          $stmt->exercute();
                          echo " registration complte\successfull.....";          
                          $stmt->close();
                          $conn->close(); 



}
 */
?>





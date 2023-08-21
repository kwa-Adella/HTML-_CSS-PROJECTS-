<?php

include "connect.php";

if(isset($_POST['submit']))
{
  $E_MAIL = $_POST['e_mail'];
  $PASSWORD = $_POST['password'];

    if($E_MAIL && $PASSWORD){

        $PASSWORD = md5($PASSWORD);
        $select = "SELECT * FROM sign_up where E_MAIL = '$E_MAIL'";

        $query = $con->query($select);

        if($query->num_rows == 1){
                    
            $query_results = $query->fetch_assoc();

            $DB_PASSWORD = $query_results['PASSWORD'];
            if($PASSWORD == $DB_PASSWORD )
             {  

                $PASSWORD = md5($PASSWORD);
                    header("location:home1.html");
            }
             else
            {
                echo "Passwords do not match!";
            }
        }else if($query->num_rows < 1){
            echo "No account found! Please sign up";
        }else if($query->num_rows > 1){
            echo "Account with this email already exist!";
        }

    }else{
        echo " please enter all fields";
    }
}


?>
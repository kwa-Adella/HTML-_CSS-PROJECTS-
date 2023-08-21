<?php

include 'connect.php';

 
if(isset($_POST["submit"]))
{

    // echo "Wha tis it";
    $FIRSTNAME = $_POST['FirstName'];
    $LASTNAME = $_POST['LastName'];
    $ADDRES = $_POST['Address'];
    $E_MAIL = $_POST['E-Mail'];
    $TELEPHONE = $_POST['Telephone'];
    $PASSWORD = $_POST['Password'];
    $C_PASSWORD = $_POST['ConPass'];

    
    if($FIRSTNAME && $LASTNAME && $ADDRES && $E_MAIL  && $TELEPHONE && $PASSWORD && $C_PASSWORD)
    {
        if($PASSWORD == $C_PASSWORD  && strlen($PASSWORD) >= 8)
        {
            $PASSWORD = md5($PASSWORD); 
            $insert = "INSERT INTO sign_up(FIRSTNAME,LASTNAME,ADRESS,E_MAIL,TELEPHONE,PASSWORD) VALUES('$FIRSTNAME', '$LASTNAME', '$ADDRES', '$E_MAIL', '$TELEPHONE', '$PASSWORD')";
            $insert_query = $con->query($insert);

            if(!$insert_query){
                echo "Account not registered";
            }
            else
            {
                echo "Registered successfully";
            }
            
        }
        else
        {
            echo "Passwords Dont Match Or Less than 8 Characters";
        }
    }
    else
    {
        echo "please enter all the fields";
    }
}


?>
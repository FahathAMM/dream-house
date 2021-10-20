
<?php

    $localhost = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "house";

    $conn = new mysqli ($localhost,$dbusername,$dbpassword,$dbname);
    
    if($conn->connect_error)
    {
        die ("connection failed".$conn->connect_error);
    }
    
    
    
?>
 
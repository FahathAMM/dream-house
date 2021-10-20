<?php 

 
            include('../connect.php');
            $aresult = $db->prepare("SELECT * FROM admin WHERE AID = '" .$_SESSION['id']."'");
            $aresult->execute();
            $row = $aresult->fetch();
       
        
 
?>
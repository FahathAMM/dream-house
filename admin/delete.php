<?php 

include('city.php'); 
include('district.php'); 
include('../connect.php');


   
        //  $delete = new city;
        //  $id = $_REQUEST['delid'];
        //  $delete->delete($id);
            
 
     //city delete
    if( isset( $_REQUEST['delid']))
    {
        $delete = new city;
        $id = $_REQUEST['delid'];
        $del = $delete->delete($id);
       
    }
    //distritct delete
    elseif(isset( $_REQUEST['disdelid']))
    { 
        $disdel = new district();
        $disdelid = $_REQUEST['disdelid'];
        $disdel = $disdel->deletedis($disdelid);
    }
    //new houwse delete
    elseif(isset( $_REQUEST['houseid'])) 
    { 

        $houseid = $_REQUEST['houseid'];

        $sql = "DELETE FROM housedet WHERE houseid='$houseid'";
        $db->exec($sql);
        ?>
        <script> 
        alert('Success Delete'); 
        window.location = "newhouse.php";
        </script>

          <?php
    
    }

    elseif(isset( $_REQUEST['exhouseid'])) 
    { 

        $exhouseid = $_REQUEST['exhouseid'];

        $sql = "DELETE FROM housedet WHERE houseid='$exhouseid'";
        $db->exec($sql);
        ?>
        <script> 
        alert('Success Delete'); 
        window.location = "exhouse.php";
        </script>

          <?php
    
    }

    elseif(isset( $_REQUEST['clientid'])) 
    { 

        $clientid = $_REQUEST['clientid'];

        $sql = "DELETE FROM client WHERE clientid='$clientid'";
        $db->exec($sql);
        ?>
        <script> 
        alert('Success Delete'); 
        window.location = "newclient.php";
        </script>

          <?php
    
    }

    elseif(isset( $_REQUEST['mid'])) 
    { 

        $mid = $_REQUEST['mid'];

        $sql = "DELETE FROM message WHERE MID='$mid'";
        $db->exec($sql);
        ?>
        <script> 
        alert('Success Delete'); 
        window.location = "message.php";
        </script>

          <?php
    
    }
    
?>
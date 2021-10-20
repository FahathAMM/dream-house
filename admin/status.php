<?php 

include('../connect.php');


        $HouseId = $_GET['houseid'];


        $active = "UPDATE `housedet` SET `status`='active' WHERE houseid ='$HouseId'";    
                    
        $stm = $db->prepare($active);
        $stm->execute();

    ?>

    <script>
        alert('Success Active');        
        window.location = 'newhouse.php';
    </script>
 
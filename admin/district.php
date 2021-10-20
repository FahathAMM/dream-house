<?php 

    class district
    {
        public function insertdis()
        {
            include('../connect.php');
               
            try {
                if(isset($_POST['save']))
                {
                    $did = $_POST['did'];
                     $_POST['dname'] =  ucwords( $_POST['dname']); //upper;
                     $dname = $_POST['dname'];
            
                    

                    $sql1 = "INSERT INTO `districts`(`DCode`, `DName`) VALUES ('$did',' $dname')";
                    $db->exec($sql1);
                 

                    echo "<script> alert('Success Add'); </script>";
                     
                    
                }
            } catch (PDOException $e) 
            {
               // echo $sql1."<br>".$e->getMessage(); refresh error message show 
               echo "<script> alert('Add Data'); </script>";
            }
            
            

        }

        public function deletedis($disdelid)
        {
            include('../connect.php');
            $sql = "DELETE FROM districts WHERE Dcode='$disdelid'";
            $db->exec($sql);
            ?>
            <script> 
            alert('Success Delete'); 
            window.location = "addistrict.php";
            </script>

              <?php
        
        }
    }


?>
<?php 
 
    class asc
       {


             public function ses()
         {

                include('../connect.php');
                try {
                    session_start();

                    if (isset($_POST['sign'])) {
                        $user = $_POST['username'];
                        $pass = $_POST['pass'];
                
                
                        $sql = $db->prepare("SELECT * FROM admin WHERE User ='$user' and Password = '$pass' ");
                        $sql->execute();

                                
                        if ($row = $sql->fetch()) {
                            $_SESSION['id'] = $row['AID']; ?>


                                    <script>       
                                    alert('Success Login')
                                    window.location = "dashbord.php"; 
                                    </script>
                                    
                                <?php
                        } else {
                            echo "<script> alert ('Invalid Username Password')</script>";
                            echo "<script> 	window.location = 'adminlogin.php'</script>";
                        }
                    }
                } catch (\PDOException $e) 
                {
                    echo $sql."<br>".$e->getMessage();
                }

      }
    
        
    
    } 
	?>
                      

                        
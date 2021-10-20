        
        <?php 


        class city
        {
            public function delete($id)
            {
                include('../connect.php');
               
                
                $sql = "DELETE FROM city WHERE CID ='$id'";
                $db->exec($sql); ?>
    
                <script> 
                alert('Success Delete'); 
                window.location = "addcity.php";
                </script>
                  <?php
            }
            public function add()
            {  include('../connect.php');
                try { 
                    if(isset($_POST['save']))
                    {
                        $sql2 = $db->prepare("SELECT * FROM city order by CID desc ");
                        $sql2->execute();

                        if ($row = $sql2->fetch()) 
                        {
                            $no=$row['No'];
                            $no++;
                        }
                        else
                        {
                            $no=1;
                        }
                         $cid = $_POST['cid'];
                         $_POST['cname'] =  ucwords( $_POST['cname']); //upper;
                         $cname = $_POST['cname'];
                        
                        

                        $sql1 = "INSERT INTO `city`(`No`,`CID`,`CityName`) VALUES ('$no','$cid','$cname')";
                        $db->exec($sql1);
                     

                        echo "<script> alert('Success Add'); </script>";
                         
                        
                    }
                } catch (PDOException $e) 
                {
                    echo $sql1."<br>".$e->getMessage();
                }
                
            }

            public function tview()
            {
               
                include('../connect.php');
                $data = null;
                $result = $db->prepare("SELECT * FROM city order by No desc ");
                if( $result->execute())
                {
                   
                    while(  $row = $result->fetch())
                    {
                       
                         $data[]=$row;
                         
          
                    }	
                 
                }
                return $data; // here $data use for only return for another page passing row values passing here $data dont care just return use;
               
            }
          
    }

    
   
      
            
 ?>




 
       
         
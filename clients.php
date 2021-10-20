<?php 

    class client
    {
    
            public function clients()
            {   include('connect.php');
                session_start();

                if(!isset ($_SESSION['id']) || (trim($_SESSION['id']) == '')) //trim mean.....................
                {
                ?>

                      <script>
                      alert("Please Login");
                      window.location = "Login.php";
                      </script>
                      <?php  
                      }
                 }
            
            //only index for without login show datas
            public function index()
                {  
                     include('connect.php');
                     session_start();
            
                    if(!isset ($_SESSION['id']) || (trim($_SESSION['id']) == '')) //trim mean.....................
                    {
                    ?>

                        <script>
                        window.location = "indexnotlg.php";
                        </script>
                        <?php  
                        }
                    }

                
  
    public function register()
    {
        try 
        {
          include('connect.php');
          if (isset($_POST['save']))
          {

            $sql = $db->prepare("SELECT * FROM client order by Numbers desc ");
            $sql->execute();
           
            if ($row = $sql->fetch()) 
                  {
                    $no=$row['Numbers'];
                    $cno = substr($row['clientid'],3, strlen($row['clientid']));   // number 3 is delete string letters or "CLN" 3 letters delete aahum
                    $cno++;
                    $cno ="CLN".$cno;  // 3 letters delte aanathuku apram defalut "CLN" Add pnrathu
                    $no++;
                  } 
                  else 
                    {
                      $no=1;
                      $cno = "CLN100";

                    }

             move_uploaded_file($_FILES["image"]["tmp_name"], "images/" . $_FILES["image"]["name"]);
             $location=$_FILES["image"]["name"];

 
             $clientname=$_POST['name'];
             $clientemail=$_POST['email'];
             $clientpassword=$_POST['pass'];
             $clientaddress=$_POST['address'];
             $clientMnumber=$_POST['Mnumber'];
             $clientdate=$_POST['date'];             
             $clientTNumber=$_POST['Tnumber'];
             $clientdistric=$_POST['distric'];
             $clientcity=$_POST['city'];
             $clientzip=$_POST['zip'];
            
             $sql ="INSERT INTO client(Numbers,clientid,Name,Password,Email,Address,Mnumber,Tnumber,District,city,Zip,Date,Imglocation) values ('$no','$cno','$clientname','$clientpassword','$clientemail','$clientaddress','$clientMnumber','$clientTNumber','$clientdistric','$clientcity','$clientzip','$clientdate','$location')";

             $db->exec($sql);
           
                 echo "<script> alert ('Success Register');</script>";
                 
         }
                


                  // Normal Method
                  //if (mysqli_query($conn,$sql)) 
                 // {
                  //     echo "<script> alert ('Success Register');</script>";
                  // } else {
                  //     echo "error   ".$sql."<br>".mysqli_error($conn)."<br>";
                  // }
            

        } 
        catch (PDOException $e) 
            {
              echo $sql."<br>".$e->getMessage();
            }

    }
    public function cview()
    {
          include('connect.php'); 
          $sql  = $db->prepare("SELECT * FROM client order by Numbers desc ");
          $sql->execute();

          while($row=$sql->fetch())
          {
            $data[]= $row;
          }
          return $data;
    }

}
?>
<!DOCTYPE html>
<?php include('../connect.php') ?>
<html lang="en">


<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Au Register Forms by Colorlib</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="signup/css/main.css" rel="stylesheet" media="all">
  
</head>

<body >
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50" style="background-color:#866ec7
    ;">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Event Registration Form</h2>
                </div>
                <div class="card-body">
                    <form method="POST"  enctype="multipart/form-data">
                    <div class="form-row">

                <?php  
                    try 
                        {
                                
                            if(isset($_POST['save']))
                            {
                            
                            move_uploaded_file($_FILES['img']['tmp_name'],'image' . $_FILES['img']['name']);
                                $img = $_FILES['img']['name'];
                                $aid = $_POST['AID'];
                                $fname = $_POST['fname'];
                                $lname = $_POST['lname'];
                                $user = $_POST['user'];
                                $pass = $_POST['pass'];
                                $email = $_POST['email'];
                                $address = $_POST['address'];
                                
                                $sql = "INSERT INTO admin (`AID`, `FName`, `LName`, `User`, `Password`, `Email`, `Address`,`Image`) VALUES ('$aid','$fname','$lname','$user','$pass','$email','$address','$img')";
                                $db->exec($sql);
                                
                                echo "<script> alert ('Success Register');</script>";

                                    }
         
                                 }
                                  catch (PDOException $e)
                                  {
                                     echo $sql."<br>".$e->getMessage();
                                  }





                              $sql1 = $db -> prepare("SELECT * FROM Admin order by No desc ");
                              $sql1->execute();
  
                              if($row = $sql1->fetch())
                              {
  
                                $aid =  substr( $row['AID'],3 , strlen($row['AID']) ) ;
                                $aid++;
                                $aid = "AID".$aid;
  
                              }
                              else
                              {
                                  $aid = "AID100";
                              }
  
                            
                ?>

                            <div class="name">Admin ID</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" style="color: blue;font-weight:bolder;font-size:18px" type="text" name="AID" value="<?php echo $aid ?>" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="form-row m-b-55">
                            <div class="name">Name</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="fname">
                                            <label class="label--desc">first name</label>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="lname">
                                            <label class="label--desc">last name</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">User Name</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="user">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Password</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="pass">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Email</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="email" name="email">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Town Address</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5"   type="text" name="address">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Your Photo</div>
                            <div class="value">
                                
                                <div class="input-group">
                                    <input style="border-radius:5px;padding:12px ;background-color:#E5E5E5;font-size: 20px; " type="file" name="img" placeholder="hide">
                                  
                                </div>
                            </div>
                        </div>
                         
                        <div>
                            <button class="btn btn-success btn--radius-2 btn--red" type="submit" name="save">Register</button>
                        </div>

                        <?php  
                        
                        
                       
 
                       


                      
                        
                        ?>



                    </form>
                </div>
            </div>
        </div>
    </div>
 
</body> 

</html>
  
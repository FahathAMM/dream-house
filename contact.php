<head>
  	<title>Contact</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
  </head>

    <style>
    
        .bd-feedback
        {
            box-shadow: 2px 2px 15px;
            padding: 60px;
        }
          
        
          
          input::-webkit-inner-spin-button,
          input::-webkit-outer-spin-button
            {
                -webkit-appearance:none;  /*number tyep spinner remove*/

            }
            
           

        /* 
        note text box color change method
        c
          */
            

    </style>
<?php include('header.php') ?>
    <section class="hero-section set-bg about-us" data-setbg="img/bg.jpg">
        <div class="container hero-text text-white">
        <h2 style=" font-weight: bolder;">CLIENT</h2>
      <h1  style=" font-weight: bolder;">CONTACT</h1>
        </div>
    </section>
     
    <!-- Contact Section Begin -->
     

     <div class="container" style="margin-top: 100px;margin-bottom: 100px;">
       <div style="font-weight: bolder;color: indigo;font-size: 40px;font-family:'Times New Roman', Times, serif">Contact</div>
       
        <div class="row">
           
            <div class="col-lg-8 bd-feedback" >  

             
                <form action=""  method="post" style="color:#2C2562; font-weight: bold; ">
                     <div class="row">
                    <div class="form-group col-lg-12">
                        <label for="validationTooltip01">   Sure Name  </label>
                        <input  type="text" class="form-control" name="sname" placeholder="Ex:-  Fahath" required>
                    </div>

                        <div class="form-group col-lg-6">
                            <label for="validationTooltip01">   Mobile Number  </label>
                            <input type="number" class="form-control" name="mnumber" placeholder="Ex:-771347913" required>
                            </div>

                            <div class="form-group col-lg-6">
                            <label for="validationTooltip01">   Telephone Number </label>
                            <input type="number" class="form-control" name="tnumber" placeholder="Ex:-675623895" required>
                            </div>


                            <div class="form-group col-lg-12">
                                <label for="validationTooltip01">   Email  </label>
                                <input type="email" class="form-control" name="email" placeholder="Ex:-fahathammex90@gmail.com" required>
                            </div>
                       
                        <div class="form-group col-md-12">
                             <label for="exampleFormControlTextarea1">Message</label>
                             <textarea class="form-control" name="message" rows="3"></textarea>
                        
                        </div>

                         <div class="form-group col-md-12" >
                            <button type="submit" name="sent" class="btn btn-success  " style="height: 60px;width: 120px;font-size: 25px;">Sent</button>
                         </div>
                        
                        </div>

                 <?php  
                 
                 include('connect.php');

                   try
                   {
                    if(isset($_POST['sent']))
                    {
                        $sname = $_POST['sname'];
                        $mnumber = $_POST['mnumber'];
                        $tnumber = $_POST['tnumber'];
                        $email = $_POST['email'];
                        $message = $_POST['message'];
                        $now = date('Y-m-d');

                        
                        $sql = " INSERT INTO message (Sname ,Mnumber,Tnumber,Email,Message,date ) values ( '$sname', '$mnumber',' $tnumber','$email','$message','$now')";

                        if($db->query($sql))
                        {
                            echo "<script> alert('Thank you for Your Message'); </script>";
                        }
                    
                   }
                }
                   catch(PDOException $e)
                   {
                    echo $sql1."<br>".$e->getMessage();
                   }

                   ?>

                </form>
              </div>
          </div>   
        </div>
      
                     
        <section  style="background-color:#30304E;padding:40px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center" >
                    <h2 style="color: white;" >Don’t Forget to Follow us on Instagram @FahadAmm</h2>
                </div>
            </div>
        </div>
    </section>

    <?php include('fooder.php') ?>
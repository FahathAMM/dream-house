<!doctype html>
 
  <?php  error_reporting(0)     ?>
 
 
<html lang="en">
  <head>
  	<title>AddCity</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
	
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
		 

		
	<style>
		
		.bd-feedback
		{
			box-shadow: 0 0px  5px;
			padding: 60px;
		
		 
		}     
	 
	 .btnlogout
	  {
			  
			 
				background-color: #f20d0d;
				color: white;
				font-size: 16px;
				padding: 10px 20px 10px;
				margin-left: 1px;
				border: none;
				cursor: pointer;
				border-radius: 5px;
  				text-align: center;
				width: 190px;
				 
			 
	}


	.btnlogout:hover
	{
		background-color: black;
		color: white;
				
	}
           

		
		/* note text box color change method */
		.bd-feedback input[type=text] {
		border: 1px solid #b9b9b9;
		font-size: 17px;
		}
	
			

   </style>
  </head>
  <body style="background-color:#fafafa" >
		 
		<div class="wrapper d-flex align-items-stretch" >
			<nav id="sidebar">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-primary">
	          <i class="fa fa-bars"></i>
	          <span class="sr-only">Toggle Menu</span>
	        </button>
		</div>
	 
		<?php include('side.php') ?>	
	
    	</nav>
	  
        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5" >
	   <div>

            <h2  style="  margin:0px 0 5px 0;" >NEW CITY</h2>             
            <hr style="color: #808080; margin:0px 0 50px 0;">  

            </div>

	 <!-- another deisgn -->
	  <!-- <div style="background-color:#866ec7;margin:0px 0px 60px 50px;width:90%;  ">
	  <div style="text-align:center;font-weight:bolder;color:white;font-size: 40px;margin-bottom:10px;">ADD CITY</div> 
	</div> -->
	  <div class="container" style="margin-top: 10px;margin-bottom: 10px;">
	  
	 
	        
         <div class="row" style="margin-left:100px;margin-right:100px">
           
            <div   class="col-lg-12 bd-feedback">  

             
                <form action=""  method="POST" style="color:#2C2562; font-weight: bold; ">
                     <div class="row">
                    <div class="form-group col-lg-12">
						<label >   City ID  </label>
						
							 
								<?php 
								include('city.php');
								 $city = new city();
								 $city->add();

							// try { 
							// 		if(isset($_POST['save']))
							// 		{
							// 			$sql2 = $db->prepare("SELECT * FROM city order by CID desc ");
							// 			$sql2->execute();
	
							// 			if ($row = $sql2->fetch()) 
							// 			{
							// 				$no=$row['No'];
							// 				$no++;
							// 			}
							// 			else
							// 			{
							// 				$no=1;
							// 			}
							// 			 $cid = $_POST['cid'];
							// 			 $_POST['cname'] =  ucwords( $_POST['cname']); //upper;
							// 			 $cname = $_POST['cname'];
										
										

							// 			$sql1 = "INSERT INTO `city`(`No`,`CID`,`CityName`) VALUES ('$no','$cid','$cname')";
							// 			$db->exec($sql1);
									 

							// 			echo "<script> alert('Success Add'); </script>";
										 
										
							// 		}
							// 	} catch (PDOException $e) 
							// 	{
							// 		echo $sql1."<br>".$e->getMessage();
							// 	}
							 
                                    $sql = $db->prepare("SELECT * FROM city order by CID desc ");
                                    $sql->execute();

									if ($row = $sql->fetch()) 
									{
										 
                                        $cno = substr($row['CID'],3,strlen($row['CID']));   // number 3 is delete string letters or "CTY" 3 letters delete aahum
                                        $cno++;
                                        $cno ="CTY".$cno;  // 4 letters delte aanathuku apram defalut "CTY" Add pnrathu
									} 
									else 
									{
									
                                        $cno = "CTY100";
                                    }
							 ?>
							 
                        <input style="color:blue;font-weight:bolder;font-family:'Times New Roman', Times, serif; "  type="text" class="form-control" name="cid" value="<?php echo $cno; ?>" readonly >
					</div>
							 

                        <div class="form-group col-lg-12">
                            <label for="validationTooltip01">   City Name  </label>
                            <input type="text" class="form-control" name="cname" style="text-transform:capitalize" required>
                            </div>

                             

                         <div class="form-group col-md-12" >
                            <button type="submit" name="save" class="btn btn-success"  style="height: 60px;width: 120px;font-size: 25px;">SAVE</button>
						 </div>
						 </div>	
  
						 </form>
			<div> 
						 
 
		</div>
		</div>
		 
 							 
		 	
		<div style="background-color:#866ec7;margin:40px 0px 0px 0px;width:130%;">
	 			 <div style="text-align:center;font-weight:bolder;color:white;font-size: 30px;margin-bottom:0px;">LIST OF CITYS</div> 
		</div>
		 
		<table class="table table-striped table-advance table-hover">
                <tbody>
           
       
          
               			 <?php

							//  it is another waya of code not oop direct code
						    //  include('../connect.php');
							// 	$result = $db->prepare("SELECT * FROM city ");
							// 	$result->execute();	
				 

							 
						?> 
                  <tr>
				 
				    <th> NO   		</th>
                    <th> CITY ID    </th>
					<th> CITY NAME  </th>       
				    <th> <div style="margin-left:310px "> Action </div> </th>                         
                                                    
                  </tr>
              
					<?php 
						 $rows = $city->tview();
						 $no=1;

 
                      foreach($rows as $row)  //only one row datas show in foreach row ku pathila ethuwum use pannaalam.. and $data return panninathe here can use  here $data dont care just return use;
                      {									
                      
                        
					?>
					
                    <tr>
				 
                    <td style="font-weight: bolder"><?php echo  $no++?></td>
                    <td><?php echo $row['CID'] ?></td>
                    <td><?php echo $row['CityName'] ?></td>
					
					 
						
                    <td>
                      <div class="btn-group" style="margin-left:250px;width:180px">
					  <!-- <a class="btn btn-success" href="#">Edite</a> -->
					  <a class="btn btn-danger" href="delete.php?delid=<?php echo  $row['CID'];?>" > Reject</a>
				    </div>
                    </td>
                  </tr>
                  <?php } ?>
			
                </tbody>
			  </table> 

		 
			</div>
			</div>
			</div>
			</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
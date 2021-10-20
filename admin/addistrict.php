<!doctype html>
 <?php 
 
 include('../connect.php');
 
 ?>
<html lang="en">
  <head>
  	<title>Adddistricts</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
	
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
		<!-- <link rel="stylesheet" href="../css/bootstrap.min.css"> -->

		
	<style>
		
		.bd-feedback
		{
			box-shadow: 0 0px  5px;
			padding: 60px;
		
			
			
		}     

		 
		/* note text box color change method */
		.bd-feedback input[type=text] {
		border: 1px solid #b9b9b9;
		font-size: 17px;
		}
			

   </style>
  </head>
  <body style= "background-color:#fafafa" >
		
		<div class="wrapper d-flex align-items-stretch">
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

            <h2  style="  margin:0px 0 5px 0;" >NEW DISTRICTS</h2>             
            <hr style="color: #808080; margin:0px 0 50px 0;">  

            </div>
        <div class="row" style="margin-left:100px;margin-right:100px" >
           
            <div class="col-lg-12 bd-feedback" >  
		 
		 
                <form action=""  method="post" style="color:#2C2562; font-weight: bold;text-transform:capitalize ">
                     <div class="row">
                    <div class="form-group col-lg-12">
						<label >   District ID  </label>
						
							 
								<?php 
								include('district.php');
								$distric = new district();
								$distric->insertdis();
						 
                                    $sql = $db->prepare("SELECT * FROM districts order by DCode desc ");
                                    $sql->execute();

                                    if ($row = $sql->fetch()) {
                                        $dno = substr($row['DCode'], 4, strlen($row['DCode']));   // number 4 is delete string letters or "DISC" 4 letters delete aahum
                                        $dno++;
                                        $dno ="DISC".$dno;  // 4 letters delte aanathuku apram defalut "DISC" Add pnrathu
									} 
									else 
									{
                                        $dno = "DISC100";
                                    }
							 ?>
							 
                        <input style="color:blue;font-weight:bolder;font-family:'Times New Roman', Times, serif;"  type="text" class="form-control" name="did" value="<?php echo $dno; ?>" readonly >
					</div>
							 

                        <div class="form-group col-lg-12">
                            <label for="validationTooltip01">   District Name  </label>
                            <input type="text" class="form-control" name="dname" style="text-transform:capitalize" required>
                            </div>

                             

                         <div class="form-group col-md-12">
                            <button type="submit" name="save" class="btn btn-success"  style="height: 60px;width: 120px;font-size: 25px;">SAVE</button>
						 </div>
						 </div>	
  
						 </form>
						 
			<div> 
			

       
		</div>
		</div>
		
		<div style="background-color:#866ec7;margin:40px 0px 0px 0px;width:130%;  ">
	  <div style="text-align:center;font-weight:bolder;color:white;font-size: 30px;margin-bottom:0px;">LIST OF DISTRICTS</div> 
	</div>	<table class="table table-striped table-advance table-hover">
                <tbody>
			
          
          
               			 <?php

						    include('../connect.php');
								$result = $db->prepare("SELECT * FROM districts  ");
								$result->execute();						
                
						?> 
                  <tr>
				    <th> No    			</th>
                    <th> District ID    </th>
					<th> District Name  </th>       
				    <th> <div style="margin-left:310px "> Action </div>       </th>                               
                                                                 
                  </tr>
              
                    <?php 
                    
                      for($row=0; $row = $result->fetch(); $row++)
                      {									
                      
                    
                    ?>
                    <tr>
                    <td style="font-weight: bolder"><?php echo $row['No'] ?></td>
                    <td><?php echo $row['DCode'] ?></td>
                    <td><?php echo $row['DName'] ?></td>
                     
                 
				 
                 

                    <td>
					<div class="btn-group" style="margin-left:250px;width:180px ">     
					<!-- <a class="btn btn-success " href="#">Edite</a>                -->
					<a class="btn btn-danger" href="delete.php?disdelid=<?php echo  $row['DCode'];?>">Reject</a>
					
                      </div>
                    </td>
                  </tr>
                  <?php } ?>
 
                </tbody>
			  </table> 
			  </div>
 

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
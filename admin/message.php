<!doctype html>
 
<?php include('../connect.php') ?>

  
<html lang="en">
  <head>
  	<title>Message</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="../css/font-awesome.min.css">



    
  </head>
  <body >
		
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

       
      <div id="content" class="p-4 p-md-5 pt-5">
            <div>

            <h2  style="  margin:0px 0 5px 0;" >NEW CLIENT</h2>             
            <hr style="color: #808080; margin:0px 0 50px 0;">  

            </div>

      
        <table class="table table-striped table-sm  table-responsive-md table-hover">

          <tbody>
            
              <tr>
          
                    <th>  No    		 </th>
                    <th>  Name  </th>
                    <th>  Mob Number    </th>                  
                    <th>  Tel Number      </th>
                    <th>  Email </th>
                    <th>  Message </th>
                    <th>  Date </th>
                    <th>  Action </th>

                  
              </tr>
      
                  <?php 
           
              
                    include('../connect.php');
                                 
                    $no=1;
                  $Getmessage = $db->prepare("SELECT * FROM message");
                  $Getmessage->execute();
                  while($row = $Getmessage->fetch())
                   {

                      ?>

                
				 
					
                 <tr>
                      <td style="font-weight: bolder"><?php echo $no++ ?></td>				 
                      <td style="font-weight: bolder"><?php echo $row['Sname'] ?></td>
                      <td><?php echo strtoupper( $row['Mnumber']) ?></td>
                      <td><?php echo strtoupper( $row['Tnumber']) ?></td>
                      <td><?php echo strtoupper ($row['Email']) ?></td>
                      <td><?php echo strtoupper ($row['Message'] )?></td>
                      <td><?php echo $row['date'] ?></td>

 
						
                    <td>
                      <a class="btn btn-danger" href="delete.php?mid=<?php echo $row['MID'] ?>"><i class="far fa-trash-alt" ></i> </a>
                    </td>
                  </tr>
                  <?php
                  } ?>
			
                </tbody>
			  </table> 
        

		</div>
    </div>
    
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
  
</html>
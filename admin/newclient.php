<!doctype html>
 
<?php include('../connect.php') ?>

  
<html lang="en">
  <head>
  	<title>New client</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="css/style.css">
    

   

    
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
                    <th>  CLIENT ID  </th>
                    <th>  NAME    </th>                  
                    <th>  CITY      </th>
                    <th>  DISTIRCT </th>
                    <th>  Mobile </th>
                    <th>  Date </th>
                    <th>  Image </th>                   
                    <th> Action </th>                      
  
              </tr>
      
                  <?php 
           
              
                    include('../clients.php');
                    $view = new client();
                    $rows = $view->cview();                    
                   // $no=1;
                  
                  foreach($rows as $row)
                   {
                      ?>

                
				 
					
                 <tr>
				 
                      <td style="font-weight: bolder"><?php echo $row['Numbers'] ?></td>
                      <td><?php echo strtoupper( $row['clientid']) ?></td>
                      <td><?php echo strtoupper( $row['Name']) ?></td>
                      <td><?php echo strtoupper ($row['City']) ?></td>
                      <td><?php echo strtoupper ($row['District'] )?></td>
                      <td><?php echo $row['Mnumber'] ?></td>
                      <td><?php echo $row['Date'] ?></td>
                      <td> <img src="../images/<?php echo $row['Imglocation'] ?>" alt="" width="50px" height="50px" class=" rounded-circle"></td>

 
						
                    <td>
                      <a class="btn btn-danger" href="delete.php?clientid=<?php echo $row['clientid'] ?>"><i class="far  fa-trash-alt" ></i> </a>



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
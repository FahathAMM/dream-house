<!doctype html>
<?php 
 
?>
<html lang="en">
  <head>
  	<title>Existing House</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="../css/bootstrap.min.css"> -->
    
    
 
  </head>
  <body style="background-color:#fafafa" > 
		
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
     
      <div id="content" class="p-4 p-md-5 pt-5">
            <div>

            <h2  style="  margin:0px 0 5px 0;" >Existing HOUSE</h2>             
            <hr style="color: #808080; margin:0px 0 50px 0;">  

            </div>

	  <div class="w3-container" >
  
    <table class="table table-striped table-sm table-advandce table-hover ">
             
           
         
              
    <thead>
                 <tr>
                 <th> No. </th>
                            <th> House ID </th>
                            <th> Client ID </th>
                            <th> House Name </th>
                            <th> Address </th>
                            <th> District </th>
                            <th> City </th>
                            <th> Living Room </th>
                            <th> Bedrrom</th>
                            <th> kitchen </th>
                            <th> bathroom </th>

                            <th> period </th>
                            <th> pmethod </th>
                            <th> price </th>
                            <th> housetype </th>


                            <th> date </th>
                            <th> Action </th>

                    
                 </tr>
                 </thead> 
                
                   
                 <tbody>
                
              
                    <?php 
                     
                
                    $no=1;


                    $getactive = $db->prepare("SELECT * FROM housedet WHERE status='actvie' ORDER BY houseid Desc");
                    $getactive->execute();
                  while($row = $getactive->fetch())
                  {

                    ?>
                    
                    <tr>
                    <td style="font-weight: bolder"><?php echo $row['No'] = $no++ ?></td>
                            <td><?php echo $row['houseid'] ?></td>
                            <td><?php echo $row['clientid'] ?></td>

                            <td><?php echo $row['housename'] ?></td>
                            <td><?php echo $row['houseaddress'] ?></td>
                            <td><?php echo $row['distric'] ?></td>
                            <td><?php echo $row['city'] ?></td>

                            <td><?php echo $row['livingroom'] ?></td>
                            <td><?php echo $row['bedroom'] ?></td>
                            <td><?php echo $row['kitchen'] ?></td>
                            <td><?php echo $row['bathroom'] ?></td>

                            <td><?php echo $row['period'] ?></td>
                            <td><?php echo $row['pmethod'] ?></td>
                            <td><?php echo $row['price'] ?></td>
                            <td><?php echo $row['housetype'] ?></td>
                            <td><?php echo $row['date'] ?></td>
                   
                    
                 

                    <td>
                      <div class="btn-group">
                        <a class="btn btn-danger" href="delete.php?exhouseid=<?php echo $row['houseid'] ?>"><i class="fa fa-trash" ></i></a>
                      </div>
                    </td>
                  </tr>
                <?php   } ?>
 
                </tbody>
              </table> 
 

</div>


		</div>
		</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>


    
  </body>
</html>
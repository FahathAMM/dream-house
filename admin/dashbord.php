<!doctype html> 
<html lang="en">
  <head>
  	<title>Dashbord</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
  </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-primary">
	          <i class="fa fa-bars"></i>
	          <span class="sr-only">Toggle Menu</span>
	        </button>
        </div>
         <?php
         include('side.php') ;
         include('../connect.php');
         
         ?>
    	</nav>

      <div id="content" class="p-4 p-md-5 pt-5">

     
      <div class="row">
       
      <div class="col-md-4">
      <div class="card text-white  bg-primary mb-3" style="max-width:100%; background-color:#800080">
      <div class=" card-header">Total CLient </div>

          <div class="card-body">
            <h5 class="card-title text-center"><i class="fa fa-user fa-3x  "></i></h5>
            <?php 
             $totalClient = $db->prepare("SELECT COUNT(*) FROM client");
             $totalClient->execute();
             $rowClient = $totalClient->fetch();
             $Clientcount = $rowClient[0];
            ?>
            <p class="card-text text-center" style="font-size: 20px; font-weight:bolder"><?php echo $Clientcount ?></p>
        </div>
      </div>

      </div>

      <!-- <div class="col-md-3">
      <div class="card text-white bg-success mb-3" style="max-width:100%;">
          <div class="card-body">
            <h5 class="card-title">Danger card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>

      </div> -->

      <div class="col-md-4">
      <div class="card text-white bg-danger mb-3" style="max-width:100%;">
      <div class=" card-header">Total New House Registerd</div>
          <div class="card-body ">
            <h5 class="card-title text-center"><i class="fa fa-home fa-3x  " ></i></h5>
            <?php 
             $totalHouse = $db->prepare("SELECT COUNT(*) FROM housedet WHERE status='nonactive'");
             $totalHouse->execute();
             $rowHouse = $totalHouse->fetch();
             $housecount = $rowHouse[0];
            ?>
            <p style="font-size: 20px; font-weight:bolder" class="card-text text-center"><?php echo $housecount ?></p>
        </div>
      </div>

      </div>

      <div class="col-md-4">
      <div class="card text-white mb-3" style="max-width:100%; background-color:#800080">
      <div class=" card-header">Total Existing House </div>

          <div class="card-body">
            <h5 class="card-title text-center"><i class="fa fa-home fa-3x  Fa fa-user"></i></h5>
            <?php 
             $totalHouseActive = $db->prepare("SELECT COUNT(*) FROM housedet WHERE status='actvie'");
             $totalHouseActive->execute();
             $rowHouseActive = $totalHouseActive->fetch();
             $Activehousecount = $rowHouseActive[0];
            ?>
            <p class="card-text text-center" style="font-size: 20px; font-weight:bolder"><?php echo $Activehousecount ?></p>
        </div>
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
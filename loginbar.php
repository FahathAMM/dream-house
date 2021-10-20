<?php
 
 //PDO Method
 include('connect.php');
     $lbresult = $db->prepare("select * from client where clientid = '" .$_SESSION['id']."'");
     $lbresult->execute();
     $ro=$lbresult->fetch();

      
 /*
 Normal Mathod
  include("dbcon.php");
  $quary = mysqli_query($conn,"select * from client where clientid = '" .$_SESSION['id']. "'");
  $row=mysqli_fetch_assoc($quary);
*/
    
			 
			
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <style>
    
            /* Add a black background color to the top navigation */
          .topnav {
            background-color: #060343;
            overflow: hidden;
          }

          /* Style the links inside the navigation bar */
          .topnav a {
            float: right;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 18px;
          }

          /* Change the color of links on hover 
          .topnav a:hover {
            background-color: #ddd;
            color: black;
          }

          .topnav a:hover {
            background-color: #ddd;
            color: black;
            
          }*/
          
          .user {
            float: left;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 20x;
          }

          /* Add a color to the active/current link 
          .topnav a.active {
            background-color: #4CAF50;
            color: white;
            float: right; 
          }*/
    
    </style>

<div class="topnav">

 
  <a class="user"style="float: left; pointer-events: none;color:white">NAME: <?php echo strtoupper ( $ro['Name']) ?></a>
  <a href="logout.php" >Logout</a>

</div>
 

</body>
</html>
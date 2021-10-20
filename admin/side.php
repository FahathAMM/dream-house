<div class="p-4 pt-5">
<link rel="stylesheet" href="../fontawesome-free-5.13.0-web/css/all.css">

		<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->


 <?php 
  include('../connect.php');

      session_start();

      if(!isset ($_SESSION['id']) || (trim($_SESSION['id']) == '')) //trim mean.....................
          {
  
              header('location:adminlogin.php');
			  
          }
 
 
 ?>
<style>
.head
{
    font-weight:600;
    font-size: 18px;
}
.lgbtn
{
    background-color:#b00000;
    color:white;
}
.lgbtn:hover
{
    background-color:maroon;
    color:white;
}
</style>
              <h1><a href="dashbord.php" class="logo" style="font-size: 35px">DASHBORD</a></h1>
              <?php 
              
             
               
              
              ?>
	        <ul class="list-unstyled components mb-5">
	          <li class="active">
	            <a  href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class=" dropdown-toggle head ">HOUSES</a>
	            <ul class="collapse list-unstyled" id="homeSubmenu">
                <li>
                    <a href="newhouse.php">New Home Register</a>
                </li>
                <li>
                    <a href="exhouse.php">Existing Houses</a>
                </li>
                <li>
                    <a href="#">Home 3</a>
                </li>
	            </ul>
              </li>
              <li class="active">
	            <a  href="#clientSubmenu" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle head">CLIENT</a>
	            <ul class="collapse list-unstyled" id="clientSubmenu">
                <li>
                    <a href="newclient.php">New Client Register</a>
                </li>
              
              
	            </ul>
	          </li>
	        
	          <li>
              <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle head">LOCATION</a>
              <ul class="collapse list-unstyled" id="pageSubmenu">
                <li>
                    <a  href="addistrict.php">Districts</a>
                </li>
                <li>
                    <a   href="addcity.php">City</a>
                </li>
                
              </ul>
              </li>
              
	          <li>
              <a class="head" href="buy.php">Buy</a>
	          </li>
	          <li>
              <a  class="head" href="message.php">MESSAGE</a>
              </li>
              <li>
	              <a  class="head" href="#">About</a>
	          </li>
	        </ul>

	        <div class="mb-5">
			<?php
			
			 
			  include('auser.php');
		 
		 
			        
                    ?>
						<h3 class="h6" style="margin-left: 40px">NAME  :     <?php echo strtoupper($row['User']) ?></h3> 
						<form action="alogout.php" class="colorlib-subscribe-form">

	            <div class="form-group d-flex">
 
				  <button type="submit" class="btn lgbtn " style="margin:5px 10px;width:200px;" name="alogout" > Logout </button>
				 
	            </div>
	          </form>
					</div>

					<div class="footer">
	        	<p> 
						  Copyright &copy;<script>document.write(new Date().getFullYear());</script>Copyright ©2020 All rights reserved | Software Engineer Fahath   <i class="icon-heart" aria-hidden="true"></i> by <a style="color:white" href="" target="_blank">fahathammex90@gmail..com</a>
						 </p>
	        </div>

          </div>
          
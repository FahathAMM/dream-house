<!DOCTYPE html>
<html>
<title>Admin</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="admin.css">
 <link rel="stylesheet" href="style.css"><style>
body {font-family: "Roboto", sans-serif}
.w3-bar-block .w3-bar-item {
  padding: 16px;
  font-weight: bold;
}
</style><style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
  text-align: left;
}
table#t01 {
  width: 100%;    
  background-color: #f1f1c1;
}
</style>
<style>
.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 22px;
  text-align: center;
  text-decoration: none;
   font-size: 16px;
  margin: 10px 2px;
  cursor: pointer;
}
</style>
<body>
 

<nav class="w3-sidebar w3-bar-block w3-collapse w3-animate-left w3-card" style="z-index:3;width:250px;" id="mySidebar">
  <a class="w3-bar-item w3-button w3-border-bottom w3-large" href="#">JAHE</a>
  <a class="w3-bar-item w3-button w3-hide-large w3-large" href="javascript:void(0)" onclick="w3_close()">Close <i class="fa fa-remove"></i></a>
  <a class="w3-bar-item w3-button" href="admin_index.php">Home</a>
    <div>
    <a class="w3-bar-item w3-button" onclick="myAccordion('demo')" href="javascript:void(0)">News</a>
    <div id="demo" class="w3-hide">
      <a class="w3-bar-item w3-button" href="add_news.php">--- Add News</a>
      <a class="w3-bar-item w3-button" href="view_news.php">--- Manage News</a>
     </div>
  </div>
      <div>
    <a class="w3-bar-item w3-button" onclick="myAccordion('demo2')" href="javascript:void(0)">Gallery</a>
    <div id="demo2" class="w3-hide">
      <a class="w3-bar-item w3-button" href="add_gallery.php">--- Add Gallery</a>
      <a class="w3-bar-item w3-button w3-teal" href="view_gallery.php">--- Manage Gallery</a>
     </div>
  </div>
    <a class="w3-bar-item w3-button" href="view_request.php">Contact Request</a>

   <a class="w3-bar-item w3-button" href="../index.php">Logout</a>
 

</nav>

<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" id="myOverlay"></div>

<div class="w3-main" style="margin-left:250px;">

<div id="myTop" class="w3-container w3-top w3-theme w3-large">
  <p><i class="fa fa-bars w3-button w3-teal w3-hide-large w3-xlarge" onclick="w3_open()"></i>
  <span id="myIntro" class="w3-hide">JAHE WEAVERS PRIVATE LIMITED</span></p>
</div>

<header class="w3-container w3-theme" style="padding:64px 32px">
  <h1 class="w3-xxxlarge">JAHE WEAVERS PRIVATE LIMITED</h1>
</header>

<div class="w3-container" style="padding:10px">
              <table id="t01">
  <tr>
                    <th>Title</th>
                       <th>Date</th>
                    <th>Action</th>
  </tr>
                <tbody>
 				<?php
						require_once('connect.php');
								$result = $conn->prepare("SELECT * FROM folder ORDER BY id Desc");
								$result->execute();
								for($i=0; $row = $result->fetch(); $i++){
								$id=$row['id'];
							?> 
                  <tr>
                    <td><?php echo $row ['title']; ?></td>
                    <td><?php echo $row ['fdate']; ?></td>
                    <td><a href="editgallery.php<?php echo '?id='.$id; ?>" class="button">Edit</a><a href="delete_car.php<?php echo '?id='.$id; ?>" class="button">Delete</a></td>                  
                  </tr> 
                       	<?php } ?>                  
                </tbody>
</table>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
 
                   </tr>
                </thead>
 

              </table>
<hr>
 
 

</div>

<footer class="w3-container w3-theme" style="padding:32px">
<?php include ('fooder.php');
?>
</footer>
     
</div>

<script>
 function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}

function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}

 window.onscroll = function() {myFunction()};
function myFunction() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    document.getElementById("myTop").classList.add("w3-card-4", "w3-animate-opacity");
    document.getElementById("myIntro").classList.add("w3-show-inline-block");
  } else {
    document.getElementById("myIntro").classList.remove("w3-show-inline-block");
    document.getElementById("myTop").classList.remove("w3-card-4", "w3-animate-opacity");
  }
}

// Accordions
function myAccordion(id) {
  var x = document.getElementById(id);
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
    x.previousElementSibling.className += " w3-theme";
  } else { 
    x.className = x.className.replace("w3-show", "");
    x.previousElementSibling.className = 
    x.previousElementSibling.className.replace(" w3-theme", "");
  }
}
</script>
     
</body>
</html> 

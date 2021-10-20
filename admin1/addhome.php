<!DOCTYPE html>
<html>
<head>
<title>Admin</title>

<script  type="text/JavaScript"> 
function squ() {
              
    num1 = parseInt(document.cform.et.value);
    pr = parseInt(document.cform.pr.value);
    ans=num1*pr
    document.cform.bill.value=ans
        } 
function valid(){
 

    if(document.frm.carname.value == "")
    {
      alert('Fill the Car Name');
    }
    if(document.frm.fname.brand == "")
    {
      alert('Fill the Brand');
    }
    if(document.frm.price.value == "")
    {
      alert('Fill the Price Per Day');
    }
    if(document.frm.desc.value == "")
    {
      alert('Fill the Discription');
    }
    if(document.frm.date.value == "")
    {
      alert('Fill the Date');
    }
 
}   

</script> </head>
<meta name="viewport" content="width=device-width, initial-scale=1">


<link rel="stylesheet" href="admin.css">
 <link rel="stylesheet" href="style.css"><style>







body {font-family: "Roboto", sans-serif}
.w3-bar-block .w3-bar-item {
  padding: 16px;
  font-weight: bold;
}
</style> 
<style>
 
.input-container {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  width: 100%;
  margin-bottom: 15px;
}

.icon {
  padding: 10px;
  background: dodgerblue;
  color: white;
  min-width: 50px;
  text-align: center;
}

.afrath{
  max-width:500px;
  margin:auto;

}
.input-field {
  width: 100%;
  padding: 10px;
  outline: none;
}

.input-field:focus {
  border: 2px solid dodgerblue;
}

/* Set a style for the submit button */
.btn {
  background-color: dodgerblue;
  color: white;
  padding: 15px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}
</style>
<body>

<nav class="w3-sidebar w3-bar-block w3-collapse w3-animate-left w3-card" style="z-index:3;width:250px;" id="mySidebar">
  <a class="w3-bar-item w3-button w3-border-bottom w3-large" href="#">Online Car Rental</a>
  <a class="w3-bar-item w3-button w3-hide-large w3-large" href="javascript:void(0)" onclick="w3_close()">Close <i class="fa fa-remove"></i></a>
  <a class="w3-bar-item w3-button" href="admin_index.php">Home</a>
    <div>
    <a class="w3-bar-item w3-button" onclick="myAccordion('demo')" href="javascript:void(0)">Cars</a>
    <div id="demo" class="w3-hide">
      <a class="w3-bar-item w3-button w3-teal" href="add_cars.php">--- Add Car</a>
      <a class="w3-bar-item w3-button" href="view_cars.php">--- Manage</a>
     </div>
  </div>
  <a class="w3-bar-item w3-button" href="order.php">Notification</a>
  <a class="w3-bar-item w3-button" href="report.php">Rental list & Profit</a>
    <a class="w3-bar-item w3-button" href="view_users.php">Users</a> 
    <a class="w3-bar-item w3-button" href="view_request.php">Contact Request</a>

   <a class="w3-bar-item w3-button" href="../index.php">Logout</a>
 

</nav>

<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" id="myOverlay"></div>

<div class="w3-main" style="margin-left:250px;">

<div id="myTop" class="w3-container w3-top w3-theme w3-large">
  <p><i class="fa fa-bars w3-button w3-teal w3-hide-large w3-xlarge" onclick="w3_open()"></i>
  <span id="myIntro" class="w3-hide">Online Car Rental</span></p>
</div>

<header class="w3-container w3-theme" style="padding:64px 32px">
  <h1 class="w3-xxxlarge">Online Car Booking</h1>
</header>

<div class="w3-container" style="padding:32px">

  <div class="w3-content" style="max-width:1100px;margin-top:80px;margin-bottom:80px">

  <div class="w3-panel">
   <center> <h1><b>Online car rental system</b></h1> </center>
   </div>
 
 
 
  <div class="w3-center w3-padding-64" id="contact">
    <span class="w3-xlarge w3-bottombar w3-border-dark-grey w3-padding-16">Post Car</span>
  </div>

<form action="" method="post"  name="frm" enctype="multipart/form-data" class="afrath">

   <div class="input-container">
     <input class="input-field" type="text" placeholder="Name" name="name" required>
  </div>
 
    <div class="input-container">
     <input class="input-field" type="file" placeholder="file image" name="image" required>
  </div>
      <div class="input-container">
     <input class="input-field" type="text" placeholder="description" name="desc" required>
  </div>
      <div class="input-container">
     <input class="input-field" type="text" placeholder="price" name="price" required>
  </div>
   <div class="input-container">
     <input class="input-field" type="date" placeholder="Date" name="date" required>
  </div>
 
  <button type="submit" name="save" class="btn">save</button>
    <button type="submit" name="back" class="btn">back</button>

  <?php
include('dbcon.php');
                    if (isset($_POST['save'])){


                    move_uploaded_file($_FILES["image"]["tmp_name"],"fahath/" . $_FILES["image"]["name"]);    


                    $location=$_FILES["image"]["name"];
                    $homename=$_POST['name'];
                    $homedesc=$_POST['desc'];
                    $homeprice=$_POST['price'];
                    $homedate=$_POST['date'];
                                   
 
mysql_query("insert into home(name,imglocation,desciption,price,date) values('$homename','$location','$homedesc','$homeprice','$homedate')")or die(mysql_error());                          
                    
             ?>
                    <script>
                      alert("added ");

                    </script>
                    <?php              
  }
                    ?>
</form>

</div>
<hr>
   
 

</div>

<footer class="w3-container w3-theme" style="padding:32px">
<footer class="w3-container w3-padding-32 w3-light-grey w3-center">
  <h3>KMMG Solution</h3>
   <p>#07,08,Meera Shopping Complex,</p>
  <p> Main Street, Kattankudy - 01.</p>
  <p>kmmgsolution@gmail.com</p>
  <p>076 1324050, 077 8206080</p>
 
  <p>Create by  <a href="" title="" class="w3-hover-text-green">KMMG Solution</a></p>
</footer>
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

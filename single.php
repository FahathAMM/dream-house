<!DOCTYPE html>

<?php
	
session_start();

        if(!isset ($_SESSION['id']) || (trim($_SESSION['id']) == ''))
        {
            
?>			
        <script>
            window.location = "Login.php";
            alert("please login");
        </script>
<?php
}
else
{


?>

<html lang="en">

 
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Homes Template">
    <meta name="keywords" content="Homes, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Single House</title>

    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i"
        rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">


    



    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">



    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
     <!-- <link rel="stylesheet" href="css/style.css" type="text/css"> -->
</head>

<body>
     <!-- <div id="preloder">
        <div class="loader"></div>
    </div> -->
     <header class="header-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="logo">
                        <a href="./index.html"> 
                            <img src="img/logo.png" alt="">
                        </a>
                    </div>
                    <ul class="main-menu">
                    <li><a href="./index.php">Home</a></li>
                        <li><a href="./houseDetails.php">House Register</a></li>
                        <li><a href="./search.php">Search Results</a></li>
                        <li><a href="./Login.php">Login</a></li>
                        <li><a href="./contact.php">Contact</a></li>
                        <li><a href="./about.php">About</a></li>
                        
                        <li class="top-social">
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>                             
                        </li>
                    </ul>                   
                </div>
            </div>
        </div>
    </header>
   
    <section class="hero-section home-page set-bg" data-setbg="img/bg.jpg">
        <div class="container hero-text text-white">           
            <h1>Single House...</h1>
        </div>
    </section>
    <?php 
  include('loginbar.php');
  
  ?>
   
    <?php
 
 include('connect.php');
   $id = $_GET['idd'];
              $result = $conn->prepare("SELECT * FROM housedet WHERE houseid = '$id'");
              $result->execute();
              $row = $result->fetch();
          ?>
      



    <div class="single-property">
        <div class="container">
            <div class="row spad-p">
                <div class="col-lg-12">
                    <div class="property-title">
                        <h3><?php echo $row['housename']; ?></h3>
                        <a href="#"><i class="fa flaticon-placeholder"></i><?php echo $row['distric']; ?></a>
                    </div>
                    <div class="property-price">
                        <p>For Sale</p>
                        <span>RS<?php echo $row['price']; ?>.00</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="property-img owl-carousel">
                        <!-- <center><div class="single-img" style="width: 500px;">
                            <img src="images/<?php// echo $row['imglocation']; ?>">
                        </div></center> -->
                        <div class="single-img">
                            <!-- <img src="img/single-prosperty/2.jpg" alt=""> -->
                            <img src="images/<?php echo $row['imglocation']; ?>" width="200px" height="1000px">


                        </div>

                        <div class="single-img">
                            <!-- <img src="img/single-prosperty/2.jpg" alt=""> -->
                            <img src="images/<?php echo $row['imglocation']; ?>" width="200px" height="1000px">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Single Property End -->
    <!-- Single Property Deatails Section Begin -->
    <section class="property-details">
        <div class="container">
            <div class="row sp-40 spt-40">
                <div class="col-lg-8">
                    <div class="p-ins">
                        <div class="row details-top">
                            <div class="col-lg-12">
                                <div class="t-details">
                                 
                                    <div class="popular-room-features single-property">
                                        <div class="size">
                                            <p>Payment Method</p>
                                            <img src="img/counter-icon/3.png" alt="" height="24px">
                                            <i class="flaticon-bath"></i>
                                            <span><?php echo $row['pmethod'] ?></span>
                                        </div>
                                        <div class="beds">
                                            <p>Duration</p>
                                            <img src="img/counter-icon/2.png" alt="" height="24px">
                                            <span><?php echo $row['period'] ?></span>
                                        </div>
                                        <!-- <div class="baths">
                                            <p>Baths</p>
                                            <img src="img/rooms/bath.png" alt="">
                                            <span>2</span>
                                        </div>
                                        <div class="garage">
                                            <p>Garage</p>
                                            <img src="img/rooms/garage.png" alt="">
                                            <span>1</span>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="property-description">
                                    <h4>Location</h4>
                                    <p style="font-size: 20px;"><?php echo $row['distric'] ?> <i class="fa fa-arrow-right" > </i> <?php echo $row['city'] ?></p>
                                </div>
                                <div class="property-features">
                                    <h4>Property Features</h4>
                                    <div class="property-table">
                                        <table>
                                            <tr>
                                                 <td><img src="img/rooms/size.png" alt="">Living Room</td>
                                                <td><img src="img/check.png" alt=""></td>
                                                <td><?php echo $row['livingroom'] ?></td>
                                            </tr>
                                            <tr>                                              
                                                <td><img src="img/rooms/bath.png" alt="">Bath</td>
                                                <td><img src="img/check.png" alt=""> </td>
                                                <td> <?php echo $row['bathroom'] ?></td>
                                            </tr>
                                            <tr>
                                                <td><img src="img/rooms/bed.png" alt="">Bedroom</td>
                                                <td><img src="img/check.png" alt=""></td>
                                                <td><?php echo $row['bedroom']?></td>                 
                                            </tr>
                                            <tr>
                                                <td><img src="img/rooms/garage.png" alt="">Kitchen</td>
                                                <td><img src="img/check.png" alt=""> </td>
                                                <td><?php echo $row['kitchen']?></td>
                                            </tr>

                                            
                                          
                                        
                                         <form action="" method="POST">
                                               <!-- <input type="text " name="fff" value="<//?php echo $id ?>">  -->
                                        </table>
                                        <div class="contact-service">
                                        <button type="submit" name="dd"  class="site-btn list-btn btn-block">Buy</button>
                                        </div>
                                        </form>
                                      
                                            <?php 

                                             if(isset($_POST['dd']))
                                            {

                                                // $gggg = $_POST['fff'];

                                                

                                                $sale = "UPDATE `housedet` SET `status`='sale' WHERE houseid ='$id'";    
                    
                                                $stm = $db->prepare($sale);
                                                $stm->execute();
                                                ?>
                                                <script> 
                                                
                                                alert('Dear Sir Thank you For Select Your Dream House We will Sent Full Detail Your Email') ;
                                                window.location = 'index.php';
                                            </script>
                                                
                                                <?php 
                                            }
                                            

                                            ?>

                                    </div>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
              
            </div>
        </div>
    </section>
    <!-- Single Property Deatails Section End -->
    <!-- Footer Section Begin -->
    <section class="instagram" style="background-color:#30304E;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center" >
                    <h2 style="color: white;" >Don’t forget to follow us on Instagram @FahadAmm</h2>
                </div>
            </div>
        </div>
    </section>
     <footer class="footer-section">
         <div class="room-pic">
            <div class="container-fluid">
                <div class="row sp-40">
                    <img src="img/room-pic/1.jpg" alt="">
                    <img src="img/room-pic/2.jpg" alt="">  
                    <img src="img/room-pic/3.jpg" alt="">
                    <img src="img/room-pic/4.jpg" alt="">
                    <img src="img/room-pic/5.jpg" alt="">
                </div>
            </div>
        </div>
         <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center sp-60">
                    <img src="img/only-logo.png" alt="">
                </div>
            </div>
            <div class="row p-37">
                <div class="col-lg-4">
                    <div class="about-footer">
                        <h5>About Homes</h5>
                       
                        <p style="color: wheat;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eleifend tristique venenatis.
                            Maecenas a rutrum tellus nam vel semper nibh.</p>
                        <div class="footer-social">
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                           
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="footer-blog">
                        <h5>Latest Blog Posts</h5>
  
                        <div class="single-blog">
                            <div class="lt-side">
                                <img src="img/footer-blog-1.jpg" alt="">
                            </div>
                            <div class="rt-side">
                                <h6>How to find the perfect area for<br> your next house.</h6>
                                
                            </div>
                        </div>
                        <div class="single-blog">
                            <div class="lt-side">
                                <img src="img/footer-blog-2.jpg" alt="">
                            </div>
                            <div class="rt-side">
                                <h6>How to find the perfect area for<br> your next house.</h6>
                                 
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="footer-address">
                        <h5>Get In Touch</h5>
                        <ul>
                            <li><i class="flaticon-placeholder"></i><span style="color: wheat;">617B Jamahirya Road Sainthamruthu</span>
                            </li>
                            <li><i class="flaticon-envelope"></i><span style="color: wheat;" >Fahathammex90@gmail.com</span></li>
                            <li><i class="flaticon-smartphone"></i><span style="color: wheat;" >0771347913</span></li>
                        </ul>
                        
                    </div>
                </div>
            </div>
  
            <div class="row p-20">
                <div class="col-lg-12 text-center">
                    <div class="copyright">
                        
  <d style="color: wheat; font-weight: bold;">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Software Engineer Fahath <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="fahath.com" target="_blank">Fahath</a></d>
  
   
  
                    </div>
                </div>
            </div>
        </div>
    </footer>
 
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/main.js"></script>
</body>
<?php } ?>
</html>
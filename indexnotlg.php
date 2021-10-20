<?php

        include('header.php');


?>
 <section class="hero-section home-page set-bg" data-setbg="img/bg.jpg">
        <div class="container hero-text text-white">
            <h2>  </h2>
            <h1 style="font-weight: bolder">Dream Home</h1>
        </div>
</section> <?php 
 
  
 ?>
   <section class="hotel-rooms spad">
       <div class="container">
           <div class="row">
              
   <?php
       include('connect.php');
       $result = $db->prepare("SELECT * FROM housedet WHERE status ='active'");
       $result->execute();
       for($i=0; $i = $result->fetch(); $i++){
   ?>


               <div class="col-lg-4 col-md-4 col-md-6">
                   <div class="room-items">
                       <div class="room-img set-bg" data-setbg="images/<?php echo $i['imglocation']; ?>">
                            
                       </div>
                       <div class="room-text">
                           <div class="room-details">
                               <div class="room-title">
                                   <h5><?php echo $i['housename']; ?></h5>
                                   <a href="#"><i class="flaticon-placeholder"></i> <span><?php echo $i['distric']; ?></span></a>
                                   <a href="#"><i class="flaticon-placeholder"></i> <span><?php echo $i['city']; ?></span></a>
                                   <a href="#" class="large-width"><i class="flaticon-cursor"></i> <span><?php echo $i['zip']; ?></span></a>
                               </div>
                           </div>
                           <div class="room-features">
                               <div class="room-info">
                                   <div class="size">
                                       <p>Payment Method</p>
                                       <img src="img/rooms/size.png" alt="">
                                       <i class="flaticon-bath"></i>
                                       <span><?php echo $i['pmethod']; ?></span>
                                   </div>
                                   <div class="beds">
                                       <p>Beds</p>
                                       <img src="img/rooms/bed.png" alt="">
                                       <span><?php echo $i['bedroom']; ?></span>
                                   </div>
                                   <div class="baths">
                                       <p>Baths</p>
                                       <img src="img/rooms/bath.png" alt="">
                                       <span><?php echo $i['bathroom']; ?></span>
                                   </div>
                                   <div class="garage">
                                       <p>Kitchen</p>
                                       <img src="img/rooms/garage.png" alt="">
                                       <span><?php echo $i['kitchen']; ?></span>
                                   </div>
                                   <div class="garage">
                                       <p>Living Room</p>
                                       <img src="img/rooms/garage.png" alt="">
                                       <span><?php echo $i['livingroom']; ?></span>
                                   </div>
                               </div>
                           </div>
                           <div class="room-price">
                               <p>For Sale</p>
                               <span>RS.<?php echo $i['price']; ?></span>
                           </div>
                           <a  href="single.php" class="site-btn btn-line">View Property</a>
                       </div>
                   </div>
               </div>
               <?php } ?>

           </div>
       </div>
   </section>
  

   <!-- Hotel Room Section End -->
   <!-- Popular Room Section Begin -->
   <section class="popular-room set-bg p-in" data-setbg="img/bg-2.jpg">
       <div class="container">
           <div class="row">
               <div class="col-lg-6 offset-lg-6">
                   <div class="slider-active owl-carousel">
                        
                   </div>
               </div>
           </div>
       </div>
   </section>
 
   <section class="newslatter-section">
       <div class="container">
           <div class="row">
               <div class="col-lg-12 text-center">
                   <div class="newslatter-text">
                       <img src="img/message.png" alt="">
                       <h4>if any question or doubt ask our message Box  <br>We Always With You.</h4>
                       <form>
                               <p> Click Message Box...  </p>                        
                               <button type="submit" class="  site-btn news-btn">Message!</button>
                               </div>
                             </form>
                   </div>
               </div>
         
       </div>
   </section>
  
   <section class="services-section">
       <div class="container">
           <div class="row">
               <div class="col-lg-6">
                   <div class="left-side">
                       <h2><span>Why choose homes?</span><br>Because we we are the best in <br>the business.</h2>
                       <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis id est nec nisl tristique
                           dignissim semper sed diam. Donec vulputate neque in massa hendrerit, non dignissim ipsum
                           varius. Mauris dignissim libero ipsum, nec molestie nulla molestie at. Nam imperdiet
                           hendrerit finibus. Sed porttitor ultricies sagittis. Nullam lobortis nec quam vitae
                           venenatis. </p>
                   </div>
               </div>
               <div class="col-lg-6">
                   <div class="right-side">
                       <ul>
                           <li><img src="img/check.png" alt="">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                           </li>
                           <li><img src="img/check.png" alt="">Praesent tincidunt diam in ante faucibus tristique.</li>
                           <li><img src="img/check.png" alt="">Vivamus id nisl sed mi varius lobortis.</li>
                           <li><img src="img/check.png" alt="">Suspendisse sit amet erat placerat, molestie neque id
                           </li>
                           <li><img src="img/check.png" alt="">Fusce pretium libero sit amet ipsum posuere pretium.
                           </li>
                           <li><img src="img/check.png" alt="">Praesent tincidunt diam in ante faucibus tristique.</li>
                       </ul>
                   </div>
               </div>
           </div>
       </div>
   </section>
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

</html>
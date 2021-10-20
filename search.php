 <?php 
        include('clients.php');
        $index = new client();
        $index->clients();
       
        include('header.php') ; 
  ?>
   <section class="hero-section home-page set-bg" data-setbg="img/bg.jpg">
        <div class="container hero-text text-white">
            <h2 style="font-weight: bolder">Search Your</h2>
            <h1 style="font-weight: bolder">Dream Home</h1>
        </div>
    </section>
    </section>
    <?php 
  include('loginbar.php');
  
  ?><br>
    
  
    <div class="filter-search search-opt" stdyle="height: 10px;" >
        <div  style="width: 100%;   " >
            <div class="row">
                <div class="col-lg-12">
                    <form class="filter-form" action="" method="POST">
                        <div class="location">
                            <p>District</p>
                            <?php 
                            
                            $sql = $db->prepare("SELECT * FROM housedet ");
                            $sql->execute();


                            ?>
                            <select class="filter-location" name="dis">
                                <?php 
                                while ($row = $sql->fetch()) {
                                    ?>
                                <option value="">Select</option>
                                <option value="<?php echo $row['distric'] ?>"><?php echo $row['distric'] ?></option>
                               
                                <?php
                                } ?>
                            </select>
                        </div>
                        <div class="location">
                            <p>City</p>
                            <select class="filter-location" name="city">

                              
                                <?php 
                                   $sql = $db->prepare("SELECT * FROM housedet ");
                                   $sql->execute();
                                while ($row = $sql->fetch()) {
                                    ?>
                                <option value="">Select</option>
                               
                                <option value="<?php echo $row['city'] ?>"><?php echo $row['city'] ?></option>
                               
                                <?php
                                } ?>
                            </select>
                        </div>
                        <div class="search-type">
                            <p>House Type</p>
                           <select class="filter-property" name="type">

                              
                                <?php 
                                   $sql = $db->prepare("SELECT * FROM housedet ");
                                   $sql->execute();
                                while ($row = $sql->fetch()) {
                                    ?>
                                <option value="">Select</option>
                               
                                <option value="<?php echo $row['housetype'] ?>"><?php echo $row['housetype'] ?></option>
                               
                                <?php
                                } ?>
                            </select>
                        </div>

                        <div class="search-type">
                            <p>Payment Method</p>
                            <select class="filter-property" name="pmethod">
                            <?php 
                                   $sql = $db->prepare("SELECT * FROM housedet ");
                                   $sql->execute();
                                while ($row = $sql->fetch()) {
                                    ?>
                                <option value="">Select</option>
                               
                                <option value="<?php echo $row['pmethod'] ?>"><?php echo $row['pmethod'] ?></option>
                               
                                <?php
                                } ?>
                            </select>
                        </div> 
                        
                        
                        <div class="search-btn  m-auto"  >
                            <button type="submit" name="ss"><i class="flaticon-search"  ></i>Search</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <br>
<br>    <!-- Filter Search Section End -->
    
    <!-- Hotel Room Section Begin -->
    <br><br>
    <section class="hotel-rooms spad">
        <div class="container">
            <div class="row">
               
            <?php


            if (isset($_POST['ss'])) {

                $disct = $_POST['dis'];
                $type = $_POST['type'];
                $pmethod = $_POST['pmethod'];
                $city = $_POST['city'];


                include('connect.php');
                $result = $db->prepare("SELECT * FROM housedet WHERE distric ='$disct' OR housetype ='$type' OR pmethod ='$pmethod' OR city ='$city'");
                $result->execute();
                for ($i=0; $row2 = $result->fetch(); $i++) {
                    ?>
 

                <div class="col-lg-4 col-md-4 col-md-6">
                    <div class="room-items">
                        <div class="room-img set-bg" data-setbg="images/<?php echo $row2['imglocation']; ?>">
                             
                        </div>
                        <div class="room-text">
                            <div class="room-details">
                                <div class="room-title">
                                    <h5><?php echo $row2['housename']; ?></h5>
                                    <a href="#"><i class="flaticon-placeholder"></i> <span><?php echo $row2['distric']; ?></span></a>
                                    <a href="#"><i class="flaticon-placeholder"></i> <span><?php echo $row2['city']; ?></span></a>
                                    <a href="#" class="large-width"><i class="flaticon-cursor"></i> <span><?php echo $row2['zip']; ?></span></a>
                                </div>
                            </div>
                            <div class="room-features">
                                <div class="room-info">
                                    <div class="size">
                                        <p>Payment Method</p>
                                        <img src="img/rooms/size.png" alt="">
                                        <i class="flaticon-bath"></i>
                                        <span><?php echo $row2['pmethod']; ?></span>
                                    </div>
                                    <div class="beds">
                                        <p>Beds</p>
                                        <img src="img/rooms/bed.png" alt="">
                                        <span><?php echo $row2['bedroom']; ?></span>
                                    </div>
                                    <div class="baths">
                                        <p>Baths</p>
                                        <img src="img/rooms/bath.png" alt="">
                                        <span><?php echo $row2['bathroom']; ?></span>
                                    </div>
                                    <div class="garage">
                                        <p>Kitchen</p>
                                        <img src="img/rooms/garage.png" alt="">
                                        <span><?php echo $row2['kitchen']; ?></span>
                                    </div>
                                    <div class="garage">
                                        <p>Living Room</p>
                                        <img src="img/rooms/garage.png" alt="">
                                        <span><?php echo $row2['livingroom']; ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="room-price">
                                <p>For Sale</p>
                                <span>Rs.<?php echo $row2['price']; ?></span>
                            </div>
                            <a href="#" class="site-btn btn-line">View Property</a>
                        </div>
                    </div>
                </div>
                <?php
                }
            }?>

            </div>
        </div>
    </section>
   </div>
</section>

    
    <?php include('fooder.php') ?>
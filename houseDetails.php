 
  
<?php 

  include('clients.php'); 
  $index = new client();
  $index->clients();
 


  include('header.php'); 


?>
        

        <style>
          
          input::-webkit-inner-spin-button,
          input::-webkit-outer-spin-button
            {
                -webkit-appearance:none;

            }
          a:hover
            {
                  color:white;
                      
            } 
            body
            {
              background-color: white;
            }
           
           .card
           {
            border-collapse: collapse;
             margin: 40px 20px 40px 350px;
            width: 50%;
            
 
           }

           .regbtn
            {
              margin: 0 0 55px 150px;
              text-align:center;
              font-weight: bolder;
              width: 320px;
              height: 70px;
              background-color: #2C2562;
              border-color: #2C2562;
              font-size: 25px;
              
            }
            .regbtn:hover
            {
              background-color:#2C2562 ;
              border-color: #2C2562;
            }
            .ch
            {
              
              color: ghostwhite;
              font-size: 25px;
              padding: 2px 0 2px 0;
              
            }
           
 
      </style>
       <?php include('header.php') ?>
   
<section class="hero-section home-page set-bg" data-setbg="img/bg.jpg">
  
  <div class="container hero-text text-white">
      <h2 style=" font-weight: bolder;">REGISTER</h2>
      <h1  style=" font-weight: bolder;">dream home.</h1>
  </div>
</section>
  
  <?php 
  include('loginbar.php');
  
  ?>

  <div class="row">

    <div class="col-lg-12">

      <div class="card" style=" box-shadow:  0 15px 35px;"  >
        <div class="card-header  " style="background-color:#2C2562;" >
            <txtsize class="font-weight-bold">
                <div class="ch"> House   Details  </div>
                </txtsize>
            </div>  
              
                    <!-- House Details -->
                        <div class="card-body"> 
                          <form method="post" action="" enctype="multipart/form-data" > 
                     <?php 

                          include('admin/house.php'); 
                          
                          $house = new house();
                          $house->houseinsert(); 
                      ?>
                          <span  style="color:#2C2562;font-weight:bold;text-transform:capitalize">  
                          <div class="form-row " style="margin-top: 20px;"> 
                           
                              <div class="form-group col-md-12">
                                  <label for="inputEmail4">House Name</label>
                                  <input type="text" class="form-control" id="inputEmail4" name="name" placeholder="Name" required>
                               </div>
                              <div class="form-group col-md-12">
                                  <label for="inputEmail4">House Address</label>
                                  <input type="text" class="form-control" name="address" id="inputEmail4" placeholder="Address" >
                              </div>
                              <div class="form-group col-md-12">
                                <label for="inputEmail4">Date</label>
                                <input type="date" class="form-control date" name="date" id="inputEmail4" required="emil" >
                             
                            </div>                             

                              <div class="form-group col-md-4">
                                <label for="inputDistrict">District</label>
                                  <select id="inputdistrict" name="distric" class="form-control">
                                  <option selected>Choose...</option> 
                                  <?php 
                                     
                                      
                                      $sqldis = $db->prepare("SELECT * FROM districts  ");
                                      $sqldis->execute();                                      
                                    

                                      while($rowdis = $sqldis->fetch()){             
                                       // for($rowdis=0;$rowdis=$sqldis->fetch();$rowdis++) another way  
                                                            
                                  ?>
                                  
                                 <option><?php echo $rowdis['DName']; ?></option>
                               <?php } ?>
                                
                                </select>

 
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputState">City</label>
                                <select id="inputState" name="city" class="form-control">
                                <option selected>Choose...</option>
                                       <?php 
                                       
                                       $sqlc = $db->prepare("SELECT * FROM city");
                                       $sqlc->execute();
                                       while ($rowd=$sqlc->fetch()) {
                                         
                                           ?>                                
                                  <option><?php echo $rowd['CityName'] ?></option>                               
                               
                                <?php } ?>
                                </select>
                                       
                            </div>
                            <div class="form-group col-md-2">
                              <label for="inputZip">Zip</label>
                              <input type="text" name="zip" class="form-control" id="inputZip">
                            </div>
    

                            <?php 
                               $lbresult = $db->prepare("select * from client where clientid = '" .$_SESSION['id']."'");
                               $lbresult->execute();
                               $ro=$lbresult->fetch();
   
                                 $ro['clientid'];

                               ?>
 
                                <input type="hidden" name="rr" value="<?php echo $ro['clientid']?>" >        



                              <div class="form-group col-md-3">
                                <label for="inputDistrict">Living Room</label>
                                  <select id="inputdistrict" name="Liveroom" class="form-control">
                                  <option selected>Choose...</option>
                                  <option >1</option>
                                  <option >2</option>
                                  <option >3</option>
                                  <option >4</option>
                                  <option >5</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputState">Bedroom </label>
                                <select id="inputState" name="bedroom" class="form-control">
                                  <option selected>Choose...</option>
                                  <option >1</option>
                                  <option >2</option>
                                  <option >3</option>
                                  <option >4</option>
                                  <option >5</option>                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputState">Kitchen </label>
                                <select id="inputState" name="kitchen" class="form-control">
                                  <option selected>Choose...</option>
                                  <option >1</option>
                                  <option >2</option>
                                  <option >3</option>
                                  <option >4</option>
                                  <option >5</option>                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputState">Bathroom</label>
                                <select id="inputState" name="bathroom" class="form-control">
                                  <option selected>Choose...</option>
                                  <option >1</option>
                                  <option >2</option>
                                  <option >3</option>
                                  <option >4</option>
                                  <option >5</option>                              
                                </select>
                            </div>

                            <div class="form-group col-md-12">
                              <label for="inputPhoto"> Select Your Photo</label>
                               <div class="custom-file">
                                  <input type="file" class="custom-file-input" name="image" id="customFile"  >
                                  <label class="custom-file-label" for="customFile">Choose file</label>
                               </div>
                          </div>
                             
                              <div class="form-group col-md-12 ">
                                <label for="inputDistrict">House Type</label>
                                  <select id="inputdistrict" name="housetype" class="form-control">
                                  <option selected>Choose...</option>
                                  <option>...</option>
                                </select>
                               </div>
                    
                          
    
                              <div class="form-group col-md-12">
                                <label for="inputDistrict">Rent period</label>
                                  <select id="inputdistrict" name="period" class="form-control">
                                  <option selected>Choose...</option>
                                  <option>1 Year</option>
                                  <option>3 Year</option>
                                  <option>5 Year</option>
                                  <option>Render Choose</option>
                                </select>
                               </div>
                               
                                          
                              <div class="form-group col-md-6">
                                <label for="inputDistrict">Payment Method</label>
                                  <select id="inputdistrict" name="pmethod" class="form-control">
                                  <option selected>Choose...</option>
                                  <option>Monthly</option>
                                  <option>Yearly</option>
                                  <option>Enbloc</option>

                                </select>
                               </div>
    
                               <div class="form-group col-md-6">
                                <label for="inputDistrict">Price Total/Month</label>
                                  <input type="text" id="inputdistrict" name="price" class="form-control" placeholder="RS60000.00">
                                </div>
                           </div>
                          <div >
                             <br>
                            <button type="submit" name="save" class="btn btn-success  regbtn"  >Register</button>
                          </div>
                         </span>  
                    </div>  
              </form>                  
        </div>
    </div>
   </div>

   
    <?php include('fooder.php') ?>
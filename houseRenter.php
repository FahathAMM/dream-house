<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Renter</title>

   
      
    <link rel="stylesheet" href="css/style.css" type="text/css">

        <link rel="stylesheet" href="css/bootstrap.css">
       
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i"
        rel="stylesheet">

       

          <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
          <link rel="stylesheet" href="css/nice-select.css" type="text/css">  
          <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">  
          <link rel="stylesheet" href="css/flaticon.css" type="text/css">  
          <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">  
          <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css"> 
        
          <link rel="stylesheet" href="css/style.css" type="text/css">  
          <link rel="stylesheet" href="css/bootstrap.min.css">
       
 

        

        <style>
          
          input::-webkit-inner-spin-button,
          input::-webkit-outer-spin-button
            {
                -webkit-appearance:none;   /*number tyep spinner remove*/

            }
          a:hover
            {
                  color:white;
                      
            } 
            body
            {
              background-color: white;
            }
             
          
          
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
       
            .regbtn
            {
              margin: 0 0 55px 130px;
              text-align:center;
              font-weight: bolder;
              width: 320px;
              height: 70px;
              background-color: #2C2562;
              border-color: #2C2562;
              font-size: 25px;
             text-align: center;
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
           


         
     
 
  

        
</head>
<body>
  <div id="preloder">
    <div class="loader"></div>
</div>
 <header class="header-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="logo">
                    <a href="./index.html">
                        <img src="img/logo.png" alt="">
                    </a>
                </div>


               

                <ul class="main-menu ">
                 
                 
                       
                  <li><a href="./index.php" class="text-decoration-none  ">Home</a></li>
                  <li><a href="./houseDetails.php" class="text-decoration-none">House Register</a></li>
                  <li><a href="./search.php" class="text-decoration-none">Search Results</a></li>
                  <li><a href="./Login.php" class="text-decoration-none">Login</a></li>
                  <li><a href="./contact.php" class="text-decoration-none">Contact</a></li>
                  <li><a href="./about.php" class="text-decoration-none">About</a></li>
                 
                    <li class="top-social">
                        <a href="#"><i class="fa fa-pinterest"></i></a>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                        
                    </li>
                   
                </ul>
                <div id="mobile-menu-wrap"></div>
          
          </div>
        </div>
    </div>
</header>
<section class="hero-section home-page set-bg" data-setbg="img/bg.jpg">
  
  <div class="container hero-text text-white">
      <h2 style=" font-weight: bolder;">RENT</h2>
      <h1  style=" font-weight: bolder;">dream home.</h1>
  </div>
</section>
 
 
 


 
<div class="container" style="width: 650px; margin-top: 100px; margin-bottom: 100px;">  
  
      <div class="card text-left">
        
        <div class="card"  style=" box-shadow:  0 15px 35px;" >
          <div class="card-header" style="background-color:#2C2562;" >
              <txtsize class="font-weight-bold">
                  <div  class="ch"> THE HOUSE RENTER DETAILS    </div>
                  </txtsize>
              </div>  
              

                <!-- house Owner -->
          <div class="card-body">
            
                 <form style="color:#2C2562; font-weight: bold;">       
                      <div class="form-row" style="padding-top: 20px;">

                             <div  class="form-group col-md-6">
                               <p class="text-left">   House Onwer ID  </p>
                                        
                                 </div>

                                   <div  class="form-group col-md-6">
                                      <p class="text-right">   House ID  </p>
                                   </div>

                                <div class="form-group col-md-12">
                                    <label for="validationTooltip01">   Sure Name  </label>
                                    <input type="text" class="form-control" id="inputEmail4" placeholder="Ex:-mohamed Fahath" required>
                                    </div>
                    
                                  <div class="form-group col-md-12">
                                    <label for="inputEmail4">House Address</label>
                                    <input type="text" class="form-control" id="inputEmail4" placeholder="Ex:-fahath" required>
                                
                                  </div>

                              <div class="form-group col-md-12">
                                <label for="inputEmail4">Email</label>
                                <input type="email" class="form-control" id="inputEmail4"placeholder="Ex:-fahath@gmail.com" required="emil" >
                              </div>
                        
                      </div>
                      <div class="form-group">
                        <label >Address</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="Ex:-1234 Main St" required>
                      </div>
                      <div class="form-row">
                      <div class="form-group col-md-6 ">
                        <label for="inputAddress2">Mobile Number</label>
                         <input   type="number"  class="form-control " id="inputAddress2" placeholder=" Ex:-0771347913" required >
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputAddress2">Telephone Number</label>
                         <input   type="number"  class="form-control  " id="inputAddress2" placeholder=" Ex:-0771347913" required >
                      </div>
                    </div>
                       

                      <div class="form-row">
                          
                        <div class="form-group col-md-4">
                          <label for="inputDistrict">District</label>
                            <select id="inputdistrict" class="form-control"required>
                            <option selected>Choose...</option>
                            <option>...</option>
                          </select>
                        </div>

                        <div class="form-group col-md-6">
                          <label for="inputState">City</label>
                          <select id="inputState" class="form-control" required>
                            <option selected>Choose...</option>
                            <option>...</option>
                          </select>
                        </div>

                        <div class="form-group col-md-2">
                          <label for="inputZip">Zip</label>
                          <input type="text" class="form-control" id="inputZip" required>
                        </div>
                      </div>
                       
                           <div>
                              <label for="inputPhoto"> Select Your Photo</label>
                            <div class="custom-file">
                     
                          <input type="file" class="custom-file-input" id="customFile" required>
                          <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                      </div>
                      <br><br>
                      <button type="submit" class="btn btn-success regbtn">BUY</button>
                      
                      
                      </div>
                       
                    </div>
                   
                 </div>
               </span>     
             </form>     
            </div>      
         
         
     
   


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
                      
           <d style="color: wheat; font-weight: bold;">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Software Engineer Fahath <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="http/www.fahath.com" target="_blank">Fahath</a></d>

 

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
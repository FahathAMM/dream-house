<?php 

class house
{
    public function houseinsert()
                {
                    include('connect.php');
                 try {

                
                    if (isset($_POST['save']))
                          {

                            $sql1 = $db->prepare("SELECT * FROM housedet order by No desc ");
                            $sql1->execute(); 

                            if ($row = $sql1->fetch()) 
                            {   $no=$row['No'];
                                $no++;
                                $hno = substr($row['houseid'],7, strlen($row['houseid']));   // number 7 is delete string letters or "CTY" 7 letters delete aahum
                                $hno++;
                                $hno ="HOUSEID".$hno;  // 7 letters delte aanathuku apram defalut "DISC" Add pnrathu
                               

                            } 
                            else 
                            {
                                $hno = "HOUSEID101";
                                $no=1;
                            }
 
                           
                            
                              move_uploaded_file($_FILES["image"]["tmp_name"], "images/" . $_FILES["image"]["name"]);
                              $location=$_FILES["image"]["name"];


                              $housename=$_POST['name'];
                              $houseaddress=$_POST['address'];
                              $housedate=$_POST['date'];
                              $housedistric=$_POST['distric'];
                              $housecity=$_POST['city'];
                              $housezip=$_POST['zip'];
                              $houseliving=$_POST['Liveroom'];
                              $housebed=$_POST['bedroom'];
                              $housekitchen=$_POST['kitchen'];
                              $housebathroom=$_POST['bathroom'];
                              $housetype=$_POST['housetype'];
                              $houseperiod=$_POST['period'];
                              $housemethod=$_POST['pmethod'];
                              $houseprice=$_POST['price'];
                               $clientid = $_POST['rr'];         
                              //PDO Method
                              $sql = "insert into housedet (No,houseid,clientid,housename,houseaddress,date,distric,city,zip,livingroom,bedroom,kitchen,bathroom,housetype,period,pmethod,price,imglocation,status) values ('$no','$hno','$clientid','$housename','$houseaddress','$housedate','$housedistric','$housecity','$housezip','$houseliving','$housebed','$housekitchen','$housebathroom','$housetype','$houseperiod','$housemethod','$houseprice','$location','nonactive')";
                              $db->exec($sql);
                              echo "<script> alert('Success Register Your House Deteils'); </script>";
                              }
                  } 
                  catch (PDOException $e) 
                    {
                      echo $sql."<br>".$e->getMessage();
                    }

              


                /* 
                    MYSQLi Normal method
                    $sql = "insert into housedet (housename,houseaddress,date,distric,city,zip,livingroom,bedroom,kitchen,bathroom,housetype,period,pmethod,price,imglocation) values ('$housename','$houseaddress','$housedate','$housedistric','$housecity','$housezip','$houseliving','$housebed','$housekitchen','$housebathroom','$housetype','$houseperiod','$housemethod','$houseprice','$location')";
                    if ($conn->query($sql))
                      {
                      echo "<script> alert('Success Register Your House Deteils'); </script>";
                      } 
                  else
                      {
                      echo "error   ".$sql."<br>".$conn->error;
                      }
                mysqli_close($conn);      
                */
                }

                public function hivew()
                {
                    
                include('../connect.php');
                
               

                
                            $result = $db->prepare("SELECT * FROM housedet WHERE status='nonactive' ORDER BY houseid Desc");
                            $result->execute();

                            while($row=$result->fetch())
                            {
                                $data[]=$row;
                            }

                          return $data;
                }

                public function buy()
                {
                    
                include('../connect.php');
                
                
                            $result = $db->prepare("SELECT * FROM housedet WHERE status='sale' ORDER BY houseid Desc");
                            $result->execute();

                            while($row=$result->fetch())
                            {
                                $data[]=$row;
                            }

                          return $data;
                }
}

?>
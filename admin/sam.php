
<?php
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
			$id=$_GET['id'];
			$umail=$_GET['umail'];
			$carid=$_GET['carid'];
			$oid=$_GET['oid'];

			$status="Accepted the Rent car\n";
			$date = date("Y-m-d");
			date_default_timezone_set('Asia/Colombo');
			$time = date("h:i:s A");
    $sql = "insert into notification(userid,status,date,time,oid) values('$id','$status','$date','$time','$oid')";
	   $quary = "UPDATE orders SET action = '1' WHERE carid= '". $carid."'";
 
	
	// mail varification 
	
	
	    $to_email = $umail;
    $from_email = "KMMS@gmail.com";
    $subject = "verification";
    $body = "Hello sir, 

Dear sir, 
Your recently requested for the Car Accepted in : $date That date.
. 
                                     KMMG Car rental Team,
 

Thank you.";
 
    if ( mail($to_email, $subject, $body)) {
      echo("Email successfully sent to $to_email...");
    } else {
      echo("Email sending failed...");
    }
	
	
	
   
    mysql_select_db('carrent');
   $retval = mysql_query( $sql, $conn );
   $retval2 = mysql_query( $quary, $conn );
 ?>
										<script>
										window.location = "order.php";
										 alert("Accepted the Rent ")

										</script>
										<?php
 
    mysql_close($conn);
?>
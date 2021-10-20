<?php

	try 
	{
		//PDO Corncept
		if(isset($_POST['login'])){
			
			session_start();


			include('connect.php');

			$email=$_POST['email'];
			$pass=$_POST['password'];
			
			$result = $db->prepare("Select * from client where email='$email' && password='$pass'");
			$result->execute();
		
				if($ro=$result->fetch())
					{
						$_SESSION['id']  =  $ro['clientid'];
						header('location:index.php');
					?>
						<script>
						alert("Login Success");
					//	window.location = 'index.php';
				
						
						</script>
				<?php 
					}
					else
					{
						

						echo "<script> alert ('invalid Register')</script>";
						echo "<script> 	window.location = 'login.php'</script>";
					
					}
		 
			 
		}
	} 
	catch (\PDOException $e) {
		echo $sql."<br>".$e->getMessage();
	}

 

		?>
			

 <?php
   /*
   OOP Corncept
	if(isset($_POST['login'])){
		
		session_start();


		include('dbcon.php');	

		$email=$_POST['email'];
		$pass=$_POST['password'];
		
		
	//	$query=mysql_query("select * from `client` where email='$email' && password='$pass'");
		$sql="select * from `client` where email='$email' && password='$pass'";
		$rel=$conn->query($sql);
	 
			if($rel->num_rows>0)	
			{
				$ro=$rel->fetch_assoc();
	
				$_SESSION['id']  =  $ro['clientid'];
				header('location:index.php');
				?>
				<script>
				alert("Login Success")
				</script>
				<?php 
		 	}
			else
			{
			}
			 
		}
		
*/
		?>
		
			
 
 
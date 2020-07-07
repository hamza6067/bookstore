<?php
	require('includes/config.php');
	
			{
		
			$unm=$_POST['unm'];
			$pwd=$_POST['pwd'];
				
		
			
			
			$query="insert into user(u_unm,u_pwd)
			values('$unm','$pwd')";
			
			mysqli_query($conn,$query) or die("Can't Execute Query...");
			header("location:register.php?ok=1");
		}
	
	
?>
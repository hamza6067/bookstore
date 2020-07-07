<?php
	require('includes/config.php');
			{
				
				$coupon=$_POST['coupon'];
				$dis=$_POST['dis'];
				
				$query="insert into addcoupn(u_coupon,u_dis) values('$coupon','$dis')";
				
				mysqli_query($conn,$query) or die("Can't Execute Query...");
				header("location:coupon.php?ok=1");
		    }
	
	
?>
<?php

	require('includes/config.php');
			
			$query="delete from addcoupn where c_id =".$_GET['id'];
		
			mysqli_query($conn,$query) or die("can't Execute...");
			
			
			header("location:coupon.php");

?>
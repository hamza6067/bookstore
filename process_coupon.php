<?php
require('includes/config.php');
			 
			$query=mysqli_query("select u_dis from addcoupn");
		    if($query==0)
			{
				echo 1;
			}
			mysqli_query($conn,$query) or die("can't Execute...");
			$dis = $_GET['$query'];
			
			
			header("location:viewcart.php");
?>
	
	
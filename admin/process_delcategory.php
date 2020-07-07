<?php
require('includes/config.php');
			
			$query="delete from category where cat_id =".$_GET['id'];
		
			mysqli_query($conn,$query) or die("can't Execute...");
			
			
			header("location:category.php");
?>
	
	
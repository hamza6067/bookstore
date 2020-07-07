<?php
require('includes/config.php');
	
			$query="delete from category where subcat_id =".$_GET['id'];
		
			mysqli_query($conn,$query) or die("can't Execute...");
			
			header("location:subcategory.php");
		
?>
	
	
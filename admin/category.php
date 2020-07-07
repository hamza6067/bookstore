<?php session_start();
require('includes/config.php');
$q="select * from category";
	 $res=mysqli_query($conn,$q) or die("Can't Execute Query...");
?>


<html 
<head>
		<?php
			include("includes/head.inc.php");
		?>
</head>
<body>
<!-- start header -->
<div id="header">
	<div id="menu">
		<?php
			include("includes/menu.inc.php");
		?>
	</div>
</div>
<div id="logo-wrap">
<div id="logo">
		<?php
			include("includes/logo.inc.php");
		?>
</div>
</div>
<!-- end header -->
<!-- start page -->

<div id="page">
	<!-- start content -->
	<div id="content">
		<div class="post" style="margin-left:100px">
			<h1 class="title"></h1>
			<div class="entry" style="min-height:400px">
				<form action='process_addcategory.php' method='POST'>
						<b style="color:darkgreen">ADD CATEGORY </b>
							<br/>
							<input type='text' name= 'cat' size='25'>
							
							<input type='submit'  value='  ADD  '>
							
							<br><br>
				</form>
				<hr>
				<form action='process_addcategory.php' method='POST'>
				<!-- start page -->

<div id="page">
	<!-- start content -->
	<div id="content">
		<div class="post">
			<h1 class="title"></h1>
			<div class="entry">
					<table border='1' WIDTH='100%'>
						<tr>
								<td WIDTH='10%' style="color:darkgreen"><b><u>SR.NO</u></b>
								<TD style="color:darkgreen" WIDTH='20%'><b><u>CATEGORY ID</u></b>
								<TD style="color:darkgreen" WIDTH='20%'><b><u>CATEGORY NAME</u></b>
								<TD style="color:darkgreen" WIDTH='25%'><b><u>DELETE</u></b>
							
						</tr>
						<?php
							$count=1;
							while($row=mysqli_fetch_assoc($res))
							{
							echo '<tr>
										<td>'.$count.'
										<td>'.$row['cat_id'].'
										<td>'.$row['cat_nm'].'
										<td><a href="process_delcategory.php?id='.$row['cat_id'].'"><img src="images/drop.png" ></a>
												
									
									</tr>';
									$count++;
							}
						?>

					</TABLE>
				
			</div>
			
		</div>
		
	</div>
	<!-- end content -->
	
	<!-- start sidebar -->
	
	<!-- end sidebar -->
	<div style="clear: both;">&nbsp;</div>
</div>
<!-- end page -->
<!-- start footer -->
<div id="footer">
			<?php
				include("includes/footer.inc.php");
			?>
</div>
<!-- end footer -->
</body>
</html>

<?php session_start();
require('includes/config.php');

	$q="select * from addcoupn";
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
					
									<h1 class="title">Add coupons here.</h1>
								<div class="post">
						
									<div class="entry">
									<br><br>
										<?php
											if(isset($_GET['error']))
											{
												echo '<font color="red">'.$_GET['error'].'</font>';
												echo '<br><br>';
											}
											
											if(isset($_GET['ok']))
											{
												echo '<font color="blue">You added a coupon..</font>';
												echo '<br><br>';
											}
										
										?>
									
										<table>
											<form action="process_coupon.php" method="POST">
												
												<tr>
													 <td><b>Coupons details :</b>&nbsp;&nbsp;</td>
													 <td><input type='text' size="50" maxlength="50" name='coupon'></td>
													 <td>&nbsp;</td>
													
												</tr>
												
												<tr><td>&nbsp;</tr>
												
												<tr>
													<td><b>Discount :</b>&nbsp;&nbsp;</td>
													<td><input type='text' name='dis' size="10"></td>
													 
												</tr>
																			
												
												<tr><td>&nbsp;</tr>
												
												
												
												
												<tr>
													<td colspan='2' align='center'>
														<input type='submit' value="  OK  ">
													</td>
												</tr>
											</form>
										</table>
									</div>
									
								</div>
					
					
							</div>
				
						<!-- end content -->
						<!-- start page -->

<div id="page">
	<!-- start content -->
	<div id="content">
	<h1 class="title">Delete coupons here.</h1>
		<div class="post">
			<h1 class="title"></h1>
			<div class="entry">
			
				
					<table border='1' WIDTH='100%'>
					
						<tr>
								<td WIDTH='10%' style="color:darkgreen"><b><u>SR.NO</u></b>
								<TD style="color:darkgreen" WIDTH='20%'><b><u>COUPON DETAIL </u></b>
								<TD style="color:darkgreen" WIDTH='20%'><b><u>DISCOUNT </u></b>
								<TD style="color:darkgreen" WIDTH='25%'><b><u>DELETE</u></b>
							
						</tr>
						<?php
							$count=1;
							while($row=mysqli_fetch_assoc($res))
							{
							echo '<tr>
										<td>'.$count.'
										<td>'.$row['u_coupon'].'
										<td>'.$row['u_dis'].'
										<td><a href="process_del_coupon.php?id='.$row['c_id'].'"><img src="images/drop.png" ></a>
												
									
									</tr>';
									$count++;
							}
						?>

					</TABLE>
				
			</div>
			
		</div>
		
	</div>
	<!-- end content -->
						
						
</body>
</html>

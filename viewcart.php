<?php session_start();
   require('includes/config.php');
     $q = "select * from addcoupn";
	 $res = mysqli_query($conn,$q) or die("Can't Execute Query...");
	 

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
						<div class="post">
							<h1 class="title">Viewcart</h1>
							<div class="entry">
						
							<pre><?php
							//	print_r($_SESSION);
							?></pre>
						
							<form action="process_cart.php" method="POST">
							<table width="100%" border="0">
								<tr >
									<Td> <b>No
									<td> <b>Category
									<td> <b>Product
									<td> <b>Qty
									<td> <b>Rate
									<td> <b>Price
									<td> <b>Delete
								</tr>
								<tr><td colspan="7"><hr style="border:1px Solid #a1a1a1;"></tr>
							
								<?php
									$tot = 0;
									$dis = 0;
									$gst = 0;
									$subtot = 0;
									$i = 1;
									if(isset($_SESSION['cart']))
									{

									foreach($_SESSION['cart'] as $id=>$x)
									{	
										echo '
											<tr>
											<Td> '.$i.'
											<td> '.$x['cat'].'
											<td> '.$x['nm'].'
											<td> <input type="text" size="2" value="'.$x['qty'].'" name="'.$id.'">
											<td> '.$x['rate'].'
											<td> '.($x['qty']*$x['rate']).'
											<td> <a href="process_cart.php?id='.$id.'">Delete</a>
										</tr>
										';
										
										
										$tot = $tot + ($x['qty']*$x['rate']);
										$i++;
										$gst = $tot * 5/100;
										$diss=10;
										$dis=($diss/100)*$tot;
										$subtot=$tot+$gst-$dis;
										
								
									}
									}
								
								?>
							<tr><td colspan="7"><hr style="border:1px Solid #a1a1a1;"></tr>
							
							
							<tr>
							<td colspan="6" align="right">
							<h4>Total:</h4>
							
							
							</td>
							<td> <h4><?php echo $tot; ?> </h4></td>
							</tr>
							<tr><td colspan="7"><hr style="border:1px Solid #a1a1a1;"></tr>
							
							<tr>
							<td colspan="6" align="right">
							<h4>Gst:</h4>
							
							</td>
							<td> <h4><?php echo $gst; ?> </h4></td>
							</tr>
							<tr><td colspan="7"><hr style="border:1px Solid #a1a1a1;"></tr>
							<tr>
							<tr>
							<td colspan="6" align="right">
							<h4>Discount:</h4>
							
							</td>
							<td> <h4><?php echo $dis; ?> </h4></td>
							</tr>
							<tr><td colspan="7"><hr style="border:1px Solid #a1a1a1;"></tr>
							<tr>
							
							
							
							<tr>
							<td colspan="6" align="right">
							<h4>SubTotal:</h4>
							</td>
							<td> <h4><?php echo $subtot; ?> </h4></td>
							</tr>
							<tr><td colspan="7"><hr style="border:1px Solid #a1a1a1;"></tr>
							<tr>
							<td>
						<td>
												
							
							<Br>
							
						
							
								</table>	
<table border='1' WIDTH='100%'>
						<tr>
						<td WIDTH='10%' style="color:darkgreen"><b><u>Sr.no.</u></b>
								<td WIDTH='10%' style="color:darkgreen"><b><u>Coupon detail</u></b>
								<TD style="color:darkgreen" WIDTH='20%'><b><u>discount</u></b>
								<TD style="color:darkgreen" WIDTH='25%'><b><u>Add offer</u></b>
													
						</tr>
						<?php
							$count=1;
							while($row=mysqli_fetch_assoc($res))
							{
							echo '<tr>
										<td>'.$count.'</td>
										<td>'.$row['u_coupon'].'</td>
										<td>'.$row['u_dis'].'</td>
										<td>
										<form action="process_coupon.php" method="POST">
										<input type="submit" value=" Re-Calculate " >
										</form>
										
										
									
									</tr>';
									$count++;
							}
							
							?>
						
					</TABLE>								

								<br><br>
							<center>
							<input type="submit" value=" Re-Calculate " > 
							<a href="payment.php">CONFIRM & PROCEED<a/>
							</center>
							</form>
							</div>
							
						</div>
						
					</div>
					<!-- end content -->
					<!-- start sidebar -->
					<div id="sidebar">
							<?php
								include("includes/search.inc.php");
							?>
					</div>
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

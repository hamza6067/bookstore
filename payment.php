<?php session_start();
require('includes/config.php');
?>

<html 


			<!-- start page -->

				<div id="page">
					<!-- start content -->
					<div id="content">
						<div class="post">
							<center><h1 class="title">INVOICE</h1>
							<div id="identity">
		
           <h3>ABC Bookstore,Azamgarh</h3></center>
		

		

            

                    <td class="meta-head">Date </td><br>
                    <td><textarea id="date">June 2, 2018</textarea></td>
                </tr>
                <tr>
							<div class="entry">
						
							<pre><?php
							//	print_r($_SESSION);
							?></pre>
						
							<form action="process_cart.php" method="POST">
							<table width="100%" border="0">
								<tr >
									<Td> <b>No
									
									<td> <b>Product
									<td> <b>Category
									<td> <b>Qty
									<td> <b>Rate
									<td> <b>Price
								
								</tr>
								<tr><td colspan="7"><hr style="border:1px Solid #a1a1a1;"></tr>
							
								<?php
									$tot = 0;
									$i = 1;
									if(isset($_SESSION['cart']))
									{

									foreach($_SESSION['cart'] as $id=>$x)
									{	
										echo '
											<tr>
											<Td> '.$i.'
											
											<td> '.$x['nm'].'
											<td> '.$x['cat'].'
											<td> <input type="text" size="2" value="'.$x['qty'].'" name="'.$id.'">
											<td> '.$x['rate'].'
											<td> '.($x['qty']*$x['rate']).'
									
										</tr>
										';
										
										$tot = $tot + ($x['qty']*$x['rate']);
										$i++;
										$gst = $tot * 5/100;
										$subtot = $tot + $gst;
									$dis=(10/100)*$tot;
									$subtot=$tot+$gst-$dis;
								
									}
									}
								
								?>
							<tr><td colspan="7"><hr style="border:1px Solid #a1a1a1;"></tr>
							
							
							<tr>
							<td colspan="6" align="right">
							<h3>Total:</h3>
							
							
							</td>
							<td> <h3><?php echo $tot; ?> </h3></td>
							</tr>
							<tr><td colspan="7"><hr style="border:1px Solid #a1a1a1;"></tr>
							
							<tr>
							<td colspan="6" align="right">
							<h3>Gst:</h3>
							
							</td>
							<td> <h4><?php echo $gst; ?> </h4></td>
							</tr>
							<tr><td colspan="7"><hr style="border:1px Solid #a1a1a1;"></tr>
							<tr>
							<tr>
							<td colspan="6" align="right">
							<h3>Discount:</h3>
							
							</td>
							<td> <h3><?php echo $dis; ?> </h3></td>
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

								<br><br>
							<center>
							<input type="button" value="Print" onClick="window.print()">
							<a href="index.php">Cancel<a/>
							</center>
							</form>
							</div>
							
						</div>
						
					</div>
					<!-- end content -->
					
						
</body>
</html>

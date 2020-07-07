<?php session_start();

	if(isset($_GET['nm']) and isset($_GET['cat']) and isset($_GET['rate']))
	{
		//add item
		$_SESSION['cart'][] = array("nm"=>$_GET['nm'],"cat"=>$_GET['cat'],"rate"=>$_GET['rate'],"qty"=>"1");
		header("location: payment.php");
	}
	
		header("location: payment.php");
	
	else if(!empty($_POST))
	{
		//update qty
		foreach($_POST as $id=>$val)
		{
			$_SESSION['cart'][$id]['qty']=$val;
			header("location: payment.php");
		}
	}


?>
<?php

	session_start();
	include "db.php";
	if(isset($_POST['carts']))
	{

		$currdate = date("y-m-d");
		$spname = $_SESSION['pname'];
		$scost = $_SESSION['cost'];
	
		$sql = "INSERT INTO `show_cart`(`productname`, `cost`, `date`) VALUES ('$spname','$scost','$currdate')";
		$query = mysqli_query($con,$sql);
		if($query)
		{
			header('Location:productp4.php');
		}
	}
?>
<?php
	
	// session_start();
	include "db.php";


	if(isset($_POST['login'])){
	 $lname = $_POST['lname'];
	 $lpassword = $_POST['lpassword'];
	 $sql = "SELECT `password` FROM `registration` WHERE password='$lpassword'";
	 $res = mysqli_query($con,$sql);
	 if(mysqli_num_rows($res)>0)
	 {
	 	header('Location:product.php');
	 }
	 else{
	 	header('Location:login.php');
	 }
	}
	else{
		header('Location:login.php');
	}
	
?>
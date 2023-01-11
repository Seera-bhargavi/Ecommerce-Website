<?php 

	include "db.php";

	if(isset($_POST['register'])){
	 $uname = $_POST['rname'];
	 $upassword = $_POST['rpassword'];
	 $uphone = $_POST['rphone'];
	 $r = $_POST['remember']?$_POST['remember'] == 'on':"";
	 if($r)
	 {
	 	session_start();
	 	$_SESSION['uname'] = $uname;
	 	$_SESSION['upassword'] = $upassword;
	 	$_SESSION['uphone'] = $uphone;
	 }
	 // $sql = "INSERT INTO `registration`(`username`, `password`, `phone`) VALUES ('Bhargavi','bhargavi','756920874')";
	 $sql = "INSERT INTO `registration`(`username`, `password`, `phone`) VALUES ('$uname','$upassword','$uphone')";
	 $row = mysqli_query($con,$sql);
	 // if($row)
	 // {
	 // 	echo "inserted";
	 // }
	 // else{
	 // 	echo "not inserted";
	 // }
	 header('Location:login.php');
	}
	else{
		header('Location:registration.php');
	}



	
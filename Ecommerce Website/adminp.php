<?php 
	include "db.php";

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CartItems</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body></body>
</html>
<?php
	 
	 if(isset($_POST['add']))
	 {
	 	$pname = $_POST['pname'];
	 	$cost = $_POST['cost'];
	 	$currdate = date("y-m-d");

	 	session_start();
	 	$_SESSION['pname'] = $pname;
		$_SESSION['cost'] = $cost;
		
	 	$product = $_FILES['product'];
	 	$location = $product['tmp_name'];
	 	$itemname = $product['name'];
	 	$d ="uploadproduct/.$itemname";
	 	if(move_uploaded_file($location, $d))
	 	{
	 		echo "successful";
	 	}
	 	else{
	 		echo "not uploaded";
	 	}

		$sql = "INSERT INTO `cart_item`( `productname`, `cost`, `date`,`image`) VALUES ('$pname','$cost','$currdate','$itemname')";
		$query = mysqli_query($con,$sql);
		if($query)
		{
			echo "inserted";
		}
		else{
			echo "not inserted";
		}
	 }
	 else {
	 	header('Location:adminproduct.php');
	 }
?>
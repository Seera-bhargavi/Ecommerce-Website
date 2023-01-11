<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
	<title></title>
</head>
<body>
	<div class="container justify-content-center mt-4">
		<h2 class="text-center"><u>Cart Items</u></h2>
<table class="table table-striped ms-5 mt-5 table-bordered" style="width:800px">
  <thead>
    <tr>
      <th scope="col">Sno</th>
      <th scope="col">Productname</th>
      <th scope="col">cost</th>
      <th scope="col">Action</th>
    </tr>
  </thead>

<?php

	include "db.php";

	$sql = "SELECT `sno`,`productname`,`cost`,`date` FROM `show_cart`";
	$row = mysqli_query($con,$sql);
	if(mysqli_num_rows($row)!=0)
	{
	?><div class="container" id="removeitem">
	 	<?php while ($res = mysqli_fetch_array($row)) {?>
	 		<tr>
	 	<td><?php echo $res['sno']?></td>
	 	<td><?php echo $res['productname']?></td>
	 	<td><?php echo $res['cost']?></td>
	 	<td><form action="productremove.php" method="post"><input type="submit" value="Remove" name="remove" class="btn btn-danger"></form></td>
	 	</tr>
	 </div>
	 <?php 
	 }
	}
?>
</table>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">/
		#pcard: hover{
			cursor: pointer;
		}
	</style>
</head>
<body>

<?php
	
	session_start();
	include "header.php";
	include "db.php";
	$parray = scandir("uploadproduct");
	$images = array_diff($parray, array('.','..'));

		$query2 = "SELECT `productname`,`cost`,`image` FROM `cart_item`";
		$result = mysqli_query($con,$query2);
		if(mysqli_num_rows($result) != 0)
		{
			?>
			<div class="container">
			<div class="row my-2"><?php
			while($row = mysqli_fetch_array($result)){
				
		?> 
				<div class="col-md-3 mt-3" style="cursor:pointer">
				<div style="border:1px solid #333;background: #f1f1f1;border-radius: 4px;text-align: center;padding:10px 0;">
					<img src="uploadproduct/.<?php echo $row["image"];?>" style="width: 180px;height:120px; margin-bottom: 10px;">
					<p class="h6"><?php echo $row['productname'];?></p>
					<p class="h6"><?php echo $row['cost'];?></p>
					<form action="pcart.php" method="post"><input type="submit" name="carts" value="cart" class="btn btn-primary" id="cartitem"></form>
				</div>
				</div>
		<?php
			
			}

			?></div>
			</div><?php
		}
?>
	<?php include "footer.php";?>

<script type="text/javascript">
	document.getElementById('cartitem').addEventListener('click',()=>{
		var pd = confirm('Sure., Do You Want this product??');
		if(pd==true)
		{
			alert("Item added");
		}
		else{
			alert("check for another item");
		}

	});
</script>
</body>
</html>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>
<style type="text/css">
	.Lform{
		position:absolute;
		left: 50%;
		top: 50%;
		transform: translate(-50%,-50%);
	}
	.login-container{
		width: 400px;
		height: auto;
		background: #ccc;
	}
	.form{
		padding: 20px ;
	}
	.heading{
		color: blue;
		padding-top: 10px;
	}
	.udesign{
		width: 50px;
		height: 2px;
		display: block;
		margin: auto;
		background:blue;
		padding: 0;
	}

</style>
<body>
	<?php include "header.php" ?>
	<div class="Lform">
		<div class="login-container">
			<div class="h3 heading"><center>Add Product</center></div>
			<div class="udesign"></div>
			<form action="adminp.php" method="post" class="form" enctype="multipart/form-data">
			<div class="mb-2">
			  <label for="formGroupExampleInput" class="form-label">Product Name</label>
			  <input type="text" class="form-control" id="formGroupExampleInput" name="pname">
			</div>
			<div class="mb-2">
			  <label for="formGroupExampleInput2" class="form-label">Cost</label>
			  <input type="text" class="form-control" id="formGroupExampleInput2" name="cost">
			</div>
			<div class="mb-2">
				<label for="formGroupExampleInput2" class="form-label">product</label>
			  <input type="file" class="form-control" id="formGroupExampleInput2" name="product">
			</div>

	    	<input type="submit" class="btn btn-primary my-2" value="add" name="add">
			</form>
		</div>
	</div>
</body>
</html>
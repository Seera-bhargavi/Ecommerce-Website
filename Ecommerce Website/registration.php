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
			<div class="h3 heading"><center>Register</center></div>
			<div class="udesign"></div>
			<form action="rsession.php" method="post" class="form">
			<div class="mb-2">
			  <label for="formGroupExampleInput" class="form-label">UserName</label>
			  <input type="text" class="form-control" id="formGroupExampleInput" placeholder="UserName" name="rname">
			</div>
			<div class="mb-2">
			  <label for="formGroupExampleInput2" class="form-label">Password</label>
			  <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Password" name=rpassword>
			</div>
			<div class="mb-2">
			  <label for="formGroupExampleInput2" class="form-label">Phone Number</label>
			  <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Phone number" name=rphone>
			</div>
			<div class="form-check">
	      	<input class="form-check-input" type="checkbox" id="gridCheck" name="remember">
	      	<label class="form-check-label" for="gridCheck">
	        Remember Me
	      	</label>
	    	</div>
	    	<button class="btn btn-primary my-2" name="register">Register</button>
	    	<p>already Registered <a href="login.php">Login here</a></p>
			</form>
		</div>
	</div>
</body>
</html>
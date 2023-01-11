<?php session_start();?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Products</title>
	<link rel="stylesheet" href="product_style.css">
	<link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
</head>
<style>
	.userdis{
		font-size:22px;
		font-weight: 400;
		position: absolute;
		color:#212666;
		top: 60px;
		left: 40%;
		display: none;
	}
	.userdis.trans{
		transform: translateY(20px);
		transition: .25s;
	}
	.un{
		font-size: 30px;
		color:#212666;
	}
</style>
<body>
	<header>
	<div class="container">
		<div class="nav-bar">
			<div class="logo">
				<a href="index.php"><img src="./images/logo.png"></a>
			</div>
			<div class="searching"><i class="bx bx-search" id="search"></i></div>
			<nav id="nav">
				<ul>
					<li><a href="index.php">home</a></li>
					<li><a href="#">products</a></li>
					<li><a href="index.php#about">about</a></li>
					<li><a href="contact.php">contact</a></li>
					<li><a href="#">Account</a></li>
				</ul>
			</nav>
			<i class="bx bx-menu-alt-right" onclick="NavToggle()"></i>
		</div>
	</div>
	</header>
		<center><p class="userdis">Welcome <span class="un"><?php echo $_SESSION['uname'];?></span></p></center>
	<!-- Searching place -->
	<!-- <div class="search-bar"> 
		<input type="search" placeholder="Search here..">
		<i id="search-bar-icon" class="fa-solid fa-search"></i>
	</div> -->
	<!--  -->
	<div class="categories">
	<div class="small-container">
		<div class="products-header">
			<h3>All Products </h3>
			<select>
				<option>Default Shorting</option>
				<option>Default Shorting</option>
				<option>Default Shorting</option>
				<option>Default Shorting</option>
			</select>
		</div>
		<div class="row">
			<div class="col-4">
				<a href="prod_details.php"><img src="images/product-1.jpg"></a>
				<h4>Red Printed T-shirt</h4>
				<div class="rating">
					<i class="bx bxs-star"></i>
					<i class="bx bxs-star"></i>
					<i class="bx bxs-star"></i>
					<i class="bx bxs-star"></i>
					<i class="bx bxs-star-half"></i>
				</div>
				<p>$50.00</p>
			</div>
			<div class="col-4">
				<img src="images/product-2.jpg">
				<h4>Red Printed T-shirt</h4>
				<div class="rating">
					<i class="bx bxs-star"></i>
					<i class="bx bxs-star"></i>
					<i class="bx bxs-star"></i>
					<i class="bx bxs-star"></i>
					<i class="bx bxs-star-half"></i>
				</div>
				<p>$50.00</p>
			</div>
			<div class="col-4">
				<img src="images/product-3.jpg">
				<h4>Red Printed T-shirt</h4>
				<div class="rating">
					<i class="bx bxs-star"></i>
					<i class="bx bxs-star"></i>
					<i class="bx bxs-star"></i>
					<i class="bx bxs-star"></i>
					<i class="bx bxs-star-half"></i>
				</div>
				<p>$50.00</p>
			</div>
			<div class="col-4">
				<img src="images/product-4.jpg">
				<h4>Red Printed T-shirt</h4>
				<div class="rating">
					<i class="bx bxs-star"></i>
					<i class="bx bxs-star"></i>
					<i class="bx bxs-star"></i>
					<i class="bx bxs-star"></i>
					<i class="bx bxs-star-half"></i>
				</div>
				<p>$50.00</p>
			</div>
		</div>
		<div class="row">
			<div class="col-4">
				<img src="images/product-5.jpg">
				<h4>Red Printed T-shirt</h4>
				<div class="rating">
					<i class="bx bxs-star"></i>
					<i class="bx bxs-star"></i>
					<i class="bx bxs-star"></i>
					<i class="bx bxs-star"></i>
					<i class="bx bxs-star-half"></i>
				</div>
				<p>$50.00</p>
			</div>
			<div class="col-4">
				<img src="images/product-6.jpg">
				<h4>Red Printed T-shirt</h4>
				<div class="rating">
					<i class="bx bxs-star"></i>
					<i class="bx bxs-star"></i>
					<i class="bx bxs-star"></i>
					<i class="bx bxs-star"></i>
					<i class="bx bxs-star-half"></i>
				</div>
				<p>$50.00</p>
			</div>
			<div class="col-4">
				<img src="images/product-7.jpg">
				<h4>Red Printed T-shirt</h4>
				<div class="rating">
					<i class="bx bxs-star"></i>
					<i class="bx bxs-star"></i>
					<i class="bx bxs-star"></i>
					<i class="bx bxs-star"></i>
					<i class="bx bxs-star-half"></i>
				</div>
				<p>$50.00</p>
			</div>
			<div class="col-4">
				<img src="images/product-8.jpg">
				<h4>Red Printed T-shirt</h4>
				<div class="rating">
					<i class="bx bxs-star"></i>
					<i class="bx bxs-star"></i>
					<i class="bx bxs-star"></i>
					<i class="bx bxs-star"></i>
					<i class="bx bxs-star-half"></i>
				</div>
				<p>$50.00</p>
			</div>
		</div>
		<div class="row">
			<div class="col-4">
				<img src="images/product-9.jpg">
				<h4>Red Printed T-shirt</h4>
				<div class="rating">
					<i class="bx bxs-star"></i>
					<i class="bx bxs-star"></i>
					<i class="bx bxs-star"></i>
					<i class="bx bxs-star"></i>
					<i class="bx bxs-star-half"></i>
				</div>
				<p>$50.00</p>
			</div>
			<div class="col-4">
				<img src="images/product-10.jpg">
				<h4>Red Printed T-shirt</h4>
				<div class="rating">
					<i class="bx bxs-star"></i>
					<i class="bx bxs-star"></i>
					<i class="bx bxs-star"></i>
					<i class="bx bxs-star"></i>
					<i class="bx bxs-star-half"></i>
				</div>
				<p>$50.00</p>
			</div>
			<div class="col-4">
				<img src="images/product-11.jpg">
				<h4>Red Printed T-shirt</h4>
				<div class="rating">
					<i class="bx bxs-star"></i>
					<i class="bx bxs-star"></i>
					<i class="bx bxs-star"></i>
					<i class="bx bxs-star"></i>
					<i class="bx bxs-star-half"></i>
				</div>
				<p>$50.00</p>
			</div>
			<div class="col-4">
				<img src="images/product-12.jpg">
				<h4>Red Printed T-shirt</h4>
				<div class="rating">
					<i class="bx bxs-star"></i>
					<i class="bx bxs-star"></i>
					<i class="bx bxs-star"></i>
					<i class="bx bxs-star"></i>
					<i class="bx bxs-star-half"></i>
				</div>
				<p>$50.00</p>
			</div>
		</div>
	</div>
	</div>
	<div class="num-pagination">
		<ul>
			<li><a href="#">1</a></li>
			<li><a href="productp2.php">2</a></li>
			<li><a href="productp3.php">3</a></li>
			<li><a href="productp4.php">4</a></li>
			<li>
			<a href="#"><i class='bx bx-right-arrow-alt'></i></a></li>
		</ul>
	</div>
	<div class="footer">
		<div class="row-3">
			<div class="col-8">
				<h3>Download Our App</h3>
				<p>Download App for Android and io macro phones</p>
				<a href="#"><img src="images/play-store.png"></a>
				<a href="#"><img src="images/app-store.png"></a>
			</div>
			<div class="col-9">
				<img src="images/logo1.png" width="50px" height="50px">
				<p>Resize the browser window to see that the container width will change at different breakpoints.
				</p>			
			</div>
			<div class="col-10">
				<h3>Useful Links</h3>
				<ul>
					<li><a href="#">Coupans</a></li>
					<li><a href="#">Blog Post</a></li>
					<li><a href="#">Return Policy</a></li>
					<li><a href="#">Join affirm</a></li>
				</ul>
			</div>
			<div class="col-10">
				<h3>Follow Us</h3>
				<ul>
					<li><a href="#">Facebook</a></li>
					<li><a href="#">Twitter</a></li>
					<li><a href="#">Instagram</a></li>
					<li><a href="#">YouTube</a></li>
				</ul>
			</div>
		</div>
		<div class="copy-right">
			<p>Copyright 2022 - Red Store</p>
		</div>
	</div>
	<script>
		// var name = document.querySelector('.userdis');
		function NavToggle(){
			document.getElementById('nav').classList.toggle('toggle');
		}
		const timeout = setTimeout(function() {
			document.querySelector('.userdis').style.display ="block";
			document.querySelector('.userdis').classList.add('trans');
		},1000);
		setTimeout(function(){
			clearTimeout(timeout);
			document.querySelector('.userdis').style.display ="none";
			},6000);
		
	</script>
</body>
</html>
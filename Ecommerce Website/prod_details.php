<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>T-shirt-Redstore</title>
	<link rel="stylesheet" href="style.css">
	<link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
	<style>
		header{
			background: #fff;
		}
		.nav-bar i{
			font-size: 25px;
			display: none;
		}
		.p-row{
			display: flex;
			justify-content: flex-start;
			margin: 8% 20%;
		}
		.product-image{
			position: relative;
			max-width: 800px;
		}
		.main-image-container{
			max-width:100%;
		}
		.main-image-container img{
			width: 100%;
		}
		.small-image-container{
			display: flex;
			justify-content:space-between;
			align-items: center;
		}
		.small-image-container li{
			width:80px;
			height: 80px;
			margin-left: 10px;
			cursor: pointer;
		}
		.small-image-container li:nth-child(1){
			margin-left:0px;
		}
		.small-image-container li img{
			width:100%;
		}
		.product-content{
			max-width: 400px;
			margin-left:25px; 
		}
		.product-content p{
			width: 100%;
			font-size: 15px;
			color:#444;
		}
		.product-content h1,.product-content p,.product-content h3,.explore-link,select{
			margin-bottom: 23px;
		}
		.product-content h1{
			text-align: left;
			font-family: 'poppins',sans-serif;
		}
		.product-content h3{
			font-family: 'poppins';
		}
		select{
			padding:10px 0;
		}
		.explore-link a{
			display: block;
			margin:auto;
		}
		@media(max-width:992px){
			.p-row{
				display: flex;
				flex-direction: column;
			}
		}
		@media(max-width: 768px){
		nav{
			display: none;
		}
		.logo{
			position: absolute;
			left:20px;
		}
		.nav-bar{
			position: relative;
			width:100%;
		}
		.nav-bar nav ul{
			position: absolute;
			top:100%;
			left:50%;
			width:100%;
			transform: translateX(-50%);
			background: black;
			padding:15px 16px;
			z-index: 1;
		}
		.nav-bar nav ul li{
		display: block;
		margin:auto;
		width: 100%;
		line-height: 50px;
		transition: .5s;
		}
		.nav-bar nav ul li a{
			color: #fff;
			display: flex;
			justify-content: center;
		}
		.nav-bar nav ul li a:hover{
		border-bottom: 1px solid #ccc;
		}
		.nav-bar i{
			display: block;
			position: absolute;
			right:50px;
			cursor: pointer;
		}
	}
		.nav-bar #nav.toggle{
			display: block;
		}

	</style>
</head>
<body>
	<header>
	<div class="container">
		<div class="nav-bar">
			<div class="logo">
				<a href="index.php"><img src="./images/logo1.png" style="width:60px; height:60px;"></a>
			</div>
			<nav id="nav">
				<ul>
					<li><a href="index.php">home</a></li>
					<li><a href="product.php">products</a></li>
					<li><a href="index.php#about">about</a></li>
					<li><a href="contact.php">contact</a></li>
					<li><a href="#">Account</a></li>
				</ul>
			</nav>
			<i class="bx bx-menu-alt-right" onclick="NavToggle()"></i>
		</div>
	</div>
	</header>
	<div class="prod-details">
		<div class="p-row">
			<div class="product-image">
				<div class="main-image-container">
					<img src="images/buy-1.jpg" class="image-container">
				</div>
				<ul class="small-image-container">
					<li><img src="images/gallery-1.jpg" class="picture"></li>
					<li><img src="images/gallery-2.jpg"class="picture"></li>
					<li><img src="images/gallery-3.jpg" class="picture"></li>
					<li><img src="images/gallery-4.jpg" class="picture"></li>
				</ul>
			</div>
			<div class="product-content">
				<p>Home / T-Shirt</p>
				<h1>Red Printed Tshirt<br>by HRX</h1>
				<h3>$50.00</h3>
				<select>
					<option>Select Size</option>
					<option>small</option>
					<option>media</option>
					<option>xl</option>
				</select>
				<div class="explore-link">
				<a href="#">Add to Cart</a>
				</div>
				<h3>PRODUCT DETAILS</h3>
				<p>Resize the browser window to see that the container width will change at different breakpoints. Resize the browser window to see that the container width will change at different breakpoints.  
				</p>
			</div>
		</div>
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
	<script src="script.js">
// 		function NavToggle(){
// 	// alert('working');
// 	document.getElementById('nav').classList.toggle('toggle');
// }
	</script>
</body>
</html>
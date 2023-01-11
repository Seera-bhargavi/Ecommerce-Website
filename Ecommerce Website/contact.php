<!DOCTYPE html>
<html>
<head>
	<title>Contact detials</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="cstyle.css">
	<link rel="stylesheet" href="style.css">
	<link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
	<style>
		header{
			background: #fff;
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
				<a href="index.php"><img src="./images/logo.png"></a>
			</div>
			<nav id="nav">
				<ul>
					<li><a href="index.php">home</a></li>
					<li><a href="product.php">products</a></li>
					<li><a href="index.php#about">about</a></li>
					<li><a href="#">contact</a></li>
					<li><a href="#">Account</a></li>
				</ul>
			</nav>
			<i class="bx bx-menu-alt-right" onclick="NavToggle()"></i>
		</div>
	</div>
	</header>
	<div class="contactinfo-container" id="contactpage">
		<div class="title">
			<h2>Contact Us</h2>
		</div>
		<div class="box">
			<div class="contact form">
				<form>
				<div class="wrapper">
					<h2>Send a Message</h2>
					<div class="r1">
						<div class="inputbox">
							<span>First Name</span>
							<input type="text" placeholder="Bhargavi">
						</div>
						<div class="inputbox">
							<span>Last Name</span>
							<input type="text" placeholder="Seera">
						</div>
					</div>
					<div class="r1">
						<div class="inputbox">
							<span>Email</span>
							<input type="email" placeholder="Bhargavi@gmail.com">
						</div>
						<div class="inputbox">
							<span>Mobile</span>
							<input type="text" placeholder="+91 7569109914">
						</div>
					</div>
					<div class="r2">
						<div class="inputbox">
							<span>Message</span>
							<textarea placeholder="Write your message here.."></textarea>
						</div>
						<div class="inputbox">
							<input type="submit" value="Send">
						</div>
					</div>
				</div>
			</form>
		</div>
	<div class="contact map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30558.617593045914!2d80.82703809417538!3d16.785270647620194!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a3675cbf6a62db3%3A0x342925c018a01e74!2sNuzividu%2C%20Andhra%20Pradesh!5e0!3m2!1sen!2sin!4v1657246480648!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	</div>
	</div>
</div>
<script>
		function NavToggle(){
	// alert('working');
	document.getElementById('nav').classList.toggle('toggle');
}
	</script>
</body>
</html>
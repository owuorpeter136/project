<!DOCTYPE html>
<html>
<head>
	
	<link rel="stylesheet" type="text/css" href="style2.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
<style>
	footer{
		text-align: center;
		background: gold;
	}
	#footer{
	background: gold;
}
#side-bar{
	height: 780px;
}
#side-bar{
	border: 1px solid #fff;
	width: 150px;
	margin-left: px;
	background: green;
}
</style>
<body>
<div class="main-container">
<div class="header">
	<div class="logo">
		<img src="images/ej.jpg">
		</div>
		<h3>FARMER <span>LENDING PLATFORM</span></h3>
	<div class="search-box">
		<input type="search" placeholder="search">
	</div>
	</div>
	<nav>
		<!-=========First link=====---->
		<span onclick="document.getElementById('side-bar').style.display = 'block'">
		<i  class="fa-solid fa-bars"></i></span>
		<ul>
			<li><a href="#"><i class="fa-solid fa-house"></i>Home</a></li>
			<li><a href="#"><i class="fa-solid fa-eject"></i>About</a></li>
			<li><a href="#"><i class="fa-regular fa-envelope"></i>Contact</a></li>
			<li><a href="#"><i class="fa-solid fa-bolt"></i>Login</a></li>
			
		</ul>
	</nav>
	<div id="side-bar">
		<!-=========second link=====---->
		<span onclick="document.getElementById('side-bar').style.display = 'none'">Close &times</span>
	<ul>
		<li><a href="#"><i class="fa-solid fa-guage"></i>Dashboard</a></li>
		<li><a href="login.php"><i class="fa-regular fa-calendar days"></i>Admin Login</a></li>
		<li><a href="#"> <i class="fa-sharp fa-solid fa-cart-shopping-fast"></i>Inputs</a></li>
		<li><a href="#">Feedback</a></li>
		<li><a href="#"><i class="fa-duotone fa-gear"></i>Settting</a></li>
		<li><a href="#">Help</a></li>
		<li><a href="#">Faqs</a></li>
	</ul> 
	</div>
</div>
</body>
 <footer>
    &copy;<em id="date"></em>Paul Owuor De Developer
</footer>
</body>
</html>
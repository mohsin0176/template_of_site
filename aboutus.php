<!DOCTYPE html>
<html>
<head>
	<title>Design a full template by bootsrap</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/customize.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="shortcut icon" href="image/msn.jpg" type="image/x-icon">
</head>
<body>
	<!-- Header Section -->
	<section class="header">
		<div class="container">
			<nav class="navbar navbar-expand-md navbar-light">
				<a href="" class="navbar-brand"><img src="image/logo.png" style="height: 50px;"></a>
				<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse"><span class="navbar-toggler-icon"></span></button>
				<div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
					<div class="navbar-nav popular">
						<a href="index.php" class="nav-item nav-link active"style="font-size: 10px;font-color:white">Home</a>
						<div class="nav-item dropdown">
							<a href="" class="nav-link dropdown-toggle" data-toggle="dropdown"style="font-size: 10px;font-color:white">About Us</a>
							<div class="dropdown-menu" style="background: #BADDFB;">
								<a href="aboutus.html" class="dropdown-item"style="font-size: 10px;font-color:white">About Us</a>
								<a href="" class="dropdown-item"style="font-size: 10px;font-color:white">Mission</a>
								<a href="" class="dropdown-item"style="font-size: 10px;font-color:white">Vision</a>
							</div>
						</div>
						<a href="" class="nav-item nav-link"style="font-size: 10px;font-color:white">News and Event</a>
						<a href="contact.php" class="nav-item nav-link"style="font-size: 10px;font-color:white">Contact Us</a>
						<a href="" class="nav-item nav-link"style="font-size: 10px;font-color:white">Login</a>
					</div>
					<div class="navbar-nav">
						<form class="form-inline">
							<div class="input-group">
								<input type="text" name="search" placeholder="Search"style="font-size: 10px;font-color:white">
								<div class="input-group-append">
									<button type="button" class="btn btn-secondary"style="font-size: 10px;font-color:white">Search</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</nav>
		</div>
	</section>
	<!-- Banner Section -->
	<section class="banner_part">
		<img src="image/banner.jpg" style="width: 100%">
	</section>

	<!-- About us Section -->
	<section class="about_us">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h3 style="padding-top: 15px;padding-bottom: 5px;border-bottom: 1px solid black;width: 11%;">About Us</h3>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
				</div>
			</div>
		</div>
	</section>

	<!-- Footer Part -->
	<section class="footer_part">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<h4 style="color: white">Contact Us</h4>
					<p style="color: white">Address:Mirpur-01,Shewrapara, Mobile: 01928511049, Email: akailgroup@gmail.com</p>
				</div>
				<div class="col-md-4">
					<h4 style="color: white">Follow Us</h4>
					<div class="social">
						<ul>
							<li><a href="https://www.facebook.com/popularsoftbd/?modal=admin_todo_tour" target="_blank"><i class="fa fa-facebook-square"></i></a></li>
							<li><a href=""><i class="fa fa-twitter-square"></i></a></li>
							<li><a href="https://www.youtube.com/channel/UCiO1LbMZH6E4vSEoaqS5erA/playlists" target="_blank"><i class="fa fa-youtube-square"></i></a></li>
							<li><a href=""><i class="fa fa-google-plus-square"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 text-center">
					<p style="color: white;padding: 50px 0px 10px 0px;">
						Copyright &copy; <script type="text/javascript">document.write(new Date().getFullYear())</script> @ Popularsoft
					</p>
				</div>
			</div>
		</div>
	</section>

	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<div class="gotoup">
					<img src="image/scrl.jpg" style="width: 40px; height: 40px;">
				</div>
			</div>
		</div>
	</div>

	<!-- <script src="js/jquery-3.2.1.slim.min.js"></script> -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$(window).scroll(function(){
				if($(this).scrollTop()>300){
					$('.gotoup').fadeIn();
				}else{
					$('.gotoup').fadeOut();
				}
			});
			$('.gotoup').click(function(){
				$('html,body').animate({scrollTop:0},1000);
			});
		});
	</script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
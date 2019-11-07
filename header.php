
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Mortgages</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="asset/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="asset/css/main.css">

	<script src="asset/js/jquery.min.js"></script>
	<script src="asset/js/popper.min.js"></script>
</head>
<body>
	<div class="wrapper">
		<header class="header-sec <?php if($pagename == 'home-page'){echo 'home-header-sec';} ?>">
			<section class="main-header bg-blue text-white">
				<div class="container">
					<div class="navbar">
						<a class="navbar-brand" href="">
							<img src="asset/img/Logo.png" alt="Logo">
						</a>

						<ul class="navbar-nav flex-row">
							<li><a href="javascript:void(0);">Apply Now</a></li>
							<li><a class="phone" href="tel:(+44) 111-222-333">(+44) 111-222-333</a></li>
							<li>
								<a class="bar-li" href="javascript:void(0);" onclick="openNav()">
									<span></span>
									<span></span>
									<span></span>
								</a>
							</li>
						</ul>
					</div><!-- navbar -->					
				</div><!-- container -->
			</section>
			<nav id="mySidenav" class="sidenav">
				<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
				<a href="#">About</a>
				<a href="#">Services</a>
				<a href="#">Clients</a>
				<a href="#">Contact</a>
			</nav>
		</header><!-- header -->
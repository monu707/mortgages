<?php
$site_url = 'http://'.$_SERVER['SERVER_NAME'].'/mortgages';
?>
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
						<a class="navbar-brand" href="<?php echo $site_url; ?>">
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

				<ul>
					<li><a href="<?php echo $site_url; ?>/about.php">About</a></li>
					<li><a href="<?php echo $site_url; ?>/contact.php">contact</a></li>
					<li><a href="<?php echo $site_url; ?>/mortgage-guide.php">Mortgage Guide</a></li>
					<li><a href="<?php echo $site_url; ?>/first-time-buyer.php">first-time-buyer</a></li>
					<li><a href="<?php echo $site_url; ?>/first-time-buyer-detail.php">first-time-buyer-detail</a></li>
					<li><a href="<?php echo $site_url; ?>/awards.php">awards</a></li>
					<li><a href="<?php echo $site_url; ?>/career.php">career</a></li>
					<li><a href="<?php echo $site_url; ?>/news.php">news</a></li>
					<li><a href="<?php echo $site_url; ?>/news-detail.php">news-detail</a></li>
					<li><a href="<?php echo $site_url; ?>/life-insurance.php">life-insurance</a></li>
					<li><a href="<?php echo $site_url; ?>/conveyancing.php">conveyancing</a></li>
					<li><a href="<?php echo $site_url; ?>/buyer-mortgage-calculators.php">Buyer Mortgage Calculators</a></li>
					<li><a href="<?php echo $site_url; ?>/mortgage-calculators.php">Mortgage Calculators</a></li>
				</ul>				
				
			</nav>
		</header><!-- header -->
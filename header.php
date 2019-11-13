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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css">

	<link rel="stylesheet" href="asset/css/main.css">

	<script src="asset/js/jquery.min.js"></script>
	<script src="asset/js/popper.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
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
				<div class="container">
					<div class="menu-sec">
						<a href="javascript:void(0)" class="closebtn bar-li" onclick="closeNav()">
							<span></span>
							<span></span>
							<span></span>
						</a>

						<div class="row">
							<div class="col-lg-4 col-sm-6">
								<ul class="menu-bx">
									<li>
										<a href="<?php echo $site_url; ?>/mortgage-guide.php">Mortgage Guide</a>
										<ul class="sub-menu">
											<li><a href="<?php echo $site_url; ?>/first-time-buyer.php">first-time-buyer</a></li>
										</ul>
									</li>

									<li>
										<a href="<?php echo $site_url; ?>/mortgage-calculators.php">Calculators</a>
										<ul class="sub-menu">
											<li><a href="<?php echo $site_url; ?>/buyer-mortgage-calculators.php">Buyer Mortgage Calculators</a></li>
											<li><a href="<?php echo $site_url; ?>/mortgage-calculators-detail.php">Mortgage Calculators Detail</a></li>
										</ul>
									</li>
									
									<li>
										<a href="<?php echo $site_url; ?>/life-insurance.php">Life Insurance</a>
									</li>

									<li>
										<a href="<?php echo $site_url; ?>/our-values.php">Our Values</a>
									</li>
								</ul>
							</div><!-- col -->

							<div class="col-lg-4 col-sm-6">
								<ul class="menu-bx">
									<li>
										<a href="<?php echo $site_url; ?>/conveyancing.php">Conveyancing</a>
									</li>

									<li>
										<a href="<?php echo $site_url; ?>/best-guys-buyer.php">Mortgage Best buy</a>
									</li>

									<li>
										<a href="javascript:void(0);">Reviews</a>
									</li>

									<li>
										<a href="<?php echo $site_url; ?>/news.php">News & Insight</a>
									</li>
								</ul>
							</div><!-- col -->

							<div class="col-lg-4 col-sm-6">
								<ul class="menu-bx">
									<li>
										<a href="<?php echo $site_url; ?>/about.php">About</a>
									</li>

									<li>
										<a href="<?php echo $site_url; ?>/awards.php">Awards</a>
									</li>

									<li>
										<a href="<?php echo $site_url; ?>/career.php">Careers</a>
									</li>

									<li>
										<a href="<?php echo $site_url; ?>/contact.php">Contact Us</a>
									</li>
								</ul>
							</div><!-- col -->
						</div><!-- row -->

					</div><!-- menu-sec -->
				</div><!-- container -->
			</nav>
		</header><!-- header -->
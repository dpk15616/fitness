<?php session_start();
?>

<!DOCTYPE html>
<html class="no-js">
	<head>
	<title>MyFitness</title>
	<?php include "metalink.php"; ?>
	</head>
	<body>
		<div id="fh5co-wrapper">
		<div id="fh5co-page">
		
		<div id="fh5co-header">
			<header id="fh5co-header-section">
				<div class="container">
					<div class="nav-header">
						<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
						<h1 id="fh5co-logo"><a href="index.php">MyFit<span>ness</span></a></h1>
						<!-- START #fh5co-menu-wrap -->
						<nav id="fh5co-menu-wrap" role="navigation">
							<ul class="sf-menu" id="fh5co-primary-menu">
								<li class="active">
									<a href="index.php">Home</a>
								</li>
								<li>
									<a href="#" class="fh5co-sub-ddown">WEIGHT-LOSS</a>
									 <ul class="fh5co-sub-menu">
									 	<li><a href="lossworkout.php">WORKOUT</a></li>
									 	<li><a href="lossdietplan.php">DIET PLAN</a></li>
										
									</ul>
								</li>
								<li>
									<a href="#" class="fh5co-sub-ddown">WEIGHT-GAIN</a>
									 <ul class="fh5co-sub-menu">
									 	<li><a href="gainworkout.php">WORKOUT</a></li>
									 	<li><a href="gaindietplan.php">DIET PLAN</a></li>
									
									</ul>
								</li>									
								<li><a href="yoga.php">YOGA</a></li>							
								
								<li><a href="articles.php">ARTICLES</a></li>
									<?php	
									if(isset( $_SESSION['email'])){
										print_r($_SESSION['email']);
										?>
																	
									<li><a href="logout.php">LOGOUT</a></li><?php }
									else{?>
									<li><a href="login.php">LOGIN</a></li><?php
									}?>
								
							</ul>
						</nav>
					</div>
				</div>
			</header>		
		</div>
		
		<!-- end:fh5co-header -->
		<div class="fh5co-hero">
			<div class="fh5co-overlay"></div>
			<div class="fh5co-cover" data-stellar-background-ratio="1.0" style="background-image: url(images/gym_girl.jpg);">
				
				<div class="desc animate-box">
					<div class="container">
						<div class="row">
							<div class="col-md-7">
								<h2>Fitness &amp; Health <br>is a <b>Mentality</b></h2>
								
							<?php	
									if(!isset($_SESSION['email']))
									?><a class="btn btn-primary" href="register.php">Register</a></span> <?php}?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end:fh5co-hero -->
		<div id="fh5co-schedule-section" class="fh5co-lightgray-section">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<div class="heading-section text-center animate-box">
							<h2>Fitness and Health</h2>
							<p>To enjoy the glow of good health, you must exercise.</p>
						</div>
					</div>
				</div>
				<div class="row animate-box">
					
					<div class="row text-center">

						<div class="col-md-12 schedule-container">

							<div class="schedule-content active" data-day="sunday">
							<a href="lossworkout.php">	<div class="col-md-3 col-sm-6">
									<div class="program program-schedule">
										<img src="images/fit-dumbell.svg" alt="Cycling">
										
										<h3>Body Building</h3>
										
									</div>
								</div></a>
								<a href="yoga.php"><div class="col-md-3 col-sm-6">
									<div class="program program-schedule">
										<img src="images/fit-yoga.svg" alt="">
										
										<h3>Yoga Programs</h3>
										
									</div>
								</div></a>
								<a href="lossdietplan.php"><div class="col-md-3 col-sm-6">
									<div class="program program-schedule">
										<img src="images/fit-cycling.svg" alt="">
										
										<h3>Diet Plan</h3>
										
									</div>
								</div></a>
							<a href="bmr.php">	<div class="col-md-3 col-sm-6">
									<div class="program program-schedule">
										<img src="images/fit-boxing.svg" alt="Cycling">
									
										<h3>Check Your BMR</h3>
										
									</div>
								</div></a>
							</div>
							<!-- END sched-content -->

							
							<!-- END sched-content -->
						</div>

						
					</div>
				</div>
			</div>
		</div>
		
		<!-- fh5co-blog-section -->
		<?php include"footer1.php"; ?>
	

	</body>
</html>

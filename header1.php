
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
		
		
		<div class="fh5co-cover" data-stellar-background-ratio="1.0" style="background-image: url(images/black.jpg); height:120px;"></div>
		
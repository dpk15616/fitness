<footer>
			<div id="footer">
				<div class="container">
					<div class="row">
						<div class="col-md-4 animate-box">
							<h3 class="section-title">About Us</h3>
							<p>We are a team who provide knowlege about fitness and health through this website. All contents about gym workouts and diet plans 
							are provided by fitness experts on this website.</p>
						</div>

						<div class="col-md-4 animate-box">
							<h3 class="section-title">Our Address</h3>
							<ul class="contact-info">
								<li><i class="icon-map-marker"></i>Kamla Nehru institute of technology, Sultanpur</li>
								<li><i class="icon-phone"></i>+918126654033</li>
								<li><i class="icon-envelope"></i><a href="#">dpk15616@gmail.com</a></li>
								<li><i class="icon-globe2"></i><a href="#">www.myfitness.com</a></li>
							</ul>
						</div>
						<div class="col-md-4 animate-box">
					
					
							<h3 class="section-title">Drop us a line</h3>
							<form class="contact-form" method="POST" action="index.php">
								<div class="form-group">
									<label for="name" class="sr-only">Name</label>
									<input type="name" class="form-control"  name="name" placeholder="Name">
								</div>
								<div class="form-group">
									<label for="email" class="sr-only">Email</label>
									<input type="email" class="form-control"  name="email" placeholder="Email">
								</div>
								<div class="form-group">
									<label for="message" class="sr-only">Message</label>
									<textarea class="form-control" rows="7" name="msg" placeholder="Message"></textarea>
								</div>
								<div class="form-group">
									<input type="submit" id="btn-submit" class="btn btn-send-message btn-md" name="sub" value="Send Message">
								</div>
							</form>
							
							
	<?php
	
	if(isset($_POST['sub']))
	{
		include('dbcon.php');
		$name = $_POST['name'];
		$email = $_POST['email'];
		
		$msg = $_POST['msg'];
		
		$qry= "INSERT INTO message(name,email,message) VALUES ('$name','$email','$msg') ";
		$run=mysqli_query($con,$qry);
		if($run==true)
		{
			?><script>
			alert('Messaged successfully');
			</script>	
			<?php
		}
		else
		{  ?>
			<script>
			alert('NOT Messaged successfully');
			</script><?php
	
		}
		
	}
	
	
	?>
							
						</div>
					</div>
					<div class="row copy-right">
						<div class="col-md-6 col-md-offset-3 text-center">
							<p class="fh5co-social-icons">
								<a href="#"><i class="icon-twitter2"></i></a>
								<a href="#"><i class="icon-facebook2"></i></a>
								<a href="#"><i class="icon-instagram"></i></a>
								<a href="#"><i class="icon-youtube"></i></a>
							</p>
						</div>
					</div>
				</div>
				
			</div>
		</footer>
		<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Superfish -->
	<script src="js/hoverIntent.js"></script>
	<script src="js/superfish.js"></script>

	<!-- Main JS (Do not remove) -->
	<script src="js/main.js"></script>
	
	
	
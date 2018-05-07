<?php
session_start();
if(!isset($_SESSION['email']))
{header('location:login.php');
}?>

<!DOCTYPE html>
<html class="no-js">
	<head>
	<title>Weight gain diet</title>
	<?php include "metalink.php"; ?>
	</head>
	<body>
		<?php include "header1.php"; ?>
		<img src="images/diet.jpg" alt="gym" height="350px;" width="100%;">
	<h1 align="center" style="margin-top:30px;"> WEIGHT GAIN DIET PLAN CHART</h1>
	<center><img src="images/ss.jpg" rel="dietplan" style="margin:30px 0 50px 0;"/></center>


	
	<?php include "footer1.php"; ?>
	</body>
	</html>
<!DOCTYPE html>
<html class="no-js">
	<head>
	<title>Register</title>
	<?php include "metalink.php"; ?>
	</head>
	<body>
		<?php include "header1.php"; ?>
				<h2 align="center" style="padding:30px;" ><u>REGISTER HERE  </u></h2>
			<form method="post" action="register.php">
				<table align="center" width="40%"  style="margin:30px; padding:20px;">

					<tr>
					<th style="padding:10px;">Name </th>
					 <td> <input type="text" name="name" placeholder="Enter your name" required></td>
					</tr>
					<tr>
					<th style="padding:10px;">Email Id</th>
					 <td> <input type="email" name="email" placeholder="Email id" required></td>
					</tr>
					<tr >
					<th style="padding:10px;">Password</th>
					 <td> <input type="password" name="password" placeholder="password" required></td>
					<tr>
					
					<tr>
					<th style="padding:10px;">Contact No. </th>
					 <td> <input type="text" name="contact" placeholder="Contact No." required></td>
					</tr>
					<tr>
					<tr>
					<th style="padding:10px;">Date of Birth </th>
					 <td> <input type="date" name="dob" placeholder="Date Of Birth" required></td>
					</tr>
					 <td colspan="2" align="center" style="margin-top:20px;"> <input type="submit" name="submit" value="submit" required></td>
					</tr>
				</table>	
			</form>
	<?php
	
	if(isset($_POST['submit']))
	{
		include('dbcon.php');
		$name = $_POST['name'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$mobileno = $_POST['contact'];
		$dob = $_POST['dob'];
		$qry= "INSERT INTO register(name,email,password,mobileno,dob) VALUES ('$name','$email','$password','$mobileno','$dob') ";
		$run=mysqli_query($con,$qry);
		if($run==true)
		{
			?><script>
			alert('Registered successfully');
			</script>	
			<?php
		
	
		}
		
	}
	
	
	?>
	
	

	
	<?php include "footer1.php"; ?>
	</body>
	</html>
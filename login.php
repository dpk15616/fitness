<?php
session_start();
if(isset($_SESSION['email']))
{header('location:index.php');
}
?>

<!DOCTYPE html>
<html class="no-js">
	<head>
	<title>Login</title>
	<?php include "metalink.php"; ?>
	</head>
	<body>
		<?php include "header1.php"; ?>
	
			<h2 align="center" style="padding:30px;" ><u>LOGIN HERE  </u></h2>
		<center>	<form method="post" action="login.php">
				<table align="center" width="40%"  style="margin:30px; padding:20px;">

					
					<tr>
					<th style="padding:10px;">Email Id</th>
					 <td> <input type="email" name="email" placeholder="Registered Email id" required></td>
					</tr>
					<tr >
					<th style="padding:10px;">Password</th>
					 <td> <input type="password" name="password" placeholder="password" required></td>
					<tr>
					</tr>
					 <td colspan="2" align="center" style="margin-top:20px;"> <input type="submit" name="login" value="Login" required></td>
					</tr>
				</table>
			</form></center>

	<?php include "footer1.php"; ?>
	</body>
	</html>
	
	<?php
				include('dbcon.php');
				if(isset($_POST['login']))
				{
					$email=$_POST['email'];
					$password=$_POST['password'];
					$qry="SELECT * FROM register WHERE email='$email' AND password='$password'";
					$run= mysqli_query($con,$qry);
					$row=mysqli_num_rows($run);
					if($row<1)
					{
						?>
						<script>
						alert('email or password is not match');
						window.open('login.php','_self');
						</script>
						<?php
					}
					else
					{
						$data=mysqli_fetch_assoc($run);
						$email=$data['email'];
						
						//session_start(); we must use this fun on top for escaping from again login in other tab in browser
						$_SESSION['email']=$email; // session whose name is id
						
						header('location:index.php'); //redirect webpage location
					
					}
				}?>
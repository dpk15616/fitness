<?php
session_start();
?>

<!DOCTYPE html>
<html class="no-js">
	<head>
	<title>find bmr</title>
	<?php include "metalink.php"; ?>
	</head>
	<body>
		<?php include "header1.php"; ?>
		
		<div  style="background-color:green; margin:90px;">
		<h1 align="center"> BMR (basal metabolic rate) CALCULATOR</h1>
		</div>
		<div style="background-color:lightblue; margin:90px;">
		
		<form method="POST" action="bmr.php">
		<table align="center" >
		<tr>
		<th style="padding:10px;">Gender</th>
		<td><select name="gender"><option value="male">Male</option> <option value="female">Female</option></select></td>
		</tr>
		<tr>
		<th style="padding:10px;">Height</th>
		<td><input type="number" name="height" placeholder="Height (in cm)" required></td>
		</tr>
		<tr>
		<th style="padding:10px;">Weight</th>
		<td><input type="number" name="weight" placeholder="weight(in kg)" required> </td>
		</tr>
		<tr>
		<th style="padding:10px;">Age</th>
		<td><input type="number" name="age" placeholder="enter your age" required></td>
		</tr>
		<tr>
		
		<td style="padding:10px;" colspan="2" align="center"><input type="submit" name="submit"  required></td>
		</tr>
		</table>
		
		</form>
		
	
		<?php if(isset($_POST['submit']))
				{
					$gender=$_POST['gender'];
					$height=$_POST['height'];
					$weight=$_POST['weight'];
					$age=$_POST['age'];?>
					<center style="background-color:pink; padding:30px;">
					<?php
					if($gender=="male" )
					{?><b><?php
						
						echo"Your bmr is ";
						echo $weight*13.75+$height*5.003 -$age*6.755 +66.5; 
						echo " calories"; ?></b><?php
						
					}
					else
					{
						?><b><?php
						echo"Your bmr is ";
						echo $weight*9.563 + 1.850*$height- 4.676*$age+655.1 ;
						echo " calories"; ?></b><?php
					}
					?></center><?php
					
				}?>
	
	</div>
	<?php include "footer1.php"; ?>
	</body>
	</html>
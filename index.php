<?php
include("config.php");
?>
<html>
<head>
    <title>Webpage Design</title>
    <link rel="stylesheet" href="style3.css">
</head>
<body>


 
			
			<div class="container">
	<div class="header">
		<h2>Create Account</h2>
	</div>
	<form id="form" class="form" action="" method="POST">
	    <div class="form-control">
			
			name<input type="text" placeholder="Enter the name" name="name" />
			<i class="fas fa-check-circle"></i>
			<i class="fas fa-exclamation-circle"></i>
			
		</div>
		<div class="form-control">
			
			username<input type="text" placeholder="Enter the username" name="username" />
			<i class="fas fa-check-circle"></i>
			<i class="fas fa-exclamation-circle"></i>
			
		</div>
		<div class="form-control">
			
			email<input type="email" placeholder="@gmail.com" name="email" />
			<i class="fas fa-check-circle"></i>
			<i class="fas fa-exclamation-circle"></i>
			
		</div>
		<div class="form-control">
			
			phone_no<input type="number" placeholder="Enter the number" name="phno" />
			<i class="fas fa-check-circle"></i>
			<i class="fas fa-exclamation-circle"></i>
			
		</div>
		<div class="form-control">
			
			password<input type="password" placeholder=" Enter the Password" name="password"/>
			<i class="fas fa-check-circle"></i>
			<i class="fas fa-exclamation-circle"></i>
			
		</div>
		<div class="form-control">
			
			cpassword<input type="password" placeholder="Confirm the password" name="cpassword"/>
			<i class="fas fa-check-circle"></i>
			<i class="fas fa-exclamation-circle"></i>
			
		</div>
		<div> <input type="submit" name="login" value="Login" /></div>
	</form>
</div>




</div>

</body>
</html>

<?php

if(isset($_POST['login']))
{
	$name=$_POST['name'];
	$username=$_POST['username'];
	$email=$_POST['email'];
	$phno=$_POST['phno'];
	$password=$_POST['password'];
	$cpassword=$_POST['cpassword'];
	
	$result=mysqli_query($mysqli, "INSERT into myform values('$name','$username','$email','$phno','$password','$cpassword')");
	
	if($result)
	{
		echo "Success";
	}
	else
	{
		echo "Failed";
	}
}
?>
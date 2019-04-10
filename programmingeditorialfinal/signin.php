<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login Page</title>
	<link rel="stylesheet" href="css/login.css">
</head>
<body>
	<?php //include 'includes/header.php' ?>
	<div class="loginBox">
		<img src="images/user_male_circle_100px.png" class="user">
		<h2> Sign In Here </h2>
		<form action="log.php" method="post">
			<p>User Name</p>
			<input type="text" name="username" placeholder="Enter User Name">
			<p>Password</p>
			<input type="password" name="passw" placeholder="Enter Password">
			<input type="submit" name="" value="Sign In">
			<a href="#">Forget Password</a>
			<br> Not registered yet? <a href="signup.php">Register</a>
		</form>
	</div>
</body>
</html>
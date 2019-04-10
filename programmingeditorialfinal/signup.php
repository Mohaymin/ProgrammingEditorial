<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sign Up Page</title>
	<link rel="stylesheet" href="css/signup.css">
</head>
<body>

	<div class="loginBox">
		<img src="images/user_male_circle_100px.png" class="user">
		<h2> Sign Up Here </h2>
		<form action="insert.php" method="post">
			<p>User Name</p>
			<input type="text" name="username" placeholder="Enter User Name">
			<p>First Name</p>
			<input type="text" name="firstname" placeholder="Enter First Name">
			<p>Last Name</p>
			<input type="text" name="lastname" placeholder="Enter Last Name">
			<p>Email</p>
			<input type="text" name="email" placeholder="Enter Email">
			<p>Password</p>
			<input type="password" name="pass" placeholder="Enter Password">
			<input type="submit" name="" value="Sign Up">
			<p>Have an Account? Use <a href="signin.php">Sign In</a></p>
		</form>
	</div>
</body>
</html>
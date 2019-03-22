<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<title>Log In</title>
</head>
<body class="text-center">
	<?php include 'includes/header.php'; ?>
	<div class="container">
		<form class="form-signin">
			<img class="my-4" src="images/course-img-4.jpg">
			<h1 class="mb-3 font-weight-normal">Please sign in</h1>

			<input type="email" class="form-control" id="email" placeholder="Email address" required autofocus>

			<input type="password" class="form-control" id="password" placeholder="password">

			<div class="checkbox">
				<label><input type="checkbox"> Remember me</label>
			</div>
			<button type="submit" class="btn btn-default">Submit</button>
		</form>
	</div>
</body>
</html>
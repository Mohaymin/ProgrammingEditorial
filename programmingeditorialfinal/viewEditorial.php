<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="css/bootstrap.min.css" type="text/css" rel="stylesheet"/>
	<link href="css/style.css" type="text/css" rel="stylesheet"/>
	<title>Search Editorial</title>
</head>
<body>
	<?php include 'includes/header.php' ?>
	<div class="container"> 
		<form action="displayEditorial.php" method="get">
			<!-- online_judge_name problem_no -->
			<div class="form-group">
				<label for="oj_name">Online Judge</label>
				<input type="text" name="oj_name" class="form-control">
				<label for="problem_no">Problem Number</label>
				<input type="text" name="problem_no" class="form-control">
			</div>
			<button type="submit" class="btn btn-default">Submit</button>
		</form>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<title>Dashboard</title>
	<link href="css/bootstrap.min.css" type="text/css" rel="stylesheet"/>
	<link rel="stylesheet" href="css/dashboard.css">
</head>
<body>
	<nav class="navbar">
		<span class="open-slide">
			<a href="#" onclick="openSlideMenu()">
				<svg width="30" height="30">
					<path d="M0,5 30,5" stroke="#BDBDBD" stroke-width="5"/>
					<path d="M0,14 30,14" stroke="#BDBDBD" stroke-width="5"/>
					<path d="M0,23 30,23" stroke="#BDBDBD" stroke-width="5"/>
				</svg>
			</a>
		</span>
		<div class="search-box">
			<form>
				<input type="text" placeholder="Search Here" name="">
				<button>Search</button>
			</form>
		</div>
	</nav>
	<div id="side-menu" class="side-nav">
		<a href="#" class="btn-close" onclick="closeSlideMenu()">&times;</a>
		<a href="#">Home</a>
		<a href="#">Profile</a>
		<a href="contactus.php">Services</a>
		<a href="logout.php">Sign Out</a>
	</div>
	<div id="main" class="container">
		<div class="post_box">
			<form action="status.php" method="post">
				<p>Online Judge Name</p>
				<input type="text" name="oj" class="form-control" placeholder="Enter Online Judge Name" required><br>
				<p>Problem No.</p>
				<input type="text" name="probno" class="form-control" placeholder="Enter Problem No" required><br>
				<p>Solution/Question</p>
				<textarea name="solution" class="form-control" placeholder="Enter Solution/Questions" rows="4" required></textarea><br>
				<input type="submit" name="" class="form-control submit" value="POST">
			</form>
		</div>
	</div>
</div>
<script src="js/script.js"></script>
</body>
</html>
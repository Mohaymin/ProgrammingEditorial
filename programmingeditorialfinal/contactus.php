<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
	<link rel="stylesheet" type="text/css" href="css/contact.css">
</head>
<body>
	<div class="title">
		<h1>CONTACT US </h1>
		<h2> IF YOU FACE ANY PROBLEM,FEEL FREE TO CONTACT US</h2>
	</div>
	<div class="box">
		<form action="storefeedback.php" method="post">
			<input type="text" name="name" class="form-control" placeholder="Enter Your Name" required style="color: black"><br>
			<input type="email" name="email" class="form-control" placeholder="Enter Your Email" required style="color: black"><br>
			<textarea name="message" class="form-control" placeholder="Message" rows="4" required style="color: black"></textarea><br>
			<input type="submit" name="" class="form-control submit" value="SEND MESSAGE">
		</form>
	</div>
</body>
</html>
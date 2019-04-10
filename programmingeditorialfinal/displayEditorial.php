<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/main.css" />

	<title>Editorial</title>
</head>
<body>
	<?php include 'include/header.php' ?>
	<?php
	$host='localhost';
	$user='root';
	$password='';
	$db='programming_editorial';

	$link=mysqli_connect($host,$user,$password,$db);

	$sqlStatement = "SELECT post_description from problem_info where online_judge_name='".$_GET["oj_name"]."' AND problem_no='".$_GET["problem_no"]."'";
	$resultSet = mysqli_query($link,$sqlStatement);
	$row = mysqli_fetch_assoc($resultSet);
	echo $row['post_description'];
	/*
	if(mysqli_num_rows($resultSet) > 0){
		while($row=$resultSet->fetch_assoc()){
			echo row["post_description"];
		}
	}
	*/
	?>
</body>
</html>
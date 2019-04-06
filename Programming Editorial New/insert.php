<?php 
$host='localhost';
$user='root';
$password='';
$db='programming_editorial';

$link=mysqli_connect($host,$user,$password,$db);
$user_name=$_POST["username"];
$first_name=$_POST["firstname"];
$last_name=$_POST["lastname"];
$Email=$_POST["email"];
$Password=$_POST["pass"];

$sql='INSERT INTO user_info(user_name, first_name, last_name, email, password) VALUES ("'.$user_name.'","'.$first_name.'","'.$last_name.'","'.$Email.'","'.$Password.'")';
$resultInsert=mysqli_query($link,$sql) or die(mysql_error());
$lastInsertID=mysqli_insert_id($link);
header("refresh:1; url=index.html");
 ?>
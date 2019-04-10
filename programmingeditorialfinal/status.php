<?php 
$host='localhost';
$user='root';
$password='';
$db='programming_editorial';

$link=mysqli_connect($host,$user,$password,$db);
$online_judge=$_POST["oj"];
$problem=$_POST["probno"];
$description=$_POST["solution"];

$sql='INSERT INTO problem_info(online_judge_name, problem_no, post_description) VALUES ("'.$online_judge.'","'.$problem.'","'.$description.'")';
$resultInsert=mysqli_query($link,$sql) or die(mysql_error());
$lastInsertID=mysqli_insert_id($link);
header("refresh:1; url=dashbord.php");
 ?>
<?php 

$host='localhost';
$user='root';
$password='';
$db='programming_editorial';

$connect = new mysqli($host,$user,$password,$db);

$statement = "INSERT INTO allfeedback (name, email, message) VALUES(".$_POST['name'].", ".$_POST['email'].", ".$_POST['message'].");";
$connect->exec($statement);
header("Location: index.php");
?>
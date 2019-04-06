<?php 
$host='localhost';
$user='root';
$password='';
$db='programming_editorial';

$connect= new mysqli($host,$user,$password,$db);
if($connect->connect_error){
	die('connection failed');
} else echo 'connect worked';

$username=$_POST['username'];
$Password=$_POST["passw"];
$sql="SELECT first_name,last_name FROM user_info WHERE user_name='$username' AND password='$Password'";
$result= $connect->query($sql);
if($result->num_rows>0){
	while($row=$result->fetch_assoc()){
		echo "<br> Admin name is: ".$row["first_name"]." ".$row["last_name"];
	}
}else
echo "<br> User Name and Password don't match";
?>
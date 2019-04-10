<?php 
$host='localhost';
$user='root';
$password='';
$db='programming_editorial';

$connect= new mysqli($host,$user,$password,$db);

$username=$_POST['username'];
$Password=$_POST["passw"];
$sql="SELECT first_name,last_name FROM user_info WHERE user_name='$username' AND password='$Password'";
$result= $connect->query($sql);
if($result->num_rows>0){
	while($row=$result->fetch_assoc()){
		header("refresh:2; url=dashbord.php");
	}
}else
echo "<br> User Name and Password don't match";
?>
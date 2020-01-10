<?php

require_once "config.php";

$email = $_POST['email']
$password = $_POST['password']

mysql_connect("localhost","root","");
mysql_select_db("projecthub");

$result = mysql_query("select * from student_login where email = 'email' and password = '$password'")
or die("Failed to query database ".mysql_error());
$row = mysql_fetch_array($result);
if($row['email'] == $email && $row['password'] == $password){
	echo "Login successful!!! welcome ".$row['email'];
}
else{
	echo "Failed to login";
}


?>
<!--
Here, we write code for login.
-->
<?php

include('config.php');

$email = $_POST['email'];
$pwd = $_POST['password'];
$FirstName = $_POST['FirstName'];
$LastName = $_POST['LastName'];
$id_roll = $_POST['id_roll'];
$phn=$_POST['phn'];
$batch=$_POST['batch'];
$supid=$_POST['supid'];
$type = $_POST['type'];
$password = MD5($pwd);

$sql = "INSERT INTO tbluser(Firstname,Lastname,Email,Password,id_roll,phn,batch,supid,type)VALUES('".$FirstName."','".$LastName."','".$email."','".$password."',".$id_roll.",'".$phn."','".$batch."','".$supid."','".$type."')";
 mysqli_query($connection, $sql);

header("Location: login.php");

// if(mysqli_num_rows($result) > 0)
// {
// 	while($row = mysqli_fetch_assoc($result))
// 	{
// 		$id = $row["ID"];
// 		$email = $row["Email"];
		
// 		$_SESSION['id'] = $id;
// 		$_SESSION['email'] = $email;
// 		$_SESSION['Firstname'] = $row['Firstname'];
// 	}
// 	header("Location: home.php");
// }
// else
// {
// 	echo "Invalid email or password";
// }
?>
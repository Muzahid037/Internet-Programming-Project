<!--
Here, we write code for login.
-->
<?php

include('config.php');
$email = $password = $pwd = '';

$email = $_POST['email'];
$pwd = $_POST['password'];
$password = MD5($pwd);
$sql = "SELECT * FROM tbluser WHERE Email='$email' AND Password='$password'";
$result = mysqli_query($connection, $sql);


if(mysqli_num_rows($result) > 0)
{
	while($row = mysqli_fetch_assoc($result))
	{
		$id = $row["ID"];
		$email = $row["Email"];
		
		$_SESSION['id'] = $id;
		$_SESSION['email'] = $email;
		$_SESSION['Firstname'] = $row['Firstname'];
		$_SESSION['student_id'] = $row['id_roll'];
		$_SESSION['type'] = $row['type'];
	}
	header("Location: home.php");
}
else
{
	echo "Invalid email or password";
}
?>
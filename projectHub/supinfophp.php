<?php

  include('config.php');
  

$supid=$_POST["supid"];
$name=$_POST["name"];
$email=$_POST["email"];
$phone=$_POST["phone"];


//$depid=$_POST["depid"];
//$manid=$depid;
//$bacc=$_POST["bacc"];

$sql= "INSERT INTO supervisor(Supervisor_id,Name,Email,Phone_no)VALUES(".$supid.",'".$name."','".$email."','".$phone."')";

echo $sql;


if ($connection->query($sql) === TRUE) {
     header('Location: supervisor.php');
} else {
    echo "Error: " . $sql . "<br>" . $connnection->error;
}



   


?>
<?php

  include('config.php');
  

$proid=$_POST["proid"];
$stdid=$_POST["stdid"];
$name=$_POST["name"];
$supid=$_POST["supid"];
$status=$_POST["status"];


//$depid=$_POST["depid"];
//$manid=$depid;
//$bacc=$_POST["bacc"];

$sql= "INSERT INTO project(Project_id,stdid,Name,Supervisor_id,Status)VALUES(".$proid.",".$stdid.",'".$name."','".$supid."','".$status."')";

echo $sql;


if ($connection->query($sql) === TRUE) {
     header('Location: project.php');
} else {
    echo "Error: " . $sql . "<br>" . $connnection->error;
}



   


?>
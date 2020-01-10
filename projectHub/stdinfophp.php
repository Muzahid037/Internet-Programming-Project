<?php

  include('config.php');
  

$stdid=$_POST["stdid"];
$name=$_POST["name"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$batch=$_POST["batch"];
$supervisor=$_POST["supervisor"];

//$depid=$_POST["depid"];
//$manid=$depid;
//$bacc=$_POST["bacc"];

$sql= "INSERT INTO student(Student_id,Name,Email,Phone_no,Batch,Supervisor_id)VALUES(".$stdid.",'".$name."','".$email."','".$phone."',".$batch.",".$supervisor.")";

echo $sql;


if ($connection->query($sql) === TRUE) {
     header('Location: student.php');
} else {
    echo "Error: " . $sql . "<br>" . $connnection->error;
}



   


?>
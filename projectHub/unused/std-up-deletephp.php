<?php
  include('config.php');
       
       $sql="SELECT Student_id,Name,Email,Phone,Batch FROM `student`;";
       $result=mysqli_query($connection,$sql);


 

if (isset($_GET['del'])) {
	$id = $_GET['del'];
    $sqll="DELETE FROM student WHERE Student_id=$id;";
	$check=mysqli_query($connection, $sqll);
	if($check)
    {echo"Done dana Done";}
    else{
        echo"Failed";
    }
    header('location: student.php');
	
}

  


?>
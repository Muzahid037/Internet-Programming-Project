<?php 
$id=$_GET['project_id'];
include('config.php');
 echo $id;  
//include('proinfophp.php');
echo $_SESSION['student_id'];
 echo $_SESSION['type'];
  echo '(';
  echo $_SESSION['Firstname'];
  echo ')';
 ?>

<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ProjectHub</title>
  <link href='https://fonts.googleapis.com/css?family=Lato:400,700,300|Open+Sans:400,600,700,300' rel='stylesheet' type='text/css'> <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/animate.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">

</head>


<title>Project Data</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="css/font.css">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size:16px;}
.w3-half img{margin-bottom:-3px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}
    
    table {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

    td,th {
  border: 1px solid #ddd;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2;}

tr:hover {background-color: #ddd;}

th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white:;
}

</style>


<body>


<header class="main-header" id="header">
    <div class="bg-color">
      <!--nav-->
      <nav class="nav navbar-default navbar-fixed-top">
        <div class="container">
          <div class="col-md-12">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mynavbar" aria-expanded="false" aria-controls="navbar">
                            <span class="fa fa-bars"></span>
                        </button>
            </div>
            <div class="collapse navbar-collapse navbar-right

            " id="mynavbar">
              <ul class="nav navbar-nav">
                  <li class="active"><a href="home.php">Home</a></li>
                <li><a href="project.php">Projects</a></li>
                <li><a href="student.php">Students</a></li>
                  <li><a href="supervisor.php">Supervisor</a></li>
                <li><a href="#contact">Contact</a></li>
                  <li><a href="#about">About</a></li>
                  <li><a href="logout.php">Logout</a></li>
                
              </ul>
            </div>
          </div>
        </div>
      </nav>


 <div class="w3-main" style="margin-left:50px;margin-right:50px;margin-top: -5px;margin-bottom: 0px">
	<!--   <div class="container" style="margin-top:100px; margin-left: 100px ; ">   -->


<div class="w3-container">
      <h4><br><br>Project Data</h4>
       <?php
        $sql1 = "SELECT * FROM project WHERE Project_id=".$id;
        $result1 = mysqli_query($connection, $sql1);

        $row1 = mysqli_fetch_assoc($result1);


        if($_SESSION['type'] == "Admin" || $_SESSION['student_id']== $row1['stdid'])
        {
          echo '<a href="index.php?proid='.$id.'" class="w3-button w3-blue w3-right">Upload File <span class="w3-text-red">+</span></a> 
       <br><br>';
        }
       ?>



       
      <!-- <a href="student-add.php" class="w3-button w3-blue w3-right">Add student <span class="w3-text-red">+</span></a>  -->


		<table class="table">
  <thead>
   <!-- <tr><th><br><br></th></tr>  -->
     <tr>
      <th scope="col">File Id</th>
      <th scope="col">File Name</th>
      <!--
      <th scope="col">File_Link</th>
    -->
      <!--
      <th scope="col">Upload</th>
    -->
      <th scope="col">Download</th>
      <!-- <th scope="col"></th>
           <th scope="col"></th>  -->
    </tr>
  </thead>
  <tbody>

    <?php 
    
// Where proid=$_SESSION['proid']
      

      $sql = "SELECT * FROM pdf_table Where proid=$id";
      $result = mysqli_query($connection, $sql);

      if(mysqli_num_rows($result)>0)
      {
        while($row = mysqli_fetch_assoc($result))
        {    
          echo  '<tr  bgcolor="white">';

          echo  '<td>'.$row['pdf_id'].'</td>';
        //   echo  '<td>'.$row['pdf_link'].'</td>';
          echo  '<td>'.$row['pdf_name'].'</td>';


          //<td><a class="btn btn-primary" href="index.php" role="button">Upload</a></td>

          echo  '<td><a class="btn btn-primary" href="'.$row['pdf_link'].'" download>Download</a></td>';


           echo '</tr>';
            
        }
      }

     ?>
  </tbody>
</table>

	</div>

</body>
</html>
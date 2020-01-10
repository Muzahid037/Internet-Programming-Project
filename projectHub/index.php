 <?php
 $id=$_GET['proid'];
 echo $id;
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
<title>Upload</title>
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



<body class="container">


<!--header-->
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
                  <li><a href="Supervisor.php">Supervisor</a></li>
                <li><a href="#contact">Contact</a></li>
                  <li><a href="#about">About</a></li>
                  <li><a href="logout.php">Logout</a></li>

              </ul>
            </div>
          </div>
        </div>
      </nav>



<form style="color:green;" action="upload.php" method="post" enctype="multipart/form-data">
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
                  <p style="color:white;">Select file to upload:</p>
   <!-- Select file to upload: -->
    <input type="file" name="fileToUpload" id="fileToUpload" >
     <input type="text" name="filename" id="filename">
     <input type="text" name="proid" id="proid" value="<?php echo $id?>" hidden>
     <!--<input type="text" name="fileid" id="fileid"> 
 -->
    

    <input type="submit" name="" value="Upload file">




</form>
</body>
</html>  
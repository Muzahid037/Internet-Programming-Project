 <?php 
 include('config.php');
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
                

                  <li class="ac"><a href="home.php">Home</a></li>
                  <li class="ac active"><a href="project.php">Projects</a></li>
                  <li class="ac"><a href="student.php">Students</a></li>
                  <li class="ac"><a href="supervisor.php">Supervisor</a></li>
                  <li class="ac"><a href="#contact">Contact</a></li>
                  <li class="ac"><a href="about.php">About</a></li>
                  <li class="ac"><a href="logout.php">Logout</a></li>


                  <script>
// Add active class to the current button (highlight it)
var header = document.getElementById("mynavbar");
var btns = header.getElementsByClassName("ac");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
  var current = document.getElementsByClassName("active");
  current[0].className = current[0].className.replace(" active", "");
  this.className += " active";
  });
}
</script>

                
              </ul>

            </div>
         
          </div>
        </div>
      </nav>




  
<!-- comment:Sidebar/menu  
<nav class="w3-sidebar w3-aqua w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
    <div class="w3-container w3-dark-grey">
    <h4>Menu</h4>
    </div>
    <img src="images/payroll.png" alt="Snow" style="width:100%;padding-top: 15px;padding-bottom: 15px">
    <div class="w3-container w3-dark-grey">
    <h4>Payroll system</h4>
    </div>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-container">
    
      
  </div>
  <div class="w3-bar-block">
      
      <dl>
          <dt><a href="home.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Home</a> </dt>
  <dt><a href="department.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Department</a> </dt>
          <dd></dd>
    <dt><a href="employee.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white w3-red">  Employee  </a></dt>
          
          <dt><a href="employee-payment.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Payment Parameters</a> </dt>
          <dt><a href="employee-payslip.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Pay slip</a> </dt>
          <dt><a href="employee-setsalary.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Set salary</a> </dt>
          <dt><a href="employee-payhistory.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Payment history</a> </dt>
          
          
          
</dl>
      
    
     
     
  </div>
</nav>

--->


<!-- Top menu on small screens -->
<!-- <header class="w3-container w3-top w3-hide-large w3-red w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-red w3-margin-right" onclick="w3_open()">☰</a>
  <span>Project_Hub</span>
</header>  -->

<!-- Overlay effect when opening sidebar on small screens -->
<!--  <div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>  -->

<!-- !PAGE CONTENT! -->
  <div class="w3-main" style="margin-left:50px;margin-right:50px;margin-top: -5px;margin-bottom: 0px"> 

  <!-- Header -->
      
   <!--   <div class="w3-display-container w3-text-blue" style="font-size: 50px">
          <img src="img/banner.jpg" alt="Lights" style="width:100%" style="height: 50px">
          <div class="w3-display-middle w3-large" > <h1 >Welcome to Payroll system</h1></div>
      </div>   -->

<br><br><br><br>

   <div class="w3-container">

      <h4>Project Data</h4>
       
       <a href="project-add.php" class="w3-button w3-blue w3-right">Add Project <span class="w3-text-red">+</span></a> 
       <br><br>
       <table>
           <tr><th>Project id</th>
               <th>Project Name</th>
               <th>Student ID</th>
               <th>Supervised By</th>
               <th>Status</th>
               <th>Resource</th>



              <!--  <th colspan="1">Action</th></tr>  -->
           <?php
            $sql = "SELECT * FROM project";
            $result = mysqli_query($connection, $sql);
            if(mysqli_num_rows($result) > 0)
            {
            while($row=mysqli_fetch_assoc($result))
            {
               echo '<tr bgcolor="white">';
               echo '<td>'.$row['Project_id'].'</td>';
               echo '<td>'.$row['Name'].'</td>';
               echo '<td>'.$row['stdid'].'</td>';
               echo '<td>'.$row['Supervisor_id'].'</td>';
               echo '<td>'.$row['Status'].'</td>';

               echo "<td><a href='up_down.php?project_id=".$row['Project_id']."' class='w3-button w3-black'> Click Here </a>";
               

             }
           }
           ?>
          

               
       </table>
      </div>
      
          
  </div>

<!-- Comment: W3.CSS Container 
    <div class="w3-dark-grey w3-container w3-padding-32" style="margin-top:75px;padding-right:58px"><p class="w3-right">Reference <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-opacity">w3school</a></p></div>
                -->

<script>
// Script to open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}
</script>


<br><br><br><br><br><br>
<br><br><br><br><br><br>

  <section class="section-padding wow fadeInUp delay-05s" id="contact">
    <div class="container">
      <div class="row white">
        <div class="col-md-8 col-sm-12">
          <div class="section-title">
            <h2 class="head-title black">Contact Us</h2>
            
           
          </div>
        </div>
        <div class="col-md-12 col-sm-12">
          <div class="col-md-4 col-sm-6" style="padding-left:0px;">

          
          <div class="col-md-4 col-sm-6">
            <div class="location-info">
              <p class="white"><span aria-hidden="true" class="fa fa-map-marker"></span>Chittagong University Of Engineering & Technology</p>
              <p class="white"><span aria-hidden="true" class="fa fa-phone"></span>Phone: 01770283976 </p>
              <p class="white"><span aria-hidden="true" class="fa fa-envelope"></span>Email: <a href="" class="link-dec">muzahidul.cuet17@gmail.com</a></p>
            </div>
          </div>
          <div class="col-md-4">
            
             
            </div>
          
        </div>
    
                  </div>
    </section>

</body>
</html>

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

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="css/font.css">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size:16px;}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}
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

            <div class="collapse navbar-collapse navbar-right" id="mynavbar">

              <ul class="nav navbar-nav">
                <br><br><br><br>

                  <li class="ac"><a href="home.php">Home</a></li>
                  <li class="ac active"><a href="project.php">Projects</a></li>
                  <li class="ac"><a href="student.php">Students</a></li>
                  <li class="ac"><a href="supervisor.php">Supervisor</a></li>
                  <li class="ac"><a href="#contact">Contact</a></li>
                  <li class="ac"><a href="#about">About</a></li>
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

                  <br>
                  <br>
              </ul>

            </div>

          </div>
        </div>
      </nav>


<!--
     comment:Sidebar/menu
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

-->

 <!--   comment:Top menu on small screens
<header class="w3-container w3-top w3-hide-large w3-red w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-red w3-margin-right" onclick="w3_open()">☰</a>
  <span>Project_Hub</span>
</header>  -->

<!-- Overlay effect when opening sidebar on small screens -->
<!-- <div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div> -->

<!-- !PAGE CONTENT! -->
  <div class="w3-main" style="margin-left:100px;margin-right:-10px;margin-top: 50px;margin-bottom: 0px">

  <!-- Header -->
      
      <div class="w3-display-container w3-text-white" style="font-size: 50px">
        <!-- <img src="images/banner.jpg" alt="Lights" style="width:100%" style="height: 150px">  -->
         <!-- <div class="w3-display-middle w3-large" > <h1><br><br>ProjectHub</h1></div>  --->
      </div>
      <div class="w3-container" style="padding: 50px 200px 20px 200px">
      
      
      <form class="w3-container" action="proinfophp.php" method="post">
        <p><br><br></p>
          
                 <p><label>Project id</label>
                      <input class="w3-input w3-light-grey w3-animate-input" type="number" name="proid"></p>

                 <p><label>Student id</label>
                      <input class="w3-input w3-light-grey w3-animate-input" type="number" name="stdid"></p>

                 <p>
                     <label>Project Name</label>
                        <input class="w3-input w3-light-grey w3-animate-input" type="text" name="name">
                </p>

                <p>
                     <label>Supervisor id</label>
                        <input class="w3-input w3-light-grey w3-animate-input" type="text" name="supid">
                      </p>

                 <p>
                     <label>Status</label>
                     <select name="status">
                  <option value="Still_working">Still Working</option>
                  <option value="done">Done</option>
  
                  </select>
                     </p>

                             
                
                     <input type="submit" value="Submit" class="w3-input w3-green w3-round-xxlarge w3-animate-input w3-hover-blue">
                     
       
                 
               
            </form>
      
      
      
      </div>
   
      
          
  </div>

<!-- W3.CSS Container -->
<div class="w3-dark-grey w3-container w3-padding-32" style="margin-top:75px;padding-right:58px"><p class="w3-right">Reference <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-opacity">w3school</a></p></div>

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

</body>
</html>

<?php 
  include("config.php");
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
                  <li class="active"><a href="#home">Home</a></li>
                <li><a href="project.php">Projects</a></li>
                <li><a href="student.php">Students</a></li>
                  <li><a href="supervisor.php">Supervisor</a></li>
                <li><a href="#contact">Contact</a></li>
                  <li><a href="about.php">About</a></li>
                  <li><a href="logout.php">Logout</a></li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
      <!--/ nav-->
      <div class="container text-center">
        <div class="wrapper wow fadeInUp delay-05s">
          <h2 class="top-title">An Online Project Management Site For Dept. Of CSE,CUET</h2>
          <h3 class="title">ProjectHub</h3>
          <h4 class="sub-title">We are working yet!!!</h4>
          
        </div>
      </div>
    </div>
  </header>
  <!--/ header-->

  <section id="brief Intro" class="section-padding">
    <div class="container">
      <div class="row">
          <div class="section-title">
            <h2 class="head-title">Brief Intro</h2>
            <p>We are creating a website for CSE students of CUET. Mainly we are helping them to keep tracking of their projects and creating a safe place from where there is no issue for the codes of the projects being lost. In this website there will be a profile for each student and teacher. There will also be information about project teachers and the students working under them. There will be a system where the students can upload their codes of the projects. They can download it at any time if the codes becomes lost from their pc for any reasons. The topics of the projects will be divided according to topic wise so that anyone can find about any projects easily. Anyone can also search about a student or a teacher. It is mostly efficient for group projects. If the group members are at different places they can easily see any portion of their codes simply by downloading it. There will also be arrangements for review and evaluating the projects. Our website will also suggest the students about projects of many different ideas.</p>
          </div>
        </div>
        
        
          </div>
  </section>

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
            <h3 class="cont-title">Email Us</h3>
        
            <div class="contact-info">
              <form action="" method="post" role="form" class="contactForm">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" />
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />

                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <button type="submit" class="btn btn-send">Send</button>
            </div>

          
          <div class="col-md-4 col-sm-6">
            <h3 class="cont-title">Visit Us</h3>
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
  
                
                
  <footer class="" id="footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-7 footer-copyright">
          Develloping By Muzahid & Mobin
          <div class="credits">
           
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
          </div>
        </div>
        <div class="col-sm-5 footer-social">
          <div class="pull-right hidden-xs hidden-sm">
            <a href="#"><i class="fa fa-facebook"></i></a>
            
            <a href="#"><i class="fa fa-twitter"></i></a>
                  
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!---->
  <!--contact ends-->

</body>
</html>

<?php
  session_start();
  define('db_server','localhost');
  define('db_username','root');
  define('db_password','');
  define('db_database','projecthub');
  $connection=mysqli_connect(db_server,db_username,db_password,db_database);
  if($connection){
     // echo"Succeccfully connected to database <br>";
  }
else{
    echo"Failed to connect to database";
   }
?>
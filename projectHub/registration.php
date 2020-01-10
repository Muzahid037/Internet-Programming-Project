<!DOCTYPE html>
<html>

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

<form method="POST" action="reg_code.php">

  <div class="form-group">
    <label for="exampleInputFirstname1">First Name</label>
    <input type="name" class="form-control" id="exampleInputFirstname1" name="FirstName" placeholder="First Name">
  </div>

<div class="form-group">
    <label for="exampleInputLastname1">Last Name</label>
    <input type="name" class="form-control" id="exampleInputLastname1" name="LastName" placeholder="Last Name">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword" name="password" placeholder="Password">
  </div>

   <!-- <div class="form-group">
    <label for="password1">Confirm Password</label>
    <input type="password" class="form-control" id="password" name="FirstName" placeholder="Password">
  </div> -->

<div class="form-group">
    <label for="id_roll">Id No</label>
    <input type="text" class="form-control" id="id_roll" name="id_roll" placeholder="1604037">
  </div>

<div class="form-group">
    <label for="phn">Phone No</label>
    <input type="text" class="form-control" id="phn" name="phn" placeholder="01770283***">
  </div>

  <div class="form-group">
    <label for="batch">Batch</label>
    <input type="text" class="form-control" id="batch" name="batch" placeholder="16 or 17 or 18...">
  </div>

   <div class="form-group">
    <label for="supid">Supervior Id</label>
    <input type="text" class="form-control" id="supid" name="supid">
  </div>

  <div class="form-group">
    
   <p>
       <label>Who Are You</label>
           <select name="type">
                  <option value="Admin">Admin</option>
                  <option value="Student">Student</option>
                 <!-- <option value="Supervisor">Supervisor</option>  -->
  
            </select>
    </p>

    <!-- 
    <label for="id_roll">Who are You</label>
    <input type="text" class="form-control" id="type" name="type" placeholder="Admin/Supervisor/Student">
  -->
  </div>

  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


</body>




</html>
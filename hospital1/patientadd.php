<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
    <link rel="stylesheet"href="registration.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>


<?php
require('dbconnect.php');
if(isset($_POST['rsubmit'])){
    $name=$_POST['name'];
    $age=$_POST['age'];
    $email=$_POST['email'];
    $phone=$_POST['phoneno'];
    $password=$_POST['password'];
    $gender=$_POST['gender'];


    $write = "INSERT INTO register(Name,Age,Mobile,Email,Password,Gender) VALUES ('$name', '$age', '$phone', '$email', '$password', '$gender')";

    $duplicate="select * from register where Email='$email'";
    $q=mysqli_query($connect,$duplicate);
    $r=mysqli_num_rows($q);
    
    if($r>0){
        echo "  <html>
                    <body style='display: inline-block;vertical-align: top;'>
                        <div class='alert alert-danger alert-dismissible'>
                            <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                            <strong>Warning!</strong> Patient Already exists with the given email.
                        </div>
                    </body>
                </html>";
    }

    else{
    if($connect->query($write))
    echo "  <html>
                <body style='display: inline-block;vertical-align: top;'>
                <div class='alert alert-success alert-dismissible'>
                    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                    <strong>Success!</strong>  registered as a Patient.
                </div>
                </body>
            </html>";
    }      
}



?>



  <div class="container">
    <div class="title">Add Patient </div>
    <div class="content">
      <form action="patientadd.php" method='post'>
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" name="name" placeholder="Enter your name" required>
          </div>
          <div class="input-box">
            <span class="details">Age</span>
            <input type="text" name="age" placeholder="Enter your age" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="email" name="email" placeholder="Enter your email" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="number" name="phoneno" placeholder="Enter your number" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" name="password" placeholder="Enter your password" required>
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="password" name="cpassword" placeholder="Confirm your password" required>
          </div>
        </div>
        <div class="gender-details">
          <input type="radio" name="gender" id="dot-1" value='m'>
          <input type="radio" name="gender" id="dot-2" value='f'>
          <input type="radio" name="gender" id="dot-3" value='-'>
          <span class="gender-title">Gender</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender">Male</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender">Female</span>
          </label>
          <label for="dot-3">
            <span class="dot three"></span>
            <span class="gender">Prefer not to say</span>
            </label>
          </div>
        </div>
        <div class="button">
          <input type="submit" name="rsubmit" value="Register">
        </div>
      </form>
    </div>
  </div>

</body>
</html>

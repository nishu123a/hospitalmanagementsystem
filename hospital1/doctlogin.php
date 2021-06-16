<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Hospital</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <style>
         body{
             
            background: linear-gradient(to left, #3333ff 0%, #6699ff 100%);
            margin:0px;
         }
        </style>
    </head>
    <body>
    <nav style='background-color:#0f0f3d;overflow:hidden;border:2px solid blue;margin:0px'>
          <a href="index.html" style='display:block;margin:0px;color:wheat; padding:14px 30px;float:left;font-size:xx-large;text-decoration:none'>Home</a>
          <a href="About.html" style='display:block;margin:0px;color:wheat; padding:14px 30px;float:left;font-size:xx-large;text-decoration:none'>About us</a>
          <a href="contact.php" style='display:block;margin:0px;color:wheat; padding:14px 30px;float:left;font-size:xx-large;text-decoration:none'>Contact us</a>
          <a href="patientlogin.php" style='display:block;margin:0px;color:wheat; padding:14px 30px;float:left;font-size:xx-large;text-decoration:none'>Patient Login</a>
          <a href="logindoc.php" style='display:block;margin:0px;color:wheat; padding:14px 30px;float:left;font-size:xx-large;text-decoration:none'>Doctors Login</a>
          <a href="alogin.php" style='display:block;margin:0px;color:wheat; padding:14px 30px;float:left;font-size:xx-large;text-decoration:none;'>Admin Login</a>
        </nav>
<?php
require('dbconnect.php');
if(isset($_POST['dlogin'])){
    $email=$_POST['email'];
    $password=$_POST['password'];

$query="select * from doctorlogin where Email='$email' and Password='$password'";
$q = mysqli_query($connect , $query);
$row=mysqli_num_rows($q); 

if($row>0){
    echo " <center style='width:400px;left:50%;position:absolute;top:50%;border-radius:10px; background: linear-gradient(to bottom, #66ccff 0%, #3333cc 100%);transform:translate(-50%,-50%)'>
    <h1 style='text-align:center;padding:0px 0px 20px 0px;color:#00004d;'> Doctor<h1> 
    <form action='managedoc.php' method='POST'style='padding:0px 40px;box-sizing:border-box;'>
    <table style='padding: 0 20px 30px;'>
        <tr>
            <td>
            <input type='submit' value='My profile' name='donorm' style='background:#00004d;color:wheat;border-radius:30px;padding: 10px  30px'>
            </td>
        </tr>
        </form>
        <form action='appointment.php' method='POST'style='padding:0px 40px;box-sizing:border-box;'>
        <tr>
            <td>
            <input type='submit' value='My Appointment' name='requestm' style='background:#00004d;color:wheat;border-radius:30px;padding: 10px  30px'>
            </td>
        </tr>
    </form>
    </center>";
}

else{
    echo "<html>
    <head>
      <link href='https://fonts.googleapis.com/css?family=Nunito+Sans:400,400i,700,900&display=swap' rel='stylesheet'>
    </head>
      <style>
        body {
          text-align: center;
          padding: 40px 0;
          background: #EBF0F5;
        }
          h1 {
            color: #850303;
            font-family: 'Nunito Sans', 'Helvetica Neue', sans-serif;
            font-weight: 900;
            font-size: 40px;
            margin-bottom: 10px;
          }
          p {
            color:#850303;
            font-family: 'Nunito Sans", "Helvetica Neue', sans-serif;
            font-size:20px;
            margin: 0;
          }
        i {
          color: #850303;
          font-size: 100px;
          line-height: 200px;
          margin-left:-15px;
        }
        .card {
          background: white;
          padding: 60px;
          border-radius: 4px;
          box-shadow: 0 2px 3px #C8D0D8;
          display: inline-block;
          margin: 0 auto;
        }
      </style>
      <body>
        <div class='card'>
        <div style='border-radius:200px; height:200px; width:200px; background: #ffcccc; margin:0 auto;'>
          <i class='checkmark'>×</i>
        </div>
          <h1>Warning</h1> 
          <p>Invalid Username Or Password!</p>
        <br><br>
        <center><form action='logindoc.php' method='post'> <input type='submit' value ='Go to Login Page' style='color: white;padding: 15px 32px;text-align: center;text-decoration: none;font-size: 16px;margin: 4px 2px;border-radius: 10px;background-color:#004280;border:none;border-bottom: 2px solid black;'> </form></center>
        </div>
      </body>
  </html>";
}


}

?>
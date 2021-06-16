<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Hospital</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style_donors.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    </head>
     <style>
       body{
        background: linear-gradient(to bottom, #3366ff 0%, #3333cc 100%);

       }
    </style>
    <body>
  
    <?php
     require('dbconnect.php');
     if(isset($_POST['requestm'])){
         $check1='select* from appointment';
         $q1=mysqli_query($connect,$check1);echo "<center><h1 style='background-color:#00004d;color:wheat;font-size:50px;margin:0;'>Welcome to the Hospital management system<h1><br>
         <h3 style='backkground-color:#00004d;color:white;'>APPOINTMENT INFORMATION</h3><br><br><br><br><br><br>";

echo "  <table id='myTable1' class='table table-striped table-bordered' style='width:80%;margin-left: 30px;margin-top: -200px;'>
     <thead style='font-size:20px; background-color:#00004d:color:wheat;'>
         <tr>
             <th>Patientname</th>
             <th>Doctorid</th>
             <th>Status</th>
             <th>Patientid</th>
             <th>Paintentphone</th>
             <th>Doctorphone</th>
             <th>Appointmenttime</th>
             <th>Appointmentdate</yth>
         
         </tr>
     </thead>";
while($row1=mysqli_fetch_array($q1)){
echo("<tr style='font-size:18px;'><th>" .$row1['Patientname']."</th><th>".$row1['Doctorid']."</th><th>".$row1['Status']."</th><th>".$row1['Patientid']."</th><th>".$row1['Patientphone']."</th><th>".$row1['Doctorphone']."</th><th>".$row1['Appointmenttime']."</th><th>".$row1['Appointmentdate']."</th><br><br>");
}
echo "</table><br><br><br>";

     echo "</table><br><br><br>";


     echo "  <center>
          <table>
              <form action='patientadd.php' method='POST'>
                  <tr>
                      <input type='submit' style='background-color:#00004d;font-size:15px;color:wheat;padding:12px 14px;' value='Add new Patient' name='addpatient'>
                  </tr> &nbsp;&nbsp;
              </form>
              <form action='patientdelete.php' method='POST'>
                  <tr>
                      <input type='submit' style='background-color:#00004d;font-size:15px;color:wheat;padding:12px 14px;' value='Remove Patient' name='removepatientr'>
                  </tr> &nbsp;&nbsp;
              </form>
              <form action='uppatient.php' method='POST'>
                  <tr>
                      <input type='submit' style='background-color:#00004d;font-size:15px;color:wheat;padding:12px 14px;' value='Update Patient' name='updatepatient'>
                  </tr> &nbsp;&nbsp;
              </form>
              <form action='index.html' method='POST'>
                  <tr>
                      <input type='submit' value='Go To Home Page' name='homepg' style='background-color:#00004d;font-size:15px;color:wheat;padding:12px 14px;'>
                  </tr>
              </form>
          </table>
      </center><br><br>";

     }

     ?>

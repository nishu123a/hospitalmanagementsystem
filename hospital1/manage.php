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
        <style>
         body{
            background: linear-gradient(to left, #3333ff 0%, #6699ff 100%);
         }
        </style>
    </head>
    <body>
    <?php
     require('dbconnect.php');
     if(isset($_POST['donorm'])){  

         $check1='select* from doctordata';
         $q1=mysqli_query($connect,$check1);
         echo "<center><h1 style='margin:0; background:linear-gradient(to bottom, #000099 0%, #000066 100%);color:wheat;font-size:50px;margin:0;'>Welcome to the Doctor management system<h1><br>
         <h3 style='color:wheat;background: linear-gradient(to bottom, #000099 0%, #000066 100%); width:40px,height:60px;'>DOCTOR AND THEIR INFORMATION</h3><br><br><br><br><br><br> ";
echo "  <table id='myTable1' class='table table-striped table-bordered' style='width:80%;margin-left: 30px;margin-top: -50%;'>
     <thead style='font-size:20px; background-color:#00004d;color:wheat;'>
         <tr>
             <th>Name</th>
             <th>Doctorid</th>
             <th>Status</th>
             <th>Department</th>
             <th>Phone</th>
             <th>Email</th>
         
         </tr>
     </thead>";
while($row1=mysqli_fetch_array($q1)){
echo("<tr style='font-size:18px;'><th>" .$row1['Name']."</th><th>".$row1['Doctorid']."</th><th>".$row1['Status']."</th><th>".$row1['Department']."</th><th>".$row1['Phoneno']."</th><th>".$row1['Email']."</th><br><br>");
}
echo "</table><br><br><br>";


echo "  <center>
     <table>
         <form action='doctoradd.php' method='POST'>
             <tr>
                 <input type='submit' style='background-color:#00004d;font-size:15px;color:wheat;padding:12px 14px;' value='Add new Doctor' name='addpatient'>
             </tr> &nbsp;&nbsp;
         </form>
         <form action='doctorremove.php' method='POST'>
             <tr>
                 <input type='submit' style='background-color:#00004d;font-size:15px;color:wheat;padding:12px 14px;' value='Remove Doctor' name='removepatientr'>
             </tr> &nbsp;&nbsp;
         </form>
         <form action='doctorupdate.php' method='POST'>
             <tr>
                 <input type='submit' style='background-color:#00004d;font-size:15px;color:wheat;padding:12px 14px;' value='Update Doctor' name='updatepatient'>
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


     

      
//nurse
    else if(isset($_POST['rem'])){
        $check1='select * from nurse';
        $q1=mysqli_query($connect,$check1);


        echo "<center><h1 style='background-color:#00004d;margin:0;color:wheat;font-size:50px;'>Welcome to the Nurse management system<h1><br>
                        <h3 style='color:wheat;bakground;color:#00004d;'>NURSE AND THEIR INFORMATION</h3><br><br><br><br><br><br>";
        
        echo "  <table id='myTable1' class='table table-striped table-bordered' style='width:80%;margin-left: 30px;margin-top: -35%;'>
                    <thead style='font-size:20px; background-color:#00004d;color:wheat;'>
                        <tr>
                            <th>Name</th>
                            <th>Nurseid</th>
                            <th>status</th>
                        
                        </tr>
                    </thead>";
        while($row1=mysqli_fetch_array($q1)){
            echo("<tr style='font-size:18px;'><th>" .$row1['Name']."</th><th>".$row1['Nurseid']."</th><th>".$row1['status']."</th><br><br>");
        }
        echo "</table><br><br><br>";


        echo "  <center>
                    <table>
                        <form action='Nurseadd.php' method='POST'>
                            <tr>
                                <input type='submit' style='background-color:#00004d;font-size:15px;color:wheat;padding:12px 14px;' value='Add new Nurse' name='addpatient'>
                            </tr> &nbsp;&nbsp;
                        </form>
                        <form action='Nursedelete.php' method='POST'>
                            <tr>
                                <input type='submit' style='background-color:#00004d;font-size:15px;color:wheat;padding:12px 14px;' value='Remove Nurse' name='removepatientr'>
                            </tr> &nbsp;&nbsp;
                        </form>
                        <form action='Nurseupdate.php' method='POST'>
                            <tr>
                                <input type='submit' style='background-color:#00004d;font-size:15px;color:wheat;padding:12px 14px;' value='Update Nurse' name='updatepatient'>
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

                //patient
                else if(isset($_POST['requestm'])){
                    $check1='select * from register';
                    $q1=mysqli_query($connect,$check1);
            
            
                    echo "<center><h1 style='background:#00004d;margin:0;color:wheat;font-size:50px;'>Welcome to the Patient management system<h1><br>
                                    <h3 style='color:wheat;background: linear-gradient(to bottom, #000099 0%, #000066 100%); width:40px,height:60px;'>PATIENTS AND THEIR INFORMATION</h3><br><br><br><br><br><br>";
                    
                    echo "  <table id='myTable1' class='table table-striped table-bordered' style='width:80%;margin-left: 30px;margin-top:-35%;'>
                                <thead style='font-size:20px; background-color:#00004d;color:wheat;'>
                                    <tr>
                                        <th>Name</th>
                                        <th>Age</th>
                                        <th>Mobile</th>
                                        <th>Email</th>
                                        <th>Password</th>
                                        <th>Gender</th>
                                    </tr>
                                </thead>";
                    while($row1=mysqli_fetch_array($q1)){
                        echo("<tr style='font-size:18px;'><th>" .$row1['Name']."</th><th>".$row1['Age']."</th><th>".$row1['Mobile']."</th><th>".$row1['Email']."</th><th>".$row1['Password']."</th><th>".$row1['Gender']."</th><br><br>");
                    }
                    echo "</table><br><br><br>";
            
            
                    echo "  <center>
                                <table>
                                    <form action='patientadd.php' method='POST'>
                                        <tr>
                                            <input type='submit' style='background-color:#00004d;color:wheat;font-size:15px;color:wheat;padding:12px 14px;' value='Add new Patients' name='addpatient'>
                                        </tr> &nbsp;&nbsp;
                                    </form>
                                    <form action='patientdelete.php' method='POST'>
                                        <tr>
                                            <input type='submit' style='background-color:#00004d;font-size:15px;color:wheat;padding:12px 14px;' value='Remove Patients' name='removepatientr'>
                                        </tr> &nbsp;&nbsp;
                                    </form>
                                    <form action='uppatient.php' method='POST'>
                                        <tr>
                                            <input type='submit' style='background-color:#00004d;font-size:15px;color:wheat;padding:12px 14px;' value='Update Patients' name='updatepatient'>
                                        </tr> &nbsp;&nbsp;
                                    </form>
                                    <form action='index.html' method='POST'>
                                        <tr>
                                            <input type='submit' value='Go To Home Page' name='homepg' style='background-color:#00004d;font-size:15px;color:white;padding:12px 14px;'>
                                        </tr>
                                    </form>
                                </table>
                            </center><br><br>";
                }
    
    
            

    ?> 


<footer class="foo"  >Your safety,our priority</footer>
</html>
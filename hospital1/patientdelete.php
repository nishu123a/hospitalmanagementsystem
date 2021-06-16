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
           background:#6666ff ;
        }

        </style>
    </head>

    <body>

    <!--navbar-->
    <center><h1 style='background-color:#00004d;color:white;font-size:45px;margin:0;'>Welcome to the Patient management system<h1></center>

<?php
require('dbconnect.php');

if(isset($_POST['removed'])){

    $email = $_POST['email'];

    $exist="select * from register where Email = '$email' ";
    $q="delete from register where Email = '$email' ";

    $qt=mysqli_query($connect,$exist);
    $r=mysqli_num_rows($qt);
    
    if($r>0 && $connect->query($q)){
    echo "<html>
            <body style='float:top;'>
            <div class='alert alert-success alert-dismissible'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                <strong>Success!</strong> Data removed.
            </div>
            </body>
        </html>";
    } 
    
    else{
        echo "  <html>
                    <body style='float:top;'>
                        <div class='alert alert-danger alert-dismissible'>
                            <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                            <strong>Warning!</strong> Patient doesn't exist with the given email.
                        </div>
                    </body>
                </html>";
    }



}
    


?>

    <!--form-->
    <div class="container" >
        <div class="col-md-12">
            <div class="row w3-border-bottom">
                <center><h1 style="text-align: center;background:#00004d;color:white;display:inline;border-radius:4px;">Remove Patient</h1></center>
            </div>
            <form action="patientdelete.php" method="post" style="margin-left: 300px;width:80%;">
                <div class ="row">
                    <div class="col-md-6">
                        <div class="col-md-10" >
                            <div class="form-group">
                                <label style="color:#00004d;">Patient email</label>
                                <input type="text" class="form-control input-lg" id="email" name="email" placeholder="Enter Email" required style="background-color:#00004d;color:white">
                            </div>
                            <button type="submit" class="btn" style="margin-left:70px;color:white;background-color:#00004d;" name='removed' >Remove Patient</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div><br>
    
    
    
    </body>
</html>
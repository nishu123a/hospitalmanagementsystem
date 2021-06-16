<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Hospital</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style_donors.css">
        <link rel="stylesheet" href="registration.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    </head>

  
    <body>


<?php

    require('dbconnect.php');
    

    //doctor
    if(isset($_POST['daddp'])){

       
        $did = $_POST['did'];
        $exist="select * from doctordata where Doctorid = '$did' ";
        $q="UPDATE doctordata SET Status = '$_POST[status]',Name='$_POST[name]',Email='$_POST[email]',Phoneno='$_POST[phone]',Department='$_POST[department]' WHERE Doctorid = '$did'";
        
        $qt=mysqli_query($connect,$exist);
        $r=mysqli_num_rows($qt);
        
        if($r>0 && $connect->query($q)){
        echo "<html>
                <body style='vertical-align:top;display:inline-block;'>
                <div class='alert alert-success alert-dismissible'>
                    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                    <strong>Success!</strong> Status updated.
                </div>
                </body>
            </html>";
        } 
        
        else{
            echo "  <html>
                        <body style='verical-align:top;display:inline-block;'>
                            <div class='alert alert-danger alert-dismissible'>
                                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                                <strong>Warning!</strong> Doctor doesn't exist with the given Id.
                            </div>
                        </body>
                    </html>";
        
        }
        
        
    }
    ?>   
          <div class="container">
    <div class="title"> Update Profile</div>
    <div class="content">
      <form action="managedoc.php" method='post'>
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" name="name" placeholder="Enter your name" required>
          </div>
          <div class="input-box">
            <span class="details">Id</span>
            <input type="text" name="did" placeholder="Enter your id" required>
          </div>
          <div class="input-box">
            <span class="details">Status</span>
            <input type="text" name="status" placeholder="Enter status" required>
          </div>
          <div class="input-box">
            <span class="details">Department</span>
            <input type="text" name="department" placeholder="Enter Department" required>
          </div>
          <div class="input-box">
            <span class="details">Phone</span>
            <input type="number" name="phone" placeholder="Enter Department" required>
          </div>
          
                <div class="input-box">
            <span class="details">Email  </span>
            <input type="email" name="email" placeholder="Enter Department" required>
          </div>
        </div>
        
        <div class="button">
          <input type="submit" name="daddp" value="Update">
        </div>
      </form>
    </div>
  </div>

</body>
</html>

        
        
        

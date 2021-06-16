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
if(isset($_POST['naddp'])){
    $name=$_POST['name'];
    $nid=$_POST['id'];
    $status=$_POST['status'];
    


    $write = "INSERT INTO nurse(Name,Nurseid,status) VALUES ('$name', '$nid', '$status')";

    $duplicate="select * from nurse where Nurseid='$nid'";
    $q=mysqli_query($connect,$duplicate);
    $r=mysqli_num_rows($q);
    
    if($r>0){
        echo "  <html>
                    <body style='display: inline-block;vertical-align: top;'>
                        <div class='alert alert-danger alert-dismissible'>
                            <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                            <strong>Warning!</strong> Nurse Already exists with the given id.
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
                    <strong>Success!</strong>  registered as a Nurse.
                </div>
                </body>
            </html>";
    }      
}



?>



  <div class="container">
    <div class="title"> Nurse Registration</div>
    <div class="content">
      <form action="Nurseadd.php" method='post'>
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" name="name" placeholder="Enter your name" required>
          </div>
          <div class="input-box">
            <span class="details">Id</span>
            <input type="text" name="id" placeholder="Enter your id" required>
          </div>
          <div class="input-box">
            <span class="details">Status</span>
            <input type="text" name="status" placeholder="Enter status" required>
          </div>
        
        
        </div>
        
        <div class="button">
          <input type="submit" name="naddp" value="Register">
        </div>
      </form>
    </div>
  </div>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Hospital</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="contact.css">
        <style>
         body{          
            background: linear-gradient(to left, #3333ff 0%, #6699ff 100%);
            margin:0px;
         }   

  

        </style>
    </head>
    <body>
    <nav style='background-color:#0f0f3d;overflow:hidden;border:2px solid blue;margin:0px'>
          <a href="index.html" style='display:block;margin:0px;color:wheat; padding:7px 14px;float:left;font-size:xx-large;text-decoration:none'>Home</a>
          <a href="About.html" style='display:block;margin:0px;color:wheat; padding:7px 15px;float:left;font-size:xx-large;text-decoration:none'>About us</a>
          <a href="contact.php" style='display:block;margin:0px;color:wheat; padding:7px 15px;float:left;font-size:xx-large;text-decoration:none'>Contact us</a>
          <a href="patientlogin.php" style='display:block;margin:0px;color:wheat; padding:7px 15px;float:left;font-size:xx-large;text-decoration:none'>Patient Login</a>
          <a href="logindoc.php" style='display:block;margin:0px;color:wheat; padding:7px 14px;float:left;font-size:xx-large;text-decoration:none'>Doctors Login</a>
          <a href="alogin.php" style='display:block;margin:0px;color:wheat; padding:7px 14px;float:left;font-size:xx-large;text-decoration:none;'>Admin Login</a>
        </nav>

      <?php
require('dbconnect.php');
if(isset($_POST['sendp'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phoneno'];
    $msg=$_POST['msg'];


    $write = "INSERT INTO contactdata(name,phoneno,email,msg) VALUES ('$name', '$phone', '$email', '$msg')";

    $duplicate="select * from contactdata where Email='$email'";
    $q=mysqli_query($connect,$duplicate);
    $r=mysqli_num_rows($q);
    
    if($r>0){
        echo "  <html>
                    <body style='display: inline-block;vertical-align: top;'>
                        <div class='alert alert-danger alert-dismissible'>
                            <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                            <strong>Warning!</strong>This email has already sent a query.
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
                    <strong>Success!</strong> Your query has been sent. We will reach out to you soon.
                </div>
                </body>
            </html>";
    }      
}



?>




 <div class="container">
     <h1 style="color:#00004d;">Connect with us</h1>
     <p>We would love to respond to your queries and help you succeed.Feel free to get in touch with us</p>
     <div class="contact-box">
         <div class="contact-left">
             <h3>Send Your Request</h3>
             <form action="contact.php" method='post'>
                <div class="input-row">
                    <div class="input-group">
                    <label>Name</label>
                    <input type="text"  name="name" placeholder="Your Name">
                </div>
                  <div class="input-group">
                      <label>Phone</label>
                      <input type="number"  name="phoneno"placeholder ="+91 9894568876">
                </div>
                </div>                 <div class="input-row">
                    <div class="input-group">
                    <label>Email</label>
                    <input type="email" name="email" placeholder="john@gmail.com">
                </div>

                </div>
             <label>Message</label>
             <textarea name="msg" rows="5" placeholder="Your Message"></textarea>
            <button type="submit" name="sendp">Send</button>
             </form>
             </div>
         <div class="contact-right">
             <h3>Reach Us</h3>
             <table>
                <tr>
                    <td>Email</td>
                    <td>Contactus@example.com</td>
                </tr>
                <tr>
                    <td>Phone</td>
                    <td>+91 9568993945</td>
                </tr>                
                <tr>
                    <td>Address</td>
                    <td>kalamessary,kochi,kerala</td>
                </tr>


             </table>
         </div>
     </div>

 </div>
 </html>
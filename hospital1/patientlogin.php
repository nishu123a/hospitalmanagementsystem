<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Patient Login</title>
    <link rel="stylesheet"href="login1.css">

</head>
<body>

<nav>
          <a href="index.html">Home</a>
          <a href="About.html">About us</a>
          <a href="contact.php" target="_blank">Contact us</a>
          <a href="patientlogin.php">Patient Login</a>
          <a href="logindoc.php">Doctors Login</a>
          <a href="alogin.php">Admin Login</a>
        </nav>


   <div class="center">
       <h1>Patient Login</h1>
       <form action="loginp.php" method ="post">
           <div class="txt_field">
               <input type="email" name='email' required>
               <span></span>
               <label>Username</label>
           </div>
           <div class="txt_field">
            <input type="password" name="password" required>
            <span></span>
            <label>Password</label>
        </div>
        <div class="pass"><a href="forgotp.php">Forgot Password:</div>
        <input type="submit" value="Login" name="plogin">
        <div class="signup_link">
            Not a member?<a href="Registration.php">Register</a>
        </div>

       </form>
        
   </div> 
</body>
</html>
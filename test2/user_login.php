<?php 
session_start();
?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <head>
    <title>Circular Text,include,pdf</title>
    

        <meta name="viewport" content ="width=device-width,initial-scale=1,user-scalable=yes" />
        <link rel="stylesheet" type="text/css" href="css/grid.css">
        <link rel="stylesheet" type="text/css" href="css/normalize.css">
         <link rel="stylesheet" type="text/css" href="css/ionicons.min.css">
        <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="style.css">

<header>

      </header>


  </head>
  <body>
   
      <div class="php-trial">
      	
      	<div class="logo">
 <!--just a container used to position in the page-->
<div class="container">
  <!--the holders for the text, reuse as desired-->
  <div class="circTxt" id="test"></div>
</div>
      

      
      <script>
      
  function circularText(txt, radius, classIndex) {
        txt = txt.split(""),
        classIndex = document.getElementsByClassName("circTxt")[classIndex];

  var deg = 360 / txt.length,
    origin = 0;

  txt.forEach((ea) => {
    ea = `<p style='height:${radius}px;position:absolute;transform:rotate(${origin}deg);transform-origin:0 100%'>${ea}</p>`;
    classIndex.innerHTML += ea;
    origin += deg;
  });
}

circularText("COHESION DIGITAL HEALTH PARTNER ", 70, 0);
      
      </script>
      </div>


      <div class="form">
      	

	<div class="user_login">
<h1>USER LOGIN</h1>

<div>
  <form method="post">
    <label for="user_email">User Email</label>
    <input type="Email" id="user_email" name="user_email" placeholder="User Email.." required>

    <label for="user_pass">Password</label>
    <input type="Password" id="Password" name="user_pass" placeholder="User Password.." required>
  
    <input type="submit" value="LOGIN" name="login">
  </form>
</div>
</div>

</div>

</div>
      
  </body>
</html>




<?php
require('connect_db.php');
if(isset($_POST['login']))
{
  $Password=md5($_POST['user_pass']);
  $Email=$_POST['user_email'];
  
  $check_user="select * from user WHERE Password='$Password' AND Email='$Email'";
  
  $run=mysqli_query($con,$check_user);
  
  if(mysqli_num_rows($run)>0)
  {
    session_start();
    
    $_SESSION['Email']=$Email;
    echo "<script>window.open('user_welcome.php','_self')</script>";
      
  }
  else{
    
    echo"<script>alert('Email or password is incorrect')</script>";
  }
}

?>
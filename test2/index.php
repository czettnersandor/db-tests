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
      	
<div class="admin">
	
<h1>Administrator</h1>

<div>
  <form method="post" action="admin_log.php">
    <label for="admin_name">Admin_Name</label>
    <input type="text" id="adm_name" name="admin_name" placeholder="Admin user name.." required>

    <label for="admin_pass">Password</label>
    <input type="Password" id="Password" name="admin_pass" placeholder="Admin Password.." required>
  
    <input type="submit" value="LOGIN" name="adm_log">
  </form>



<h1>Contacts</h1>

<div class="contacts">
<i class="ion-iphone icon"></i><b>0141 249 0641</b><br><br>
<i class="ion-ios-email-outline icon"><a href="" class="cntct"></i><b>hello@cohesiondigital.co.uk</b></a><br><br>
<a href="#" class="cntct"><i class="ion-social-facebook icon"></i>
<a href="#" class="cntct"><i class="ion-social-instagram icon"></i>
<a href="#" class="cntct"><i class="ion-social-twitter icon"></i></a>
<a href="#" class="cntct"><i class="ion-social-linkedin icon"></i>

</div>



</div>

</div>


<div class="user">
	<h1>INQUIRY</h1>

<div>
  <form action="client.php" method="post">
    <label for="fname">Full Name</label>
    <input type="text" id="fname" name="fullname" placeholder="Your full name.." required>

    <label for="email">Email Address</label>
    <input type="email" id="email" name="email" placeholder="Your email.." required>

    <label for="country">Country</label>
    <select id="country" name="country">
      <option value="Kenya">Kenya</option>
      <option value="UK">UK</option>
      <option value="USA">USA</option>
    </select>

    <label for="disease">Disease</label>
    <select id="disease" name="disease">
      <option value="MUMPS-1">Mumps1</option>
      <option value="MUMPS-2">Mumps2</option>
      <option value="TYPHOID">Typhoid</option>
       <option value="MALARIA">Malaria</option>
    </select>
  
    <input type="submit" value="Submit" name="inquiry">
  </form>
</div>


</div>

      </div>



      </div>
      
  </body>
</html>
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

circularText("COHESION HEALTH PARTNER AND FRIEND ", 70, 0);
      
      </script>
      </div>


      <div class="form">
      	
<div class="admin_pan">
	
<h1>Administrator<div class="return"><a href="index.php" style="color: orange">HOME</a></div></h1>

<div>
  <form action="disease_add.php" method="post">


    <label for="disease">Disease_Name</label>
    <input type="text" id="disease" name="disease" placeholder="Enter Disease Name.." required>


    <label for="description">Disease Description</label>
    <textarea  maxlength="100000" id="description" name="description" placeholder="Write about the disease.." style="height:18%" required></textarea>

    <label for="treatment">Treatment</label>
    <textarea maxlength="100000" id="treatment" name="treatment" placeholder="Describe Treatment.." style="height:18%" required></textarea>
    <input type="submit" value="SUBMIT" name="disease_add">
  </form>
</div>

</div>

      </div>
      
  </body>
</html>
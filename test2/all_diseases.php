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
   

<header>

      </header>


  </head>
  <body>
   
      <a href="index.php" style="color: purple; font-size: 120%; text-align: center;">HOME</a>


<div >
<table width="100%" border="solid thin">

<tr>
<th>Disease_Code</th>
<th>Disease_Name</th>
<th>Description</th>
<th>Treatment</th>
</tr>

<tr>

<?php

require('connect_db.php');

$query="select * from disease";
$run=mysqli_query($con,$query);

while($row=mysqli_fetch_array($run))
{
  $Code=$row[0];
  $Name=$row[1];
  $Description=$row[2];
  $Treatment=$row[3];

?>

<td><?php echo $Code; ?></td>
<td><?php echo $Name; ?></td>
<td><?php echo $Description; ?></td>
<td><?php echo $Treatment; ?></td>

</tr>
<?php } ?>
</table>

</div>
 </div>
 </body>
 </html>

<?php

require('connect_db.php');

if(isset($_POST['disease_add']))
{


$Code=rand (1000,2000);
$Name=$_POST['disease'];
$Description=$_POST['description'];
$Treatment=$_POST['treatment'];

$mysql="insert into disease VALUES('$Code','$Name','$Description','$Treatment')";
if(mysqli_query($con,$mysql))
{
	echo"<script>alert('Successful Submission')</script>";	
}

else{

	echo "alert('something is wrong!')";
}

}

?>
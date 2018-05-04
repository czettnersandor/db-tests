<?php

require('connect_db.php');

if(isset($_POST['inquiry']))
{


$Name=$_POST['fullname'];
$Email=$_POST['email'];
$Country=$_POST['country'];
$Disease=$_POST['disease'];



$check_user="select * from email_server where Emails='$Email'";
	
	$run=mysqli_query($con,$check_user);
	
	if(mysqli_num_rows($run)>0)
	{

$mysql="insert into user VALUES('$Name','$Email','$Country', '$Disease')";
if(mysqli_query($con,$mysql))
{
	echo"<script>window.open('disease_result.php', '_self'), alert('Successful Submission')</script>";	
}

else{

	echo "<script>window.open('admin_pan.php', '_self'), alert('something is wrong!')</script>";
}

}

else{

	echo "<script>window.open('index.php', '_self'), alert('Enter valid email address')</script>";
	exit();
}



}


?>
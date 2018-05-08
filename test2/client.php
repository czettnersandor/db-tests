<?php


require('connect_db.php');

if(isset($_POST['inquiry']))
{


$FName=$_POST['fname'];
$LName=$_POST['lname'];
$Email=$_POST['email'];
$Password=md5($_POST['pass']);
$Cpassword=md5($_POST['cpass']);
$Country=$_POST['country'];



$check_user="select * from email_server where Emails='$Email'";
	
	$run=mysqli_query($con,$check_user);
	
	if(mysqli_num_rows($run)>0)
	{



$check_Password="select * from user where '$Password'!='$Cpassword'";
$run=mysqli_query($con,$check_Password);

if(mysqli_num_rows($run)>0)
{
	echo "<script>window.open('index.php', '_self'),alert ('Passwords Entered do not Match.Please check and try again!')</script>";
	exit();
	
}


$check_Email="select * from user where Email='$Email'";
$run=mysqli_query($con,$check_Email);

if(mysqli_num_rows($run)>0)
{
	echo "<script>window.open('index.php', '_self'),alert ('Email already registered in the database!')</script>";
	exit();
	
}



$mysql="insert into user VALUES('$FName','$LName','$Email', '$Password','$Cpassword','$Country')";
if(mysqli_query($con,$mysql))
{
	echo"<script>window.open('user_login.php', '_self'), alert('Successful Submission')</script>";	
}

else{

	echo "<script>window.open('index.php', '_self'), alert('something is wrong!')</script>";
}

}

else{

	echo "<script>window.open('index.php', '_self'), alert('Enter valid email address')</script>";
	exit();
}



}



?>
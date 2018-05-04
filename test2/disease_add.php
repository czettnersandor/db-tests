<?php

require('connect_db.php');

if(isset($_POST['disease_add']))
{


$Code="CHPF/".rand (1000,2000);
$Name=$_POST['disease'];
$Description=$_POST['description'];
$Treatment=$_POST['treatment'];

$mysql="insert into disease VALUES('$Code','$Name','$Description','$Treatment')";
if(mysqli_query($con,$mysql))
{
	echo"<script>window.open('admin_pan.php', '_self'), alert('Successful Submission')</script>";	
}

else{

	echo "<script>window.open('admin_pan.php', '_self'), alert('something is wrong!')</script>";
}

}

?>
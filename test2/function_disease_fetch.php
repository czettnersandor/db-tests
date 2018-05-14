<?php

include "connect_db.php";
function disease_fetch () {
	global $con;
	$query="SELECT * FROM disease";
	$result= mysqli_query($con, $query);

	while ($row = mysqli_fetch_assoc($result)) {
		$Name= $row['Name'];
		echo "<option value='$Name'>$Name</option>";
	}
}

function diseases_all() {
	global $con;

	$query="select * from disease";
	$result=mysqli_query($con, $query);

	while ($row= mysqli_fetch_assoc($result)) {
		$Code= $row['Code'];
		$Name= $row['Name'];
		$Description= $row['Description'];
		$Treatment= $row['Treatment'];
		echo $Code . "-" . "-" . $Name . "<br>" . "<br>" . $Description . "<br>" . "<br>" . $Treatment . "<br>" . "<br>";
	}
}

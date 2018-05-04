<?php

define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_DATABASE", "disease_test");


$con = mysqli_connect(DB_SERVER , DB_USER, DB_PASSWORD, DB_DATABASE) or die (mysqli_error());
  
?>
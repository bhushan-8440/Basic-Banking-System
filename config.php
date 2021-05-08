<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "indian_bank";
 $conn = new mysqli($servername,$username, $password,$dbname);
 if ($conn->connect_error)
 {
	 echo"Connection failed";
 }
 echo "Connected successfully";
?>
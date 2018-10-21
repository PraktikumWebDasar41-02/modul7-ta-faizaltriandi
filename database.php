<?php 
	$hostname = "localhost";
	$username = "root";
	$password = "";
	$db ="6701174086";

	$conn = new mysqli($hostname,$username,$password,$db);

	if ($conn->connect_error) {
		die("Connect Failed".$conn->connect_error);
	}
 ?>
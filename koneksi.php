<?php

	$server 		= 	"localhost";
	$user			= 	"root";
	$password 		= 	"";
	$database_name 	= 	"admin_guest";


	$con = mysqli_connect($server, $user, $password, $database_name);

	if (!$con){
		die("Can't connect to the database: " . mysqli_connect_error());
	}

?>


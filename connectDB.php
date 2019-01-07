<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "iv";

	$conn = mysqli_connect($servername, $username, $password, $database);

	if(!$conn)
	{
		die("Connection Failed");
	}

?>
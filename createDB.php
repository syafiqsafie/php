<?php

	include 'connect.php';

	$sql = "CREATE DATABASE iv";
	if(mysqli_query($conn,$sql))
	{
		echo "DB created successfully";
	}
	else
	{
		echo "DB failed to create";
	}

	mysqli_close($conn);

?>
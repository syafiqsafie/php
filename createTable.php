<?php

	include 'connectDB.php';

	$sql = "CREATE TABLE person (
		id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		name VARCHAR(50) NOT NULL,
		age INT(5) NOT NULL,
		state VARCHAR(50) NOT NULL,
		register TIMESTAMP
	)";

	if(mysqli_query($conn,$sql))
	{
		echo "Table successfully created";
	}
	else
	{
		echo "Table failed to create";
	}

	mysqli_close($conn);

?>
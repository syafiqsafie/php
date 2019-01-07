<?php

	include 'connectDB.php';

	$sql = "INSERT INTO person (name, age, state)
			VALUES ('syafiq', 25, 'Kuala Lumpur')";

	if(mysqli_query($conn, $sql))
	{
		echo "Success Insert";
	}
	else
	{
		echo "Failed to Insert";
	}

	mysqli_close($conn);

?>
<?php

	$i = array(1,2,35,5,6,7,8,9,10);
	$v = array(2,4,8,9);

	//same array
	// for($a = 0; $a < 10; $a++)
	// {
	// 	for($b = 0; $b < 4; $b++)
	// 	{
	// 		if($i[$a] == $v[$b])
	// 		{
	// 			echo $i[$a];
	// 		}
	// 	}
	// }

	//average
	// $w = array_sum($i);
	// $q = count($i);
	// $average = $w/$q;
	// echo $average;

	//highest
	// $t = 0;
	// for($a = 0; $a < count($i); $a++)
	// {
	// 	if($i[$a] > $t)
	// 	{
	// 		$t = $i[$a];
	// 	}
	// }

	// echo $t;

	//smallest
	$t = 100;
	for($a = 0;$a < count($i); $a++)
	{
		if($i[$a] < $t)
		{
			$t = $i[$a];
		}
	}

	echo $t;

?>
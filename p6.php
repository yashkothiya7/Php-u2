#6.Create an array with 5 elements. Find and display minimum and maximum value from the array.

<?php
	$n = array(1, 2, 3, 4, 5);
	$min = min($n);
	$max = max($n);
	//imp for printing array
	echo"<br> Array Elements:" .implode(",", $n). "<br>";
	echo "<br> $min is Minimum";
	echo "<br> $max is Maximum";
?>
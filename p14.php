#14.Write a program to count the total number of times a specific value appears in an array.

<?php
	$n = array(1, 2, 3, 4, 5, 6, 7, 3, 5, 7);
	//imp
	$search = 7;
	$count = 0;
	foreach($n as $temp){
		if($temp == $search)
			$count++;
	}
	echo "<br> Searched number appears $count times";
?>
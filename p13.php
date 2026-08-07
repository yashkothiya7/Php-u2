#13.Write a program in PHP to sort the array of given 5 numbers in ascending and descending order.

<?php
	$n = array(10, 30, 50, 70, 20, 40, 60);
	//imp
	$asc = sort($n);
	echo "<br> Ascending Order:";
	foreach($n as $temp){
		echo $temp. ", ";
	}
	
	$des = rsort($n);
	echo "<br> Descending Order:";
	foreach($n as $temp){
		echo $temp. ", ";
	}
?>
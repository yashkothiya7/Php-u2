#12.Write a program in PHP to demonstrate the use of multidimensional arrays.

<?php
	$std = array(array("Mahi", 20, "BCA"), array("Amit", 19, "BScIt"), array("Rahul", 21, "BBA"));
	//imp
	foreach($std as $temp){
		echo "<br> Name: ". $temp[0];
		echo "<br> Age: ". $temp[1];
		echo "<br> Course	: ". $temp[2];
	}
?>
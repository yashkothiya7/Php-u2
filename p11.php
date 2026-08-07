#11.Create an array named $student that stores 5 elements bounded to different keys and access the same using the key element.

<?php
	$std = array("Name" => "Rahul", "Age" => 20, "Course" => "BCA", "City" => "Ahemdabad");
	//imp
	echo "<br> Name: ". $std["Name"];
	echo "<br> Age: ". $std["Age"];
	echo "<br> Course: ". $std["Course"];
	echo "<br> City: ". $std["City"];
?>
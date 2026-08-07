#9.Create an associative array and display its elements.

<?php
	$std = array("Name" => "Rahul", "Age" => 20, "Course" => "BCA", "City" => "Ahemdabad");
	//imp
	foreach ($std as $key => $value){
		echo "<br>". $key. " : ". $value;
	}
?>
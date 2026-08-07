#8.Write a PHP program that checks whether the element is exists in the array or not. Give acknowledgement from the same.

<?php
	$lng = array("Java", "C", "Cpp", "PHP", "Python");
	$search = "Cpp";
	//imp
	if(in_array($search, $lng))
		echo "<br> $search exists in the array";
	else
		echo "<br> $search does not exists in the array";
?>
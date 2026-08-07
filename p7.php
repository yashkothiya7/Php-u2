#7.Write a PHP program that deletes duplicate values from array.

<?php
	$n = array(1, 2, 3, 4, 5, 6, 7, 3, 5, 7);
	//imp
	$unq = array_unique($n);
	echo "<br>" .implode(",", $unq);
?>
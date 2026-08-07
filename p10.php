#10.Create an array named $sub, assign five elements to it and display the elements assigned using for loop and foreach statement.

<?php
	$sub = array("html", "java", "php", "sql", "ds");
	//imp
	echo "<br> Using for loop:";
	for($i = 0; $i <= 4; $i++){
		echo "<br>". $sub[$i];
	}
	echo "<br> Using foreach loop:";
	foreach($sub as $temp){
		echo "<br>". $temp;
	}
?>
#15.Create two functions in PHP, parameterized and non parameterized for implementing string concatenation operation.

<?php
	function myFun(){
		$first = "Jaimin";
		$last = "Patel";
		echo "<br>". $first. " ". $last;
	}
	
	function urFun($first, $last){
		echo "<br>". $first. " ". $last;
	}
	
	myFun();
	urFun("Jimi", "Patel");
?>
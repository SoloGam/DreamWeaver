<?php
	function my_error_handler (int $errno, string $errstr){
		echo "Eroare: ".$errstr."<br>";
	}

	set_error_handler('my_error_handler');

 	echo "Lorem<br>";

	$a = ['ceva', 'altceva'];
	echo $a[2];

	echo "Lorem<br>";
	
	$a= 2/0;

	echo "Lorem<br>";

	bla();
	
	echo "Lorem<br>";
?>
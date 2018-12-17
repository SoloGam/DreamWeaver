<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
<link href="Date.css" rel="stylesheet" type="text/css">
</head>
	
<?php	
date_default_timezone_set("Europe/Bucharest");
	
	for($i=0; $i<10; $i++) {
		echo date("Y-m-d h:i:s") . "<br/>";
}
	for($i=0; $i<=100; $i++) {
		echo $i . "<br/>";
	}
	for($j=1; $j<=10; $j++) {
		echo"<div>";
		for($i=1; $i<=10; $i++) {
			echo "$j x $i = " . $j * $i. "<br/>";
		}
		echo"</div>";
	}
	
	$colors = ["red", "green", "blue"];
	foreach($colors as $color) {
		echo "<div style=\"color:$color;\"> $color </div>";
	}
?>

<body>
	<div id="Produs"> 
	<?
		for($j=1; $j<=10; $j++) {
		for($i=1; $i<=10; $i++) {
			echo "$j x $i = " . $j * $i. "<br/>";
		}
	}
	?>
	</div>
</body>
</html>
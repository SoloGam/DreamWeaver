<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Tabla Inmultirii</title>
<link href="Css/Date.css" rel="stylesheet" type="text/css">
    <style>
     
    </style>
</head>
	
<?php	
date_default_timezone_set("Europe/Bucharest");
    $colors = ["red", "green", "blue"];
	foreach($colors as $color) {
		echo "<div style=\"color:$color;\"> $color </div>";
	}
	
//	for($i=0; $i<10; $i++) {
//		echo date("Y-m-d h:i:s") . "<br/>";
//}
//	for($i=0; $i<=100; $i++) {
//		echo $i . "<br/>";
//	}
	for($j=1; $j<=10; $j++) {
		echo '<div class="Produs">';
		for($i=1; $i<=10; $i++) {
			echo "$j x $i = " . $j * $i. "<br/>";
		}
		echo'</div>';
	}
//	style="color:#128600; border: medium solid rgba(0,0,0,1.00); width: 100px; margin-top: 51px; flex-wrap: wrap;"
	
?>

<body> 
<!--
	<?php
    $colors = ["red", "green", "blue"];
	foreach($colors as $color) {
		echo "<div style=\"color:$color;\"> $color </div>";
	}
    
		for($j=1; $j<=10; $j++) {
		for($i=1; $i<=10; $i++) {
            echo "<div style=\"color:$color;\">";
			echo "$j x $i = " . $j * $i. "<br/>"; 
            echo "</div>";
		}
	}
        
	?>
-->
</body>
</html>
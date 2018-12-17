<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>PHP_test</title>
<link href="css/php_tst.css" rel="stylesheet" type="text/css">
<link href="../css/bootstrap-4.0.0.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div class="inmultire">
<?php 
       
        $colors = ["blue", "yellow", "red"];
    for($j=1; $j<=10; $j++) {
		foreach($colors as $color) {
        echo"<div style=\"color:$color;\">";
		for($i=1; $i<=10; $i++) {
			echo "$j x $i = " . $j * $i. "<br/>";
		}
		echo"</div>";
	}
    	
	
//		echo "<div style=\"color:$color;\"> $color </div>";
	}
    
?>
    </div>
</body>
</html>
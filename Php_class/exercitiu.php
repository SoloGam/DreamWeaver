<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>exercitii</title>
	<style>
		body {font-family: Lucida Console ;
                color: rgba(255,0,4,1.00);
                font-weight: bold;
                font-size: 70px;
        }
	</style>
</head>

<body>
	<?php
	$w = $_GET['w'];
	$h = $_GET['h'];
	
    echo "</div class=\"body\">";
    
	for ($i = 0; $i < $h; $i++){
		for ($j = 0; $j < $w; $j++)
			if ($i==0 || $i==$h-1) echo '@';
			elseif ($j==0 || $j == $w-1) echo '@';
		  	else echo 'O';
		echo '<br>';
	}
	
    echo "</div>";
    
	?>
</body>
</html>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Pass</title>
<link href="stil.css" rel="stylesheet" type="text/css">
</head>

<body>
	<?php
	$pass=' ';
	if (isset($_POST['pass'])) $pass = $_POST['pass'];
	?>
	
	<form method="post">
		Parola  <input type="password" value="<?=$pass?>" placeholder="Type your password" name="pass" ><br>
				<input type="submit" value="Trimite">
	</form>
	
	
	
	<?php
		/*
			daca contine anumite grupe de caractere: 
					litere mici; 
					litere mari; 
					caractere speciale !@#$%ˆ&*()_+=<>?,.					lungime
		*/
		                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  
		$score = 0;
	    
	    $search = 0;
					   
		   function findstring ($pass, $score, $search){
				$found = 0;	   
			   for ($i = 0; $i < strlen($search); $i++) {
				   if (strpos($pass, $search[$i])) $found ++;
				   if ($found > 1) break;
			   }
		  
	     return $score + $found * 10;
		   }
					  
		if ((strtolower($pass) != $pass) && (strtoupper($pass) != $pass)) $score += 20; 
		
	   $score = findstring($pass, $score, '1234567890');
	   $score = findstring($pass, $score, '!@#$%ˆ&*()_+=<±§>?,.\|/');
					   
	   	
   	   if (strlen($pass) > 4) $score += 10;
   	   if (strlen($pass) > 6) $score += 10;
   	   if (strlen($pass) > 8) $score += 10;
   	   if (strlen($pass) > 12) $score += 10;
		
	    
		
	   echo $score;
		   $red = round(255*(100 - $score) / 100);
		   $green= round(255*($score - 100) / 100);
		   $color = 'rgb('.$red.','.$green.',0)';
					  
	  ?>
	
<!--		<meter min="0" max="100" value="<?=$score?>"></meter>-->
	
	<div class="Container">
		<div id="bar" style= "width:<?=$score*2?>px; background-color: <?=$color?>; height: 50px;"></div>
	
	</div>
	
	
</body>
</html>
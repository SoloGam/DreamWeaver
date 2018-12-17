<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Pass</title>
</head>

<body>
	<?
	$pass=' ';
	if (isset($_POST['pass'])) $pass = $_POST['pass'];
	?>
	
	<form method="post">
		Parola  <input type="text" value="<?=$pass?>" placeholder="Type your password" name="pass" ><br>
				<input type="submit" value="Trimite">
	</form>
	
	
	
	<?
		/*
			daca contine anumite grupe de caractere: 
					litere mici; 
					litere mari; 
					caractere speciale !@#$%ˆ&*()_+=<>?,./;
					cifre 
					lungime
		*/
		
		$score = 0;
	    $found = 0;
					  
		if (strtolower($pass) != $pass) $score += 20; ;
		
	    $search = '!@#$%ˆ&*()_+=<±§>?,.\|/' ;
					   
			   for ($i = 0; $i < strlen($search); $i++) {
				   if (strpos($pass, $search[$i])) $found ++;
				   if ($found > 1) break;
			   }
		  
	   $score += $found * 10;
		
	   echo $score;
					  
	  ?>
</body>
</html>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Pass</title>
</head>

<body>
	<?
	$pass = '';
	if (isset($_POST['pass'])) $pass = $_POST['pass'];
	?>
	
	<form method="post">
		Parola <input type="text" placeholder="Type your password" name="pass" value="<?=$pass?>"><br>
				<input type="submit" value="Trimite">
	</form>
	
	
	
	<?
	
	?>
</body>
</html>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Form_Var</title>
</head>

<body>
<?php
	require 'var.php';
?>
	
	<form method="post">
		<input id="test" type="text" name="text">
		<input type="submit" value="Test">
	</form>
	<script>
		document.getElementById ("test")
	</script>
</body>
</html>
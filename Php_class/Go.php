<?php
	require 'class_car.php';
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Fuel/Distance</title>
</head>

	<?php
	session_start();
	if (!isset($_SESSION['car'])){
		$car = new Car();

$car -> total_fuel = 50;//L
$car -> crt_fuel = 25;//L
$car -> consumation = 10;// L/100km 
		$_SESSION['car'] = $car;
	}else{
		$car = $_SESSION['car'];	
	}
	if (isset($_POST['distance'])) {
		
		echo $car -> go ($_POST['distance']);
		echo "Benzina Ramasa: {$car -> fuel_left()}%";
		$_SESSION['car'] = $car;
	}
	?>
	
	
	<form method="post" >
	Cat vrei sa mergi?
		<input type="text" name="distance">
		<input type="submit" value="GO" >
	</form>
<body>
</body>
</html>
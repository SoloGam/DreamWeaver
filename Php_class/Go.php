<?php
	class Car {
		public $total_fuel;
		public $crt_fuel;
		public $consumation;
		
		function fill($qauntity) {
			$this -> crt_fuel += $quantity;
		}
		
		function go($distance) {	
			$this -> crt_fuel -= $this -> consumation/100 * $distance;
		}
		
		function fuel_left() {
			return $this -> crt_fuel *100 / $this -> total_fuel;
		}
	}
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
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
		$car -> go ($_POST['distance']);
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
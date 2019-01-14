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

$car = new Car();

$car -> total_fuel = 50;//L
$car -> crt_fuel = 25;//L
$car -> consumation = 10;// L/100km 

$car -> go (100);
echo $car -> fuel_left();

?>
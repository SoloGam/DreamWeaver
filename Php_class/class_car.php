<?php
	class Car {
		public $total_fuel;
		public $crt_fuel;
		public $consumation;
		
		function fill($qauntity) {
			$this -> crt_fuel += $quantity;
		}
		
		function go($distance) {
			$needed = $this -> consumation/100 * $distance;
			if ($this -> crt_fuel > $needed) {
			$this -> crt_fuel -= $needed;
		  } else {
			return "Nu ai suficient combustibil pentru $distance km! <br>";
		  }
	    }
		
		function fuel_left() {
			return $this -> crt_fuel *100 / $this -> total_fuel;
		}
	}
?>
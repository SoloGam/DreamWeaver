<?php
class Beetle{
	public $prod_year;
	public $km;
	public $color;
}


//cream un nou obiect
//primul obiect
$beetle = new Beetle();
$beetle -> prod_year = 1970;
$beetle -> km = 197000;
$beetle -> color = "blue";

var_dump($beetle); 

echo '<br>';

//al doilea obiect
$beetle = new Beetle();
$beetle -> prod_year = 1975;
$beetle -> km = 250000;
$beetle -> color = "red";

var_dump($beetle);
?>

<!--
<?php
class Car_1{
	public $engine_started = false;
	
	function start() {
		$this -> engine_started = true;
	}
	
	function stop() {
		$this -> engine_started = false;
	}
	
	function isStarted() {
		return $this -> engine_started;
	}
}

$car = new Car();

var_dump($car -> isStarted());
echo '<br>';

$car -> start();

var_dump($car -> isStarted());
echo '<br>';

$car -> stop();
var_dump($car -> isStarted());
echo '<br>';


?>
-->

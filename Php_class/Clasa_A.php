<?php
  class Car {
	  private $is_started = false;
	  private $gas = 0;
	  
	  function start () {
		  if ($this -> gas > 0) {
		  $this -> is_started = true;
		  }
		  else{
			  echo "Nu ma benzina";
		  }
	  }
	  
	  function __construct($gas) {
		  $this -> gas = $gas;
	  }
	  
	  function __get($name) {
		 switch ($name) {
			 case 'is_started':
				 return $this -> is_started;
				
			 case 'gas':
				 return $this -> gas;
				 
			 default :
				 return "Variabila $name nu exista";
		 }
	  }
	  
	  
	 
  }

$car = new Car(0);

echo $car -> is_started. '<br>';  
echo $car -> gas. '<br>';  
echo $car -> isstarted. '<br>';  

?>
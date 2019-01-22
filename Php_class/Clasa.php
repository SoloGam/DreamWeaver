<?php
 class A {
	 public $prop1 = 5;
	 
	 function met1 () {
		 echo 'Metoda 1<br>';
	 }
 }

 class B extends A {
	 function met2 () {
		 echo 'Metoda 2<br>';
	 }
 }

$a = new A();
$b = new B();


?>
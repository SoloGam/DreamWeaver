<?php
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $a+$b;
    $d = $a-$b;
    $e = $a*$b;
    $f = $a/$b;
    echo '<br>';
    echo "Adunare $a + $b= ".$c;
    echo '<br>';
    echo "Scadere $a-$b= ". $d;
    echo '<br>';
    echo "Inmultire $a*$b= ". $e;
    echo '<br>';
    echo "Inpartire $a/$b= ". $f;
    
    echo '<br>';
    
?>
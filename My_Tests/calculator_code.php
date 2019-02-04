<?php
    if (!isset($_POST['Test'])) {
        exit;
    }

    $a = $_POST['Test'];

    switch ($a) {
            
        case '1' : 
            echo $$a. '1';
            
            break;
    }
    
?>
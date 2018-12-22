<?php
    echo file_get_contents("Html/head.html");

    $strg = 'The PHP development team announces the immediate availability of PHP 7.1.25. This is a security release.';

print_r(str_word_count($strg, 0));
//print_r(array_count_values($strg));

        
    echo file_get_contents("Html/foot.html");    
?>
<!doctype html>
<html>
<head>
<!--<meta http-equiv="refresh" content="1">-->
<meta charset="utf-8">
<title>Eseu</title>
</head>

<body>
    
    <?php
    $strg =' ';
    if (isset($_POST['txt'])) $strg = $_POST['txt'];
    ?>
    <form method="post">
    
        <input type="text" id="strg" value="<?=$strg?>"> 
    
    </form>

    <?php

    

        print_r(str_word_count($strg, 0));
        //print_r(array_count_values($strg));
   
    ?>
    
   
</body>
</html>

<?php
    $page = $_SERVER['PHP_SELF'];
    $sec = "1";
    header("Refresh: $sec; url=$page");
    
    date_default_timezone_set("Europe/Bucharest");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Data</title>
<link href="data.css" rel="stylesheet" type="text/css">
</head>

<body>
<!--
    <a href="https://www.google.ro/?hl=ro"><div class="Google"></div></a>
    <a href="https://www.youtube.com/?gl=RO&hl=ro"><div class="Youtube"></div></a>
    <a href="https://www.facebook.com/"><div class="Facebook"></div></a>
-->
<?php
      
    echo "<div class=\"container\">";
    
        echo "<div class=\"clock\">";
        echo date("h:i:s");
        echo "</div>";
    
        echo "<div class=\"month\">";
        echo date("l.j.F.Y");
        echo "</div>";
        
    echo "<a href=\"https://www.google.ro/?hl=ro\"><div class=\"Google\"></div></a>";
    echo "<a href=\"https://www.youtube.com/?gl=RO&hl=ro\"><div class=\"Youtube\"></div></a>";
    echo "<a href=\"https://www.facebook.com/\"><div class=\"Facebook\"></div></a>";
    
    
    ?>
</body>
</html>
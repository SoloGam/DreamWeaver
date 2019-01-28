<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Calculator</title>
<link href="Div_design.css" rel="stylesheet" type="text/css">
</head>

<body>
   
    <form method="post">
        <input type="text" name="a">
        <input type="text" name="b">
        <input type="submit" value="Calculeaza">
    </form>
     <?php
        require ('calculator_code.php');
    ?>
</body>
</html>
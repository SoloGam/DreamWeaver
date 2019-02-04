<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Calculator</title>
<link href="calc.css" rel="stylesheet" type="text/css">
</head>

<body> 
    <form method="post">
    <div>
        <span><input name="Test" type="button" value="1"></span>
        <span><input name="test" type="button" value="Test1"></span>
        <span><input type="button" value="Test2"></span>
    </div>
    <div>
        <span><input type="button" value="Test"></span>
        <span><input type="button" value="Test1"></span>
        <span><input type="button" value="Test2"></span>
    </div>
    <div>
        <span><input type="button" value="Test"></span>
        <span><input type="button" value="Test1"></span>
        <span><input type="button" value="Test2"></span>
    </div>
    <div>
        <span><input type="button" value="Test"></span>
        <span><input type="button" value="Test1"></span>
        <span><input type="button" value="Test2"></span>
    </div>
    </form>
    
    <?php
        require 'calculator_code.php';
    ?>
</body>
</html>
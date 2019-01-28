<pre>
<?php
print_r($_POST);
if($_POST["a"] === "") echo "a is an empty string\n";
if($_POST["a"] === false) echo "a is false\n";
if($_POST["a"] === null) echo "a is null\n";
if(isset($_POST["a"])) echo "a is set\n";
if(!empty($_POST["a"])) echo "a is not empty";
?>
</pre>
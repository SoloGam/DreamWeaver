<?php

echo file_get_contents("html/header.html");

$users = [];

$file = fopen("User.txt", "r");
while(!feof($file)) {
	$line = trim(fgets($file));
	$exploded = explode("/", $line, 2);
	$user = $exploded[0];
	$password = $exploded[1];
	$users[$user] = $password;
}
$uname = $_POST["uname"];
if (isset($users[$uname])) {
	if ($_POST["psw"] ==$users[$uname]) {
		echo "Welcome $uname!";
	} else {
		echo "User and password don't match";
	}
} else {
	echo "Invalid user.";
}

	

echo file_get_contents("html/footer.html");

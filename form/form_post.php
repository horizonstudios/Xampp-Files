<?php
	
$user = 'root';
$pass = '';
$db = 'loginform';

$db = new mysqli('localhost', $user, $pass, $db) or die("Unable to connect");
echo"Database Connected!";
?>

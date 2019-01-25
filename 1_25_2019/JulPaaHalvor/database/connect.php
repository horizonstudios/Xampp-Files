<?php

$host="localhost";
$username="username";
$password="password";
$database="julhalvor2017";
$table="useronline";

mysql_connect("$host","$username","$password") or die(mysql_error());
mysql_select_db("$database") or die(mysql_error());

session_start();

$session = session_id();

$time = time();

mysql = "SELECT * FROM $table WHERE session='$session'";

$result = mysql_query($mysql);

$count = mysql_num_rows($result);

if($count == NULL)
	mysql_query("INSERT INTO $table (session, time) VALUES ('$session', '$time';
else
	mysql_query("UPDATE $table SET time='$time' WHERE session = '$session'");

$count_user = mysql_query("SELECT * FROM $table");
$count_user = mysql_num_rows($count_user);

echo"$count_user";

mysql_query("DELETE FROM $table WHERE time < $time-10");

mysql_close();






?>?
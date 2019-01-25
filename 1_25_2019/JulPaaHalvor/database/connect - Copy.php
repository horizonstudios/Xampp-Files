<?php

$host="localhost";
$username="username";
$password="password";
$database="julhalvor2017";
$table="useronline";

$conn = mysql_connect("$host","$username","$password") or die(mysql_error());
mysql_select_db("$database") or die(mysql_error());





?>?
<?php
	$con = mysql_connect("localhost", "root", "");
	
	if (!$con)
	{
		die('Could not connect; ' . mysql_error());
	}
// Create Database
	
	if (mysql_query("Database CraftH",$con))
	{
		echo "Database Created";
	}
	else
	{
		echo " Error Creating Database";
	}
?>
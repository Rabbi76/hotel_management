<?php

// mysql_connect("database-host", "username", "password")
$conn = mysql_connect("localhost","root","") 
			or die("cannot connected");


function DBopen()
{
	// mysql_select_db("database-name", "connection-link-identifier")
	@mysql_select_db("hotel_management",$GLOBALS['conn']);
}

function DBclose()
{
	mysql_close($GLOBALS['conn']);
}
?>

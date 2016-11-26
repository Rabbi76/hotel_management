<?php
	//including the database connection file
	include_once("../config.php");
		session_start();
		if(!isset($_SESSION["login_admin"]))
		{
			header("Location:../index.html");
		}
	//fetching data in descending order (lastest entry first)
	DBopen();
	$id = $_GET['id'];	
	if($_SESSION["login_admin"]=="head_admin")
	{
		header("Location:management.php");
	}
	else
		$result = mysql_query("DELETE FROM user_table WHERE user_id='$id'");
	
	DBclose();
	header("Location:management.php");
?>
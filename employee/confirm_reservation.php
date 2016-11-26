<?php
	//including the database connection file
	include_once("../config.php");
		session_start();
		if(!isset($_SESSION["login_employee"]))
		{
			header("Location:../index.html");
		}
	//fetching data in descending order (lastest entry first)
	DBopen();
	$id = $_GET['id'];	
	$result = mysql_query("UPDATE reservation SET re_status='confirmed' WHERE re_id=$id");
	DBclose();
	header("Location:SeeUserReservation.php");
?>
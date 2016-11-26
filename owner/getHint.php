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
	$result = mysql_query("SELECT * FROM user_table ORDER BY user_id DESC");
	DBclose();
	
	// get the q parameter from URL
	$q = $_REQUEST["q"];

	$hint = "";

	// lookup all hints from array if $q is different from ""
	if ($q !== "") 
	{
	

		$q = strtolower($q);
		$len=strlen($q);
		while($res = mysql_fetch_array($result)) 
		{
			$name=$res["first_name"];
			if (stristr($q, substr($name, 0, $len))) 
			{
				if ($hint === "") 
				{
					$hint = $name;
				} 
				else {
                $hint .= ", $name";
				}
			}
		}
    }

// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "no suggestion" : $hint;
?>
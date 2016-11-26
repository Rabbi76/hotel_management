<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") 
	{
	echo "START";
	include_once('config.php');
	session_start(); //___SESSION START
		
	$un=$_POST["Username"];
	$pw=$_POST["password"];
		
	DBopen();
	$result = mysql_query("SELECT * FROM login_table");
	
	
	while($res = mysql_fetch_array($result)) 
	{
		
	echo "STARTING 1";
		$r[]=$res;
	}
	
	$hand2=fopen("log.txt","a"); //___LOG__FLIE OPEN
		
		$i=0;
		foreach($r as $res)
		{

				if($un==$res['login_name'] && $pw==$res['password'])
				{
					echo "STARTING 2";
					if($res['user_type']=="admin")
					{
						$_SESSION["login_admin"]=$un;
						header("Location:owner/admin.php");
						fwrite($hand2,"TYPE: HEAD ADMIN --- LOGGED BY--> ADMIN AT -- ". date("Y-m-d h:i:sa") .PHP_EOL);
					}
					if($res['user_type']=="customer")
					{
						$_SESSION["login_customer"]=$un;
						header("Location:userHome.php");
						fwrite($hand2,"TYPE: CUSTOMER --- LOGGED BY--> ".$u."  AT -- ".date("Y-m-d h:i:sa").PHP_EOL);
					}
					
					if($res['user_type']=="employee")
					{
						
						echo "STARTING ".$un;
						$_SESSION["login_employee"]=$un;
						header("Location:employee/empHome.php");
						fwrite($hand2,"TYPE: EMPLOYEE --- LOGGED BY--> ".$u."  AT -- ".date("Y-m-d h:i:sa").PHP_EOL);
					}
					
					if($res['user_type']=="owner")
					{
						$_SESSION["login_owner"]=$un;
						header("Location:owner_log.php");
						fwrite($hand2,"TYPE: OWNRER  --- LOGGED BY--> ".$u."  AT -- ".date("Y-m-d h:i:sa").PHP_EOL);
					}
					$i++;
					break;
				}
				
				//echo "NOW   NAME: ".$u." PASS: ".$p."</br>";
				//echo "INPUT NAME: ".$un." PASS: ".$pw."</br>";			
		}
	
		fclose($hand2);  //___LOG__FLIE CLOSE
		
			if($i==0)
			{
				header("Location:index.html");
				echo "</br>LOooGIN ERRooORrr</br>";
			}	
			
	DBclose();
	}
?>


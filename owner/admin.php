<?php
	
	session_start();
	include_once('../config.php');
	if(!isset($_SESSION["login_admin"]))
	{
		header("Location:login.php");
	}
	
	else
	{
		$un=$_SESSION["login_admin"];
		echo "Welcome Admin : " .$un ;
	}
	
	DBopen();
	$uId = mysql_query ("SELECT * FROM login_table WHERE login_name='$un'");
			while($res = mysql_fetch_array($uId)) 
			{
						$id=$res['user_id'];
						//echo "ID ----- ".$id;
						//echo "<h1>HOITASEEEee".$res['user_id']."</h1>";
			}
			$res = mysql_query ("SELECT * FROM user_table WHERE user_id='$id'");
	$result = mysql_query("SELECT * FROM reservation WHERE req_by_log='$id'");
	DBclose();
?>


<html>

<body>
<?php
					while($r = mysql_fetch_array($res)) 
					{
						$name=$r['first_name'];
						//echo "<h1>HOITASEEEee".$r['phone']."</h1>";
					}
					echo "<h2 align='center'> Hello, ". $name ."</h2>";

?>

	<h2 style="color:blue; text-align:center;">Welcome To Admin Site</h2>
		
		
		<div>
			<ul class="data"; align="left">
				<li class="data"; ><a class="active" href="admin.php"  >Home</a></li>
				<li class="data"; > <a href="management.php">Management</a></li>
				<li class="data"; > <a href="seeUserReservation.php">Reservation Status</a></li>
				<li class="data"; ><?php echo "<a href=\"info_edit.php\">Details & Update</a>" ?></li>
				<li class="data"; ><?php echo "<a href=\"chPassword.php\">Change Password</a>" ?></li>
				
			</ul>
		</div>
		
	<a href= "logout.php" > Logout </a>
	
</body>
<html>
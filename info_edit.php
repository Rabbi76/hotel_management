<?php
//including the database connection file
	include_once("config.php");
	session_start();
		if(!isset($_SESSION["login_customer"]))
		{
			header("Location:index.html");
		}
		
if(isset($_POST['Submit'])) 
{	
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$un = $_POST['un'];
		$add = $_POST['address'];
		$phn = $_POST['phone'];
		$email = $_POST['email'];
		
	if(empty($fname)||empty($un) || empty($add)|| empty($phn)|| empty($email)) 
	{
		if(empty($fname)) 
		{
			echo "<font color='red'>First Name field is empty.</font><br/>";
		}
		
		if(empty($un)) {
			echo "<font color='red'>Username field is empty.</font><br/>";
		}
		
		if(empty($add)) {
			echo "<font color='red'>Address field is empty.</font><br/>";
		}
		
		if(empty($phn)) {
			echo "<font color='red'>Phone field is empty.</font><br/>";
		}
		
		if(empty($email)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}
		
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} 
	
	else 
	{
		DBopen();
			
			$uId = mysql_query ("SELECT * FROM login_table WHERE login_name='$_SESSION[login_customer]'");
			
				while($res = mysql_fetch_array($uId)) 
					{
						$id=$res['user_id'];
					}
			
		$result=mysql_query ("SELECT * FROM user_table"); 
		
			while($res = mysql_fetch_array($result)) 
			{
				$r[]=$res;
			}
		
			$i=0;
			foreach($r as $res)
			{
				if($email==$res['email'])
				{
					if($id==$res['user_id'])
					{
					}
					else
					{
						$i++;
						break;
					}
				}
			}
			if($i==0)
			{
			
				$result=mysql_query ("SELECT * FROM login_table"); 
			
				while($res = mysql_fetch_array($result)) 
				{
					$r[]=$res;
				}

				$j=0;
				foreach($r as $res)
				{
					if($un==$res['login_name'])
					{
						if($id==$res['user_id'])
						{
						}
						else
						{
							$j++;
							break;
						}
					}
				}
			
				if($j==0)
				{
					echo $fname.$lname.$email.$add.$phone;
					$user = mysql_query ("UPDATE user_table SET first_name='$fname',last_name='$lname',email='$email',address='$add',phone='$phn' WHERE user_id='$id'");
					$log = mysql_query ("UPDATE login_table SET login_name='$un' WHERE user_id=$id");
					//header("Location: userHome.php");
				}
				else
				{
					echo "<h2 color='red'>Sorry, This User Name is already used.</h2><br/>";
				}

			}
			else
			{
				echo "<h2 color='red'>Sorry, This Email address is already used.</h2><br/>";
			}
		
		DBclose();
	}
}
?>

<html>
	<head>
		<title> New Account </title>
		<style style="text/css">
			<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<style style="text/css">
			

				/* unvisited link */
			.form   
			{
				float:right;
			}
			body
			{
				background: url(images/home.jpg) no-repeat center center fixed; 
				-webkit-background-size: cover;
				-moz-background-size: cover;
				-o-background-size: cover;
				background-size: cover;

			
			}
			ul.data
			{
				list-style-type: none;
				margin: 0;
				padding: 0;
				overflow: hidden;
				background-color: #333;
			}

			li.data
			{
				float: left;
			}

			li.data a 
			{
				display: block;
				color: white;
				text-align: center;
				padding: 14px 45.9px;
				text-decoration: none;
			}

			li.data a:hover:not(.active)
			{
				background-color: #111;
			}
			
			.div
			{
				float : left
			}
			.active 
			{
				background-color: DarkSalmon ;
			}
			
				.password
		{
			background-color: #F8F8FF;
			float:right;
			//font-size:20px;
		}
		
		backgr
		{
				background-color: #FFDAB9;
				border: 1px solid black;
				opacity: 0.8;
				filter: alpha(opacity=80);	
				height:auto;
		}
			
			a { text-decoration: none; }
			h1 { font-size: 1em; }
			h1, p
			{
				margin-bottom: 10px;
				color: white;
			}
			strong
			{
				font-weight: bold;
			}
			.uppercase { text-transform: uppercase; }
			#login 
			{
				margin: 50px auto;
				width: 300px;
			}
			form fieldset input[type="text"], input[type="password"] 
			{
				background-color: #e5e5e5;
				border: none;
				border-radius: 3px;
				-moz-border-radius: 3px;
				-webkit-border-radius: 3px;
				color: #5a5656;
				font-family: 'Open Sans', Arial, Helvetica, sans-serif;
				font-size: 14px;
				height: 50px;
				outline: none;
				padding: 0px 10px;
				width: 280px;
				-webkit-appearance:none;
			}
			form fieldset input[type="submit"]
			{
				background-color: #008dde;
				border: none;
				border-radius: 3px;
				-moz-border-radius: 3px;
				-webkit-border-radius: 3px;
				color: #f4f4f4;
				cursor: pointer;
				font-family: 'Open Sans', Arial, Helvetica, sans-serif;
				height: 50px;
				text-transform: uppercase;
				width: 300px;
				-webkit-appearance:none;
			}
			form fieldset a 
			{
				color: Blue ;
				font-size: 15px;
			}
			form fieldset a:hover { text-decoration: underline; }
			.btn-round 
			{
				background-color: #5a5656;
				border-radius: 50%;
				-moz-border-radius: 50%;
				-webkit-border-radius: 50%;
				color: #f4f4f4;
				display: block;
				font-size: 12px;
				height: 50px;
				line-height: 50px;
				margin: 30px 125px;
				text-align: center;
				text-transform: uppercase;
				width: 50px;
			}
			
			.form {float:right;}
		</style>
	</head>
	
	<body>
		
		<h1 style="color:white; font-family:Lucida Handwriting; font-size:50px; text-align:center "><b>Hotel Paradise</b></h1>
		<form  class="form" action="user_login.php" method="post" align="right">
			<div class="password">
				
				<?php
					echo "<h4>Log In as: " . $_SESSION['login_customer'] ." </h4>";
				?>
				
				<a href="logout.php" size="10px" color="red"> Log Out </a><br/>
				
			</div>
		</form >
		
		
		<a href="userHome.php"><img src="images/paradise.png" alt="Work" style="width:100px;height:88px;"></a>
		
		
		<br/> <br/>
		
		<div>
			<ul class="data"; align="left">
				<li class="data"; ><a href="userHome.php">Home</a></li>
				<li class="data"; > <a href="UserReservation.php">Reservation</a></li>
				<li class="data"; > <a href="SeeUserReservation.php">Reservation Status</a></li>
				<li class="data"; ><?php echo "<a href=\"info_edit.php\">Details & Update</a>" ?></li>
				<li class="data"; ><?php echo "<a href=\"chPassword.php\">Change Password</a>" ?></li>
			</ul>
		</div><br/>
		<div class="backgr">
		
			
	<?php
	//getting id from url
	//selecting data associated with this particular id<?php
					DBopen();
					$uId = mysql_query ("SELECT * FROM login_table WHERE login_name='$_SESSION[login_customer]'");
			
					while($res = mysql_fetch_array($uId)) 
					{
						$id=$res['user_id'];
						//echo "ID ----- ".$id;
						//echo "<h1>HOITASEEEee".$res['user_id']."</h1>";
					}
					
	$result = mysql_query ("SELECT * FROM user_table WHERE user_id=$id");;
	$log = mysql_query("SELECT * FROM login_table WHERE user_id=$id");

	while($res = mysql_fetch_array($result))
	{
		$fname = $res['first_name'];
		$lname = $res['last_name'];
		$phone = $res['phone'];
		$email = $res['email'];
		$address=$res['address'];
	}
	
	while($res = mysql_fetch_array($log))
	{
		$un = $res['login_name'];
	}
	//
	
	?>
		
			<div id="login">
				<h1 style="text-align:center; font-size: 40px"><strong>Welcome</strong></h1>
				<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
					<fieldset>
						<p>FIRST Name:<input type="text" required name="fname" value=<?php echo $fname;?> ></p>
						<p>LAST Name:<input type="text" required name="lname" value=<?php echo $lname;?> ></p>
						<p>Username:<input type="text" required name="un" value=<?php echo $un;?>></p>
						<p>Address:<input type="text" required name="address" value=<?php echo $address;?>></p>
						<p>Phone Number:<input type="text" required name="phone"value=<?php echo $phone;?>></p>
						<p>Email:<input type="text" required name="email" value=<?php echo $email;?>></p>
						<p><input type="Submit" name="Submit" value="Update"></p>
					</fieldset>
				</form>
				
				
			</div>
		</div>
	</body>
</html>
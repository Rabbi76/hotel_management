<?php
		include_once('config.php');
		session_start();
		if(!isset($_SESSION["login_customer"]))
		{
			header("Location:index.html");
		}
		
		if(isset($_POST['Submit'])) 
		{	
			$old = $_POST['old'];
			$new = $_POST['new'];
			$cpass = $_POST['cpass'];
		
			if(empty($old)||empty($new) || empty($cpass)) 
			{
				if(empty($old)) {
					echo "<font color='red'>Password field is empty.</font><br/>";
				}
		
				if(empty($cpass)) {
					echo "<font color='red'>Confirm Password field is empty.</font><br/>";
				}
				if(empty($new)) {
					echo "<font color='red'>New Password field is empty.</font><br/>";
				}
			}
			else
			{
				DBopen();
				$uId = mysql_query ("SELECT * FROM login_table WHERE login_name='$_SESSION[login_customer]'");
				while($res = mysql_fetch_array($uId)) 
					{
						$pass=$res['password'];
					}
				if($old==$pass)
				{
					if($new==$cpass)
					{
						$log = mysql_query ("UPDATE login_table SET password='$new' WHERE login_name='$_SESSION[login_customer]'");
						header("Location: logout.php");
					}
					else
						echo " PASSWORD DOESN'T MATCH (new & confirm)";
				}
				else
					echo " YOU HAVE ENTER THE WORNG PASS (old)";
				
				DBclose();
			}
		}
?>
<html>
	<head>
		<title> Hotel Paradise </title>
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
		}
		
		.midle
		{
			background-color: #FFDAB9;
				border: 1px solid black;
				opacity: 0.9;
				filter: alpha(opacity=90);	
				height:300px;
				text-align: center;
		}
		
	.button 
		{
		  display: inline-block;
		  padding: 15px 25px;
		  font-size: 24px;
		  cursor: pointer;
		  text-align: center;	
		  text-decoration: none;
		  outline: none;
		  color: #fff;
		  background-color: #4CAF50;
		  border: none;
		  border-radius: 15px;
		  box-shadow: 0 9px #999;
		}

		.button:hover 
		{	
			ackground-color: #3e8e41
		}

		.button:active 
		{
			background-color: #3e8e41;
			ox-shadow: 0 5px #666;
			transform: translateY(4px);
		}
   
		</style>
		
	</head>
	<body>
		<
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
				<li class="data"; ><a  href="userHome.php">Home</a></li>
				<li class="data"; > <a href="UserReservation.php">Reservation</a></li>
				<li class="data"; > <a href="SeeUserReservation.php">Reservation Status</a></li>
				<li class="data"; ><?php echo "<a href=\"info_edit.php\">Details & Update</a>" ?></li>
				<li class="data"; ><?php echo "<a href=\"chPassword.php\">Change Password</a>" ?></li>
			</ul>
		</div><br/>
		
		
		<div class="container">

		<div class="midle">
		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
				<fieldset>
				<p >Old Password<br/><input type="text" required name="old" value="Old Password" onBlur="if(this.value=='')this.value='Old Password'" onFocus="if(this.value=='Old Password')this.value='' "></p>
				<p >New Password<br/><input type="text" required name="new" value="New Password" onBlur="if(this.value=='')this.value='New Password" onFocus="if(this.value=='New Password')this.value='' "></p>
				<p >Conform Password<br/><input type="text" required name="cpass" value="Conform Password" onBlur="if(this.value=='')this.value='Conform Password'" onFocus="if(this.value=='Conform Password')this.value='' "></p>
			
				<br/>
				<input class="button" type="Submit" name="Submit" Value="Submit">Update</button>	
				<br/>
				</fieldset>
		</form>		
		
		</div>
	
	</body>
</html>

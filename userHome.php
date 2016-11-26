<?php
		include_once('config.php');
		session_start();
		if(!isset($_SESSION["login_customer"]))
		{
			header("Location:index.html");
		}
		else
			echo "WELCOME  --> ".$_SESSION["login_customer"];
		$un=$_SESSION["login_customer"];
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
		
		.maincon
		{
			background-color: #FFDAB9;
				border: 1px solid black;
				opacity: 0.9;
				filter: alpha(opacity=90);	
				height:400px;
		}
		.info
		{
			
			width:52%;
			float:left;
			margin: 10px;
		
			
		}
		.right
		{	
			float: left;
		
			
			height: 300px;
			width: 45%;
			margin-top:20px;
			margin-right: 1px;
		
		}
   
		</style>
		
	</head>
	<body>
		<h1 style="color:white; font-family:Lucida Handwriting; font-size:50px; text-align:center "><b>Hotel Paradise</b></h1>
		<form  class="form" action="user_login.php" method="post" align="right">
			<div class="password">
				
				<?php
					echo "<h4>Log In as: " . $un ." </h4>";
				?>
				
				<a href="logout.php" size="10px" color="red"> Log Out </a><br/>
				
			</div>
		</form >
		
		
		<a href="userHome.php"><img src="images/paradise.png" alt="Work" style="width:100px;height:88px;"></a>
		
		
		<br/> <br/>
		
		<?php
					DBopen();
					$uId = mysql_query ("SELECT * FROM login_table WHERE login_name='$un'");
			
					while($res = mysql_fetch_array($uId)) 
					{
						$id=$res['user_id'];
						//echo "ID ----- ".$id;
						//echo "<h1>HOITASEEEee".$res['user_id']."</h1>";
					}
		?>
		
		<div>
			<ul class="data"; align="left">
				<li class="data"; ><a class="active" href="userHome.php"  >Home</a></li>
				<li class="data"; > <a href="UserReservation.php">Reservation</a></li>
				<li class="data"; > <a href="seeUserReservation.php">Reservation Status</a></li>
				<li class="data"; ><?php echo "<a href=\"info_edit.php\">Details & Update</a>" ?></li>
				<li class="data"; ><?php echo "<a href=\"chPassword.php\">Change Password</a>" ?></li>
				
			</ul>
		</div><br/>
		
		
		<div class="container">

		<div class="maincon">
			<div class="info">
			
			<?php
					$uId = mysql_query ("SELECT * FROM login_table WHERE login_name='$un'");
			
					while($res = mysql_fetch_array($uId)) 
					{
						$id=$res['user_id'];
						//echo "ID ----- ".$id;
						//echo "<h1>HOITASEEEee".$res['user_id']."</h1>";
					}
					
					$res = mysql_query ("SELECT * FROM user_table WHERE user_id='$id'");
			
					while($r = mysql_fetch_array($res)) 
					{
						$name=$r['first_name'];
						//echo "<h1>HOITASEEEee".$r['phone']."</h1>";
					}
					echo "<h2 align='Left'> Hello, ". $name ."</h2>";
					DBclose();
			?>
				
				<br/>
				<h4 align="left";> Thanks for Login</h4>
				<h4 align="left";> New offer is waiting for you</h4>
				<h3><a href="user_edge_r.php">Order your food</a></h3>
				
			</div>
			
			<div class="right">
				<h2 style="margin:10px; text-decoration: underline;" align="center";>News</h2>
				<li style="font-size:160%; margin:15px" ><a href="#">New swimming pool is comming</a></li>
                <li style="font-size:160%; margin:15px"><a href="#">New Food menu is available</a></li>
                <li style="font-size:160%; margin:15px"><a href="#">Ramdan Special</a></li>
                <li style="font-size:160%; margin:15px"><a href="#">Summer off</a></li>
			</div>
		</div>
	
	</body>
</html>

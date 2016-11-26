<?php
		include_once('../config.php');
		session_start();
		if(!isset($_SESSION["login_employee"]))
		{
			header("Location:../index.html");
		}
		else
			echo "WELCOME  --> ".$_SESSION["login_employee"];
			$un=$_SESSION["login_employee"];
			
			DBopen();
			if(isset($_POST['Submit'])) 
		{	
			$name = $_POST['name'];
			$address = $_POST['address'];
			$phone = $_POST['phone'];
			$email = $_POST['email'];
			$country = $_POST['country'];
			$adult = $_POST['adult'];
			$child = $_POST['children'];
			$froom = $_POST['family_room'];
			$sroom = $_POST['single_room'];
			$croom = $_POST['couple_room'];
			$std = $_POST['satrtDate-D']."-".$_POST['satrtDate-M']."-".$_POST['satrtDate-Y'];
			$etd = $_POST['endDate-D']."-".$_POST['endDate-M']."-".$_POST['endDate-Y'];
			
			//echo $name.$country.$froom.$std." ".$etd;
			$uId = mysql_query ("SELECT * FROM login_table WHERE login_name='$un'");
			
					while($res = mysql_fetch_array($uId)) 
					{
						$id=$res['user_id'];
						//echo "ID ----- ".$id;
						//echo "<h1>HOITASEEEee".$res['user_id']."</h1>";
					}
			$user = mysql_query ("INSERT INTO reservation(re_name,re_address,re_phone,re_email,re_country,re_std,re_end,rec_room,ref_room,res_room,adult,child,req_by_log,con_by_emp,re_status) VALUES('$name','$address','$phone','$email','$country','$std','$etd','$croom','$froom','$sroom','$adult','$child','','$id','confirmed')");
			DBclose();
			header("Location:seeUserReservation.php");
		}
?>
<html>
	<head>
		<title> Hotel Paradise </title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<style style="text/css">
			
			body
			{
				
				background: url(images/reservation.jpg) no-repeat center center fixed; 
				-webkit-background-size: cover;
				-moz-background-size: cover;
				-o-background-size: cover;
				background-size: cover;
			}
			
			.form 
			{
				float:right;
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
			.rev
			{
				background-color: #FFDAB9;
				border: 1px solid black;
				opacity: 0.8;
				filter: alpha(opacity=80);	
				height:auto;
			}
			
			.reservation
			{
				//height:350px;
				width:100%;
					margin: 10px;
			}
			.child
			{
				float:left;
				//height:350px;
				width:30%;
					margin: 10px;
				
			}
			
			.child1
			{
				float:left;
				//height:350px;
				width:30%;
					margin: 10px;
				
			}
			.child2
			{
				float:left;
				//height:350px;
				width:30%;
					margin: 10px;
			}
			
					.left
		{
			width; 100%;
		}

		
		
	
		.transbox
		{	
			float: left;
			height: 200px;
			width: 100%;	
			//margin: 30px;
			 background-color: #ffffff;
			border: 1px solid black;
			opacity: 0.8;
			filter: alpha(opacity=80); /* For IE8 and earlier */
			position: relative;

		}
		.tc_wid
		{
			float:left;
			text-align:center-left;
			width:20%;
			height:180px;
			
			
		}
		.password
		{
			background-color: #F8F8FF;
			float:right;
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
			.form {float:right;}
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
		
		
		<a href="empHome.php"><img src="../images/paradise.png" alt="Work" style="width:100px;height:88px;"></a>
		
		<br/> <br/>
		
		<div>
			<ul class="data"; align="left">
				<li class="data"; ><a class="active" href="empHome.php"  >Home</a></li>
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
				<h2 align="left";>CHEACK_IN</h2>
				<h2><a href="roomres.php">ROOM Reservation</a></h2>
			</div>
			
			<div class="right">
				<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
				<h2 style="margin: 10px;"> Fill In The Form Bellow:</h2>
				<p style="margin: 15px;"> Please fill-up the form and reserver your room instantly. after fill up the form in next step you will review the information and can pay online suing any local or International Visa and Master card. </p>
				<fieldset>

			<div class="reservation" align="left">
				
				<div class="child">
				
					<p >Name:<br/><input type="text" required name="name" ></p>
					<p >Address:<br/><input type="text" required name="address" ></p>
					<p >Country:<br/><input type="text" required name="country" ></p>
					<p >Phone Number:<br/><input type="text" required name="phone" ></p>
					<p >Email:<br/><input type="text" required name="email" ></p>
					<label >Adult:</label>
						<select class="form-control" id="sel1" name="adult">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
					</select>
					
					<label>Children:</label>
					<select class="form-control" id="sel1" name="children">
						<option value="0">0</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
					</select>
				</div> <br/>
				
				<div class="child1">
					
					<p ><u> Rooms Type! How Many room you want? </u></p>
					
					<label >Single Room</label>
						<select class="form-control" id="sel1" name="single_room">
							<option value="0">0</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
						</select> <br/>
						
						<label >Couple Room</label>
						<select class="form-control" id="sel1" name="couple_room">
							<option value="0">0</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
						</select><br/>
						<label>Family Room</label>
						<select class="form-control" id="sel1" name="family_room">
							<option>0</option>
							<option>1</option>
							<option>2</option>
							<option>3</option>
						</select>
						<br/>
						<p >Check-In Date:</p>
						Date -- Month -- Year</br>
							<select name="satrtDate-D">
							<?php
								for($i=1;$i<32;$i++)
								{
									echo "<option value='$i'>".$i."</option>";
								}									
							?>
							</select>
	
							<select name="satrtDate-M">
							<?php
								for($i=1;$i<13;$i++)
								{
									echo "<option value='$i'>".$i."</option>";
								}									
							?>
							</select>
	
							<select name="satrtDate-Y">
							<?php
								for($i=2016;$i<2019;$i++)
								{
									echo "<option value='$i'>".$i."</option>";
								}									
							?>
							</select>
							
						<p >Check-Out Date:</p>
						Date -- Month -- Year</br>
							<select name="endDate-D">
							<?php
								for($i=1;$i<32;$i++)
								{
									echo "<option value='$i'>".$i."</option>";
								}									
							?>
							</select>
	
							<select name="endDate-M">
							<?php
								for($i=1;$i<13;$i++)
								{
									echo "<option value='$i'>".$i."</option>";
								}									
							?>
							</select>
	
							<select name="endDate-Y">
							<?php
								for($i=2016;$i<2019;$i++)
								{
									echo "<option value='$i'>".$i."</option>";
								}									
							?>
							</select>
						</div>
				<div class="child2">
					
						<p> Discount Code:<br/><input type="text" required value="Code" onBlur="if(this.value=='')this.value='Code'" onFocus="if(this.value=='Code')this.value='' "> (if any)</p>
						<p><input class="button" type="submit" name="Submit" value="Submit"></p>
				</div>
			</div>
					
			</fieldset>
		</form>
			</div>
		</div>
	
	</body>
</html>

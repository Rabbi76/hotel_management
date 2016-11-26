<?php
		include_once('config.php');
		
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
			DBopen();
			$user = mysql_query ("INSERT INTO reservation(re_name,re_address,re_phone,re_email,re_country,re_std,re_end,rec_room,ref_room,res_room,adult,child,req_by_log) VALUES('$name','$address','$phone','$email','$country','$std','$etd','$croom','$froom','$sroom','$adult','$child','')");
			DBclose();
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
		<h1 style="color:white; font-family:Lucida Handwriting; font-size:359%; text-align:center"><b> Hotel Paradise </b></h1>
		<form class="form"  action="user_login.php" method="post" align="right">
			<input type="../Username" name="Username"placeholder="Username"autocomplete requierd/>
		    <input type="../Password" name="password" maxlength="9" placeholder="Enter Password"requierd/>
			<input type="../submit" value="Login"><br/>
			<div class="../password">
				<a href="forget_pass.php"  >Forget Password? </a>
				<a href="../New.php"> Creat New Account<a/><br/>	
			</div>		
		</form>
		
		
		<a href="index.html"><img src="../images/paradise.png" alt="Work" style="width:100px;height:88px;"></a><br/> <br/>
		<div>
		<ul class="data" align="right">
			<li class="data"><a href="../index.html">Home</a></li>
			<li class="data"><a class="../active" href="reservation.html">Reservation</a></li>
			<li class="data"><a href="../room.html">Rooms & Suits</a></li>
			<li class="data"><a href="../restaurant.html">Restaurent</a></li>
			<li class="data"><a href="../recreation.html">Recreation</a></li>
			<li class="data"><a href="../event.html">Meeting & Events</a></li>
			<li class="data"><a href="../contact.html">Contacts</a></li>
			<li class="data"><a href="../package.html">Our Packages</a></li>
		</ul>
		</div><br/>
		
	<div class="container">
		<div class="rev">
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
					
						<p > Want to say something?:</P>
							<textarea rows ="10" cols ="40" name ="description">No comments. .  . .</textarea>
						<p> Discount Code:<br/><input type="text" required value="Code" onBlur="if(this.value=='')this.value='Code'" onFocus="if(this.value=='Code')this.value='' "> </p>
						<p><input class="button" type="submit" name="Submit" value="Submit" onclick="window.alert('RESERVATION WILL BE CONFIRMDE SOOn  \n  BE LOGGED IN FOR ALL EXCLUSIVE OFFERS')"></p>
				</div>
			</div>
					
			</fieldset>
		</form>
	</div>
		<br/>	<br/>	<br/>
		<div class="container">
			<div class="transbox">
		
				<div class="tc_wid">
					<h3>Rooms</h3>
					<ul>
						<li><a href="../singleRoom.html">Single Room</a></li>
						<li><a href="../coupleRoom.html">Couple Room</a></li>
						<li><a href="../familyRoom.html">Family Room</a></li>
					</ul>
				</div>

				<div class="tc_wid">
					<h3>Suites</h3>
					<ul>
						<li><a href="../presidentialSuite.html">Presidential Suite</a></li>
						<li><a href="../royalSucite.html">Royal Suite</a></li>
                        <li><a href="../honymoonSuite.html">Honeymoon Suite</a></li>
					</ul>
				</div>
				<div class="tc_wid">
					<h3>Restaurant</h3>
					<ul>
						<li><a href="../edgeRestauran.html">EDGE Restaurant</a></li>
                        <li><a href="../theCourtyard.html">THE COURTYARD</a></li>
					</ul>	
				</div>

			<div class="tc_wid">

					<h3>Meeting & Events</h3>
					<ul>
						<li><a href="../event.html">Conference Hall</a></li>
                        <li><a href="../event.html">Hall Of Star</a></li>
                        <li><a href="../event.html">Andromeda</a></li>
                        <li><a href="../event.html">Executive Club</a></li>
                        <li><a href="../event.html">Events</a></li>
					</ul>
				</div>

				<div cclass="tc_wid">
					<h3>Recreation</h3>
					<ul>
						<li><a href="../swimmingPool.html">Swimming Pool &amp; Jacuzzi</a></li>
                        <li><a href="#">Sauna &amp; Steam Bath</a></li>
                        <li><a href="../billiardZone.html">Billiard Zone</a></li>
                        <li><a href="../gym.html">Gym</a></li>
					</ul>
				</div>
		

	</div>
	
	<div class="end">
                
        <div style="float:left; height:auto; width:50%; ">
		
            <div style="float:left; height:auto; width:100%;">
			    <h4 style="padding:0 0 10px 0; margin:10px;float:left">We Accept</h4>
                <img style="float:left; background-color:#FFF8DC" src="images/partner.png">
			</div>
			
			<div style="float:left; height:auto; width:100%; margin-top:5px;">
                <h4 style="padding:20px 10px 10px 0; margin:0; float:left;">Our Banking Partner</h4>
                <img style="float:left; width:30%; height;30px" src="images/brac.png">
             </div>
                        
        </div>    
                
        <div style="float:right; height:auto; width:50%;">
                   
			<div >
                <div style="float:right; height:auto; width:auto;">
                    <h4 style="padding:6px 10px 0 0; margin:0; float:left;">Follow us on</h4>
					<a href="#" target="_blank">
					<img style="float:left;width:30%; height;30px ;background-color:white" src="images/fb.png""> </a>
                </div>
                        
             </div>
                    
        </div>   
        </div>          
    </div>
		
	</body>
</html>

<?php
		include_once('config.php');
		session_start();
		if(!isset($_SESSION["login_customer"]))
		{
			header("Location:index.html");
		}
		if(isset($_POST['Submit'])) 
		{	
			//echo $name.$country.$froom.$std." ".$etd;
			
			$checked = $_POST['food'];
			for($i=0; $i < count($checked); $i++)
			{
				echo "Selected Food Price: " . $checked[$i] . "<br/>";
				//$sum +=$checked[$i];
			}
			
				//echo "TOTAL BILL " . $checked[$i] . "<br/>";
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
		
				//background: url(images/edge.jpg) no-repeat center center fixed; 
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
				padding: 14px 45px;
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
	
			
	
		
		.end
		{
			
			float: left;
			height: 100px;
			width: 100%;
			padding: 5px 0;
			color: white;
			
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
		.maincon
		{
			float: left;
			height: 2400px;
			width: 100%;	
			//margin: 30px;
			 background-color: #FFDAB9;
			border: 1px solid black;
			opacity: 0.8;
			filter: alpha(opacity=80); /* For IE8 and earlier */
			position: relative;
		}
		.add
		{
			
			width:40%;
			float:left;
			
			
		}
		.map
		{	
		
			float:left;
			width:55%;
			margin: 2px;
		}
		h2
		{
			color:blue;
		}
			.form {float:right;}
		</style>
	</head>
	<body>
		<h1 style="color:white; font-family:Lucida Handwriting; font-size:359%; text-align:center"><b> Hotel Paradise </b></h1>
		
		
		
		<a href="userHome.php"><img src="images/paradise.png" alt="Work" style="width:100px;height:88px;"></a> <br/> <br>
		<ul class="data">
			<li class="data"><a href="userHome.php">Home</a></li>
		</ul>
		
		<br/> <br/>
		<div class="container">

			<div class="maincon">
				<div class="add">
					<h2 align="center"> EDGE Restauran </h2>
					<br/>
					<h4 align="center">EDGE Restaurant, display buffet menu as well as a la carte menu boasting sumptuous dishes from all four hemispheres of Earth - truly offering food for your every mood, specialists in the best International and sub-continental meals. Thai, Chinese, Indian and Bangladeshi dishes with regular buffet.</h4>
					<h3>Food Item </h3>
					
					<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
					<h3>Food Item </h3>
					<input type="radio" name="food[]" value="break fast" ><b>Break Fast: </b><br/>
						<ol>
						<input type="checkbox" name="food[]" value="30" >Paratha(30tk/1pic)<br/>
						<input type="checkbox" name="food[]" value="60" >Bife Bhuna(60tk/plate)<br/>
						<input type="checkbox" name="food[]" value="50" >Chicken Bhuna(50tk/plate)<br/>
						<input type="checkbox" name="food[]" value="50" >Dal(50tk/plate)<br/>
						<input type="checkbox" name="food[]" value="30" >Salad(30tk)<br/>
						<input type="checkbox" name="food[]" value="60" >Vagitable(60tk)<br/>
						</ol>
					<input type="radio" name="food[]" value="null" ><b>Lunch:</b><br/>
						<ul>
							<input type="checkbox" name="food[]" value="350" >Combo1:(350tk)<br/>
							<ul>
								<li style="font-size:90%; margin:7px">Rice, Chicken Frie, Vagitable, Drinks</li>
							</ul>
						</ul>
						<ul>
							<input type="checkbox" name="food[]" value="360" >Combo2:(360tk)<br/>
							<ul>
								<li style="font-size:90%; margin:7px">Fried Rice, Bife Kari, Vagitable, Drinks</li>
							</ul>
						</ul>
						<ul>
							<input type="checkbox" name="food[]" value="350" >Combo3:(350tk)<br/>
							<ul>
								<li style="font-size:90%; margin:7px">Fried Rice, Chicken Kari, Vagitable, Drinks</li>
							</ul>
						</ul>
						<ul>
							<input type="checkbox" name="food[]" value="380" >Combo4:(380tk)<br/>
							<ul>
								<li style="font-size:90%; margin:7px">Fried Rice, Chicken Kari, Bife Bhuna, Drinks</li>
							</ul>
						</ul>
						<ul>
							<input type="checkbox" name="food[]" value="390" >Combo5:(390tk)<br/>
							<ul>
								<li style="font-size:90%; margin:7px">Fried Rice, Bife Bhuna, Pron Bhuna , Drinks</li>
							</ul>
						</ul>
						<ul>
							<input type="checkbox" name="food[]" value="320" >Combo6:(320tk)<br/>
							<ul>
								<li style="font-size:90%; margin:7px">Rice, Chicken Bhuna, Dal, Drinks</li>
							</ul>
						</ul>
					<input type="radio" name="food[]" value="null" ><b>Dinner:</b>
						<ul>
							<input type="checkbox" name="food[]" value="350" >Combo1:(350tk)
							<ul>
								<li style="font-size:90%; margin:7px">Fried Rice, Chicken Kari, Vagitable, Drinks</li>
							</ul>
						</ul>
						<ul>
							<input type="checkbox" name="food[]" value="360" >Combo2:(360tk)
							<ul>
								<li style="font-size:90%; margin:7px">Fried Rice, Bife Kari, Vagitable, Drinks</li>
							</ul>
						</ul>
						<ul>
							<input type="checkbox" name="food[]" value="330" >Combo3:(330tk)
							<ul>
								<li style="font-size:90%; margin:7px">Paratha, Chicken Kari, Vagitable, Drinks</li>
							</ul>
						</ul>
						<ul>
							<input type="checkbox" name="food[]" value="330" >Combo4:(340tk)
							<ul>
								<li style="font-size:90%; margin:7px">Paratha, Bife Bhuna, Vagitable, Drinks</li>
							</ul>
						</ul>
					<li style="font-size:90%; margin:10px"><b>Cafeteria: </b></li>
						<ul>
							<li style="font-size:90%; margin:7px">Salad: </li>
							<ul>
								<input type="checkbox" name="food[]" value="240" >Tuna Salad(240tk)<br/>
								<input type="checkbox" name="food[]" value="price" >Chicken Salad(240tk)<br/>
							</ul>
							<li style="font-size:90%; margin:10px">Bakery:</li>
							<ul>
								<input type="checkbox" name="food[]" value="160" >Tuna Puff(160tk)<br/>
								<input type="checkbox" name="food[]" value="160" >Chicken Curry Puff(160tk)<br/>
								<input type="checkbox" name="food[]" value="160" >Chicken Pie(160tk)<br/>
								<input type="checkbox" name="food[]" value="160" >Apple Lattice(160tk)<br/>
								<input type="checkbox" name="food[]" value="160" >Chocolate Croissant(160tk)<br/>
								<input type="checkbox" name="food[]" value="160" >Sultana Croissant(160tk)<br/>
								<input type="checkbox" name="food[]" value="160" >Chicken Rendang Pie(160tk)<br/>
							</ul>
							<li style="font-size:90%; margin:10px">Baked Potato:</li>
							<ul>
								<input type="checkbox" name="food[]" value="160" >Plain Baked Potato(160tk)<br/>
								<input type="checkbox" name="food[]" value="170" >Baked Potato with Chicken(170tk)<br/>
								<input type="checkbox" name="food[]" value="170" >Baked Potato with Tuna(170tk)<br/>
							</ul>
							<li style="font-size:90%; margin:10px">Classic Sandwiches:</li>
							<ul>
								<input type="checkbox" name="food[]" value="170" >Tuna Mayo(170tk)<br/>
								<input type="checkbox" name="food[]" value="170" >Egg Mayo(170tk)<br/>
								<input type="checkbox" name="food[]" value="170" >Chicken Mayo(170tk)<br/>
								<input type="checkbox" name="food[]" value="170" >Honey Baked Chicken(170tk)<br/>
							</ul>
							<li style="font-size:90%; margin:10px">Others:</li>
							<ul>
								<input type="checkbox" name="food[]" value="190" >Low-Fat Ice-Cream/Sherbet Scoop(90tk)<br/>
								<input type="checkbox" name="food[]" value="190" >Yogurt(850tk)<br/>
								<input type="checkbox" name="food[]" value="190" >Chicken Bruschetta(240tk)<br/>
								<input type="checkbox" name="food[]" value="190" >Cookies(170tk)<br/>
							</ul>
							<li style="font-size:90%; margin:10px">Hot Beverages:</li>
							<ul>
								<input type="checkbox" name="food[]" value="90" >Coffee(90tk)<br/>
								<input type="checkbox" name="food[]" value="160" >Cappuccino(160tk)<br/>
								<input type="checkbox" name="food[]" value="160" >Latte(160tk)<br/>
								<input type="checkbox" name="food[]" value="160" >Mocha(160tk)<br/>
								<input type="checkbox" name="food[]" value="160" >Hot Chocolate(160tk)<br/>
								<input type="checkbox" name="food[]" value="90" >Tea(90tk)<br/>
							</ul>
							<li style="font-size:90%; margin:10px">Cold Beverages:</li>
							<ul>
								<input type="checkbox" name="food[]" value="150" >Milkshake(150tk)<br/>
								<input type="checkbox" name="food[]" value="160" >Iced Coffee(160tk)<br/>
								<input type="checkbox" name="food[]" value="160" >Iced Chocolate(160tk)<br/>
								<input type="checkbox" name="food[]" value="80" >Mineral Water(80tk)<br/>
								<input type="checkbox" name="food[]" value="90" >Botteld Drinks(90tk)<br/>
								<input type="checkbox" name="food[]" value="85" >Milk(85tk)<br/>
								<li style="font-size:90%; margin:7px">Ice Blended Drinks:</li>
							<ul>
								<input type="checkbox" name="food[]" value="240" >Mocha Breeze(240tk)<br/>
								<input type="checkbox" name="food[]" value="240" >Blueberry Blend(240tk)<br/>
								<input type="checkbox" name="food[]" value="240" >Mango Madness(240tk)<br/>
								<input type="checkbox" name="food[]" value="240" >Banana Peach(240tk)<br/>
							</ul>
							</ul> <br/>
							<input type="Submit" name="Submit" value="Order" align="center">
						</ul>
						</form>
						
				</div>
		
			<div class="map">
				<h2 align="center">  Picture </h2>
				<img style="float:left;width:100%; height;200px ;background-color:#F8F8FF" src="images/edge.jpg"">
			</div>
			<a href="restaurant.html"> Back </a>
		</div>
	</div>
		<br/> <br/>
<div class="container">
	<div class="transbox">
		
				<div class="tc_wid">
					<h3>Rooms</h3>
					<ul>
						<li><a href="singleRoom.html">Single Room</a></li>
						<li><a href="coupleRoom.html">Couple Room</a></li>
						<li><a href="familyRoom.html">Family Room</a></li>
					</ul>
				</div>

				<div class="tc_wid">
					<h3>Suites</h3>
					<ul>
						<li><a href="presidentialSuite.html">Presidential Suite</a></li>
						<li><a href="royalSucite.html">Royal Suite</a></li>
                        <li><a href="honymoonSuite.html">Honeymoon Suite</a></li>
					</ul>
				</div>

				<div class="tc_wid">
					<h3>Restaurant</h3>
					<ul>
						<li><a href="edgeRestauran.html">EDGE Restaurant</a></li>
                        <li><a href="theCourtyard.html">THE COURTYARD</a></li>
					</ul>	
				</div>

				<div class="tc_wid">

					<h3>Meeting & Events</h3>
					<ul>
						<li><a href="event.html">Conference Hall</a></li>
                        <li><a href="event.html">Hall Of Star</a></li>
                        <li><a href="event.html">Andromeda</a></li>
                        <li><a href="event.html">Executive Club</a></li>
                        <li><a href="event.html">Events</a></li>
					</ul>
				</div>

				<div class="tc_wid">
					<h3>Recreation</h3>
					<ul>
						<li><a href="swimmingPool.html">Swimming Pool &amp; Jacuzzi</a></li>
                        <li><a href="#">Sauna &amp; Steam Bath</a></li>
                        <li><a href="billiardZone.html">Billiard Zone</a></li>
                        <li><a href="gym.html">Gym</a></li>
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

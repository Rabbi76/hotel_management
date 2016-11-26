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
			
			if(isset($_POST['Submit'])) 
		{	
			//echo $name.$country.$froom.$std." ".$etd;
			
			$checked = $_POST['room'];
			for($i=0; $i < count($checked); $i++)
			{
				echo "Selected " . $checked[$i] . "<br/>";
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
		
				background: url(images/edge.jpg) no-repeat center center fixed; 
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
			height: 2200px;
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
		
		
		<a href="empHome.php"><img src="../images/paradise.png" alt="Work" style="width:100px;height:88px;"></a> <br/> <br>
		
		<br/> <br/>
		<div class="container">

			<div class="maincon">
				<div class="add">
					<h2 align="center"> Room Reservation </h2>
					<br/>
					<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
					<input type="checkbox" name="room[]" value="15000" ><b>Family Room: (BDT 15,000)</b><br/>
						<ol>
						<input type="checkbox" name="room[]" value="15000" >101<br/>
						<input type="checkbox" name="room[]" value="15000" >102<br/>
						<input type="checkbox" name="room[]" value="15000" >103<br/>
						</ol>
					<input type="checkbox" name="room[]" value="12000" ><b>Single Room: (BDT 12,000)</b><br/>
						<ol>
						<input type="checkbox" name="room[]" value="12000" >201<br/>
						<input type="checkbox" name="room[]" value="12000" >202<br/>
						<input type="checkbox" name="room[]" value="12000" >203<br/>
						</ol>
					<input type="checkbox" name="room[]" value="15000" ><b>Couple Room: (BDT 15,000)</b><br/>
						<ol>
						<input type="checkbox" name="room[]" value="15000" >301<br/>
						<input type="checkbox" name="room[]" value="15000" >302<br/>
						<input type="checkbox" name="room[]" value="15000" >303<br/>
						</ol>
					<input type="checkbox" name="room[]" value="15000" ><b>Honeymoon Suite: (BDT 15,000)</b><br/>
						<ol>
						<input type="checkbox" name="room[]" value="15000" >401<br/>
						<input type="checkbox" name="room[]" value="15000" >402<br/>
						<input type="checkbox" name="room[]" value="15000" >403<br/>
						</ol>
					<input type="checkbox" name="room[]" value="35000" ><b>Royal Suite: (BDT 35,000)</b><br/>
						<ol>
						<input type="checkbox" name="room[]" value="35000" >501<br/>
						<input type="checkbox" name="room[]" value="35000" >502<br/>
						<input type="checkbox" name="room[]" value="35000" >503<br/>
						</ol>
					<input type="checkbox" name="room[]" value="65000" ><b>Presidential Suite: (BDT 65,000)</b><br/>
						<ol>
						<input type="checkbox" name="room[]" value="65000" >601<br/>
						<input type="checkbox" name="room[]" value="65000" >602<br/>
						<input type="checkbox" name="room[]" value="65000" >603<br/>
						</ol>
							<input type="Submit" name="Submit" value="Booked!" align="center">
						</ul>
					<form>
				</div>
		
			<div class="map">
				<h2 align="center">  Picture </h2>
				<img style="float:left;width:100%; height;200px ;background-color:#F8F8FF" src="../images/TS_Hotel_King_lowrez.jpg"">
			</div>
			<a href="restaurant.html"> Back </a>
		</div>
	</div>
		<br/> <br/>
<div class="container">
	<div class="transbox">
		
				<div class="tc_wid">
				
				
		

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

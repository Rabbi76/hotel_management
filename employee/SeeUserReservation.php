<?php
	//including the database connection file
	include_once("../config.php");
		session_start();
		if(!isset($_SESSION["login_employee"]))
		{
			header("Location:../index.html");
		}
	//fetching data in descending order (lastest entry first)
	DBopen();
	$result = mysql_query("SELECT * FROM reservation ORDER BY re_id DESC");
	DBclose();
?>

<html>
	<head>
		<title> Hotel Paradise </title>
		
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		
		<script>
function showHint(str) {
    if (str.length == 0) {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() 
		{
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET", "gethint.php?q=" + str, true);
        xmlhttp.send();
    }
}
</script>
		
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
		
	table 
	{
		width:100%;
		background-color:white;
	}
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
    text-align: left;
}
table#t01 tr:nth-child(even) {
    background-color: #eee;
}
table#t01 tr:nth-child(odd) {
   background-color:#fff;
}
table#t01 th	{
    background-color: black;
    color: white;
}
		
		</style>
	</head>
	<body>
		
		<h1 style="color:white; font-family:Lucida Handwriting; font-size:50px; text-align:center "><b>Hotel Paradise</b></h1>
		<form  class="form" action="user_login.php" method="post" align="right">
			<div class="password">
				
				<?php
					echo "<h4>Log In as: " . $_SESSION['login_employee'] ." </h4>";
				?>
				
				<a href="logout.php" size="10px" color="red"> Log Out </a><br/>
				
			</div>
		</form >
		
		<a href="empHome.php"><img src="../images/paradise.png" alt="Work" style="width:100px;height:88px;"></a><br/> <br/>
		<div>
		<ul class="data"; align="left">
				<li class="data"; ><a href="empHome.php">Home</a></li>
				<li class="data"; > <a href="SeeUserReservation.php">Reservation Status</a></li>
				<li class="data"; ><?php echo "<a href=\"info_edit.php\">Details & Update</a>" ?></li>
				<li class="data"; ><?php echo "<a href=\"chPassword.php\">Change Password</a>" ?></li>
		</ul>
		</div>
		<br/>
		
		
		<form>
			Email : <input type="text" onkeyup="showHint(this.value)">
		</form>
		
		<p>Suggestions: <span id="txtHint"></span></p>
		
		
	<table id="t01" width='80%' border=0>

	<tr>
		<th>ByName</th>
		<th>Email</th>
		<th colspan="3">Room ( Single - Couple - Family )</th>
		<th>Start-Date</th>
		<th>End-Date</th>	
		<th>Status</th>
		<th>Update </th> 
		<th>Cancel</th>
	</tr>
	<?php 
	while($res = mysql_fetch_array($result)) { 		
		echo "<tr>";
		echo "<td>".$res['re_name']."</td>";
		echo "<td>".$res['re_email']."</td>";
		echo "<td>".$res['res_room']."</td>";	
		echo "<td>".$res['rec_room']."</td>";	
		echo "<td>".$res['ref_room']."</td>";	
		echo "<td>".$res['re_std']."</td>";	
		echo "<td>".$res['re_end']."</td>";
		
		if(empty($res['re_status']))
		{
			echo "<td>pending</td>";
		}
		else
		echo "<td>".$res['re_status']."</td>";	
	
		echo "<td>";
		if(empty($res['re_status']) || $res['re_status']=="pending")
		{
			echo "<a href=\"confirm_reservation.php?id=$res[re_id]\" onClick=\"return confirm('Are you sure you want to confirm?')\">Confirm</a></td>";
		}
		else
		{
			echo "<a href=\"edit_reservation.php?id=$res[re_id]\" onClick=\"return confirm('Are you sure you want to change reservation status?')\">Pending</a></td>";
		}
		echo "<td><a href=\"cancel_reservation.php?id=$res[re_id]\" onClick=\"return confirm('Are you sure you want to cancel?')\">Cancel</a></td></tr>";		
	}
	?>
	</table>

</body>
</html>
